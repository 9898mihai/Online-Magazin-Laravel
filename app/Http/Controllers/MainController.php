<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request) {
        $categories = Category::get();
        $banners = Banner::get();
        $productsQuery = Product::query();

        if ($request->filled('price_from')) {
            $productsQuery->where('price','>=', $request->price_from);
        }

        if ($request->filled('price_to')) {
            $productsQuery->where('price','<=', $request->price_to);
        }

        $products = $productsQuery->paginate(10);
        return view('index', compact('products','categories','banners'));
    }

   /* public function categories() {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }*/

    public function category($code) {
        $category = Category::where('code', $code)->first();
        $categories = Category::get();
        return view('category', compact('category','categories'));
    }

    public function product($category,$product) {
        $product = Product::where('code', $product)->first();
        $categories = Category::get();
        return view('product', compact('product','categories'));
    }

    public function addBanner(){
        return view('auth.banners.form');
    }

}
