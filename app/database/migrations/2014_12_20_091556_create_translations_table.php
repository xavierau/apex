<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTranslationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('translation_variables', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('key');
			$table->timestamps();
		});

		Schema::create('translation_contents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('content');
			$table->string('lang_id');
			$table->string('translation_id');
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
		Schema::drop('translation_variables');
		Schema::drop('translation_contents');
	}

}
