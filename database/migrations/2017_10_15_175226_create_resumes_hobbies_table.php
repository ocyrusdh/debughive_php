<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResumesHobbiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resumes_hobbies', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('resumes_id')->index('resume_id');
			$table->string('hobby', 48);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resumes_hobbies');
	}

}
