<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToResumesExperiencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('resumes_experiences', function(Blueprint $table)
		{
			$table->foreign('resumes_id', 'resumes_experiences_ibfk_1')->references('id')->on('resumes')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('resumes_references_id', 'resumes_experiences_ibfk_2')->references('id')->on('resumes_references')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('resumes_experiences', function(Blueprint $table)
		{
			$table->dropForeign('resumes_experiences_ibfk_1');
			$table->dropForeign('resumes_experiences_ibfk_2');
		});
	}

}
