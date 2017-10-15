<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToResumesEducationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('resumes_educations', function(Blueprint $table)
		{
			$table->foreign('resumes_id', 'resumes_educations_ibfk_1')->references('id')->on('resumes')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('resumes_educations', function(Blueprint $table)
		{
			$table->dropForeign('resumes_educations_ibfk_1');
		});
	}

}
