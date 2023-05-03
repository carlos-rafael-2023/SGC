<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\VendasController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

//Controller de produtos
Route::get('/produtos', [ProdutosController::class, 'produtos'])->name('produtos.produtos');
Route::get('/cadastrar', [ProdutosController::class, 'cadastrar']);
Route::post('/save', [ProdutosController::class, 'save']);
Route::get('/editar/{id}', [ProdutosController::class, 'editar'])->name('editar');
Route::post('/update/{id}', [ProdutosController::class, 'update'])->name('update');
Route::get('/produtos/{id}', [ProdutosController::class, 'excluir'])->name('produtos.excluir');



//Controller de Vendas
Route::get('/vendas', [VendasController::class, 'vendas'])->name('vendas.vendas');
Route::get('/create-vendas', [VendasController::class, 'create_vendas']);
Route::get('/create-vendas', [VendasController::class, 'create_vendas']);
Route::post('/insert_vendas', [VendasController::class, 'insert_vendas']);
