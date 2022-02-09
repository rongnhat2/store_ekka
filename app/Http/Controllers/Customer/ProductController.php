<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\ProductRepository;
use App\Models\Product;

use App\Repositories\Manager\CategoryRepository;
use App\Models\Category;

use Carbon\Carbon;
use Session;
use Hash;
use DB;


class ProductController extends Controller
{
    protected $product;
    protected $category;

    public function __construct(Product $product, Category $category){
        $this->product             = new ProductRepository($product);
        $this->category            = new CategoryRepository($category);
    }
    // Lấy ra 1 sản phẩm
    public function get_one($id){
        $data = $this->product->get_one($id);
        return $this->product->send_response(200, $data, null);
    }
    // Lấy ra sản phẩm theo request
    public function get_all(Request $request){
        $count = count($this->product->get_all_condition($request));
        $data = [
            "category"  => $request->tag != 0 ? $this->category->get_one($request->tag)[0] : "All",
            "data"      => $this->product->get_condition($request, $count),
            "count"     => $count,
        ];
        return $this->product->send_response(200, $data, null);
    }
    // lấy ra sản phẩm liên quan
    public function get_related($id){
        $product = $this->product->get_one($id);
        $data = $this->product->get_related($product[0]->category_id, $id);
        return $this->product->send_response(200, $data, null);
    }
    public function get_new_arrivals(){
        $data = $this->product->get_new_arrivals();
        return $this->product->send_response(200, $data, null);
    }
    public function get_one_cart($id){
        $data = $this->product->get_one($id);
        return $this->product->send_response(200, $data, null);
    }
    public function get_with_category($id){
        $data = $this->product->get_with_category($id);
        return $this->product->send_response(200, $data, null);
    }
    public function get_best_sale(){
        $data = $this->product->get_best_sale();
        return $this->product->send_response(200, $data, null);
    }
    // Lấy ra sản phẩm trending carousel
    public function get_trending(){
        $data = $this->product->get_trending();
        return $this->product->send_response(200, $data, null);
    }

}
