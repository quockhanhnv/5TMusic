<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('client.pages.home.index');
});
use App\Models\Product;
Route::get('rating', function () {
    $products = Product::all();

   return view('client.pages.home.test-rating', compact('products'));
});
