<?php

namespace App;

class Estudio extends Model
{
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
