<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //   Get the products that are related to the current product.

    public function relatedProducts()
    {
        return $this->belongsToMany(Product::class, 'product_product', 'product_id', 'related_product_id');
    }
}
