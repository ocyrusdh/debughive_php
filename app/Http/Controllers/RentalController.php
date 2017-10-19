<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\User;

class RentalController extends Controller
{
	public function index($renter_id) {
		$owner = User::find('1');
		$renter = User::find($renter_id);
		return view('rental', array('owner' => $owner, 'renter' => $renter));
	}
}
