<?php

use Illuminate\Support\Facades\Route;


//Route::get('/','MainController@index')->name('index');
Route::get('/categories','App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/category-{category}','App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product?}','App\Http\Controllers\MainController@product')->name('product');



Route::get ('/', function() {
    $categories = App\Http\Controllers\CategoryController::allCategory();
    $products = App\Http\Controllers\ProductController::allProducts();

    return view('home', compact('products','categories'));
});
