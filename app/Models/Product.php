<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['category_id', 'name', 'slug', 'images', 'metadata', 'description', 'detail', 'prices', 'discount', 'trending', 'status', 'created_at', 'updated_at'];
}
