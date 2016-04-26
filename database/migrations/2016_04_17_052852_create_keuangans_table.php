<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeuangansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('keuangans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_user');
			$table->integer('id_kios');
			$table->string('keterangan');
			$table->integer('masuk');
			$table->integer('keluar');
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
		Schema::drop('keuangans');
	}

}
