<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToResumesSkillsItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('resumes_skills_items', function(Blueprint $table)
		{
			$table->foreign('resumes_skills_id', 'resumes_skills_items_ibfk_1')->references('id')->on('resumes_skills')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('resumes_skills_items', function(Blueprint $table)
		{
			$table->dropForeign('resumes_skills_items_ibfk_1');
		});
	}

}
