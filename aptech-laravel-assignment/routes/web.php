<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\productsingleController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\servicesController;

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/cart', function () {
//     return view('cart');
// });

// Route::get('/checkout', function () {
//     return view('checkout');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/menu', function () {
//     return view('menu');
// });

// Route::get('/product-single', function () {
//     return view('product-single');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/services', function () {
//     return view('services');
// });


Route::get('/',[indexController::class, 'index']);
Route::get('/about',[aboutController::class, 'about']);
Route::get('/contact',[contactController::class, 'contact']);
Route::get('/cart',[cartController::class, 'cart']);
Route::get('/checkout',[checkoutController::class, 'checkout']);
Route::get('/login',[loginController::class, 'login']);
Route::get('/menu',[menuController::class, 'menu']);
Route::get('/product-single',[productsingleController::class, 'product']);
Route::get('/register',[registerController::class, 'register']);
Route::get('/services',[servicesController::class, 'services']);