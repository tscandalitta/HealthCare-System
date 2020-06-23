<?php

use Illuminate\Database\Seeder;

class ObraSocialSeeder extends Seeder
{
    public function run()
    {
        factory(App\ObraSocial::class, 10)->create()->each(function ($obraSocial) {
            $obraSocial->pacientes()->saveMany(factory(App\Paciente::class, 10)->make());
        });
    }
}
