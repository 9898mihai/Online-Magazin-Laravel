<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static function allProducts() {
        $products = Product::get();
          return compact('products');
    }
    public function addProduct(){
        $categories = Category::get();
        return view('auth.products.form', compact('categories'));
    }
}
