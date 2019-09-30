<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLabelemailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('labelemail', function(Blueprint $table)
		{
			$table->integer('projectid')->index('projectid');
			$table->integer('userid')->index('userid');
			$table->bigInteger('labelid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('labelemail');
	}

}