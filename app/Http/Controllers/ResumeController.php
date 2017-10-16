<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\User;

class ResumeController extends Controller
{
    public function index() {
		$user = User::find(1);
		return view('resume/resume', array('user' => $user));
	}
}
