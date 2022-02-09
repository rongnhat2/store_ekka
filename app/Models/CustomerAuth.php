<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAuth extends Model
{
    use HasFactory;
    protected $table = 'customer_auth';
    protected $fillable = ['customer_id', 'secret_key', 'email', 'password', 'verify_code', 'created_at', 'updated_at'];
}
