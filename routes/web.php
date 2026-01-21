<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrowseController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
   return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/browse', [BrowseController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);


Route::view('/about', 'public.about');
