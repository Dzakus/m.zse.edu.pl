<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZalacznikiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zalaczniki', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nazwa', 150);
			$table->string('nazwa_pliku', 150);
			$table->boolean('ghost');
			$table->integer('dodal');
			$table->datetime('data');
			$table->string('nazwa_org', 150);
			$table->integer('id_news');
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
		Schema::drop('zalaczniki');
	}

}
