<?php

namespace App;

class Paciente extends Model 
{
    public function patologias()
    {
        return $this->hasMany(Patologia::class);
    }
}