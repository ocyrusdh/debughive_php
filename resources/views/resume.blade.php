<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Damian Hyde Resume</title>
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
        <h1>Damian Hyde</h1>
        <h4>Web Application Developer</h4>
        <div>
            <h2>Contact Info</h2>
            <div class="sub_section">
                <h3>Phone</h3>
                <a href="callto:9545994292">(954) 599-4292</a>
            </div>
            <div class="sub_section">
                <h3>Address</h3>
                <a href="https://maps.google.com/?q=6%20Devon%20Ct,%20Nanuet,%20NY%2010954" target="_blank">
                    6 Devon Ct<br />
                    Nanuet, NY 10954
                </a>
            </div>
            <div class="sub_section">
                <h3>Email</h3>
                <a href="mailto:ocyrus.dh@gmail.com">ocyrus.dh@gmail.com</a>
            </div>
        </div>
        <div>
            <h2>Skills</h2>
            <div class="sub_section">
                <h3>Coding Languages</h3>
                HTML > 7 years
                <div class="rating score_4"><div></div><div></div><div></div><div></div><div></div></div>
                CSS > 7 years
                <div class="rating score_4"><div></div><div></div><div></div><div></div><div></div></div>
                Javascript > 7 years
                <div class="rating score_4"><div></div><div></div><div></div><div></div><div></div></div>
                PHP > 6 years
                <div class="rating score_4"><div></div><div></div><div></div><div></div><div></div></div>
                MySQL > 6 years
                <div class="rating score_4"><div></div><div></div><div></div><div></div><div></div></div>
                Regex > 3 year
                <div class="rating score_3"><div></div><div></div><div></div><div></div><div></div></div>
                C/C++ < 1 year
                <div class="rating score_1"><div></div><div></div><div></div><div></div><div></div></div>
            </div>
            <div class="sub_section">
                <h3>Frameworks</h3>
                Jquery > 1 year
                <div class="rating score_3"><div></div><div></div><div></div><div></div><div></div></div>
                Laravel < 1 year
                <div class="rating score_2"><div></div><div></div><div></div><div></div><div></div></div>
                Sass < 1 year
                <div class="rating score_1"><div></div><div></div><div></div><div></div><div></div></div>
                Vue.js < 1 year
                <div class="rating score_1"><div></div><div></div><div></div><div></div><div></div></div>
                Express < 1 year
                <div class="rating score_1"><div></div><div></div><div></div><div></div><div></div></div>
            </div>
            <div class="sub_section">
                <h3>Environments</h3>
                LAMP > 6 year
                <div class="rating score_3"><div></div><div></div><div></div><div></div><div></div></div>
                Nodejs < 1 year
                <div class="rating score_2"><div></div><div></div><div></div><div></div><div></div></div>
                AWS < 1 year
                <div class="rating score_2"><div></div><div></div><div></div><div></div><div></div></div>
                Git < 1 year
                <div class="rating score_2"><div></div><div></div><div></div><div></div><div></div></div>
            </div>
            <div class="sub_section pagebreak">
                <h3>Software</h3>
                PHPStorm > 1 year
                <div class="rating score_3"><div></div><div></div><div></div><div></div><div></div></div>
                Sublime > 2 years
                <div class="rating score_3"><div></div><div></div><div></div><div></div><div></div></div>
                Dreamweaver > 4 years
                <div class="rating score_3"><div></div><div></div><div></div><div></div><div></div></div>
                Photoshop > 16 years
                <div class="rating score_4"><div></div><div></div><div></div><div></div><div></div></div>
                After Effets > 2 years
                <div class="rating score_3"><div></div><div></div><div></div><div></div><div></div></div>
                3D Max > 4 years
                <div class="rating score_3"><div></div><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
    </div>
    <div class="column_2">
        <div>
            <h2>Professional Summary</h2>
            <br />
            <span>
                Web Application Developer with over 6 years experience working with
                raw code as well incorporation of frameworks and APIs.  I am
                attracted to challenges and love to prove the impossible possible.
                I also have a lot of experience working with other developers and
                trouble shooting foreign code. I believe test driven development
                and extreme programming methodologies is important to create better
                code and better developers.
            </span>
        </div>
        <div>
            <h2>Relevant Experience</h2>
            <div class="sub_section">
                <h3><a href="http://retrievalmasters.com/">Retrieval Masters Credit Bureau</a><span class="right">Feb 2017 - Sep 2017</span></h3>
                Sr Developer<br />
                HTML - CSS - Javascript - AJAX - PHP - MySQL
                <p>
                    Developed a web based application that help the company manage
                    data between multiple clients and other web services. Architect
                    large data bases, Built payment systems and dialing programs.
                    Created data parsing services for importing data from various
                    clients. Performed regular software maintenance and
                    optimizations.  Worked alongside debt collection data analysts
                    to create informative SQL queries. Utilized Twilio API to
                    replace a call center's phone system, payment IVR, and auto
                    dialer.  Oversaw entire LAMP stack across multiple production
                    servers.  Implemented client sync processes with PHP/Laravel.
                    Allowed users to manage accounts with dynamic Javascript/Vue.js
                    frontend.
                </p>
                <p>
                    For proof of employment:<br />
                    Jeff Wolloman<br />
                    CFO<br />
                    <a href="callto:9147722298">(914) 772-2298</a>
                </p>
            </div>
            <div class="sub_section">
                <h3><a href="http://revintu.com/">Revintu</a><span class="right">May 2012 - Feb 2017<span></h3>
                Jr Developer - Sr Developer<br />
                HTML - CSS - Javascript - AJAX - Nodejs - PHP - MySQL
                <p>
                    Designed applications for clients that wanted to move their
                    current infrastructure to the web. Created guest list
                    management, table management, staff management, and inventory
                    tracking software.  This also included custom reports and
                    content management systems. File parsing and data manipulation.
                    Provided updates and maintenance to their software maintenance
                    and upgrades.  Integrated communication to SMS servers and other
                    paging systems.  Worked also with 3rd party APIs to deliver
                    custom software solutions that take advantage of existing
                    applications. Created guest facing applications used for
                    marketing and data gathering.  Software was designed to work in
                    browsers, mobile devices and tablets or custom kiosks.<br />
                    Clients include but limited to:
                </p>
                    <ul>
                        <li><a href="http://retrievalmasters.com/">Retrieval Masters Credit Bureau</a></li>
                        <li><a href="http://www.hme.com/">HME</a></li>
                        <li><a href="http://www.jtech.com/">Jtech</a></li>
                        <li><a href="http://www.igniterestaurants.com/">Ignite Restaurant Group</a></li>
                        <li><a href="https://www.coylehospitality.com/">Coyle Hospitality Group</a></li>
                        <li><a href="http://guestxt.com/">Guestxt</a></li>
                        <li><a href="http://www.hostconcepts.com">Host Concepts</a></li>
                    </ul>
                <p>
                    For proof of employment:<br />
                    Todd Fuchs<br />
                    Owner<br />
                    <a href="callto:5167157166">(516) 715-7166</a>
                </p>
            </div>
            <div class="sub_section">
                <h3><a href="http://www.hostconcepts.com">Host Concepts</a><span class="right">Aug 2011 - May 2012</span></h3>
                Jr Developer<br />
                HTML - CSS - Javascript - AJAX - PHP - MySQL - Web Graphics
                <p>
                    Developed an application for restaurant to dynamically manage
                    staff and tables.  Created a restaurant guest portal to be used
                    for notification and feedback purposes.  Also created games in
                    this area for entertaining.  Created tools for marketing to their
                    guests.
                </p>
                <p>
                    For proof of employment:<br />
                    Todd Fuchs<br />
                    Owner<br />
                    <a href="callto:5167157166">(516) 715-7166</a>
                </p>
            </div>
            <div class="sub_section">
                <h3><a href="http://spiritcube.com/" target="_blank">Spiritcube</a><span class="right">Oct 2010 - June 2011<span></h3>
                UI Developer<br />
                HTML - CSS - Javascript - Web Graphics
                <p>
                    Developed the client side users interface for spiritcube.com.
                    Worked along side PHP developers to create a user driven digital
                    memorial site.  Users were able to collaborate and create
                    time line slide shows from shared media along with life stories.
                    Created a custom WYSIWYG content management system that enabled
                    users to completely customize their memorials or used pre-made
                    templates.
                </p>
                <p>
                    For proof of employment:<br />
                    Chris Nelson<br />
                    <a href="callto:3053606583">(305) 360-6583</a>
                </p>
            </div>
            <div class="sub_section pagebreak">
                <h3>Freelance <span class="right">2005 - Oct 2010</span></h3>
                HTML - CSS - Javascript - Web Graphics - 3D Graphics - Video Editing - After Effects Presentations
            </div>
        </div>
        <div>
            <h2>Education</h2>
            <div class="sub_section">
                <h3>Web Design Certification <span class="right">2010</span></h3>
                <span>SouthTech Academy</span>
            </div>
            <div class="sub_section">
                <h3>Bachelor of Science <span class="right">2004</span></h3>
                <span>Art Institute of Fort Lauderdale</span>
            </div>
        </div>
        <div>
            <h2>Hobbies</h2>
            <br />
            Tizen Apps - Arduino Programing - 3D Modeling - 3D Printing/Prototyping - Home Remodeling
        </div>
        <div>
            <h2>Professional References</h2>
            <div class="sub_section reference">
                <h4>Bradley Baumann</h4>
                <div>Lead Developer</div>
                <div>CFB Strategies</div>
                <a href="callto:9142638409">(914) 263-8409</a>
                <a href="mailto:"></a>
            </div>
            <div class="sub_section reference">
                <h4>James Lyon</h4>
                <div>Software Engineer</div>
                <div>SoulCycle</div>
                <a href="callto:9089635298">(908) 963-5298</a>
                <a href="mailto:jameslyon42@gmail.com">jameslyon42@gmail.com</a>
            </div>
            <div class="sub_section reference">
                <h4>Alberto Leon</h4>
                <div>Front End Software Engineer</div>
                <div>Mirror Labs</div>
                <a href="callto:9142336014">(914) 233-6014</a>
                <a href="mailto:alberto.leon.jr@gmail.com">alberto.leon.jr@gmail.com</a>
            </div>
            <div class="sub_section reference">
                <h4>Dorcie Loviskie</h4>
                <a href="callto:9142751356">(914) 275-1356</a>
            </div>
            <div class="sub_section reference">
                <h4>Todd Fuchs</h4>
                <div>Owner</div>
                <div>Revintu | Hostconcepts</div>
                <a href="callto:5167157166">(516) 715-7166</a>
            </div>
            <div class="sub_section reference">
                <h4>Zak Raxter</h4>
                <div>Director of IT & Security</div>
                <div>Retrieval Masters Credit Bureau</div>
                <a href="callto:5168469802">(516) 846-9802</a>
            </div>
            <div class="sub_section reference">
                <h4>Anold Lugo</h4>
                <div>Callcenter Director</div>
                <div>Retrieval Masters Credit Bureau</div>
                <a href="callto:3475736932">(347) 573-6932</a>
            </div>
        </div>
    </div>
</body>
</html>