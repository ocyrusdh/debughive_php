<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToResumesHobbiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('resumes_hobbies', function(Blueprint $table)
		{
			$table->foreign('resumes_id', 'resumes_hobbies_ibfk_1')->references('id')->on('resumes')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('resumes_hobbies', function(Blueprint $table)
		{
			$table->dropForeign('resumes_hobbies_ibfk_1');
		});
	}

}
