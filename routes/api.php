<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Paciente as PacienteResource;
use App\Paciente;
use App\Http\Resources\ObraSocial as ObraSocialResource;
use App\ObraSocial;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    
    return new PacienteResource(Paciente::find($request->user()->paciente_id));
});

Route::get('/obras-sociales', function () {
    return ObraSocialResource::collection(ObraSocial::all());
});

Route::get('/pacientes', function () {
    return PacienteResource::collection(Paciente::all());
});