<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiskusisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diskusis', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('jenis');
			$table->integer('kode');
			$table->integer('penulis');
			$table->text('isi');
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
		Schema::drop('diskusis');
	}

}
