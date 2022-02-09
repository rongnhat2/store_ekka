<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class CategoryRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }

    public function get_category(){
        $sql = "SELECT * 
                FROM category";
        return DB::select($sql);
    }

    public function get_category_query(){
        $sql = "SELECT category_type.*, 
                    category_group.name as type_name, 
                    category_group.category_id as category_id, 
                    category_type.classify_id as group_id
                FROM category
                LEFT JOIN category_group
                ON category.id = category_group.category_id
                LEFT JOIN category_type
                ON category_type.classify_id = category_group.id";
        return DB::select($sql);
    }
    public function get_category_group(){
        $sql = "SELECT *
                FROM category_group";
        return DB::select($sql);
    }

    
    public function get_one($id){
        $sql = "SELECT * FROM category WHERE id = ".$id;
        return DB::select($sql);
    }
    
}
