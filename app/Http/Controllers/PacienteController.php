<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use DB;

class PacienteController extends Controller
{

    public function index()
    {
        $pacientes = Paciente::all();

        return view('pacientes.index', compact('pacientes'));
    }


    public function create()
    {
        return view('pacientes.create');
    }


    public function store(Request $request)
    {
        $this->validate(request(), [
            'dni' => 'unique:pacientes'
        ]);

        Paciente::create(request(['nombre','apellido','dni','telefono','direccion','historia_clinica']));

        return redirect('/index');
    }


    public function show($dni)
    {
        $paciente = Paciente::query()
                        ->where('dni', 'LIKE', $dni)
                        ->get();

        return $paciente;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     */
    public function edit(Paciente $paciente)
    {
        // GET pacientes/id/edit
    }


    public function update(Request $request)
    {
        $paciente = Paciente::find($request->id);

        $paciente->fill(request(['nombre','apellido','dni','telefono','direccion','historia_clinica']));
    }

    
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return redirect()->home();
    }
}
