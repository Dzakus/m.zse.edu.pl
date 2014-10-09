<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZastepstwaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zastepstwa', function(Blueprint $table) {
			$table->increments('id');
			$table->string('plik', 130);
			$table->datetime('data');
			$table->boolean('ghost');
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
		Schema::drop('zastepstwa');
	}

}
