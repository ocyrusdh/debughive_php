<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResumesExperiencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resumes_experiences', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('resumes_id')->index('resume_id');
			$table->string('company', 36);
			$table->string('link', 128);
			$table->string('start', 24);
			$table->string('end', 24);
			$table->string('job_title', 36);
			$table->text('description', 16777215);
			$table->integer('resumes_references_id')->nullable()->index('resume_references_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resumes_experiences');
	}

}
