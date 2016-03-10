<?PHP
	// session_start();
	// $username = $_POST['username'];
	// $password = $_POST['password'] ;
	// $database = "u708616501_main";
	// $connection = "false";
	// 	$conn = new mysqli("mysql.hostinger.in", "u708616501_main", "sample123", $database);
	// 	if ($conn->connect_error) {
	// 	    die("Connection failed: " . $conn->connect_error);
	// 	} 

	// 	$sql = "SELECT * FROM login WHERE '$username' = username";
	// 	$result = $conn->query($sql);
	// 	$row=mysqli_fetch_array($result);
	// 	if($row){
	// 			$fullName = $row['fullname'];
	// 			$connection = "true";
	// 	}
	// 	else {
	// 		$fullname = "Invalid Username";
	// 	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>NIE-UW MicroGrid Project</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/slideshow/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/slideshow/style1.css" />
    <script type="text/javascript" src="jquery/jquery.js"></script>
</head>
<body>
<div id="loading">
	welcome!!<br>
	micro-grid is powering up<br>
	please wait for a while...<br>
	<img src="pics/loading.gif" width="100">
</div>
<div id="main-div" style="display:none;">
	<div id="home"><script>document.getElementById('home').style.height = window.innerHeight + "px";</script>
		<ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            <li><span>Image 05</span></li>
            <li><span>Image 06</span></li>
    	</ul>
		<div id="header">
			<div class="dropdown"><div class="dropbtn"><a href="#home">Home</a></div></div>
			<div class="dropdown">
  				<div class="dropbtn">About
					<div class="dropdown-content">
						<a href="#about-nie">NIE</a>
						<a href="#about-wisconsin">UW-Madison</a>
					    <a href="#about-crest">NIE-CREST</a>
					    <a href="#about-wempec">UW-WEMPEC</a>
 					</div>
				</div>
			</div>
			<div class="dropdown">
				<div class="dropbtn">Project
					<div class="dropdown-content">
						<a href="#about-project">About</a>
						<a href="#mission-vission">Mission & Vision</a>
 					</div>
	 			</div>
			</div>
			<div class="dropdown">
  				<div class="dropbtn">Team
					<div class="dropdown-content">
						<a href="#nie-team">NIE</a>
						<a href="#wisconsin-team">UW-Madison</a>
 					</div>
 				</div>
			</div>
			<div class="dropdown"><div class="dropbtn"><a href="#updates">Updates</a></div></div>
			<div class="dropdown"><div class="dropbtn"><a href="#photos">Photos</a></div></div>
			<div class="dropdown"><div class="dropbtn"><a href="#contact">Contact</a></div></div>
			<?php 
				 // if($connection == "false") { ?><!-- <div class="dropdown"><div class="dropbtn"><a href="#login">Login</a></div></div> --> <?php //}
				// else { ?>
				<!-- 	<div class="dropdown"><div class="dropbtn"><a href="#forum">Forum</a></div></div>
					<div class="dropdown">
						<div class="dropbtn" style="word-spacing: normal;"> --> <?php //print ($fullName); ?>
						<!-- 	<div class="dropdown-content">
								<a href="logout.php">Logout</a>
							</div>
						</div>
					</div> --> <?php //} 
			?>
		</div>
		<div id="project-div">
			<div id="clg-name">The National Institute of Engineering, Mysore - India and University of Wisconsin, Madison - United States of America</div>
			<div id="subhead-tag">Project On</div>
			<div id="project-name">Renewable Energy Intergrated with<br>Distributed Energy Systems (Micro-Grids)</div>
			<div class="row">
				<div class="col-md-6" style="padding-left:15%;">
					<div id="subhead-tag">Co-Ordinated By</div>
					<div id="co-ord-name">NIE - CREST and UW - WEMPEC</div>
				</div>
				<div class="col-md-6" style="padding-right:15%;">
					<div id="subhead-tag">Supported By</div>
					<div id="co-ord-name">TECH-QUIP and UW - WEMPEC</div>
				</div>
			</div>
		</div>
	</div>
	<div class="div1" id="about-nie">
		<div class="head-name">About NIE - Mysore</div>
		<a href="http://www.nie.ac.in/" title="Click To Visit NIE Website"><img src="pics/nie-logo.gif" width="130" alt="NIE Logo" style="float:right;"></a>
		The National Institute of Engineering (NIE), one of the oldest private engineering colleges of the country, was started in the year 1946. The engineers, professors and other good men who labored to establish NIE are many. Their contribution to the cause of technical education is equally noble, whether it has been large or small, whether by money or service. NIE owes it glory to all these Men with a Mission. Among the sixteen eminent founders, three engineers Sri S.Ramaswamy, Retd. Superintending Engineer, Mysore PWD, Sri D.V.Narasimha Rao, Retd. Chief Engineer, Mysore State Railways and Sri T.Rama Rao, Retd. Executive Engineer of Mysore PWD, took lead in establishing NIE, the Temple of Learning. It has completed 69 years of fruitful existence.<br><br>
		Today NIE stands at the 28th position among India’s top 100 Engineering Colleges that include IITs and NITs and 2nd in Karanataka. Approved by the All India Council for Technical Education (AICTE), New Delhi, NIE is a grant-in-aid institution and is accredited by the National Board of Accreditation, New Delhi. NIE got autonomous status by Visvesvarya Technological University, Belagavi in 2007. It is one of the 14 colleges in Karnataka state that has been recognized under Ministry of Human Resources Development-World Bank sponsored Technical Education Quality Improvement Programme (TEQIP). It is also a recognised QIP Research Centre of AICTE.
		<!-- <div class="home-link"><a href="#header"><br><img src="pics/home-white.png" width="25" title="Home"></a></div> -->
	</div>
	<div class="div2" id="about-wisconsin">
		<div class="head-name">About UW-Madison</div>
		<a href="http://www.wisc.edu/" title="Click To Visit Wisconsin Website"><img src="pics/wisconsin-logo.png" width="130" alt="Wisconsin Logo" style="float:right;"></a>
		The University of Wisconsin–Madison (also known as University of Wisconsin, Wisconsin, "UW", or regionally as, UW–Madison, or simply Madison) is a public research university in Madison, Wisconsin, United States. Founded when Wisconsin achieved statehood in 1848, UW–Madison is the official state university of Wisconsin, and the flagship campus of the University of Wisconsin System. It was the first public university established in Wisconsin and remains the oldest and largest public university in the state. It became a land-grant institution in 1866. The 933-acre (378 ha) main campus includes four National Historic Landmarks.<br><br>
		UW–Madison is organized into 20 schools and colleges, which enrolled 29,302 undergraduate, 9,445 graduate, and 2,459 professional students and granted 6,659 bachelor's, 3,493 graduate and professional degrees in 2013-2014. The University employs over 21,796 faculty and staff. Its comprehensive academic program offers 136 undergraduate majors, along with 148 master's degree programs and 120 doctoral programs.
		<!-- <div class="home-link"><a href="#header"><br><img src="pics/home-blue.png" width="25" title="Home"></a></div> -->
	</div>
	<div class="div1" id="about-crest">
		<div class="head-name">About NIE-CREST</div>
		<a href="http://niecrest.in/" title="Click To Visit NIE-CREST Website"><img src="pics/crest-logo.gif" width="120" alt="NIE-CREST Logo" style="float:right;"></a>
		Center For Renewable Energy and Sustainable Technologies (CREST), At NIE Is A Centre For Renewable Energy And Sustainable Technologies Training, Research, Development And A Leading Centre For Development Of Renewable Energy Based Efficient Devices/Systems Dissemination Of The Systems/Products To The People In The Region.<br><br>
		NIE-CREST is promoting and disseminating renewable energy and sustainable technologies like rain water harvesting, Kitchen waste biogas plants, biodiesel from non edible seeds, solar energy technologies and other eco friendly systems.<br>
		<!-- <div class="home-link"><a href="#header"><br><img src="pics/home-white.png" width="25" title="Home"></a></div> -->
	</div>
	<div class="div2" id="about-wempec">
		<div class="head-name">About UW-WEMPEC</div>
		<a href="http://www.wempec.wisc.edu/" title="Click To Visit UW-WEMPEC Website"><img src="pics/wempec-logo.jpg" width="120" alt="UW-WEMPEC Logo" style="float:right; padding:10px;"></a>
		The Wisconsin Electric Machines and Power Electronics Consortium conducts power electronics research and electric machines research. It was initiated at the University of Wisconsin-Madison in January 1981. WEMPEC is comprised of a technology focus center at the university that is sponsored by companies that hold an interest in electric machines and power electronics. These sponsors help support an active program in the Department of Electrical and Computer Engineering and the Department of Mechanical Engineering. With a mission to provide education, research and service, WEMPEC continues to serve as a model for programs dependent on a strong interaction between universities and industry.<br><Br>
		The faculty at WEMPEC has established a comprehensive curriculum in the electrical machines and power electronics field that serves students at the university as well as engineers already established in the industry. The courses are offered on campus and digitally through the Credit Courses at a Distance, and are complemented by short courses and tutorials that are offered periodically on campus, at technical meetings, and by special arrangement at company locations. Teaching efforts have been further enhanced through the establishment of a world-class teaching and research laboratory. An outstanding group of graduate students and visiting scholars have established an internationally recognized level of excellence in their research contributions. Industrial interest in the WEMPEC research program has been maintained by a concerted effort to keep projects relevant to long term industrial needs and through an efficient technology transfer process.
		<!-- <div class="home-link"><a href="#header"><br><img src="pics/home-blue.png" width="25" title="Home"></a></div> -->
	</div>
	<div class="div1" id="about-project">
		<div class="head-name">About Project</div>
		There Is Still A Significant Share Of Rural Population In India That Has No Access Or Unreliable Access To Electricity. Rural Electrification Through Micro-Grids By Adopting Distributed Renewable Energy Generation Technologies (Solar PV, Biomass, Wind, Etc.) Is Considered A Potential Solution.<br><br>
		Micro-grid is a small scale power supply network that is designed to provide power to small community. In Micro-grids electricity generation and utilization devices are clustered together in close proximity with or without storage devices. It will enables local power generation for local loads. It comprises of various small power generating sources that makes it highly flexible & efficient.<br><br>
		FOCUS AREA
		<ul style="list-style-type:square">
			<li>Renewable Energy</li>
			<li>Solar Power</li>
			<li>Wind Turbine</li>
			<li>Bio Fuels</li>
			<li>Distributed Generation</li>
			<li>Energy Storage</li>
			<li>Rural Electrification</li>
		</ul>
		<!-- <div class="home-link"><a href="#header"><br><img src="pics/home-white.png" width="25" title="Home"></a></div> -->
	</div>
	<div class="div2" id="mission-vission">
		<div class="head-name">Vision of Project</div>
		This project will provide a forum for introduction and discussion of topics ranging from introduction to advanced levels for academic, industry, business and development professionals.<br><br>
		
		<!-- <div class="home-link"><a href="#header"><br><img src="pics/home-blue.png" width="25" title="Home"></a></div> -->
	</div>
	<div class="div1" id="nie-team">
		<div class="head-name">NIE - Team</div>
		Mr. Shamsundar Subbarao<br>
		Associate Professor, Department of Mechanical Engineering<br>
		<br>
		Dr. T N Shridhar<br>
		Professor, Department of Mechanical Engineering<br>
		<br>
		Mr. Vikram Athreya V<br>
		Lecturer, Department of Mechanical Engineering<br>
		<br>
		And Group of 23 Students from Mechanical, Electrical, Civil & Computer Science Engineering Branch - - <br>
		<div class="home-link"><button id="showmore">Read Names</button></div><br>
		<div id="nieteam-full">
			Aditya G Inamdar – Mechanical<br>
			Akshay T G – Electrical<br>
			Avinash S – Electrical<br>
			Bahumukh – Mechanical<br>
			Bopanna A A – Mechanical<br>
			Chethan C Nagawara – Ind. & Prod.<br>
			Chinmay M Hegde – Mechanical<br>
			Deeksha K – Electronics<br>
			Deepali – Electronics<br>
			Hemanth G Jamadagni – Mechanical<br>
			Lakshmi Narasimha D – Mechanical<br>
			Manasa D – Electronics<br>
			PurnaChandu D – Mechanical<br>
			Rajath R B – Mechanical<br>
			Rakshith Gowda B - Mechanical<br>
			Ram Prasad Agarwal – Computer Sc.<br>
			Rathna M – Electrical<br>
			Rohit R Jain – Mechanical<br>
			Shubham – Computer Sc.<br>
			Sindhu V Dixith – Electrical<br>
			Somanna M K – Electrical<br>
			Srajan Shetty – Mechanical<br>
			Suraj K Mathew – Mechanical<br>
		</div>
		<!-- <div class="home-link" id="showless"><a href="#nie-team" onclick="showdetail(0)">Read Less</a></div> -->
		<!-- <div class="home-link"><a href="#header"><br><img src="pics/home-white.png" width="25" title="Home"></a></div> -->
	</div>
	<div class="div2" id="wisconsin-team">
		<div class="head-name">Wisconsin - Team</div>
		Dr. Giri Venkataramanan<br>
		Ph.D. (University of Wisconsin-Madison, US)<br>
		Professor, Department of Electrical and Computer Engineering<br>
		<br>
		Mr. Lee Shaver<br>
		Research Assistant<br>
		Department of Electrical and Computer Engineering<br>
		<br>
		Mr. Ashray Manur<br>
		Graduate Research Assistant<br>
		Department of Electrical and Computer Engineering<br>
		<!-- <div class="home-link"><a href="#header"><br><img src="pics/home-blue.png" width="25" title="Home"></a></div> -->
	</div>
	<div class="div1" id="updates">
		<div class="head-name">Updates</div>
		<ul style="list-style-type:square">
			<li>Official Inauguration took place at radhakrishan hall, NIE administrative block on December 29, 2015.</li>
		</ul>
		<!-- <div class="home-link"><a href="#header"><br><img src="pics/home-white.png" width="25" title="Home"></a></div> -->
	</div>
	<div class="div2" id="photos">
		<div class="head-name">Photo Gallery</div>
		<div class="row" style="margin-left: -7%; margin-right:-10%; ">
			<div class="col-md-8" >
				<div style="height:450px; width:750px; text-align:center"><img src="pics/gallery/team-pic2.jpg" id="fullpic" alt="NIE & UW Team" title="NIE & UW Team" height="auto" style="verticle-align:center;"></div>
				<div id="caption">Inaurguration Day : The National Institute of Engineering and University of Wisconsin Team</div>
			</div>

			<div class="col-md-5" style="margin-left: -5%; margin-right: -10%; height:500px; overflow:auto;">
				<div class="row side-pics-div">
					<div class="col-md-4"><img src="pics/gallery/team-pic.jpg" class="side-pics"></div>
					<div class="col-md-8">Inaurguration Day : The National Institute of Engineering and University of Wisconsin Team
						<div class="timestamp">at NIE, Mysore on December 29, 2015</div></div>
				</div>
				<div class="row side-pics-div">
					<div class="col-md-4"><img src="pics/gallery/team-pic.jpg" class="side-pics"></div>
					<div class="col-md-8">Caption Here</div>
				</div>
				<div class="row side-pics-div">
					<div class="col-md-4"><img src="pics/gallery/team-pic.jpg" class="side-pics"></div>
					<div class="col-md-8">Caption Here</div>
				</div>
				<div class="row side-pics-div">
					<div class="col-md-4"><img src="pics/gallery/team-pic.jpg" class="side-pics"></div>
					<div class="col-md-8">Caption Here</div>
				</div>
				<div class="row side-pics-div">
					<div class="col-md-4"><img src="pics/gallery/team-pic.jpg" class="side-pics"></div>
					<div class="col-md-8">Caption Here</div>
				</div>
				<div class="row side-pics-div">
					<div class="col-md-4"><img src="pics/gallery/team-pic.jpg" class="side-pics"></div>
					<div class="col-md-8">Caption Here</div>
				</div>
				<div class="row side-pics-div">
					<div class="col-md-4"><img src="pics/gallery/team-pic.jpg" class="side-pics"></div>
					<div class="col-md-8">Caption Here</div>
				</div>
				<div class="row side-pics-div">
					<div class="col-md-4"><img src="pics/gallery/team-pic.jpg" class="side-pics"></div>
					<div class="col-md-8">Caption Here</div>
				</div>
				<div class="row side-pics-div">
					<div class="col-md-4"><img src="pics/gallery/team-pic.jpg" class="side-pics"></div>
					<div class="col-md-8">Caption Here</div>
				</div>
				<div class="row side-pics-div">
					<div class="col-md-4"><img src="pics/gallery/team-pic.jpg" class="side-pics"></div>
					<div class="col-md-8">Caption Here</div>
				</div>
				<div class="row side-pics-div">
					<div class="col-md-4"><img src="pics/gallery/team-pic.jpg" class="side-pics"></div>
					<div class="col-md-8">Caption Here</div>
				</div>
				<div class="row side-pics-div">
					<div class="col-md-4"><img src="pics/gallery/team-pic.jpg" class="side-pics"></div>
					<div class="col-md-8">Caption Here</div>
				</div>

			</div>
		</div>
		<!-- <div class="home-link"><a href="#header"><br><img src="pics/home-blue.png" width="25" title="Home"></a></div> -->
	</div>
	<div class="div1" id="contact">
		<div class="head-name">Contact Details</div>
		<div id="google-map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15593.891332043306!2d76.6412258!3d12.2839122!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf947b18cc5ad3d88!2sNational+Institute+Of+Engineering!5e0!3m2!1sen!2sin!4v1451341870873" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
		E-Mail Address:-<br>
		niecrestmicrogrid@gmail.com<br>
		niecrest@gmail.com<br>
		<br>
		Mailing Address:-<br>
		NIE-CREST<br>
		Department of Mechanical Engineering, <br>
		The National Institute of Engineering,<br>
		Manandavady Road, Mysore-570008, Karnataka ,India<br>
		<br>
		Contact Number:-<br>
		+91 - 821 4004 914<br>
		+91 - 821 4250 502<br>
		+91 - 966 3662 858<br>
		<br>
		<a href="http://www.facebook.com/microgridnie/" target="_blank"><img src="pics/fb-logo.jpg" alt="Follow at Facebook" title="Facebook" width="150"></a><br>
		<br>
		<!-- <div class="home-link"><a href="#header"><br><img src="pics/home-white.png" width="25" title="Home"></a></div> -->
	</div>
	<?php //if($connection == "false") {?> 
	<!-- <div class="div2" id="login">
		<div class="head-name">Team Login</div>
		<div class="row">
			<div class="col-md-5">
				<form class="form" action="index.php" method="POST"><br>
					<input type="text" name="username" placeholder="Username" required class="inputclass"><br><br>
					<input type="password" name="password" placeholder="Password" required class="inputclass"><br><br>
					<input class="login-button" type="submit" name="submit" value="Log In" >
				</form>
			</div>
			<div class="col-md-7" style="padding-left:10%; padding-top:3%;">
				PS: This Login is Exclusively For Team Members.<br><br>
				If You Are New Team Member Then Please Contact NIE-CREST For The Login Details.
			</div>
		</div>
		<div class="home-link"><a href="#header"><br><img src="pics/home-blue.png" width="25" title="Home"></a></div>
	</div> -->
	<?php// } else { ?> 
	<!-- <div class="div2" id="forum">
		<div class="head-name">Discussion Forum</div>
		<div class="row">
			<div class="col-md-5">
				<form class="form" action="index.php" method="POST"><br>
					<input type="text" name="username" placeholder="Have Anything New!" required class="inputclass"><br><br>
					<input class="login-button" type="submit" name="submit" value="Post Now" >
				</form>
			</div>
			<div class="col-md-7" style="padding-left:10%; padding-top:3%;">
				PS: This Forum Is Visible to only Team members. <br><br>
			</div>
		</div>
		<div class="home-link"><a href="#header"><br><img src="pics/home-blue.png" width="25" title="Home"></a></div>
	</div> -->
	<?php// } ?>
	<div class="div2" id="footer">
		Copyright © The National Institute of Engineering, Mysuru.<br>
		Developed By Ram Prasad Agarwal and Shubham - Students at NIE, Mysuru.<br>
		All Rights Reserved.
	</div>
</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
    $("#showmore").click(function(){
        $("#nieteam-full").toggle(1000);
    });
});

	$(document).ready(function() {
		$("a").anchorAnimate()
	});

	jQuery.fn.anchorAnimate = function(settings) {
		settings = jQuery.extend({
		speed : 700
		}, settings);	
	
		return this.each(function(){
			var caller = this
			$(caller).click(function (event) {	
				event.preventDefault()
				var locationHref = window.location.href
				var elementClick = $(caller).attr("href")
			
				var destination = $(elementClick).offset().top;
				$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
					window.location.hash = elementClick
				});
		  	return false;
			})
		})
	};
	window.onload = function(){
		document.getElementById('loading').style.display = "none";
		document.getElementById('main-div').style.display = "block";
	};
	
	
</script>
</html>