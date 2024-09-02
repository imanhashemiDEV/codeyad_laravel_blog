<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/articles', [\App\Http\Controllers\Frontend\ArticleController::class,'articles'])->name('front.articles');
Route::get('/article/{id}', [\App\Http\Controllers\Frontend\ArticleController::class,'article'])->name('front.article');
Route::fallback(function () {
    return view('frontend.404');
});


