<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bank_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_bank');
			$table->string('atasnama');
			$table->string('cabang');
			$table->string('no_rek');
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
		Schema::drop('bank_users');
	}

}
