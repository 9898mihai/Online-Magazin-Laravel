<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
//    public function index() {
//        $products = Product ::get();
//        $categories = Category::get();
//        return view('index', compact('products','categories'));
//    }

    public function categories() {
        $categories = CategoryController::allCategory();
        return view('categories', compact('categories'));
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        $categories = CategoryController::allCategory();
        return view('category', compact('category','categories'));
    }

    public function product( $product = null) {
        $categories = CategoryController::allCategory();
        return view('product', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

}
