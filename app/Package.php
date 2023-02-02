<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'message',
        'amount',
        'genre1',
        'pics1',
        'genre2',
        'pics2',
        'coins',
        'duration',      
    ];


}
