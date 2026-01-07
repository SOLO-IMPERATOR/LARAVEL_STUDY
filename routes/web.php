<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function(){
    return view('form');
});

Route::get('/home', [HomeController::class,'index']);

Route::post('/user_message', [HomeController::class,'add_message']);

Route::delete('/user_message/{userMessage}', [HomeController::class,'delete_message']);

Route::get('user_message/{userMessage}/edit',[HomeController::class,'form_edit']);

Route::put('/user_message/{userMessage}',[HomeController::class,'edit_message']);