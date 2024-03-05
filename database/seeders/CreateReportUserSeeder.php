<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateReportUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Líder de técnico',
            'email' => 'LTecnico@talentotech.com',
            'password' => bcrypt('Tecnico5674.Tech')
        ]);

        // $role = Role::where(['name' => 'Reportes'])->first();
        // $role = Role::create(['name' => 'Estadisticas']);

        // $permissions = [9, 10, 11, 12];

        // $role->syncPermissions($permissions);

        $user->assignRole(3);
    }
}
