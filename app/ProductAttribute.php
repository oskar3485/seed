<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table = 'product_attributes';

    protected $fillable = ['name', 'type'];

    public function items()
    {
        return $this->hasMany(ProductAttributeItem::class, 'attribute_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_attribute_products', 'attribute_id', 'product_id');
    }

    public function product_items()
    {
        return $this->hasManyThrough(ProductItem::class, ProductAttributeProduct::class,'attribute_id', 'product_id', 'id', 'product_id');
    }

}
