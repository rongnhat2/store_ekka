<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Session;
use Hash;
use DB;

class CustomerRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function check_email($email){
        return $this->model->where('email', '=', $email)->first() ? true : false;
    }
    public function checkEmailPassword($request){
        $user = $this->model->where('email', '=', $request->email)->first();
        if ($user) {
            return Hash::check($request->password, $user->password) ? $user->id : false;
        }else{
            return false;
        }
    }
    public function get_profile($id){
        $sql = "SELECT *
                FROM customer_detail
                WHERE customer_id = ".$id;
        return DB::select($sql);
    }
    public function update_profile($id, $data){
        $sql = "UPDATE customer_detail
                    SET name = '".$data["name"]."', phone = '".$data["phone"]."', address = '".$data["address"]."'
                    WHERE customer_id = ".$id;
        return DB::select($sql);
    }
    public function get_order($id){
        $sql = "SELECT *
                FROM order_time
                WHERE customer_id = ".$id."
                ORDER BY created_at DESC";
        return DB::select($sql);
    }
    public function get_oldpass($id){
        $sql = "SELECT *
                FROM customer_auth
                WHERE id = ".$id;
        return DB::select($sql);
    }
    // # Tạo token client
    public function createTokenClient($id){
        return $id . '$' . Hash::make($id . '$' . $this->model->findOrFail($id)->secret_key);
    }
    public function check_login($request){
        $user = $this->model->where('email', '=', $request->email)->first();
        if ($user) {
            return Hash::check($request->password, $user->password) ? $user->id : false;
        }else{
            return false;
        }
    }
    public function get_by_email($email){
        return $this->model->where('email', '=', $email)->first();
    }
    
}
