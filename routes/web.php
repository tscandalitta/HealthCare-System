<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/pacientes/index', 'PacienteController@index');

 Route::get('/pacientes/show/{paciente}', 'PacienteController@show');

// Route::get('/pacientes/edit', 'PacienteController');

// Route::get('/pacientes/destroy', 'PacienteController');