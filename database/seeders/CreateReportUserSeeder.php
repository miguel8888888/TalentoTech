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
        // $user = User::create([
        //     'name' => 'ReportesExcel3',
        //     'email' => 'reportes@excel3.com',
        //     'password' => bcrypt('123456')
        // ]);

        $role = Role::where(['name' => 'Reportes'])->first();
        // $role = Role::create(['name' => 'AdministradorPPP']);

        // dd($role);
        $permissions = [5, 6, 7, 8, 9, 10, 11, 12];

        $role->syncPermissions($permissions);

        // $user->assignRole(2);
    }
}
