<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){return view('home');});
Route::get('/servicios', function(){return view('servicios');});
Route::get('/contacto', function(){return view('contacto');});
Route::get('/proyectos', function(){return view('proyectos');});
Route::get('/clientes', 'App\Http\Controllers\ClientesController@index')->name('clientes');
Route::get('/clientes/create', 'App\Http\Controllers\ClientesController@create')->name('clientes.create');
Route::post('/clientes', 'App\Http\Controllers\ClientesController@store')->name('clientes.store');
Route::get('/clientes/{id}', 'App\Http\Controllers\ClientesController@edit')->name('clientes.edit');
Route::put('/clientes/{id}', 'App\Http\Controllers\ClientesController@update')->name('clientes.update');
Route::delete('/clientes/{id}', 'App\Http\Controllers\ClientesController@destroy')->name('clientes.destroy');
Route::get('/blog', function(){return view('blog');});
Route::get('/contacto', function(){return view('contacto');});