<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/create-product', function () {
    return view('create-product');
});
Route::get('/products', [ProductController::class, 'index']);
Route::get('/admin/products/create', [ProductController::class, 'create']);
Route::post('/admin/products', [ProductController::class, 'store']);

