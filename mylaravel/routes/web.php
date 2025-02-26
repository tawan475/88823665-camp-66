<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\NewMyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckLogin;

Route::get("/mycontroller/{id?}",
[Mycontroller::class,'myfunction']);

Route::post('/mycontroller/{id?}',
[Mycontroller::class,'myfunction']);

// Route ::get('/',function(){
//     return view('layouts.default');
// });

Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/',[HomeController::class,'index']);
    Route::get('/user',[UserController::class,'index']);
    Route::get('/user/{id}',[UserController::class,'edit']);
    Route::put('/user',[UserController::class,'saveEdit']);
    Route::delete('/user',[UserController::class,'delete']);
    Route::get('/product',[ProductController::class,'index']);
    Route::post('/product',[ProductController::class,'store']);
});

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'create']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',function(){
    session()->forget('user');
    return redirect('/login');
});

Route::get('/home',function(){
    return view('home');
});





// Route ::get('/product',[ProductController::class,'index']->middleware([Check::class]));
// Route ::post('/product',[ProductController::class,'store']->middleware([Check::class]));
