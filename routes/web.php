<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\control;

Route::get('/', function () {
    return view('login');
});
route::view('login','login');
route::view('loginn','loginn');
route::view('home','home');
Route::controller(control::class)->group(function(){
route::post('create','create');
route::post('login','login');
});