<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'quantity', 'active', 'description'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
