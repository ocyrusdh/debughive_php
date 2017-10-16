<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumesSkillsItems extends Model
{
	protected $table = 'resumes_skills_items';

	public function skill()
	{
		return $this->belongsTo('ResumesSkills');
	}
}
