<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Paciente;

class ObraSocial extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'sigla' => $this->sigla,
            'nombre' => $this->nombre,
            'pacientes' => Paciente::collection($this->pacientes),
        ];
    }
}
