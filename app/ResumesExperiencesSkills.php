<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumesExperiencesSkills extends Model
{
	protected $table = 'resumes_experiences_skills';

	public function experiences()
	{
		return $this->belongsTo('ResumesExperiences');
	}
}
