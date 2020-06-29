<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Paciente as PacienteResource;
use App\Paciente;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/pacientes/{dni}', function ($dni) {
    return new PacienteResource(
        Paciente::query()
            ->where('dni', 'LIKE', $dni)
            ->first()
        );
});