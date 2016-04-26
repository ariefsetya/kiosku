<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('petas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('jenis');
			$table->integer('kode');
			$table->string('maps_long');
			$table->string('maps_lat');
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
		Schema::drop('petas');
	}

}
