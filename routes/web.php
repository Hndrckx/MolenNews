<?php

use App\Http\Controllers\FastController;
use App\Http\Controllers\ArticleController;
use App\Models\Fast;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminlil', [FastController::class, 'create'])->name('create');

Route::post('/adminlil', [FastController::class, 'store']);

Route::delete('/delete/{id}', [FastController::class, 'destroy']);

Route::get('/adminog', [ArticleController::class, 'create'])->name('create');

Route::post('/adminog', [ArticleController::class, 'store']);

Route::delete('/delete/{id}', [ArticleController::class, 'destroy']);

Route::get('/article', [ArticleController::class, 'index']);

Route::get('/news', [FastController::class, 'index']);

Route::get('/showarticle/{id}', [ArticleController::class, 'show']);

Route::get('/shownew/{id}', [FastController::class, 'show']);

// Route::get('edit/{id}', [ArticleController::class], 'edit');