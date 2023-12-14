<?php

use App\Http\Controllers\PostController;
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




Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/create', [PostController::class, 'create'])->name('create');
Route::post('/store', [PostController::class, 'store'])->name('store');
Route::delete('/destroy/{id}', [PostController::class, 'destroy'])->where('id', '[0-9]+')->name('destroy');
Route::get('/edit/{id}', [PostController::class, 'edit'])->where('id', '[0-9]+')->name('edit');
Route::put('/update/{id}', [PostController::class, 'update'])->where('id', '[0-9]+')->name('update');




// Route::group(['prefix'])


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
