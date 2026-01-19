<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrowseController;
use App\Http\Controllers\SubjectsController;

Route::get('/', function () {
   return view('welcome');
});

Route::get('/browse', [BrowseController::class, 'index']);
use App\Http\Controllers\HomeController;

Route::get('/subjects', [SubjectsController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);

Route::view('/subjects', 'public.subjects');

Route::view('/about', 'public.about');
