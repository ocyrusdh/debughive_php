<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
	return view('welcome');
});*/

function get_resume_data($user_ID) {
	$resume = DB::table('users')
				->leftjoin('resume', 'resume.users_id', '=', 'users.id')
				->select('users.*', 'resume.id AS resume_id', 'resume.summary')
				->where('users.id', '=', $user_ID)
				->limit(1)
				->get();
	$resume = $resume->toArray()[0];
	//dd($resume->id);
	$resume->skills = DB::table('resume_skills')
						->where('resume_id', '=', $resume->resume_id)
						->get()
						->toArray();
	foreach ($resume->skills AS $key => $skill) {
		$resume->skills[$key]->items = DB::table('resume_skills_items')
										->where('resume_skills_id', '=', $skill->id)
										->get()->toArray();
	}
	//dd($resume);
	return $resume;
	/*					->leftjoin('resume_skills_items rsi', 'rsi.resume_skills_id', '=', 'rs.id')*/

			/*DB::raw('count(case when subscribers.status = "Active" then 1 else null end) as count_active'),
			DB::raw('count(case when subscribers.status = "Unsubsribed" then 1 else null end) as count_unsubsribers'),
			DB::raw('count(case when subscribers.status = "Bounced" then 1 else null end) as count_bounced'),
			DB::raw('count(subscribers_lists_subscribers.subscribers_list_id) as count_total'),
			'subscribers_lists.updated_at as last_activity'*/


	return [		'name' 		=> 'Damian Hyde',
              	'title' 		=> 'Damian Hyde Resume',
              	'job_title' 	=> 'Web Application Developer',
              	'phone' 		=> '9545994292',
				'email'		=> 'ocyrus.dh@gmail.com',
				'address_1' 	=> '6 Devon Ct.',
				'address_2' 	=> '',
				'city' 		=> 'Nanuet',
				'state' 		=> 'NY',
				'zip' 		=> '10954',
              	'skills' => ['coding' => [	['label' => 'HTML', 'score' => 4],
											['label' => 'Pug', 'score' => 4],
											['label' => 'CSS', 'score' => 4],
											['label' => 'SASS', 'score' => 3],
											['label' => 'Javascript', 'score' => 4],
											['label' => 'PHP', 'score' => 4],
											['label' => 'MySQL', 'score' => 4],
											['label' => 'Regex', 'score' => 3],
											['label' => 'C/C++', 'score' => 1]],
				  			'frameworks' => [['label' => 'Jquery', 'score' => 4],
											['label' => 'Vue.js', 'score' => 1],
											['label' => 'Laravel', 'score' => 2],
											['label' => 'Express', 'score' => 3]],
				  			'environments' => [	['label' => 'LAMP', 'score' => 3],
												['label' => 'Nodejs', 'score' => 2],
												['label' => 'Git/GitHub', 'score' => 3],
												['label' => 'AWS', 'score' => 2]],
				  			'software' => [	['label' => 'PHPStorm', 'score' => 3],
											['label' => 'Sublime', 'score' => 3],
											['label' => 'Dreamweaver', 'score' => 3],
											['label' => 'Photoshop', 'score' => 4],
											['label' => 'After Effets', 'score' => 3],
											['label' => '3D Max', 'score' => 3]]],
				'summary' => "Web Application Developer with over 6 years experience working with\n" .
							"raw code as well incorporation of frameworks and APIs.  I am\n" .
							"attracted to challenges and love to prove the impossible possible.\n" .
							"I also have a lot of experience working with other developers and\n" .
							"trouble shooting foreign code. I believe test driven development\n" .
							"and extreme programming methodologies is important to create better\n" .
							"code and better developers.",
			 	'experiences' => [[	'company' 		=> 'Retrieval Masters Credit Bureau',
				 					'link' 			=> 'http://retrievalmasters.com/',
				 					'start' 			=> 'Jan 2017',
				 					'end' 			=> 'Sep 2017',
				 					'title' 			=> 'Sr Developer',
									'skills'			=> ['HTML', 'CSS', 'Javascript', 'AJAX', 'PHP', 'MySQL'],
				 					'description' 	=> "Developed a web based application that help the company manage\n" .
													 "data between multiple clients and other web services. Architect\n" .
													 "large data bases, Built payment systems and dialing programs.\n" .
													 "Created data parsing services for importing data from various\n" .
													 "clients. Performed regular software maintenance and\n" .
													 "optimizations.  Worked alongside debt collection data analysts\n" .
													 "to create informative SQL queries. Utilized Twilio API to\n" .
													 "replace a call center's phone system, payment IVR, and auto\n" .
													 "dialer.  Oversaw entire LAMP stack across multiple production\n" .
													 "servers.  Implemented client sync processes with PHP/Laravel.\n" .
													 "Allowed users to manage accounts with dynamic Javascript/Vue.js\n" .
													 "frontend.",
					 				'list' 			=> [],
					 				'contact' 		=> ['name' => 'Jeff Wolloman',
														'title' 			=> 'CFO',
														'phone' 			=> '9147722298']],
				 				[	'company' 		=> 'Revintu',
									'link' 			=> 'http://revintu.com/',
									'start' 			=> 'May 2012',
									'end' 			=> 'Jan 2017',
									'title' 			=> 'Web Application Developer',
									'skills' 		=> ['HTML', 'CSS', 'Javascript', 'AJAX', 'PHP', 'MySQL'],
					 				'description' 	=> "Designed applications for clients that wanted to move their\n" .
													 "current infrastructure to the web. Created guest list\n" .
													 "management, table management, staff management, and inventory\n" .
													 "tracking software.  This also included custom reports and\n" .
													 "content management systems. File parsing and data manipulation.\n" .
													 "Provided updates and maintenance to their software maintenance\n" .
													 "and upgrades.  Integrated communication to SMS servers and other\n" .
													 "paging systems.  Worked also with 3rd party APIs to deliver\n" .
													 "custom software solutions that take advantage of existing\n" .
													 "applications. Created guest facing applications used for\n" .
													 "marketing and data gathering.  Software was designed to work in\n" .
													 "browsers, mobile devices and tablets or custom kiosks.\n\n" .
													 "Clients include but limited to:",
							 		'list' 			=> [	['item' => 'Retrieval Masters Credit Bureau', 'link' => 'http://retrievalmasters.com/'],
														['item' => 'HME', 'link' => 'http://www.hme.com/'],
														['item' => 'Jtech', 'link' => 'http://www.jtech.com/'],
														['item' => 'Ignite Restaurant Group', 'link' => 'http://www.igniterestaurants.com/'],
														['item' => 'Coyle Hospitality Group', 'link' => 'http://guestxt.com/'],
														['item' => 'Guestxt', 'link' => 'http://retrievalmasters.com/'],
														['item' => 'Host Concepts', 'link' => 'http://www.hostconcepts.com']],
					 				'contact' 		=> [	'name'  => 'Todd Fuchs',
														'title' => 'Owner',
														'phone' => '5167157166']],
								[	'company' 		=> 'Host Concepts',
									'link' 			=> 'http://www.hostconcepts.com',
									'start' 			=> 'Aug 2011',
									'end' 			=> 'May 2012',
									'title' 			=> 'Jr Developer',
									'skills' 		=> ['HTML', 'CSS', 'Javascript', 'AJAX', 'PHP', 'MySQL', 'Web Graphics'],
									'description' 	=> "Developed an application for restaurant to dynamically manage\n" .
													 "staff and tables.  Created a restaurant guest portal to be used\n" .
													 "for notification and feedback purposes.  Also created games in\n" .
													 "this area for entertaining.  Created tools for marketing to their\n" .
													 "guests.",
					 				'list' 			=> [],
					 				'contact' 		=> [	'name'  => 'Todd Fuchs',
														'title' => 'Owner',
														'phone' => '5167157166']],
				 				[	'company' 		=> 'Spiritcube',
									'link' 			=> 'http://spiritcube.com/',
									'start' 			=> 'Oct 2010',
									'end' 			=> 'June 2011',
									'title' 			=> 'UI Developer',
									'skills' 		=> ['HTML', 'CSS', 'Javascript', 'AJAX', 'Web Graphics'],
									'description' 	=> "Developed the client side users interface for spiritcube.com.\n" .
													 "Worked along side PHP developers to create a user driven digital\n" .
													 "memorial site.  Users were able to collaborate and create\n" .
													 "time line slide shows from shared media along with life stories.\n" .
													 "Created a custom WYSIWYG content management system that enabled\n" .
													 "users to completely customize their memorials or used pre-made\n" .
													 "templates.",
					 				'list' 			=> [],
					 				'contact'		=> ['name' 	=> 'Chris Nelson',
													 	'title' => 'Owner',
													 	'phone' => '3053606583']],
				 				[	'company' 		=> 'Freelance',
									'link' 			=> '',
									'start' 			=> '2005',
									'end' 			=> 'Oct 2010',
									'title' 			=> 'Sr Developer',
									'skills' 		=> ['HTML', 'CSS', 'Javascript', 'Web Graphics', '3D Graphics', 'Video Editing', 'After Effects'],
									'description' 	=> "Created websites and other digital media foro various clients",
									'list' 			=> [],
									'contact' 		=> []]],
				'education' => [[	'certificate' 	=> 'Web Design Certification',
									'school' 		=> 'SouthTech Academy',
									'state' 			=> 'Florida',
									'year' 			=> '2010'],
								[	'certificate' 	=> 'Bachelor of Science',
									'school' 		=> 'Art Institute of Fort Lauderdale',
									'state' 			=> 'Florida',
									'year' 			=> '2004']],
				'hobbies' => ['Tizen Apps', 'Arduino Programing', '3D Modeling', '3D Printing/Prototyping', 'Home Remodeling'],
				'references' => [[	'name' 		=> 'Bradley Baumann',
									'title' 		=> 'Lead Developer',
									'company' 	=> 'CFB Strategies',
									'phone' 		=> '9142638409',
									'email' 		=> ''],
								[	'name' 		=> 'James Lyon',
									'title' 		=> 'Software Engineer',
									'company' 	=> 'SoulCycle',
									'phone' 		=> '9089635298',
									'email' 		=> 'jameslyon42@gmail.com'],
								[	'name' 		=> 'Alberto Leon',
									'title' 		=> 'Front End Software Engineer',
									'company' 	=> 'Mirror Labs',
									'phone' 		=> '9142336014',
									'email' 		=> 'alberto.leon.jr@gmail.com'],
								[	'name' 		=> 'Dorcie Loviskie',
									'title' 		=> 'Developer',
									'company' 	=> '',
									'phone' 		=> '9142751356',
									'email' 		=> ''],
								[	'name' 		=> 'Todd Fuchs',
									'title' 		=> 'Owner',
									'company' 	=> 'Revintu & Hostconcepts',
									'phone' 		=> '5167157166',
									'email' 		=> ''],
								[	'name' 		=> 'Zak Raxter',
									'title' 		=> 'Director of IT & Security',
									'company' 	=> 'Retrieval Masters Credit Bureau',
									'phone' 		=> '5168469802',
									'email' 		=> 'zraxter@retrievalmasters.com'],
								[	'name' 		=> 'Anold Lugo',
									'title' 		=> 'Callcenter Director',
									'company' 	=> 'Retrieval Masters Credit Bureau',
									'phone' 		=> '3475736932',
									'email' 		=> 'alugo@retrievalmasters.com']]];
}

Route::get('/', function () {
	return view('debughive');
});

Route::get('resume', function () {
	$data = get_resume_data(1);
	return view('resume', $data);
});
