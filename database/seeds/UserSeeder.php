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
            'password' => Hash::make('medico123'),
        ]);
        $medico->assignRole('medico');

        $admin = User::create([
            'name' => 'Administrador', 
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
        $admin->assignRole('admin');

        $secretaria = User::create([
            'name' => 'Secretaria', 
            'email' => 'secretaria@gmail.com',
            'password' => Hash::make('secretaria123'),
        ]);
        $secretaria->assignRole('secretaria');
    }
}