<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestLoginController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;

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


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'signin']);

Route::get('/signup', [RegisterController::class, 'index']);
Route::post('/signup', [RegisterController::class, 'signup']);

Route::get('/account', [AccountController::class, 'index']);
Route::post('/account', [AccountController::class, 'update']);


Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);

//Route::post('/login', [TestLoginController::class, 'login']);

Route::get('/product/{id}', [ProductController::class, 'index']);

Route::get('player/list', [PlayerController::class, 'index']);

Route::get('player/add', [PlayerController::class, 'add']);
Route::post('player/add', [PlayerController::class, 'insert']);

Route::get('player/edit/{id}', [PlayerController::class, 'edit']);
Route::post('player/edit/{id}', [PlayerController::class, 'update']);

Route::get('player/delete/{id}', [PlayerController::class, 'delete']);
