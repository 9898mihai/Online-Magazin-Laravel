<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(Request $request) {
        $categories = Category::get();
        $banners = Banner::get();
        $productsQuery = Product::query();
        $products = $productsQuery->paginate(9);
        return view('index', compact('products','categories','banners'));
    }

   /* public function categories() {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }*/

    public function category(Request $request, $code) {
        $categories = Category::get();
        $category_id = Category::where('code', $code)->first();
        $categoryQuery = DB::table('categories');
        $categoryQuery ->join('products', 'category_id', '=', 'categories.id');
        $categoryQuery->where('category_id','=', $category_id->id);

        if($request->filled('sorting')){
            $sort = $request->get('sorting');
            if($sort=='price_asc'){
                $categoryQuery->orderBy('price','asc');
            }elseif ($sort=='price_dsc'){
                $categoryQuery->orderBy('price','desc');
            }
        }

        if($request->filled('price_from')) {
            $categoryQuery->where('price','>=', $request->price_from);
        }

        if($request->filled('price_to')) {
            $categoryQuery->where('price','<=', $request->price_to);
        }


        $category = $categoryQuery->paginate(9);
        $category = $category->toArray();
        $categoryName = $category_id->name;
        $categoryCode = $category_id->code;
        return view('category', compact('category','categories','categoryName','categoryCode'));
    }

    public function product($category,$product) {
        $product = Product::where('code', $product)->first();
        $categories = Category::get();

        return view('product', compact('product','categories'));
    }

    public function addBanner(){
        return view('auth.banners.form');
    }

    public function productRating(Request $request)
    {
        request()->validate(['rate' => 'required']);
        $product = Product::find($request->id);
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = auth()->user()->id;
        $product->ratings()->save($rating);
        return redirect()->back();
    }

}
