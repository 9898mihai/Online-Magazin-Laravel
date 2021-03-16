<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Product extends Model
{
    protected $fillable = [
        'name', 'code', 'price', 'category_id', 'description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}

