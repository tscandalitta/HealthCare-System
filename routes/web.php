<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'PacienteController@index');

Route::get('/pacientes/create', 'PacienteController@create');

Route::get('/pacientes/{paciente}/show', 'PacienteController@show');

Route::post('/pacientes', 'PacienteController@store');

// Route::get('/pacientes/destroy', 'PacienteController');
Auth::routes();