<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'create pacientes']);
        Permission::create(['name' => 'update pacientes']);
        Permission::create(['name' => 'delete pacientes']);
        Permission::create(['name' => 'view pacientes']);
        Permission::create(['name' => 'manage obras_sociales']);

        Role::create(['name' => 'medico'])
            ->givePermissionTo([
                'create pacientes',
                'update pacientes',
                'view pacientes',
                'delete pacientes',
                'manage obras_sociales'
            ]);

        Role::create(['name' => 'secretaria'])
            ->givePermissionTo([
                'create pacientes',
                'update pacientes',
                'view pacientes',
                'manage obras_sociales'
            ]);

        Role::create(['name' => 'admin']);
    }
}