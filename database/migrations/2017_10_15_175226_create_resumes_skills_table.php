<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResumesSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resumes_skills', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('resumes_id')->index('resume_id');
			$table->string('skill', 24);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resumes_skills');
	}

}
