<?php

namespace App;

class ObraSocial extends Model
{
    protected $table = "obras_sociales";

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }

    public function getNombreCompleto()
    {
        return $this->sigla . " - " . $this->nombre;
    }
}
