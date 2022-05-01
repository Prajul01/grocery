<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testinominal extends Model
{
    use HasFactory;
    protected $table='testinominal';
    protected $fillable=['name', 'stakeholders','message'];
}
