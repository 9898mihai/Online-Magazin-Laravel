<?php

use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Route::get('/','MainController@index')->name('index');
Route::get('/categories','App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/category-{category}','App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product}','App\Http\Controllers\MainController@product')->name('product');
Route::get ('/', function() {
    $categories = App\Http\Controllers\CategoryController::allCategory();
    $products = App\Http\Controllers\ProductController::allProducts();
    $banners = Banner::get();

    return view('index', compact('products','categories','banners'));
});

Auth::routes();
Route::get('/products-list', 'App\Http\Controllers\ProductController@listProducts')->name('listProducts')->middleware('auth');
Route::get('/add-product', 'App\Http\Controllers\ProductController@addProduct')->name('addProduct')->middleware('auth');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('get-logout');
Route::resource('products','App\Http\Controllers\AdminProductController');
Route::resource('banners','App\Http\Controllers\AdminBannerController');
Route::get('/add-banner', 'App\Http\Controllers\MainController@addBanner')->name('addBanner')->middleware('auth');

