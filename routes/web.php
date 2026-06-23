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

// PUBLICO

Route::get('/principal', [App\Http\Controllers\Principal::class, 'principal'])->name('principal');

Route::prefix('/usuario')->group(function(){
    Route::get('/cadastrar', [App\Http\Controllers\Usuario::class, 'indexUsuario'])->name('usuario.cadastrar');
    Route::post('/create', [App\Http\Controllers\Usuario::class, 'createUsuario'])->name('usuario.create');
    Route::get('/login', [App\Http\Controllers\Usuario::class, 'loginUsuario'])->name('usuario.login');
    Route::get('/update/{id}', [App\Http\Controllers\Usuario::class, 'updateUsuario'])->name('usuario.update');
});
Route::prefix('/produto')->group(function(){
    Route::get('/compra/{id}', [App\Http\Controllers\Produto::class, 'readIdProduto'])->name('produto.compra-id');
});

// ADMIN

Route::prefix('/dashboard/produto')->group(function(){
    Route::get('/index', [App\Http\Controllers\Produto::class, 'indexProduto'])->name('produto.index');
    Route::post('/create', [App\Http\Controllers\Produto::class, 'createProduto'])->name('produto.create');
    Route::get('/read', [App\Http\Controllers\Produto::class, 'readProduto'])->name('produto.read');
    Route::get('/update/{id}', [App\Http\Controllers\Produto::class, 'updateProduto'])->name('produto.update');
    Route::get('/delete/{id}', [App\Http\Controllers\Produto::class, 'deleteProduto'])->name('produto.delete');
    Route::post('/save', [App\Http\Controllers\Produto::class, 'saveProduto'])->name('produto.save');
});

Route::prefix('/dashboard/usuario')->group(function(){
    Route::get('/read', [App\Http\Controllers\Usuario::class, 'readUsuario'])->name('usuario.read');
    Route::get('/delete/{id}', [App\Http\Controllers\Usuario::class, 'deleteUsuario'])->name('usuario.delete');
    Route::post('/save', [App\Http\Controllers\Usuario::class, 'saveUsuario'])->name('usuario.save');
});






