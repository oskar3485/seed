<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['price','title'];

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_category_products', 'product_id', 'category_id');
    }

    public function product_attributes()
    {
        return $this->belongsToMany(ProductAttribute::class, 'product_attribute_products', 'product_id', 'attribute_id');
    }

    public function items()
    {
        return $this->hasMany(ProductItem::class);
    }

    public function product_attribute_items()
    {
        return $this->hasManyThrough(ProductAttributeItem::class,ProductAttributeProduct::class,'product_id','attribute_id','id', 'attribute_id');
    }
}
