<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotCommentVideoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comment_video', function(Blueprint $table) {
			$table->integer('comment_id')->unsigned()->index();
			$table->integer('video_id')->unsigned()->index();
			$table->primary(array('comment_id', 'video_id'));
			$table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
			$table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comment_video');
	}

}
