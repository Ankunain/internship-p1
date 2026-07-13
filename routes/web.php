<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/home/{name?}', function ($name = null) {
//     return $name;
// });


// get post put delete

// get post

// Route::match(['get', 'post'], '/matchroute', function () {
//     //
// });




// Route::get('/home/', [FrontController::class, 'home']);
// Route::get('/about/', [FrontController::class, 'about']);
// Route::get('/contact/', [FrontController::class, 'contact']);




// Grouping by controller
Route::controller(FrontController::class)->group(function () {

    Route::get('/', 'home')->name('home');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    
});



// Grouping by controller
Route::controller(StudentController::class)->group(function () {
    Route::get('/students/index', 'index')->name('student.index');
    Route::get('/students/create', 'create')->name('student.create');
    Route::post('/students/create/store', 'store')->name('student.store');
    Route::post('/students/data/delete', 'delete')->name('student.delete');


    Route::get('/students/edit/{id}', 'edit')->name('student.edit');
    Route::post('/students/edit/{id}/store', 'editStore')->name('student.edit.store');

    

});