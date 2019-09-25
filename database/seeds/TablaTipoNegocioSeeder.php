<?php


use Illuminate\Database\Seeder;

class TablaTipoNegocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_negocio')->insert([
            
            'id_sector'=>1,
            'nombre' => 'Restaurantes',
            'icono' => 'fa fa-cutlery', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>1,
           
            'nombre' => 'Heladerías',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
           
            'id_sector'=>1,
            'nombre' => 'Panaderías',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
           
            'id_sector'=>1,
            'nombre' => 'Pastelerías',
            'icono' => 'fa fa-building', 

        ]);
        DB::table('tipo_negocio')->insert([
            
            'id_sector'=>1,
            'nombre' => 'Dulcerías',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            
            'id_sector'=>1,
            'nombre' => 'cafeterías',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
           
            'id_sector'=>1,
            'nombre' => 'Comida rápida',
            'icono' => 'fa fa-building', 
        ]);DB::table('tipo_negocio')->insert([
           
            'id_sector'=>1,
            'nombre' => 'Comida tradicional',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
          
            'id_sector'=>1,
            'nombre' => 'Supermercados',
            'icono' => 'fa fa-building', 
        ]);DB::table('tipo_negocio')->insert([
            
            'id_sector'=>1,
            'nombre' => 'Plazas de comida',
            'icono' => 'fa fa-building', 
        ]);
   
        ///////////////////////
        DB::table('tipo_negocio')->insert([
          
            'id_sector'=>2,            
            'nombre' => 'Hoteles',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
         
            'id_sector'=>2, 
            'nombre' => 'Hoteles boutique',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
          
            'id_sector'=>2, 
            'nombre' => 'Apart-Hoeles',
            'icono' => 'fa fa-building', 
        ]);
 
        DB::table('tipo_negocio')->insert([
            'id_sector'=>2, 
         
            'nombre' => 'Resorts',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>2, 
            'nombre' => 'B&B',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>2, 
            'nombre' => 'Business Hotel',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>2, 
            'nombre' => 'Hostales',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>2, 
            'nombre' => 'Haciendas',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>2, 
            'nombre' => 'Lodges',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>2, 
            'nombre' => 'Pensiones',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>2, 
            'nombre' => 'Moteles',
            'icono' => 'fa fa-building', 
        ]);


        //////////////////////////////
        DB::table('tipo_negocio')->insert([
            'id_sector'=>3, 
            'nombre' => 'Industrias textiles y de confecciones',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>3, 
            'nombre' => 'Boutiques',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>3, 
            'nombre' => 'Zapaterías',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>3, 
            'nombre' => 'Bisuterías',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>3, 
            'nombre' => 'Costurerías',
            'icono' => 'fa fa-building', 
        ]);
////////////////////////////////////////////

        DB::table('tipo_negocio')->insert([
            'id_sector'=>4, 
            'nombre' => 'Hospitales',
            'icono' => 'fa fa-building', 
        ]); 
        DB::table('tipo_negocio')->insert([
            'id_sector'=>4, 
            'nombre' => 'Farmacias',
            'icono' => 'fa fa-building', 
        ]); 
        DB::table('tipo_negocio')->insert([
            'id_sector'=>4, 
            'nombre' => 'Consultorios de atención médicos',
            'icono' => 'fa fa-building', 
        ]); 
        DB::table('tipo_negocio')->insert([
            'id_sector'=>4, 
            'nombre' => 'Odontologías',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>4, 
            'nombre' => 'Locales de spa',
            'icono' => 'fa fa-building', 
        ]);  
        DB::table('tipo_negocio')->insert([
            'id_sector'=>4, 
            'nombre' => 'Salones de belleza',
            'icono' => 'fa fa-building', 
        ]);  


        /////////////////////////////////////////
        DB::table('tipo_negocio')->insert([
            'id_sector'=>5, 
            'nombre' => 'Pastelerías',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>5, 
            'nombre' => 'Librerías',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>5, 
            'nombre' => 'Imprentas',
            'icono' => 'fa fa-building', 
        ]);
        ///////////////////////////////
        DB::table('tipo_negocio')->insert([
            'id_sector'=>6, 
            'nombre' => 'Electrodom´´esticos',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>6, 
            'nombre' => 'Tiendas de celulares',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>6, 
            'nombre' => 'Tiendas de videojuegos',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>6, 
            'nombre' => 'Mantenimiento informático y elecrónico',
            'icono' => 'fa fa-building', 
        ]);
//////////////////////////////////////////
        DB::table('tipo_negocio')->insert([
            'id_sector'=>7, 
            'nombre' => 'Tiendas de muebles',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>7, 
            'nombre' => 'Tiendas de enseres',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>7, 
            'nombre' => 'Tiendas de plásticos',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>7, 
            'nombre' => 'Iluminarias',
            'icono' => 'fa fa-building', 
        ]);
        ///////////////////////////////////
        DB::table('tipo_negocio')->insert([
            'id_sector'=>8, 
            'nombre' => 'Artesanías',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>8, 
            'nombre' => 'Regalos y antigüedades',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>8, 
            'nombre' => 'Tiendas de artes',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>8, 
            'nombre' => 'Tiendas de variedades',
            'icono' => 'fa fa-building', 
        ]);
        ////////////////////////////////////
        DB::table('tipo_negocio')->insert([
            'id_sector'=>9, 
            'nombre' => 'Tiendas de tlapalerias',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>9, 
            'nombre' => 'Tiendas de vidrios',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>9, 
            'nombre' => 'Carpinterías',
            'icono' => 'fa fa-building', 
        ]);
        //////////////////////////////////
        DB::table('tipo_negocio')->insert([
            'id_sector'=>10, 
            'nombre' => 'Tiendas de venta de vehículos',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>10, 
            'nombre' => 'Tiendas de refaccciones',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>10, 
            'nombre' => 'Locales de lavado',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>10, 
            'nombre' => 'Tiendas de combustibles y lubricantes',
            'icono' => 'fa fa-building', 
        ]);
        //////////////////////////////
        DB::table('tipo_negocio')->insert([
            'id_sector'=>11, 
            'nombre' => 'Bancos',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>11, 
            'nombre' => 'Cooperativas de ahorro y crédito',
            'icono' => 'fa fa-building', 
        ]);
        
        DB::table('tipo_negocio')->insert([
            'id_sector'=>11, 
            'nombre' => 'Agencias de viajes',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>11, 
            'nombre' => 'Servicios legales y tributarios',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>11, 
            'nombre' => 'Asesorías',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>11, 
            'nombre' => 'Bienes raíces',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>11, 
            'nombre' => 'Servicios de seguridad',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>11, 
            'nombre' => 'Centros de cambio de dinero',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>11, 
            'nombre' => 'Vivero',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>11, 
            'nombre' => 'Decoración y animación de eventos',
            'icono' => 'fa fa-building', 
        ]);
        ///////////////////////////////
        DB::table('tipo_negocio')->insert([
            'id_sector'=>12, 
            'nombre' => 'Parques',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>12, 
            'nombre' => 'Bares',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>12, 
            'nombre' => 'Discotecas',
            'icono' => 'fa fa-building', 
        ]);
        
        DB::table('tipo_negocio')->insert([
            'id_sector'=>12, 
            'nombre' => 'Karaokes',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>12, 
            'nombre' => 'Canchas Sintéticas',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>12, 
            'nombre' => 'Balnearios',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>12, 
            'nombre' => 'Centros de interpretación',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>12, 
            'nombre' => 'Centros culturales',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>12, 
            'nombre' => 'Gimnasios',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>12, 
            'nombre' => 'Salones de videojuegos',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>12, 
            'nombre' => 'Centros de computo',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>12, 
            'nombre' => 'Centros comerciales',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>12, 
            'nombre' => 'Cines',
            'icono' => 'fa fa-building', 
        ]);
        ///////////////////////////////////
        DB::table('tipo_negocio')->insert([
            'id_sector'=>13, 
            'nombre' => 'Instituciones de seguridad',
            'icono' => 'thermometer', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>13, 
            'nombre' => 'Instituciones de atención al ciudadano',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>13, 
           
            'nombre' => 'Instituciones ministeriales',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>13, 
           
            'nombre' => 'Direcciones distritales',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>13, 
            'nombre' => 'Agencias zonales',
            'icono' => 'fa fa-building', 
        ]);
///////////////////////////////////////////
        DB::table('tipo_negocio')->insert([
            'id_sector'=>14, 
            'nombre' => 'Guarderías',
            'icono' => 'fa fa-building', 
        ]); 
        DB::table('tipo_negocio')->insert([
            'id_sector'=>14, 
            'nombre' => 'Escuelas',
            'icono' => 'fa fa-building', 
        ]); 
        DB::table('tipo_negocio')->insert([
            'id_sector'=>14, 
            'nombre' => 'Colegios',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'id_sector'=>14, 
            'nombre' => 'Universidades',
            'icono' => 'fa fa-building', 
        ]); 
        DB::table('tipo_negocio')->insert([
            'id_sector'=>14, 
            'nombre' => 'Centros de investigación',
            'icono' => 'fa fa-building', 
        ]);  
        DB::table('tipo_negocio')->insert([
            'id_sector'=>14, 
            'nombre' => 'Observatorios',
            'icono' => 'fa fa-building', 
        ]); 
        DB::table('tipo_negocio')->insert([
            'id_sector'=>14, 
            'nombre' => 'Bibliotecas',
            'icono' => 'fa fa-building', 
        ]);   
/////////////////////////////////////////////////
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Cosméticos',
            'icono' => 'basket', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Electrónica',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Tintorería',
            'icono' => 'fa fa-building', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Ropa',
            'icono' => 'shirt', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Lavadero de autos',
            'icono' => 'fa fa-building', 
        ]);


    }
}
