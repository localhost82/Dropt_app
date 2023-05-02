<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/privacy', [App\Http\Controllers\PrivacyController::class, 'index'])->name('privacy');
Route::get('/terms', [App\Http\Controllers\TermsController::class, 'index'])->name('terms');
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news');

Route::middleware(['auth', 'verified'])->group(function () {
    // We can add all auth required pages within this group
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/news/create', [App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
    Route::post('/dashboard/news/create', [App\Http\Controllers\NewsController::class, 'store']);
});


//Route::get('/about', function () {
//    return view('about');
//});
//
//Route::get('/term', function () {
//    return view('term');
//});
//
//Route::get('/contacts', function () {
//    return view('contacts');
//});

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified'
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});
