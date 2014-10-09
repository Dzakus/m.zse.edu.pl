<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBazaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('baza', function(Blueprint $table) {
			$table->increments('id');
			$table->string('sala', 100);
			$table->boolean('ghost');
			$table->text('tresc');
			$table->string('pietro', 3);
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
		Schema::drop('baza');
	}

}
