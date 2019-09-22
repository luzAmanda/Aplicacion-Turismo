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
            'id_roles' => 1,
            'name' => 'SuperAdmin',
            'display_name' => 'SuperAdmin',
            'description' => 'El Super Administrador del Sistema',
   
        ]);
        DB::table('roles')->insert([
            'id_roles' => 3,
            'name' => 'Cliente-Administrador',
            'display_name' => 'Cliente-Administrador',
            'description' => 'El Cliente- Administradordel Sistema',
   
        ]);
        DB::table('roles')->insert([
            'id_roles' => 2,
            'name' => 'Administrador',
            'display_name' => 'Administrador',
            'description' => 'El Administrador del Sistema',
   
        ]);
       
        DB::table('usuarios_cli')->insert([
            'nombre' => 'usuario',
            'apellido' => 'Usuario',
            'cedula' => '12345678',
            'direccion' => 'Ibarra',
            'correo' => 'usuario@hotmail.com',
            'celular' => '0987654323',
            'telefono' => '234567',
            'estado' => 1,
            'password' => bcrypt('12345678'),
        ]);

        DB::table('role_user')->insert([
            'id_usuariorol' => 1,
            'id_usuario' => 5,
            'id_roles' => 3,
   
        ]);
        DB::table('role_user')->insert([
            'id_usuariorol' => 2,
            'id_usuario' => 1,
            'id_roles' => 2,
   
        ]);
    }
}
