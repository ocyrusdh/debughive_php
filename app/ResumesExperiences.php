<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumesExperiences extends Model
{
	protected $table = 'resumes_experiences';

	public function resume()
	{
		return $this->belongsTo('Resumes');
	}

	public function list()
	{
		return $this->hasMany(ResumesExperiencesLists::class);
	}

	public function skills()
	{
		return $this->hasMany(ResumesExperiencesSkills::class);
	}

	public function contact()
	{
		return $this->hasOne(ResumesReferences::class, 'id', 'resumes_references_id');
	}
}
