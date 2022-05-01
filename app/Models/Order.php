<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table='order';
    protected $fillable=['id', 'quantity', 'user_id', 'product_id'];
    public function Products(){
        return $this->belongsTo(Product::class,'product_id');
    }
    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }
}
