<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResumesReferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resumes_references', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('resumes_id')->index('resume_id');
			$table->string('name', 64);
			$table->string('job_title', 36);
			$table->string('company', 36);
			$table->string('phone', 10);
			$table->string('email', 128);
			$table->boolean('active')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resumes_references');
	}

}
