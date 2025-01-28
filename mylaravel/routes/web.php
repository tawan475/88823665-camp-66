<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>Hello World</h1>";
});

Route::get('/mycontroller/{id?}', [MyController::class,'myfunction']);
Route::post('/mycontroller/{id?}', [MyController::class,'myfunction']);

Route::get("/", function () {
    //go to /login
    return redirect('login');
});
Route::get("/login", [LoginController::class, 'index']);
Route::get("/register", [RegisterController::class, 'index']);
Route::get("/dashboard", [HomeController::class, 'index']);

Route::get("/500", [HomeController::class, 'error500']);
Route::get("/404", [HomeController::class, 'error404']);
