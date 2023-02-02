<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $table = 'items';

    protected $fillable = [
        'user_id',
        
    ];

    public function profiles()
    {
        return $this->belongsTo(Profile::class);
    }
}
