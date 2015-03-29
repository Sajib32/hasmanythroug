<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenreMovieTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('genre_movie', function($table){
			$table->increments('id')->unsigned();
			$table->integer('genre_id')->unsigned();
			$table->integer('movie_id')->unsigned();
			$table->timestamps();

			$table->index('genre_id');
			$table->index('movie_id');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('genre_movie');
	}

}
