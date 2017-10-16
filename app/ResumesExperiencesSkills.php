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

	public function item()
	{
		return $this->hasOne(ResumesSkillsItems::class, 'id', 'resumes_skills_items_id');
	}
}
