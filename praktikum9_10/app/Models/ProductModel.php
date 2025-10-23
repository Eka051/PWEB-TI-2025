<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $fillabel = [
        'name',
        'stock',
        'price'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
