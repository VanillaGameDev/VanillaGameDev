<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use Illuminate\Support\Facades\Route;

// menggunakan controller bang
Route::get('home', HomeController::class);
Route::get('about', AboutController::class);


Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);
Route::get('profile', ProfileInformationController::class);

// Route::get('home', function () {
//     return view('home');
// });

// ini buat menampilkan full link sebuah link
// Route::get('/', function () {
//     dd(asset('css/app.css'));
// });

// Route::view('contact', 'contact');
// Route::view('about', 'about');

