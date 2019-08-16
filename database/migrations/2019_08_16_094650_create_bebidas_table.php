<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBebidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bebidas', function(Blueprint $table)
		{
			$table->bigIncrements('id_bebida');
			$table->string('nombre', 100);
			$table->text('descripcion')->nullable();
			$table->text('foto');
			$table->text('tipo_foto')->nullable();
			$table->float('precio', 10, 0)->nullable();
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
		Schema::drop('bebidas');
	}

}
