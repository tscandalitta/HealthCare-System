<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ObraSocial extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'sigla' => $this->sigla,
            'nombre' => $this->nombre,
            //'pacientes' => PacienteResource::collection($this->pacientes),
        ];
    }
}
