<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resumes extends Model
{
	protected $table = 'resumes';

	public function user()
	{
		return $this->belongsTo('Users');
	}

	public function education()
	{
		return $this->hasMany(ResumesEducations::class);
	}

	public function experience()
	{
		return $this->hasMany(ResumesExperiences::class);
	}

	public function hobbies()
	{
		return $this->hasMany(ResumesHobbies::class);
	}

	public function references()
	{
		return $this->hasMany(ResumesReferences::class);
	}

	public function skills()
	{
		return $this->hasMany(ResumesSkills::class);
	}
}

