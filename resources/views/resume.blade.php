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
    <title>{{ $title }}</title>
    <style>
        html,
        body {
            font-family: "Calibri Light";
            font-size: 12pt;
            border: 0;
            padding: 0;
            margin: 0;
        }
        img.logo {
            height: 120px;
            float: right;
            margin: 5px 20px -56px 0;
        }
        div.column_1 {
            margin: 10px 20px;
            float: left;
        }
        div.column_2 {
            clear: right;
            border-left: solid 1px #000;
            padding: 0 20px 0 40px;
            margin: 0 0 0 236px;
        }
        div.column_1 > div,
        div.column_2 > div {
            padding: 20px 0;
            text-align: justify;
            text-justify: auto;
        }
        h1 {
            font-size: 24pt;
            margin: 0;
        }
        h2 {
            font-size: 18pt;
            margin: 0;
            color: steelblue;
        }
        h3 {
            font-size: 14pt;
            margin: 0 0 5px;
            border-bottom: solid 1px #CCC;
        }
        h4 {
            font-size: 12pt;
            margin: 0;
        }
        p,
        ul {
            font-family: "Calibri Light";
            font-size: 10pt;
        }
        .right {
            float: right;
        }
        div.rating {
            margin: 0 0 5px;
        }
        div.rating div {
            border-radius: 50%;
            border: solid 1px steelblue;
            width: 20px;
            height: 20px;
            display: inline-block;
            margin-right: 10px;
            box-sizing: border-box;
        }
        div.rating.score_1 div:nth-child(1),
        div.rating.score_2 div:nth-child(-N+2),
        div.rating.score_3 div:nth-child(-N+3),
        div.rating.score_4 div:nth-child(-N+4),
        div.rating.score_5 div {
            border: solid 10px steelblue;
        }
        a {
            color: steelblue;
            text-decoration: none;
        }
        a:visited {
            color: steelblue;
        }
        div.sub_section {
            margin: 20px 0 0 0;
        }
        div.reference a {
            display: block;
        }
        #print {
            background-color: steelblue;
            color: #FFF;
            border: 0;
            border-radius: 0 0 10px 10px;
            width: 100px;
            padding: 20px 0 5px;
            text-align: center;
            margin-left: -50px;
            position: fixed;
            top: -10px;
            left: 50%;
            z-index: 100;
            font-size: 16pt;
            cursor: pointer;
            box-shadow: rgba(0,0,0,.5) 0px 10px 10px;
            transition: top .7s ease-in-out;
        }
        #print:focus {
            outline: none;
            top: -70px;
        }
        @media print {
            #print {
                display: none;
            }
            div.column_2 {
                width: 800px;
            }
            div.pagebreak {
                page-break-before: always;
            }
            a {
                color: #000;
            }
            a:visited {
                color: #000;
            }
        }
    </style>
</head>
<body>
    <button id="print" onclick="window.print()">Print Me</button>
    <img src="http://debughive.com/public/images/debug.png" alt="logo" class="logo"/>
    <div class="column_1">
        <h1>{{ $name }}</h1>
        <h4>{{ $job_title }}</h4>
        <div>
            <h2>Contact Info</h2>
            <div class="sub_section">
                <h3>Phone</h3>
                <a href="callto:{{ $phone }}">{{ format_phone($phone) }}</a>
            </div>
            <div class="sub_section">
                <h3>Address</h3>
                <a href="https://maps.google.com/?q={{ urlencode($address_1 . ', ' . $city . ', ' . $state . ', ' . $zip) }}" target="_blank">
                    {{ $address_1 }}<br />
                    {{ $city . ', ' . $state . ' ' . $zip }}
                </a>
            </div>
            <div class="sub_section">
                <h3>Email</h3>
                <a href="mailto:{{ $email }}">{{ $email }}</a>
            </div>
        </div>
        <div>
            <h2>Skills</h2>
            @foreach($skills as $label => $list)
                <div class="sub_section">
                    <h3>{{ ucwords($label) }}</h3>
                    @foreach($list as $skill)
                        {{ $skill['label'] }}
                        <div class="rating score_{{ $skill['score'] }}">
                        @for ($i = 0; $i < 5; $i++)
                            <div></div>
                        @endfor
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
    <div class="column_2">
        <div>
            <h2>Professional Summary</h2>
            <br />
            <span>{{ $summary }}</span>
        </div>
        <div>
            <h2>Relevant Experience</h2>
            @foreach($experiences AS $xp)
                <div class="sub_section">
                    <h3>
                        @if($xp['link'])
                            <a href="$xp[link]">{{ $xp['company'] }}</a>
                        @else
                            {{ $xp['company'] }}
                        @endif
                        <span class="right">{{ $xp['start'] }} - {{ $xp['end'] }}<span>
                    </h3>
                    {{ $xp['title'] }}<br />
                    {{ implode(' - ', $xp['skills']) }}
                    <p>{{ $xp['description'] }}</p>
                    @if ($xp['list'])
                        <ul>
                        @foreach ($xp['list'] as $li)
                            <li>
                                @if($li['link'])
                                    <a href="{{ $li['link'] }}">{{ $li['item'] }}</a>
                                @else
                                    {{ $li['item'] }}
                                @endif
                            </li>
                        @endforeach
                        </ul>
                    @endif
                    @if ($xp['contact'])
                        <p>
                            For proof of employment:<br />
                            {{ $xp['contact']['name'] }}<br />
                            {{ $xp['contact']['title'] }}<br />
                            <a href="callto:{{ $xp['contact']['phone'] }}">{{ format_phone($xp['contact']['phone']) }}</a>
                        </p>
                    @endif
                </div>
            @endforeach
        </div>
        <div>
            <h2>Education</h2>
            @foreach($education AS $ed)
                <div class="sub_section">
                    <h3>
                        {{ $ed['certificate'] }}
                        <span class="right">{{ $ed['year'] }}</span>
                    </h3>
                    <span>{{ $ed['school'] }}</span><br />
                    <span>{{ $ed['state'] }}</span>
                </div>
            @endforeach
        </div>
        <div>
            <h2>Hobbies</h2>
            <br />
            {{ implode(' - ', $hobbies) }}
        </div>
        <div>
            <h2>Professional References</h2>
            @foreach($references AS $ref)
                <div class="sub_section reference">
                    <h4>{{ $ref['name'] }}</h4>
                    <div>{{ $ref['title'] }}</div>
                    <div>{{ $ref['company'] }}</div>
                    <a href="callto:{{ $ref['phone'] }}">{{ format_phone($ref['phone']) }}</a>
                    <a href="mailto:{{ $ref['email'] }}">{{ $ref['email'] }}</a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>