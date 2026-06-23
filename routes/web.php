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

// PUBLICO

Route::get('/', [App\Http\Controllers\Principal::class, 'principal'])->name('principal');

Route::prefix('/usuario')->group(function(){
    Route::get('/cadastrar', [App\Http\Controllers\Usuario::class, 'indexUsuario'])->name('usuario.cadastrar');
    Route::post('/create', [App\Http\Controllers\Usuario::class, 'createUsuario'])->name('usuario.create');
    Route::get('/login', [App\Http\Controllers\Usuario::class, 'loginUsuario'])->name('usuario.login');
    Route::get('/logout', [App\Http\Controllers\Usuario::class, 'logoutUsuario'])->name('usuario.logout');
    Route::get('/update/{id}', [App\Http\Controllers\Usuario::class, 'updateUsuario'])->name('usuario.update');
});
Route::prefix('/produto')->group(function(){
    Route::get('/compra/{id}', [App\Http\Controllers\Produto::class, 'readIdProduto'])->name('dashboard.produto.compra-id');
});

// ADMIN

Route::get('/dashboard', [App\Http\Controllers\Principal::class, 'dashboardAdmin'])->name('dashboard.dashboard');

Route::prefix('/dashboard/produto')->group(function(){
    Route::get('/index', [App\Http\Controllers\Produto::class, 'indexProduto'])->name('dashboard.produto.index');
    Route::post('/create', [App\Http\Controllers\Produto::class, 'createProduto'])->name('dashboard.produto.create');
    Route::get('/read', [App\Http\Controllers\Produto::class, 'readProduto'])->name('dashboard.produto.read');
    Route::get('/update/{id}', [App\Http\Controllers\Produto::class, 'updateProduto'])->name('dashboard.produto.update');
    Route::get('/delete/{id}', [App\Http\Controllers\Produto::class, 'deleteProduto'])->name('dashboard.produto.delete');
    Route::post('/save', [App\Http\Controllers\Produto::class, 'saveProduto'])->name('dashboard.produto.save');
});

Route::prefix('/dashboard/usuario')->group(function(){
    Route::get('/read', [App\Http\Controllers\Usuario::class, 'readUsuario'])->name('dashboard.usuario.read');
    Route::get('/delete/{id}', [App\Http\Controllers\Usuario::class, 'deleteUsuario'])->name('dashboard.usuario.delete');
    Route::post('/save', [App\Http\Controllers\Usuario::class, 'saveUsuario'])->name('dashboard.usuario.save');
});

Route::fallback(function () {
    return view('fallback.error_404');
});
