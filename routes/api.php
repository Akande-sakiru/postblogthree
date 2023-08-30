<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fApi;
use App\Http\Controllers\sanctum;
use App\Http\Controllers\upload;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get api
// Route::get('data',[fApi::class,'index']);
// post api
// Route::post('data',[fApi::class,'index']);
//put method
Route::put('update',[fApi::class,'index']);
// delete method
Route::delete('delete/{id}',[fApi::class,'index']);
//search method

// validator
Route::post('valid',[fApi::class,'index']);

// sanctum
Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::get('search/{name}',[fApi::class,'inde']);


    });


Route::post("sanc",[sanctum::class,'index']);
// file

Route::post('uploadFile',[upload::class,'uploadFile']);



