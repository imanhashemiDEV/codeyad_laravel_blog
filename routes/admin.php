<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', PanelController::class)->name('panel');
Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('articles', ArticleController::class);
Route::resource('roles', RoleController::class);
Route::post('/ckeditor_image',[ArticleController::class,'ckeditorImage'])->name('ckeditor.upload');
Route::fallback(function () {
    return view('admin.errors.404');
});
