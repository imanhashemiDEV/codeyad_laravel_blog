<?php

use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/articles/{category_slug}', [ArticleController::class,'articles'])->name('front.articles');
Route::get('/article/{article}', [ArticleController::class,'article'])->name('front.article');
Route::post('submit_user_comment',[\App\Http\Controllers\Admin\CommentController::class,'submitUserComment'])->name('submit.user.comment');
Route::fallback(function () {
    return view('frontend.404');
});


