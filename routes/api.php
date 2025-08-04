<?php

use App\Http\Controllers\Api\V1\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\JobController;
use \App\Http\Controllers\Api\V1\EmployerController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'V1'], function() {
    Route::apiResource('/jobs', JobController::class );
    Route::apiResource('/categories',CategoryController::class);
    Route::apiResource('/employers', EmployerController::class);
});
