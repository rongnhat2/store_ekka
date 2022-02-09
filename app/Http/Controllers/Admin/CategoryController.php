<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\CategoryRepository;
use App\Models\Category;
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(Category $category){
        $this->category             = new CategoryRepository($category);
    }
    public function index(){
        return view("admin.manager.category");
    }
    public function get(){
        $data = $this->category->get_category();
        return $this->category->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->category->get_one($id);
        return $this->category->send_response(200, $data, null);
    }
    public function store(Request $request){
        $data = [
            "name"      => $request->data_name,
            "slug"      => $this->category->to_slug($request->data_name),
        ];
        $data_return = $this->category->create($data);
        return $this->category->send_response(201, null, null);
    }
    public function update(Request $request){
        $id                 = $request->data_id;
        $data_update   = [
            "name"      => $request->data_name,
            "slug"      => $this->category->to_slug($request->data_name),
        ];
        $this->category->update($data_update, $id);
        return $this->category->send_response(200, null, null);
    }

    public function delete($id){
        $data = $this->category->delete($id);
        return $this->category->send_response(200, "Delete successful", null);
    }

}
