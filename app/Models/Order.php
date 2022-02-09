<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order_time';
    protected $fillable = ['shipper_id', 'customer_id', 'status_customer', 'subtotal', 'coupon', 'discount', 
                    'total', 'username', 'email', 'address', 'telephone', 'payment', 'order_status', 'status', 'created_at', 'updated_at'];
}
