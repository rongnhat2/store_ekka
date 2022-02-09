<?php

namespace App\Http\Controllers\Customer;

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

    public function get(){
        $data = $this->category->get_category();
        return $this->category->send_response(200, $data, null);
    }
    
}
