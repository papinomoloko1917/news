<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;

Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
