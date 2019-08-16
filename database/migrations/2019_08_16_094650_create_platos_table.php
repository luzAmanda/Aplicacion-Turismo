<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('platos', function(Blueprint $table)
		{
			$table->bigIncrements('id_plato');
			$table->string('nombre', 100);
			$table->text('descripcion')->nullable();
			$table->float('precio', 10, 0)->nullable();
			$table->text('foto');
			$table->text('tipo_foto')->nullable();
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
		Schema::drop('platos');
	}

}
