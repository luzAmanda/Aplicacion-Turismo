<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCombosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('combos', function(Blueprint $table)
		{
			$table->bigIncrements('id_combo');
			$table->string('nombre', 100);
			$table->text('descripcion')->nullable();
			$table->text('foto')->nullable();
			$table->float('precio', 10, 0);
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
		Schema::drop('combos');
	}

}
