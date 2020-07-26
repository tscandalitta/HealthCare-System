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

Route::middleware('auth:api')->post('/user', function (Request $request) {
    $paciente = Paciente::find($request->user()->paciente_id);
    
    if($request->dni != null)
        $paciente->dni = $request->dni;
    if($request->telefono != null)
        $paciente->telefono = $request->telefono;
    if($request->direccion != null)
        $paciente->direccion = $request->direccion;
    if($request->obra_social_id != null)
        $paciente->obra_social_id = $request->obra_social_id;

    $paciente->save();

    return new PacienteResource($paciente);
});