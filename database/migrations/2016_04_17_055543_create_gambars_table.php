<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGambarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gambars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('jenis');//gambar produk/foto/banner
			$table->integer('kode');
			$table->text('deskripsi');
			$table->integer('utama');
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
		Schema::drop('gambars');
	}

}
