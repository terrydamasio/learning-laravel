<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobrenos', 'SobreNosController@sobrenos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function() {return 'Login';})->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() {return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function() {return 'Produtos';})->name('app.produtos');    
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste');

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique Aqui</a> para acessar a rota inicial';  
});