<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table='image';
    protected $fillable=['image','product_id'];

    public function Product(){
        return$this->belongsTo(Product::class,'product_id');
    }
    public function setFilenamesAttribute($value)
    {
        $this->attributes['image'] = json_encode($value);
    }

    public function singleproductformultiimage()
    {
        return $this->belongsTo(Product::class);
    }

}
