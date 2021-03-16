<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'code', 'price', 'category_id', 'description', 'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

