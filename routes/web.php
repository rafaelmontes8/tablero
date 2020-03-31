<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// TABLERO
Route::get('/', 'TableroController@index')->name('tablero.ver');
Route::match(['get','post'], '/editar', 'TableroController@edit')->name('tablero.editar');
Route::match(['get','post'], '/aniadir', 'TableroController@add')->name('tablero.aniadir');
Route::get('/borrar', 'TableroController@delete')->name('tablero.borrar');

// NOTAS
Route::get('/ver', 'NotaController@view')->name('nota.ver');
Route::get('/editarnota', 'NotaController@editview')->name('nota.editview');
Route::post('/editar', 'NotaController@edit')->name('nota.edit');
Route::get('/add', 'NotaController@addview')->name('nota.addview');
Route::post('/add', 'NotaController@add')->name('nota.add');








