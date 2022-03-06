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
                        product.id as product_id,
                        warehouse.quantity as warehouse_quatity
                FROM order_detail
                LEFT JOIN product
                ON product.id = order_detail.product_id
                LEFT JOIN warehouse
                ON product.id = warehouse.product_id
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

    

    public function get_turnover(){
        $sql = " SELECT sum(total) as total
                    FROM order_time
                    WHERE order_status = 3";
        return DB::select($sql);
    }
    public function get_item_sell(){
        $sql = " SELECT sum(quantity) as total
                    FROM order_time
                    LEFT JOIN order_detail
                    ON order_time.id = order_detail.order_id
                    WHERE order_status = 3";
        return DB::select($sql);
    }
    public function get_order_time(){
        $sql = " SELECT count(*) as total
                    FROM order_time
                    WHERE order_status = 3";
        return DB::select($sql);
    }
    public function get_customer_buy(){
        $sql = " SELECT count(customer_id) as total
                    FROM order_time
                    WHERE order_status = 3 AND status_customer = 1
                    GROUP BY customer_id";
        return DB::select($sql);
    }
    public function get_best_sale(){
        $sql = " SELECT order_detail.product_id, 
                        sum(order_detail.quantity) as total, 
                        warehouse.quantity,
                        product.name,
                        product.images
                    FROM order_time
                    LEFT JOIN order_detail
                    ON order_time.id = order_detail.order_id
                    LEFT JOIN warehouse
                    ON warehouse.product_id = order_detail.product_id
                    LEFT JOIN product
                    ON order_detail.product_id = product.id
                    WHERE order_status = 3
                    GROUP BY order_detail.product_id, 
                            warehouse.quantity,
                            product.name,
                            product.images
                    ORDER BY total DESC LIMIT 5";
        return DB::select($sql);
    }
    public function get_customer_new(){
        $sql = "SELECT count(customer_id) as total
                FROM order_time
                WHERE order_status = 3 AND status_customer = 1
                GROUP BY customer_id ";
        return DB::select($sql);
    }
    public function get_customer_free(){
        $sql = "SELECT count(customer_id) as total
                FROM order_time
                WHERE order_status = 3 AND status_customer = 0
                GROUP BY customer_id";
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
