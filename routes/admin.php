<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('/news', [App\Http\Controllers\Admin\NewsController::class, 'index'])->name('admin.news');
