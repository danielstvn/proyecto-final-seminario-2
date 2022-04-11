<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'last_name' => 'Super',
            'email' => 'admin@gmail.com',
            'contact' => '3113925484',
            'genero' => 'M',
            'domicilio' => 'las lomas cr24',
            'ciudad' => 'Pasto',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'role' => 'Administrador',
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole('Administrador');

        User::create([
            'name' => 'admin 2',
            'last_name' => 'Super 2',
            'email' => 'admin2@gmail.com',
            'contact' => '3113925441',
            'genero' => 'M',
            'domicilio' => 'centenerio cr30',
            'ciudad' => 'Pasto',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'role' => 'Administrador',
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole('Administrador');

        User::create([
            'name' => 'admin 3',
            'last_name' => 'Super 3',
            'email' => 'admin3@gmail.com',
            'contact' => '3113925443',
            'genero' => 'M',
            'domicilio' => 'las cuadras cr25',
            'ciudad' => 'Pasto',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'role' => 'Administrador',
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole('Administrador');


        User::create([
            'name' => 'daniel',
            'last_name' => 'Guancha',
            'email' => 'daniel@gmail.com',
            'contact' => '315123654',
            'genero' => 'M',
            'domicilio' => 'las lomas cr24',
            'ciudad' => 'Pasto',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'role' => 'Cliente',
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole('Cliente');


        User::create([
            'name' => 'Guillermo',
            'last_name' => 'Tell',
            'email' => 'Guillermo@gmail.com',
            'contact' => '3151123456',
            'genero' => 'M',
            'domicilio' => 'potrerillo ',
            'ciudad' => 'Pasto',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'role' => 'Cliente',
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole('Cliente');

        User::create([
            'name' => 'Maria',
            'last_name' => 'Chavez',
            'email' => 'maria@gmail.com',
            'contact' => '3169854125',
            'genero' => 'F',
            'domicilio' => 'las quintas',
            'ciudad' => 'Pasto',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'role' => 'Cliente',
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole('Cliente');

       // User::factory(9)->create()->assignRole('Admin');
        
    }
}
