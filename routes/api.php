<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//  Student Api Regiser Api


Route::post('students',[App\Http\Controllers\Api\StudentsController::class,'studentstore']);
Route::get('students',[App\Http\Controllers\Api\StudentsController::class,'studentlist']);
Route::get('students/{id}',[App\Http\Controllers\Api\StudentsController::class,'show']);
Route::put('students/{id}/update',[App\Http\Controllers\Api\StudentsController::class,'update']);
Route::delete('students/{id}/destroy',[App\Http\Controllers\Api\StudentsController::class,'destroy']);


// Route::get('/Students/Students', [App\Http\Controllers\Api\StudentsController::class,'student_list']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



