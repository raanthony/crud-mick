<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{

    protected $fillable = [
        'product_name', 'product_price', 'description',
    ];
protected $table="products";
}
