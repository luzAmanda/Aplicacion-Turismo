<?php

use Illuminate\Database\Seeder;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'SuperAdmin',
            'display_name' => 'SuperAdmin',
            'description' => 'El Super Administrador del Sistema',
   
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'Administrador',
            'display_name' => 'Administrador',
            'description' => 'Administradordel Sistema',
   
        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'Propietario',
            'display_name' => 'Propietario',
            'description' => 'El Propietario del Sistema',
   
        ]);
        DB::table('roles')->insert([
            'id' => 4,
            'name' => 'Encargado',
            'display_name' => 'Encargado',
            'description' => 'Encargado del Sistema',
   
        ]);
       
        DB::table('users')->insert([
            'nombre' => 'usuario',
            'apellido' => 'Usuario',
            'cedula' => '12345678',
            'direccion' => 'Ibarra',
            'correo' => 'usuario1@hotmail.com',
            'celular' => '0987654323',
            'telefono' => '234567',
            'estado' => 1,
            'password' => bcrypt('12345678'),
        ]);
        DB::table('users')->insert([
            'nombre' => 'usuario',
            'apellido' => 'Usuario',
            'cedula' => '12345678',
            'direccion' => 'Ibarra',
            'correo' => 'usuario2@hotmail.com',
            'celular' => '0987654323',
            'telefono' => '234567',
            'estado' => 1,
            'password' => bcrypt('12345678'),
        ]);
        DB::table('users')->insert([
            'nombre' => 'usuario',
            'apellido' => 'Usuario',
            'cedula' => '12345678',
            'direccion' => 'Ibarra',
            'correo' => 'usuario3@hotmail.com',
            'celular' => '0987654323',
            'telefono' => '234567',
            'estado' => 1,
            'password' => bcrypt('12345678'),
        ]);
        DB::table('users')->insert([
            'nombre' => 'usuario',
            'apellido' => 'Usuario',
            'cedula' => '12345678',
            'direccion' => 'Ibarra',
            'correo' => 'usuario4@hotmail.com',
            'celular' => '0987654323',
            'telefono' => '234567',
            'estado' => 1,
            'password' => bcrypt('12345678'),
        ]);

        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1,
        
   
        ]);
        DB::table('role_user')->insert([
            'user_id' => 2,
            'role_id' => 2,
   
        ]);
        DB::table('role_user')->insert([
            'user_id' => 3,
            'role_id' => 3,
   
        ]);
        DB::table('role_user')->insert([
            'user_id' => 4,
            'role_id' => 4,
   
        ]);
    }
}
