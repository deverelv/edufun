<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ArticleController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{categoryName}', [CategoryController::class, 'show']);
Route::get('/article/{id}', [ArticleController::class, 'show']);
Route::get('/writers/', [WriterController::class, 'index']);
Route::get('/writers/{id}', [WriterController::class, 'show']);
Route::get('/about', function () { return view('about'); });
