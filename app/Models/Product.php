<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'product_name',
        'sku',
        'product_unit_price',
        'quantity',
        'product_image',
        'product_description',
        'brand_id',
        'category_id',
        'unit_id',
        'vat_type',
    ];

    public function brands(){
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function units(){
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }

    public function orders(){
        return $this->belongsTo(Order::class, 'product_id', 'id');
    }
}
