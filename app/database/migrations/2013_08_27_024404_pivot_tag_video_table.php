<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotTagVideoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tag_video', function(Blueprint $table) {
			$table->integer('tag_id')->unsigned()->index();
			$table->integer('video_id')->unsigned()->index();
			$table->primary(array('tag_id', 'video_id'));
			$table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
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
		Schema::drop('tag_video');
	}

}
