<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = ['name', 'desc', 'price', 'discountedprice', 'category_id', 'sub_category_id',
        'feature_image', 'slug', 'title'];

    public function Categrory()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function SubCategrory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function multiimage()
    {
        return $this->hasMany(Image::class, 'product_id');
    }
}
