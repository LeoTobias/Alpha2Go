<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\PedidoController;


require __DIR__.'/auth.php';


Route::get('/', [ProdutoController::class, 'home'])->name('home');

Route::get('/login', function(){return view ('site.login');})->name('login');

Route::get('/checkout', function(){return view ('site.checkout');});

Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produto/{produto}', [ProdutoController::class, 'show'])->name('produto.show');

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/categoria/{categoria}', [CategoriaController::class, 'show'])->name('categoria.show');
Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');

Route::group( ['middleware' => ['auth'] ], function() {
    Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario.index');
    Route::get('/usuario/{usuario}', [UsuarioController::class, 'show'])->name('usuario.show');


    Route::post('/carrinho/add/{produto}', [CarrinhoController::class, 'add'])->name('carrinho.add');

    Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos');
    Route::get('/pedido/{id}', [PedidoController::class, 'show'])->name('pedido');
    Route::post('/pedido', [PedidoController::class, 'store'])->name('pedido.store');
});
