<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
			$table->increments('id');
			$table->string('motel');
			$table->string('nit');
			$table->string('direccion');
			$table->string('email')->unique();
			$table->string('usuario');
			$table->integer('type_user');
			$table->string('password', 60);
			$table->rememberToken();
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
