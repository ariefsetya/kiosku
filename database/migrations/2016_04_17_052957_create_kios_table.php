<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_negara');
			$table->integer('id_provinsi');
			$table->integer('id_kota');
			$table->integer('id_user');
			$table->string('kode');
			$table->string('nama');
			$table->text('alamat');
			$table->string('pemilik');
			$table->string('maps_long');
			$table->string('maps_lat');
			$table->string('logo');
			$table->string('tipe');//online/real
			$table->integer('is_verified');
			$table->string('banner');
			$table->text('banner_text');
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
		Schema::drop('kios');
	}

}
