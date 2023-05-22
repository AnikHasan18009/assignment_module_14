<?php

use App\Http\Controllers\cookieController;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\fileHandleController;
use App\Http\Controllers\headeDatarController;
use App\Http\Controllers\jsonResponseController;

//Question 1
Route::view("/form","form");
Route::post("/onSubmit",[formController::class,'getName']);

//Question 2
Route::any('/userAgent',[headeDatarController::class,'getUserAgent']);

//Question 4
Route::any('/jsonResponse',[jsonResponseController::class,'getResponse']);

//Question 5
Route::post("/fileSubmit",[fileHandleController::class,'saveFile']);

//Question 6
Route::any("/rememberToken",[cookieController::class,"getRememberTokenValue"]);

//Question 7
Route::post('/submit',
function(Request $request):JsonResponse{
    $email=$request->input('email');
    return response()->json([
        'success' => true,
       'message' => 'Form submitted successfully.'
    ]);
}
);