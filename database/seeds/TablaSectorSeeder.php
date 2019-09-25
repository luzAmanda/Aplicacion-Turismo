<?php

use Illuminate\Database\Seeder;

class TablaSectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //restaurante
        DB::table('sectores')->insert([
        
            'nombre' => 'Alimentación y degustación ',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('sectores')->insert([
     
               'nombre' => 'Alojamiento',
               'icono' => 'fa fa-building', 
           ]);
          
           DB::table('sectores')->insert([
            
               'nombre' => 'Ropa y Calzado',
               'icono' => 'fa fa-building', 
           ]);
           DB::table('sectores')->insert([
           
               'nombre' => 'Cuidado de la salud e imagen',
               'icono' => 'fa fa-building', 
           ]);
           DB::table('sectores')->insert([
           
               'nombre' => 'Suministro de oficina',
               'icono' => 'fa fa-building', 
           ]);
           DB::table('sectores')->insert([
            
               'nombre' => 'Tecnología',
               'icono' => 'fa fa-building', 
           ]);
           DB::table('sectores')->insert([
           
               'nombre' => 'Decoración de interiores',
               'icono' => 'fa fa-building', 
           ]);
           DB::table('sectores')->insert([
           
               'nombre' => 'Regalos',
               'icono' => 'fa fa-building', 
           ]);
           DB::table('sectores')->insert([
            
               'nombre' => 'Bricolaje y construcción',
               'icono' => 'fa fa-building', 
           ]);
           DB::table('sectores')->insert([
          
               'nombre' => 'Vinculados a servicios autolovilísticos',
               'icono' => 'fa fa-building', 
           ]);
           DB::table('sectores')->insert([
           
               'nombre' => 'Servicios varios',
               'icono' => 'fa fa-building', 
           ]);
           DB::table('sectores')->insert([
           
               'nombre' => 'Ocio, diversión y recreación',
               'icono' => 'fa fa-building', 
           ]);
           DB::table('sectores')->insert([
           
               'nombre' => 'Entidades públicas',
               'icono' => 'fa fa-building', 
           ]);
           DB::table('sectores')->insert([
           
               'nombre' => 'Instituciones Eduativas',
               'icono' => 'fa fa-building', 
           ]);
           



    }
}
