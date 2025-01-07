<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>Hello World</h1>";
});

Route::get('/mycontroller/{id?}', [MyController::class,'myfunction']);
Route::post('/mycontroller/{id?}', [MyController::class,'myfunction']);
    