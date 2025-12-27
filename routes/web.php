<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('pro',[usercontroller::class,'show']);



