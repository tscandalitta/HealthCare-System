<?php

namespace App\Http\Controllers;

use App\ObraSocial;
use App\Paciente;
use Illuminate\Http\Request;

class ObraSocialController extends Controller
{
    public function create()
    {
        return view('obras_sociales.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'nombre' => 'required'
        ]);

        if(request()->sigla != null)
            $this->validate(request(), [
                'sigla' => 'unique:obras_sociales'
            ]);
    
        ObraSocial::create(request()->all());
        
        return redirect()->home();
    }
}
