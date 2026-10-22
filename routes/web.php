<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestLoginController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('Pages/Home');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/product', function () {
    return view('Pages/Product');
});

Route::get('/cart', function () {
    return view('Pages/Cart');
});

Route::get('/shop', function () {
    return view('Pages/Shop');
});

Route::get('/product-details', function () {
    return view('Pages/Product-Details');
});

Route::get('/blog', function () {
    return view('Pages/Blog');
});
Route::get('/contact-us', function () {
    return view('Pages/Contact-us');
});


Route::get('/login', [TestLoginController::class, 'index']);


Route::get('/user', [UserController::class, 'index']);

Route::post('/login', [TestLoginController::class, 'login']);

// Route::get('/product/{id}', [ProductController::class, 'index']);
