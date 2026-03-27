<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;

Route::get('/', [MainController::class, 'index'])->name('main.index');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');
