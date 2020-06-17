<?php

namespace App;

class ObraSocial extends Model
{
    protected $table = "obras_sociales";

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }
}
