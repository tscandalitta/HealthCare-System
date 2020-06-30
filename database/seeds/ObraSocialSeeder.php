<?php

use Illuminate\Database\Seeder;
use App\ObraSocial;

class ObraSocialSeeder extends Seeder
{
    public function run()
    {
        ObraSocial::create([
            'nombre' => 'Sin obra social'
        ]);

        factory(App\ObraSocial::class, 10)->create()->each(function ($obraSocial) {
            $obraSocial->pacientes()->saveMany(factory(App\Paciente::class, 10)->make());
        });
    }
}
