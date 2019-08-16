<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSucursalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sucursales', function(Blueprint $table)
		{
			$table->bigIncrements('id_sucursal');
			$table->integer('id_negocio')->nullable();
			$table->string('nombre', 100);
			$table->string('celular', 10);
			$table->string('telefono', 10)->nullable();
			$table->text('direccion');
			$table->float('longitud', 10, 0);
			$table->float('latitud', 10, 0);
			$table->integer('estado')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sucursales');
	}

}
