<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('title');
			$table->text('content');
			$table->integer('order');
			$table->float('view');
			$table->char('state');
			$table->integer('category_id')->unsigned() ;
			$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
			$table->integer('editions_id')->unsigned() ;
			$table->foreign('editions_id')->references('id')->on('editions')->onDelete('cascade');
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
		Schema::drop('notes');
	}

}
