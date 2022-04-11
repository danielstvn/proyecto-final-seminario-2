<?php

namespace Database\Seeders;

use Database\Seeders\RoleSeeder as SeedersRoleSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role:: create(['name'=>'Cliente']);
        $role2 = Role:: create(['name'=>'Administrador']);
        $role3 = Role:: create(['name'=>'Secretari@']);
        $role4 = Role:: create(['name'=>'Auxiliar Contable']);
        

        //permisos para los clientes
        Permission::create(['name'=>'client.home'])->assignRole($role1);

        // permisos para el administrador
        
        Permission::create(['name'=>'admin.home'])->assignRole($role2);
        Permission::create(['name'=>'admin.users'])->assignRole($role2);
        Permission::create(['name'=>'admin.profile'])->assignRole($role2);
        Permission::create(['name'=>'admin.products'])->assignRole($role2);

      
  
       
    }
}
