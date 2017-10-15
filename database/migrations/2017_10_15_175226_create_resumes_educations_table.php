<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResumesEducationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resumes_educations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('resumes_id')->index('resume_id');
			$table->string('certificate', 128);
			$table->string('school', 128);
			$table->string('state', 16);
			$table->integer('year');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resumes_educations');
	}

}
