<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->text('content');
			$table->integer('author_id')->unsigned();
			$table->integer('reply_id')->unsigned()->nullable();
			$table->timestamps();
			$table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('reply_id')->references('id')->on('comments')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}

}
