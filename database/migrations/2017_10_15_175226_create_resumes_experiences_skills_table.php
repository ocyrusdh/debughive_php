<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResumesExperiencesSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resumes_experiences_skills', function(Blueprint $table)
		{
			$table->integer('resumes_experiences_id')->index('resume_experiences_id');
			$table->integer('resumes_skills_items_id')->index('resume_skills_items_id');
			$table->primary(['resumes_experiences_id','resumes_skills_items_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resumes_experiences_skills');
	}

}
