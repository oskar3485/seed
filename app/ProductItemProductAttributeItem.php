<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductItemProductAttributeItem extends Model
{
    protected $table = 'product_item_product_attribute_items';

    protected $fillable = ['attribute_item_id','product_item_id'];
}
