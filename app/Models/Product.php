<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'product_name',
        'product_description',
        'product_image',
        'product_price',
    ];

    protected $casts = [
        'product_images' => 'array', // Cast the product_images attribute to an array
    ];
}
