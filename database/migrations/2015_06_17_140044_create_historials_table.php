<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historials', function(Blueprint $table)
		{
			$table->increments('id_historial');

			$table->string('usuario',45);
			$table->string('anterior',30);
			$table->string('nuevo',30);
			$table->string('campo',30);
			$table->string('tabla',40);
			

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
		Schema::drop('historials');
	}

}
