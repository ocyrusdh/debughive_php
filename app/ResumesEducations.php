<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumesEducations extends Model
{
	protected $table = 'resumes_educations';

	public function resume()
	{
		return $this->belongsTo('Resumes');
	}
}
