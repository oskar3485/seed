<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryProduct extends Model
{
    protected $table = 'product_category_products';

    protected $fillable = ['category_id', 'product_id'];

}
