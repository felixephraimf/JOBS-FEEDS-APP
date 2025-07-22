<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\JobController;
use \App\Http\Controllers\EmployerController;
use \App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'web'], function(){
    Route::resource('/job', JobController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/employer',EmployerController::class);

});


