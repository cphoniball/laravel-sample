k<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table) {
			$table->increments('id'); 

			$table->integer('author_id')->unsigned(); 
			$table->foreign('author_id')->references('id')->on('users'); 

			$table->longtext('content'); 
			$table->text('title'); 
			$table->string('status'); 
			$table->dateTime('published'); 

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
		Schema::drop('posts'); 
	}

}
