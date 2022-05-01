<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table='subcategory';
    protected $fillable=['id','name','desc','category_id', 'image','slug'];

    public function Category(){
        return$this->belongsTo(Category::class ,'category_id');
    }

}