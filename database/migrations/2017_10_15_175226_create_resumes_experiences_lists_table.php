<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResumesExperiencesListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resumes_experiences_lists', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('resumes_experiences_id')->index('resume_experiences_id');
			$table->string('item', 128);
			$table->string('link', 128);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resumes_experiences_lists');
	}

}
