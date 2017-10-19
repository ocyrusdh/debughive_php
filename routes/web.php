<?php

Route::get('/', function () {
	return view('debughive');
});

Route::get('resume', 'ResumeController@index');

Route::get('rental{renter_id}', 'RentalController@index');

