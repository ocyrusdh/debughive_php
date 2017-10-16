<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumesSkills extends Model
{
	protected $table = 'resumes_skills';

	public function resume()
	{
		return $this->belongsTo('Resumes');
	}

	public function items()
	{
		return $this->hasMany(ResumesSkillsItems::class);
	}
}
