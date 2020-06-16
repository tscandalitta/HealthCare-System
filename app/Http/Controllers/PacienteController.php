<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use DB;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = DB::table('pacientes')->get();

        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'dni' => 'unique:pacientes'
        ]);

        Paciente::create(request(['nombre','apellido','dni','telefono','direccion','historia_clinica']));

        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     */
    public function update(Request $request, Paciente $paciente)
    {
        // PATCH /pacientes/id
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     */
    public function destroy(Paciente $paciente)
    {
        // DELETE /pacientes/id
    }
}
