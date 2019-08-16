<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigIncrements('id_usuario');
			$table->string('cedula', 13);
			$table->string('nombre', 100);
			$table->string('apellido', 100);
			$table->text('direccion');
			$table->string('telefono', 10)->nullable();
			$table->string('celular', 10);
			$table->string('correo', 50)->unique();
			$table->string('password', 50);
			$table->integer('estado')->default(0);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
