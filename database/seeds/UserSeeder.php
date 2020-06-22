<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $medico = User::create([
            'name' => 'Doctor Damian', 
            'email' => 'damian@gmail.com',
            'password' => 'medico123'
        ]);
        $medico->assignRole('medico');

        $admin = User::create([
            'name' => 'Administrador', 
            'email' => 'admin@gmail.com',
            'password' => 'admin123'
        ]);
        $admin->assignRole('admin');

        $secretaria = User::create([
            'name' => 'Secretaria', 
            'email' => 'secretaria@gmail.com',
            'password' => 'secretaria123'
        ]);
        $secretaria->assignRole('secretaria');
    }
}