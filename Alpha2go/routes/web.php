<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


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

Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produto/{produto}', [ProdutoController::class, 'show'])->name('produto.show');


Route::get('/usuario', [UserController::class, 'index'])->name('usuario.index');
Route::get('/usuario/{usuario}', [UserController::class, 'show'])->name('usuario.show');