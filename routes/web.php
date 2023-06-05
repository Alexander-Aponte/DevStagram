<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('principal');
});

Route::get('/registro', [RegisterController::class, 'index'] )->name('registro');
Route::Post('/registro', [RegisterController::class, 'store'] );

Route::get('/logn', [LoginController::class, 'index'])->name('login');

Route::get('/muro', [PostController::class, 'index'])->name('post.index');

