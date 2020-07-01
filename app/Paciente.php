<?php

namespace App;

class Paciente extends Model 
{
    protected $hidden = ['id','created_at','updated_at','token'];

    public function obraSocial()
    {
       return $this->belongsTo(ObraSocial::class);
    }

    public function estudios()
    {
        return $this->hasMany(Estudio::class);
    }
}