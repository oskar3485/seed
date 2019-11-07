<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttributeItem extends Model
{
    protected $table = 'product_attribute_items';

    protected $fillable = ['attribute_id', 'value','title'];


    public function attribute()
    {
        return $this->belongsTo(ProductAttribute::class);
    }

    public function product_items()
    {
        return $this->belongsToMany(ProductItem::class, 'product_item_product_attribute_items', 'attribute_item_id', 'product_item_id');
    }

}
