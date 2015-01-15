<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts_meta', function($table) {
			$table->increments('id');

			$table->string('key'); 
			$table->longtext('value'); 

			$table->integer('post_id')->unsigned(); 
			$table->foreign('post_id')->references('id')->on('posts'); 

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
		Schema::drop('posts_meta'); 
	}

}
