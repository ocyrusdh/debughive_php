<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumesReferences extends Model
{
	protected $table = 'resumes_references';

	public function resume()
	{
		return $this->belongsTo('Resumes');
	}
}
