<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalificacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calificacion', function(Blueprint $table)
		{
			$table->bigIncrements('id_calificacion');
			$table->integer('id_sucursal')->nullable();
			$table->string('titulo_opinion', 500);
			$table->text('opinion');
			$table->integer('calificacion_general');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('calificacion');
	}

}
