<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'web'], function(){
    Route::resource('/job', JobController::class,);
});
