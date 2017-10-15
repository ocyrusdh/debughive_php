<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResumesSkillsItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resumes_skills_items', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('resumes_skills_id')->index('resume_skills_id');
			$table->string('label', 24);
			$table->integer('score');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resumes_skills_items');
	}

}
