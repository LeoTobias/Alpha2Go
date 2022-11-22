<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CarrinhoController;


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

require __DIR__.'/auth.php';

Route::get('/', function(){
    return view ('site.home');
});

Route::get('/login', function(){
    return view ('site.login');
});

Route::get('/carrinho', function(){
    return view ('site.carrinho');
});

Route::get('/sucesso', function(){
    return view ('site.sucesso');
});

Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produto/{produto}', [ProdutoController::class, 'show'])->name('produto.show');

Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario.index');
Route::get('/usuario/{usuario}', [UsuarioController::class, 'show'])->name('usuario.show');

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/categoria/{categoria}', [CategoriaController::class, 'show'])->name('categoria.show');


Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');
//Route::get('/carrinho/{carrinho}', [CarrinhoController::class, 'show'])->name('carrinho.show');
