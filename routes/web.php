<?php


use Illuminate\Support\Facades\Route;


Route::get('/','App\Http\Controllers\MainController@index')->name('index');
Route::get('/categories','App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/{category}','App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product?}','App\Http\Controllers\MainController@product')->name('product');


//Route::get () {function() {
//    categories = Controller1::metodName();
//    $products = Controller2::metodName();
//
//    return view('home', [products, categories]);
//}
