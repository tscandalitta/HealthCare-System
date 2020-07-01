<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Paciente as PacienteResource;
use App\Paciente;
use App\Http\Resources\ObraSocial as ObraSocialResource;
use App\ObraSocial
;
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
    
    return Paciente::find($request->user()->paciente_id);
});


Route::post('/register', 'Api\AuthController@register');
Route::post('/login', 'Api\AuthController@login');

Route::get('/obras-sociales', function () {
    return ObraSocialResource::collection(ObraSocial::all());
});

Route::get('/pacientes', function () {
    return PacienteResource::collection(Paciente::all());
});

Route::get('/pacientes/{dni}', function ($dni) {
    return new PacienteResource(
        Paciente::query()
            ->where('dni', 'LIKE', $dni)
            ->first()
        );
});