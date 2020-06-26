<?php

namespace App\Http\Controllers;

use App\ObraSocial;
use App\Paciente;
use Illuminate\Http\Request;

class ObraSocialController extends Controller
{
    public function index()
    {
        $obras_sociales = ObraSocial::all();
        $pacientes = Paciente::all();

        return view('obras_sociales.index', compact('obras_sociales','pacientes'));
    }
}
