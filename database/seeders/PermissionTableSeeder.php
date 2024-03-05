<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'participante-listar',
            'participante-crear',
            'participante-editar',
            'participante-eliminar'
        ];

        $permissions2 = [
            'reportes-listar',
            'reportes-crear',
            'reportes-editar',
            'reportes-eliminar'
        ];

        $permissions3 = [
            'estadisticas-listar',
            'estadisticas-crear',
            'estadisticas-editar',
            'estadisticas-eliminar'
        ];

        

        foreach ($permissions3 as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
