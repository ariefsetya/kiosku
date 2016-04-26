<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('barangs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_kategori');
			$table->integer('id_kios');
			$table->string('nama');
			$table->string('deskripsi');
			$table->integer('berat');
			$table->integer('kondisi');
			$table->integer('lihat');
			$table->integer('minimal');
			$table->decimal('harga_beli');
			$table->decimal('harga_jual');
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
		Schema::drop('barangs');
	}

}
