<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('newsy', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_kategorii');
			$table->string('tytul', 100);
			$table->string('autor', 100);
			$table->datetime('data');
			$table->integer('czytano');
			$table->boolean('ghost');
			$table->integer('id_tresci');
			$table->string('miniaturka', 300);
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
		Schema::drop('newsy');
	}

}
