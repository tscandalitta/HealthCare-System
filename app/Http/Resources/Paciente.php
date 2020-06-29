<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Paciente extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'dni' => $this->dni,
            'historia_clinica' => $this->historia_clinica,
            //'estudios' => EstudioResource::collection($this->estudios),
            //obraSocial
        ];
    }
}
