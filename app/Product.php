<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    public $table = 'products';

    protected $fillable = [
        'product_name',
       
    ];
}