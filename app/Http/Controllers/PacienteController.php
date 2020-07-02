<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\ObraSocial;
use App\Estudio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => 'home']);
    }

    public function index()
    {
        $pacientes = Paciente::all();

        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        $obras_sociales = ObraSocial::all();
        
        return view('pacientes.create', compact('obras_sociales'));
    }

    public function store()
    {
        $this->validate(request(), [
            'dni' => 'unique:pacientes',
            'nombre' => 'required',
            'apellido' => 'required'
        ]);
        self::validateImages();
    
        $paciente = Paciente::create([
            'nombre' => request()->nombre,
            'apellido' => request()->apellido,
            'dni' => request()->dni,
            'telefono' => request()->telefono,
            'direccion' => request()->direccion,
            'obra_social_id' => request()->obra_social_id,
            'historia_clinica' => request()->historia_clinica,
            'token' => Str::random(80),
        ]);

        self::storeImages($paciente);
        
        return redirect()->home()->with('message', 'Paciente creado correctamente.');;
    }

    private function validateImages()
    {
        if(request()->hasFile('estudios'))
            request()->validate(['estudios.*' => 'file|image|max:5000']);
    }

    private function storeImages($paciente)
    {
        if(request()->hasFile('estudios')){
            foreach(request()->file('estudios') as $estudio) {
                $imagen = base64_encode(file_get_contents($estudio));
                $srcImagen = "data:image/;base64, " . $imagen;
                $paciente->estudios()->create(['imagen' => $srcImagen]);
            }
        }
    }

    public function show()
    {
        $api_token = Auth::user()->api_token;
        $paciente = Paciente::find(Auth::user()->paciente_id);
        return view('pacientes.profile', compact('paciente','api_token'));
    }

    public function showByDNI($dni)
    {
        $paciente = Paciente::query()
                        ->where('dni', 'LIKE', $dni)
                        ->get();

        $obra_social = $paciente->first()->obraSocial;
        $estudios = $paciente->first()->estudios;

        return $paciente;
    }
    
    public function edit(Paciente $paciente)
    {
        $obras_sociales = ObraSocial::all();
        return view('pacientes.edit', compact('paciente','obras_sociales'));
    }

    public function update(Paciente $paciente)
    {
        $this->validate(request(), [
            'dni' => 'required',
            'nombre' => 'required',
            'apellido' => 'required'
        ]);

        self::validateImages();

        $paciente->nombre = request('nombre');
        $paciente->apellido = request('apellido');
        $paciente->dni = request('dni');
        $paciente->telefono = request('telefono');
        $paciente->direccion = request('direccion');
        $paciente->historia_clinica = request('historia_clinica');
        $paciente->obra_social_id = request('obra_social_id');

        self::storeImages($paciente);
        $paciente->save();

        return redirect()->home();
    }

    public function updateHC(Paciente $paciente)
    {
        $paciente->historia_clinica = request('historia_clinica');
        
        $paciente->save();

        return redirect()->home();
    }

    public function destroy(Paciente $paciente)
    {
        $paciente->estudios()->delete();
        $paciente->delete();

        return redirect()->home();
    }
}
