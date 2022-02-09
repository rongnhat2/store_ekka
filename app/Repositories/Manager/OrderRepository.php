<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class OrderRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }

    // admin
    public function get_full_order($id){
        $sql = " SELECT order_detail.*, 
                        product.name, 
                        product.id as product_id
                FROM order_detail
                LEFT JOIN product
                ON product.id = order_detail.product_id
                WHERE order_id = ".$id;
        return DB::select($sql);
    }
    public function get_in_order($id){
        $sql = " SELECT *
                    FROM order_time
                    WHERE id = ".$id;
        return DB::select($sql);
    }
    public function update_status($id){
        $sql = "UPDATE order_detail
                SET suborder_status = 1
                WHERE order_id = ".$id;
        return DB::select($sql);
    }

    
    // customer
    public function get_order($id){
        $sql = " SELECT * 
                FROM order_time
                WHERE order_status = ".$id;
        return DB::select($sql);
    }
    public function get_sub_order($id){
        $sql = " SELECT order_detail.*, 
                        product.name, 
                        product.id as product_id 
                FROM order_detail
                LEFT JOIN product
                ON product.id = order_detail.product_id
                WHERE order_id = ".$id;
        return DB::select($sql);
    }

}
