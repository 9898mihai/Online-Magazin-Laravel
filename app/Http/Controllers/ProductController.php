<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller
{
    public static function allProducts() {
        $products = Product::get();
          return compact('products');
    }
    public function addProduct(){
        $categories = Category::get();
        return view('auth.products.addForm', compact('categories'));
    }

    public function editProduct(){
        $product = Product::where('code')->first();
        $categories = Category::get();
        return view('auth.products.editForm', compact('product','categories'));
    }

    public function listProducts(){
        $products = Product::get();
        $categories = Category::get();
        return view('auth.products.index', compact('products','categories'));
    }
}
