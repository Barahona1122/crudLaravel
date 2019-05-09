<?php

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('ListarEmpresa', 'EmpresaController@index')->name('ListarEmpresa');
Route::get('CrearEmpresa', 'EmpresaController@create')->name('CrearEmpresa');
Route::post('RegistrarEmpresa', 'EmpresaController@store')->name('RegistrarEmpresa');


Route::get('/edit/{id}', 'EmpresaController@edit');
Route::post('/update/{id}', 'EmpresaController@update');
Route::get('/delete/{id}', 'EmpresaController@destroy');
