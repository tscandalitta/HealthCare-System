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
    Route::get('/pacientes/{dni}', 'PacienteController@showByDNI');
});

Route::group(['middleware' => 'can:delete pacientes'], function () { 
    Route::delete('/pacientes/{paciente}','PacienteController@destroy');
});

Route::group(['middleware' => 'can:manage obras_sociales'], function () { 
    Route::get('/obras_sociales/create','ObraSocialController@create');
    Route::post('/obras_sociales','ObraSocialController@store');
});

Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@home');
Route::get('/profile', 'PacienteController@show')->name('profile');
Route::get('/profile2', function () {
    return view('pacientes.profile-vue');
});

Auth::routes();