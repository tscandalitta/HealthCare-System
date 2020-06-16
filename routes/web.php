<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('/index', 'PacienteController@index');

Route::get('/pacientes/show/{paciente}', 'PacienteController@show');

Route::get('/pacientes/create', 'PacienteController@create');

Route::post('/pacientes', 'PacienteController@store');

// Route::get('/pacientes/destroy', 'PacienteController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
