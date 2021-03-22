<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public static function allCategory() {
        $categories = Category::get();
        return  compact('categories');
    }
}
