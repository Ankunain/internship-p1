<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

// Route::get('/home/{name?}', function ($name = null) {
//     return $name;
// });


// get post put delete

// get post

// Route::match(['get', 'post'], '/matchroute', function () {
//     //
// });


Route::get('/', function () {
    return 'this is a route';
});


// Route::get('/home/', [FrontController::class, 'home']);
// Route::get('/about/', [FrontController::class, 'about']);
// Route::get('/contact/', [FrontController::class, 'contact']);





// Grouping by controller
Route::controller(FrontController::class)->group(function () {

    Route::get('home', 'home')->name('home');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');

    
});

