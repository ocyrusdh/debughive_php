<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToResumesExperiencesSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('resumes_experiences_skills', function(Blueprint $table)
		{
			$table->foreign('resumes_experiences_id', 'resumes_experiences_skills_ibfk_1')->references('id')->on('resumes_experiences')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('resumes_skills_items_id', 'resumes_experiences_skills_ibfk_2')->references('id')->on('resumes_skills_items')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('resumes_experiences_skills', function(Blueprint $table)
		{
			$table->dropForeign('resumes_experiences_skills_ibfk_1');
			$table->dropForeign('resumes_experiences_skills_ibfk_2');
		});
	}

}
