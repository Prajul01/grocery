<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table='cart';
    protected $fillable=['quantity','u_id', 'p_id'];

    public function Products(){
        return $this->belongsTo(Product::class,'p_id');
    }
}
