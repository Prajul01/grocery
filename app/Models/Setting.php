<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table='setting';
    protected $fillable=['phone', 'email', 'image', 'link', 'address' , 'name' , 'desc'];
}
