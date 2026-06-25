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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('principal');

Route::prefix('/usuario')->group(function(){
    Route::get('/cadastrar', [App\Http\Controllers\UsuarioController::class, 'indexUsuario'])->name('usuario.cadastrar');
    Route::post('/create', [App\Http\Controllers\UsuarioController::class, 'createUsuario'])->name('usuario.create');
    Route::get('/login', [App\Http\Controllers\UsuarioController::class, 'loginUsuario'])->name('usuario.login');
    Route::get('/logout', [App\Http\Controllers\UsuarioController::class, 'logoutUsuario'])->name('usuario.logout');
});
Route::prefix('/produto')->group(function(){
    Route::get('/compra/{id}', [App\Http\Controllers\ProdutoController::class, 'readIdProduto'])->name('dashboard.produto.compra-id');
});

// ADMIN

Route::get('/dashboard', [App\Http\Controllers\PrincipalController::class, 'dashboardAdmin'])->name('dashboard.dashboard');

Route::prefix('/dashboard/produto')->group(function(){
    Route::get('/index', [App\Http\Controllers\ProdutoController::class, 'indexProduto'])->name('dashboard.produto.index');
    Route::post('/create', [App\Http\Controllers\ProdutoController::class, 'createProduto'])->name('dashboard.produto.create');
    Route::get('/read', [App\Http\Controllers\ProdutoController::class, 'readProduto'])->name('dashboard.produto.read');
    Route::get('/update/{id}', [App\Http\Controllers\ProdutoController::class, 'updateProduto'])->name('dashboard.produto.update');
    Route::get('/delete/{id}', [App\Http\Controllers\ProdutoController::class, 'deleteProduto'])->name('dashboard.produto.delete');
    Route::post('/save', [App\Http\Controllers\ProdutoController::class, 'saveProduto'])->name('dashboard.produto.save');
});

Route::prefix('/dashboard/usuario')->group(function(){
    Route::get('/read', [App\Http\Controllers\UsuarioController::class, 'readUsuario'])->name('dashboard.usuario.read');
    Route::get('/delete/{id}', [App\Http\Controllers\UsuarioController::class, 'deleteUsuario'])->name('dashboard.usuario.delete');
    Route::get('/update/{id}', [App\Http\Controllers\UsuarioController::class, 'updateUsuario'])->name('dashboard.usuario.update');
    Route::post('/save', [App\Http\Controllers\UsuarioController::class, 'saveUsuario'])->name('dashboard.usuario.save');
});

Route::fallback(function () {
    return view('fallback.error_404');
});
