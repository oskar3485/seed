<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttributeProduct extends Model
{
    protected $table = 'product_attribute_products';

    protected $fillable = ['attribute_id', 'product_id'];

}