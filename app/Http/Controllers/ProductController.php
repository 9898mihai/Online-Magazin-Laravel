<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller
{
    public function addProduct(){
        $categories = Category::get();
        return view('auth.products.addForm', compact('categories'));
    }

    public function listProducts(){
        $products = Product::get();
        $categories = Category::get();
        return view('auth.products.index', compact('products','categories'));
    }
}
