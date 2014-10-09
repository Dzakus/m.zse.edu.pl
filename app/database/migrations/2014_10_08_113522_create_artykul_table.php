<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArtykulTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artykul', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_kategorii');
			$table->string('tytul', 150);
			$table->integer('id_srodek');
			$table->integer('id_lewo');
			$table->boolean('ghost');
			$table->datetime('date');
			$table->boolean('first');
			$table->integer('pozycja');
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
		Schema::drop('artykul');
	}

}
