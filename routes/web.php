<?php

use App\Http\Controllers\dbcontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\userreq;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\userAdd;
use App\Http\Controllers\upload;
use App\Http\Controllers\member;
use App\Http\Controllers\mutator;
use App\Http\Controllers\onetoone;
use App\Http\Controllers\querys;
use App\Http\Controllers\product;
use App\Http\Controllers\save;
use App\Http\Controllers\join;
use App\Http\Controllers\next;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use Illuminate\Support\Facades\App;


 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/{name}', function ($name) {
//     // echo $name; 
//     return view('welcome',['name'=>$name]);
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/', function () {
//     return view('contact');
// });
// Route::get("about",[users::class,'boy']);
// Route::view("login",'welcome');
// Route::post("myc",[mycontroller::class,'getData']);

// // DB
// Route::get("dbn",[dbcontroller::class,'index']);
// Route::get("dbf",[usercontroller::class,'fetchData']);

// // http request
// Route::view("login",'userreq');

// Route::post('req',[userreq::class,'getReq']);
// session

// Route::view("userlog",'login');
// Route::get('/userlog', function () {
//     if(session()->has('userAuth')){
//         return redirect('profile');
//     }
//     return view('login');
// });

// Route::post('auth',[userAuth::class,'userAuth']);
// Route::view("profile",'profile');

// Route::get('/logout', function () {
//     if(session()->has('userAuth')){
//         session()->pull('userAuth');
//     }
//     return redirect('userlog');
// });
// flash session

Route::post('addMember',[userAdd::class,'addMember']);
Route::view('add','add');

//upload file
Route::view('upld','upload');
Route::post('uploadFile',[upload::class,'uploadFile']);

// locale
// Route::view('locale','locale');
Route::get('/locale/{lang}', function ($lang){
    App::setlocale($lang);
    return view('locale');
});

// user from DB
Route::get('member',[member::class,'member']);

// save to DB and delete
Route::view('save','save');
Route::post('savedb',[save::class,'save']);
Route::get('deleteA',[save::class,'deleteA']);
Route::get('delete/{id}',[save::class,'delete']);
Route::get('edit/{id}',[save::class,'edit']);
Route::post('edit',[save::class,'updated']);

// query builder
Route::get('qry',[querys::class,'dbGet']);

// join
Route::get('join',[join::class,'show']);


// mutators

Route::get('mut',[mutator::class,'index']);

// one to one 
Route::get('one',[onetoone::class,'onetoone']);
// route model binding
// Route::get('next/{key}',[next::class,'index']);
Route::get('next/{key:name}',[next::class,'index']);

// multiple db 

Route::get('product',[product::class,'index']);




























Route::view("userpage",'userpage')->middleware('ProtectedPage');
Route::view("home",'home');
Route::view("noaccess",'noaccess');
// Route::group(['middleware'=>['ProtectedPage']],function(){
//     Route::view("home",'home');
// });



