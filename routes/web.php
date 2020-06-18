<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/index', 'PacienteController@index')->name('home');

Route::get('/pacientes/create', 'PacienteController@create');

Route::get('/pacientes/{dni}', 'PacienteController@show');

Route::post('/pacientes', 'PacienteController@store');

Route::patch('/pacientes/{paciente}','PacienteController@update');

Route::delete('/pacientes/{paciente}','PacienteController@destroy');

Auth::routes();

Route::get('/prueba', function() {
    return view('layouts.prueba');
});