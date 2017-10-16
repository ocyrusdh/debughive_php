<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumesExperiencesLists extends Model
{
	protected $table = 'resumes_experiences_lists';

	public function experiences()
	{
		return $this->belongsTo('ResumesExperiences');
	}
}
