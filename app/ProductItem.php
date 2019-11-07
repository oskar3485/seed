<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    protected $table = 'product_items';

    protected $fillable = ['slug','price', 'product_id', 'attribute_item_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function attribute_items()
    {
        return $this->belongsToMany(ProductAttributeItem::class, 'product_item_product_attribute_items', 'product_item_id', 'attribute_item_id');
    }

    public function product_categories()
    {
        return $this->hasManyThrough(ProductCategory::class, ProductCategoryProduct::class,'product_id', 'id', 'product_id', 'category_id');
    }
}
