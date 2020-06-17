<?php

use Illuminate\Database\Seeder;

class ObraSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ObraSocial::class, 10)->create()->each(function ($obraSocial) {
            $obraSocial->pacientes()->saveMany(factory(App\Paciente::class, 10)->make());
        });
    }
}
