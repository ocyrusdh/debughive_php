<?php
    /**
     * @param $phone
     * @return mixed
     */
    function format_phone($phone) {
    	    return preg_replace("/(\d{3})(\d{3})(\d{4})/", "($1) $2-$3", $phone);
    	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $user->name . ' Resume' }}</title>
    <link rel='stylesheet' href='/css/resume.css' />
</head>
<body>
    <button id="print" onclick="window.print()">Print Me</button>
    <img src="/images/debug.png" alt="logo" class="logo"/>
    <div class="column_1">
        <h1>{{ $user->name }}</h1>
        <h4>{{ $user->job_title }}</h4>
        <div>
            <h2>Contact Info</h2>
            <div class="sub_section">
                <h3>Phone</h3>
                <a href="callto:{{ $user->phone }}">{{ format_phone($user->phone) }}</a>
            </div>
            <div class="sub_section">
                <h3>Address</h3>
                <a href="https://maps.google.com/?q={{ urlencode($user->address_1 . ', ' . $user->city . ', ' . $user->state . ', ' . $user->zip) }}" target="_blank">
                    {{ $user->address_1 }}<br />
                    {{ $user->city . ', ' . $user->state . ' ' . $user->zip }}
                </a>
            </div>
            <div class="sub_section">
                <h3>Email</h3>
                <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
            </div>
        </div>
        <div>
            <h2>Skills</h2>
            @foreach($user->resume->skills as $skill)
                @include ('resume.resume_skills')
            @endforeach
        </div>
    </div>
    <div class="column_2">
        <div>
            <h2>Professional Summary</h2>
            <br />
            <span>{{ $user->resume->summary }}</span>
        </div>
        <div>
            <h2>Relevant Experience</h2>
            @foreach($user->resume->experience as $xp)
                @include ('resume.resume_experience')
            @endforeach
        </div>
        <div>
            <h2>Education</h2>
            @foreach($user->resume->education as $ed)
                @include ('resume.resume_education')
            @endforeach
        </div>
        <div>
            <h2>Hobbies</h2>
            <br />
            {{  implode(' - ', array_column($user->resume->hobbies->toArray(), 'hobby')) }}
        </div>
        <div>
            <h2>Professional References</h2>
            @foreach($user->resume->references as $ref)
                @include ('resume.resume_reference')
            @endforeach
        </div>
    </div>
</body>
</html>