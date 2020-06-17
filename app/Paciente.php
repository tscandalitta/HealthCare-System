<?php

namespace App;

class Paciente extends Model 
{
    public function obraSocial()
    {
       return $this->belongsTo(ObraSocial::class);
    }
}