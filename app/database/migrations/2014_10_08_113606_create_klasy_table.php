<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKlasyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('klasy', function(Blueprint $table) {
			$table->increments('id');
			$table->string('klasa', 10);
			$table->datetime('data');
			$table->boolean('ghost');
			$table->string('plik', 130);
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
		Schema::drop('klasy');
	}

}
