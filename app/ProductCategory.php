<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_categories';

    protected $fillable = ['slug','title'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category_products', 'category_id', 'product_id');
    }

    public function product_items()
    {
        return $this->hasManyThrough(ProductItem::class, ProductCategoryProduct::class,'category_id', 'product_id', 'id', 'product_id');
    }
}
