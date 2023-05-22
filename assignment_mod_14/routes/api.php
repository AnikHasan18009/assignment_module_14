<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\pageController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//Question 3
Route::controller(pageController::class)->group(function () {
    Route::get('/pages','getDefaultPage');
    Route::get('/pages/{page}', 'getPageNumber');

});
