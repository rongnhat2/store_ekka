<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\ProductRepository;
use App\Models\Product;
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product){
        $this->product             = new ProductRepository($product);
    }
    public function index(){
        return view("admin.manager.product");
    }
    public function get(){
        $data = $this->product->get_product();
        return $this->product->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->product->get_one($id);
        return $this->product->send_response(200, $data, null);
    }
    public function store(Request $request){
        $data = [
            "category_id"   => $request->data_category,
            "name"          => $request->data_name,
            "slug"          => $this->product->to_slug($request->data_name),
            "metadata"      => $request->data_metadata,
            "description"   => nl2br($request->data_description ?? ""),
            "detail"        => $request->data_detail ?? "",
            "prices"        => $request->data_prices,
        ];
        $image_list     = array();
        if ($request->image_list_length) {
            for ($i=0; $i < $request->image_list_length; $i++) { 
                array_push($image_list, $this->product->imageInventor('image-upload', $request['image_list_item_'.$i], 600));
            }
            $data['images'] = implode(",",$image_list);
        }
        $data_return = $this->product->create($data);
        return $this->product->send_response(201, $data_return, null);
    }
    public function update(Request $request){
        $data = [
            "category_id"   => $request->data_category,
            "name"          => $request->data_name,
            "slug"          => $this->product->to_slug($request->data_name),
            "metadata"      => $request->data_metadata,
            "description"   => nl2br($request->data_description ?? ""),
            "detail"        => $request->data_detail ?? "",
            "prices"        => $request->data_prices,
        ];
        $image_list_prev     = $request->data_images_preview;

        $image_list     = array();
        if ($request->image_list_length) {
            for ($i=0; $i < $request->image_list_length; $i++) { 
                array_push($image_list, $this->product->imageInventor('image-upload', $request['image_list_item_'.$i], 600));
            }
            $data['images'] = $image_list_prev.",".implode(",",$image_list);
        }
        $data['images'] = $image_list_prev;
        $data_return = $this->product->update($data, $request->data_id);
        return $this->product->send_response(201, $data_return, null);
    }
    public function delete($id){
        $data = $this->product->delete($id);
        return $this->product->send_response(200, "Delete successful", null);
    }
    public function imageUpload(Request $request){
        $data = $this->product->imageInventor('image-upload', $request->file, 1280);
        return $this->product->send_response(201, $data, null);
    }
}
