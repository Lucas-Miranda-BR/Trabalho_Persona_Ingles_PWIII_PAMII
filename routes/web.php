<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Principal;
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

Route::get('/', [Principal::class, 'principal'])->name('principal');
Route::get('/cadastrar', [Principal::class, 'cadastrar'])->name('cadastrar');
Route::get('/compra', [Principal::class, 'compra'])->name('compra');
Route::get('/login', [Principal::class, 'login'])->name('login');
Route::post('/autenticar', [Principal::class, 'autenticar'])->name('autenticar');
Route::get('/logout', [Principal::class, 'logout'])->name('logout');
Route::get('/usuario', [Principal::class, 'usuario'])->name('usuario');
Route::get('/config', [Principal::class, 'config'])->name('config');
Route::get('/dashboard', [Principal::class, 'dashboard'])->name('dashboard');

Route::fallback(function () {
    return view('erro_fallback.404');
});