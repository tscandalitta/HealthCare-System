<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'can:update pacientes'], function () {
    Route::get('/pacientes/{paciente}/edit', 'PacienteController@edit');
    Route::patch('/pacientes/{paciente}','PacienteController@update');
    Route::patch('/pacientes/{paciente}/hc','PacienteController@updateHC');
});

Route::group(['middleware' => 'can:create pacientes'], function () { 
    Route::get('/pacientes/create', 'PacienteController@create');
    Route::post('/pacientes', 'PacienteController@store');
});

Route::group(['middleware' => 'can:view pacientes'], function () { 
    Route::get('/index', 'PacienteController@index')->name('home');
    Route::get('/pacientes/{dni}', 'PacienteController@show');
});

Route::group(['middleware' => 'can:delete pacientes'], function () { 
    Route::delete('/pacientes/{paciente}','PacienteController@destroy');
});


Route::get('', function() {
    return view('home');
});

Auth::routes();

Route::get('/prueba', function() {
    return view('layouts.prueba');
    return view('home');
});