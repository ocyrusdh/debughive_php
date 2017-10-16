<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumesHobbies extends Model
{
	protected $table = 'resumes_hobbies';

	public function resume()
	{
		return $this->belongsTo('Resumes');
	}
}
