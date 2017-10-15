<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToResumesExperiencesListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('resumes_experiences_lists', function(Blueprint $table)
		{
			$table->foreign('resumes_experiences_id', 'resumes_experiences_lists_ibfk_1')->references('id')->on('resumes_experiences')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('resumes_experiences_lists', function(Blueprint $table)
		{
			$table->dropForeign('resumes_experiences_lists_ibfk_1');
		});
	}

}
