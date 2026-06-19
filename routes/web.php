<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal'])->name('principal');
Route::get('/cadastrar', [App\Http\Controllers\Principal::class, 'cadastrar'])->name('cadastrar');
Route::get('/compra', [App\Http\Controllers\Principal::class, 'compra'])->name('compra');
Route::get('/login', [App\Http\Controllers\Principal::class, 'login'])->name('login');




