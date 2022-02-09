<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    use HasFactory;
    protected $table = 'customer_detail';
    protected $fillable = ['customer_id', 'name', 'phone', 'avatar', 'address', 'created_at', 'updated_at'];
}
