
<?PHP
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'] ;
	$database = "u708616501_main";
	$connection = "false";
		$conn = new mysqli("mysql.hostinger.in", "u708616501_main", "sample123", $database);
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM login WHERE '$username' = username";
		$result = $conn->query($sql);
		$row=mysqli_fetch_array($result);
		if($row){
				$fullName = $row['fullname'];
				$connection = "true";
		}
		else {
			$fullname = "Invalid Username";
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>NIE-UW MicroGrid Project</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div id="header">
		<div class="dropdown">
  			<div class="dropbtn">About
				<div class="dropdown-content">
					<a href="#about-nie">NIE</a>
					<a href="#about-wisconsin">Wisconsin</a>
				    <a href="#about-crest">NIE-CREST</a>
				    <a href="#about-wempec">UW-WEMPEC</a>
 				</div>
			</div>
		</div>
		<div class="dropdown">
  			<div class="dropbtn">Project
				<div class="dropdown-content">
					<a href="#about-project">About</a>
					<a href="#mission-vission">Mission & Vission</a>
 				</div>
 			</div>
		</div>
		<div class="dropdown">
  			<div class="dropbtn">Team
				<div class="dropdown-content">
					<a href="#nie-team">NIE</a>
					<a href="#wisconsin-team">Wisconsin</a>
 				</div>
 			</div>
		</div>
		<div class="dropdown"><div class="dropbtn"><a href="#updates">Updates</a></div></div>
		<div class="dropdown"><div class="dropbtn"><a href="#photos">Photos</a></div></div>
		<div class="dropdown"><div class="dropbtn"><a href="#contact">Contact</a></div></div>
		<?php if($connection == "false") 
		print("<div class='dropdown'><div class='dropbtn'><a href='#login'>Login</a></div></div>");
		else 
			print("<div class='dropdown'>
			<div class='dropbtn' style='word-spacing: normal;'>". $fullName .
				"<div class='dropdown-content'>
					<a href='logout.php'>Logout</a>
				</div>
			</div>
		</div>");
		?>
	</div>
	<div id="project-pic">
		<div id="clg-name">The National Institute of Engineering, Mysore - India and University of Wisconsin, Madison - United States of America</div>
		<div id="subhead-tag">Project On</div><br><Br><Br>
		<div id="project-name">Micro-Grid System With RE Integration</div><br><Br><Br>
		<div id="subhead-tag"><br><br>Co-Ordinated By</div>
		<div id="co-ord-name">NIE - CREST and UW - WEMPEC</div>
	</div>
	<div class="div1" id="about-nie">
		<div class="head-name">About NIE</div>
		<a href="http://www.nie.ac.in/" title="Click To Visit NIE Website"><img src="pics/nie-logo.gif" width="130" alt="NIE Logo" style="float:right;"></a>
		The National Institute of Engineering (NIE), one of the oldest private engineering colleges of the country, was started in the year 1946. The engineers, professors and other good men who labored to establish NIE are many. Their contribution to the cause of technical education is equally noble, whether it has been large or small, whether by money or service. NIE owes it glory to all these Men with a Mission. Among the sixteen eminent founders, three engineers Sri S.Ramaswamy, Retd. Superintending Engineer, Mysore PWD, Sri D.V.Narasimha Rao, Retd. Chief Engineer, Mysore State Railways and Sri T.Rama Rao, Retd. Executive Engineer of Mysore PWD, took lead in establishing NIE, the Temple of Learning. It has completed 69 years of fruitful existence.<br><br>
		Today NIE stands at the 28th position among India’s top 100 Engineering Colleges that include IITs and NITs and 2nd in Karanataka. Approved by the All India Council for Technical Education (AICTE), New Delhi, NIE is a grant-in-aid institution and is accredited by the National Board of Accreditation, New Delhi. NIE got autonomous status by Visvesvarya Technological University, Belagavi in 2007. It is one of the 14 colleges in Karnataka state that has been recognized under Ministry of Human Resources Development-World Bank sponsored Technical Education Quality Improvement Programme (TEQIP). It is also a recognised QIP Research Centre of AICTE.
		<div class="home-link"><a href=" #header"><br><strong>Go Top</strong></a></div>
	</div>
	<div class="div2" id="about-wisconsin">
		<div class="head-name">About UW</div>
		<a href="http://www.wisc.edu/" title="Click To Visit Wisconsin Website"><img src="pics/wisconsin-logo.png" width="130" alt="Wisconsin Logo" style="float:right;"></a>
		The University of Wisconsin–Madison (also known as University of Wisconsin, Wisconsin, "UW", or regionally as, UW–Madison, or simply Madison) is a public research university in Madison, Wisconsin, United States. Founded when Wisconsin achieved statehood in 1848, UW–Madison is the official state university of Wisconsin, and the flagship campus of the University of Wisconsin System. It was the first public university established in Wisconsin and remains the oldest and largest public university in the state. It became a land-grant institution in 1866. The 933-acre (378 ha) main campus includes four National Historic Landmarks.<br><br>
		UW–Madison is organized into 20 schools and colleges, which enrolled 29,302 undergraduate, 9,445 graduate, and 2,459 professional students and granted 6,659 bachelor's, 3,493 graduate and professional degrees in 2013-2014. The University employs over 21,796 faculty and staff. Its comprehensive academic program offers 136 undergraduate majors, along with 148 master's degree programs and 120 doctoral programs.
		<div class="home-link"><a href=" #header"><br><strong>Go Top</strong></a></div>
	</div>
	<div class="div1" id="about-crest">
		<div class="head-name">About NIE-CREST</div>
		<a href="http://niecrest.in/" title="Click To Visit NIE-CREST Website"><img src="pics/crest-logo.gif" width="120" alt="NIE-CREST Logo" style="float:right;"></a>
		Center For Renewable Energy and Sustainable Technologies (CREST), At NIE Is A Centre For Renewable Energy And Sustainable Technologies Training, Research, Development And A Leading Centre For Development Of Renewable Energy Based Efficient Devices/Systems Dissemination Of The Systems/Products To The People In The Region.<br><br>
		not from crest Today NIE stands at the 28th position among India’s top 100 Engineering Colleges that include IITs and NITs and 2nd in Karanataka. Approved by the All India Council for Technical Education (AICTE), New Delhi, NIE is a grant-in-aid institution and is accredited by the National Board of Accreditation, New Delhi. NIE got autonomous status by Visvesvarya Technological University, Belagavi in 2007. It is one of the 14 colleges in Karnataka state that has been recognized under Ministry of Human Resources Development-World Bank sponsored Technical Education Quality Improvement Programme (TEQIP). It is also a recognised QIP Research Centre of AICTE.
		<div class="home-link"><a href=" #header"><br><strong>Go Top</strong></a></div>
	</div>
	<div class="div2" id="about-wempec">
		<div class="head-name">About UW-WEMPEC</div>
		<a href="http://www.wempec.wisc.edu/" title="Click To Visit UW-WEMPEC Website"><img src="pics/wempec-logo.jpg" width="120" alt="UW-WEMPEC Logo" style="float:right; padding:10px;"></a>
		The Wisconsin Electric Machines and Power Electronics Consortium conducts power electronics research and electric machines research. It was initiated at the University of Wisconsin-Madison in January 1981. WEMPEC is comprised of a technology focus center at the university that is sponsored by companies that hold an interest in electric machines and power electronics. These sponsors help support an active program in the Department of Electrical and Computer Engineering and the Department of Mechanical Engineering. With a mission to provide education, research and service, WEMPEC continues to serve as a model for programs dependent on a strong interaction between universities and industry.<br><Br>
		The faculty at WEMPEC has established a comprehensive curriculum in the electrical machines and power electronics field that serves students at the university as well as engineers already established in the industry. The courses are offered on campus and digitally through the Credit Courses at a Distance, and are complemented by short courses and tutorials that are offered periodically on campus, at technical meetings, and by special arrangement at company locations. Teaching efforts have been further enhanced through the establishment of a world-class teaching and research laboratory. An outstanding group of graduate students and visiting scholars have established an internationally recognized level of excellence in their research contributions. Industrial interest in the WEMPEC research program has been maintained by a concerted effort to keep projects relevant to long term industrial needs and through an efficient technology transfer process.
		<div class="home-link"><a href=" #header"><br><strong>Go Top</strong></a></div>
	</div>
	<div class="div1" id="about-project">
		<div class="head-name">About Project</div>
		There Is Still A Significant Share Of Rural Population In India That Has No Access Or Unreliable Access To Electricity. Rural Electrification Through Micro-Grids By Adopting Distributed Renewable Energy Generation Technologies (Solar PV, Biomass, Wind, Etc.) Is Considered A Potential Solution.
		<div class="home-link"><a href=" #header"><br><strong>Go Top</strong></a></div>
	</div>
	<div class="div2" id="mission-vission">
		<div class="head-name">Mission & Vission of Project</div>
		There Is Still A Significant Share Of Rural Population In India That Has No Access Or Unreliable Access To Electricity. Rural Electrification Through Micro-Grids By Adopting Distributed Renewable Energy Generation Technologies (Solar PV, Biomass, Wind, Etc.) Is Considered A Potential Solution.
		<div class="home-link"><a href=" #header"><br><strong>Go Top</strong></a></div>
	</div>
	<div class="div1" id="nie-team">
		<div class="head-name">NIE - Team</div>
		Mr. Shamsundar Subbarao<br>
		MSc (Renewable Energy, Germany),(PhD)<br>
		Associate Professor, Department of Mechanical Engineering<br>
		<br>
		Dr. T N Shridhar<br>
		Professor, Department of Mechanical Engineering<br>
		<br>
		Mr. Vikram Athreya V<br>
		Lecturer, Department of Mechanical Engineering<br>
		<br>
		And Group of 23 Students from Mechanical, Electrical, Civil & Computer Science Engineering Branch - - <br>
		<div class="home-link"><a href="#nie-team" id="showmore" onclick="showdetail(1)">Read More</a></div><br>
		<div id="nieteam-full">
			Aditya G Inamdar – Mech<br>
			Akshay T G – EE<br>
			Avinash S – EE<br>
			Bahumukh – Mech<br>
			Bopanna A A – Mech<br>
			Chethan C Nagawara – IP<br>
			Chinmay M Hegde – Mech<br>
			Deeksha K – EC<br>
			Deepali – EC<br>
			Hemanth G Jamadagni – Mech<br>
			Lakshmi Narasimha D – Mech<br>
			Manasa D – EC<br>
			PurnaChandu D – Mech<br>
			Rajath R B – Mech<br>
			Rakshith Gowda B - Mech<br>
			Ram Prasad Agarwal – CS<br>
			Rathna M – EE<br>
			Rohit R Jain – Mech<br>
			Shubham – CS<br>
			Sindhu V Dixit – EE<br>
			Somanna M K – EE<br>
			Srajan Shetty – Mech<br>
			Suraj K Mathew – Mech<br>
		</div>
		<div class="home-link"><a href="#nie-team" id="showless" onclick="showdetail(0)">Read Less</a></div>
		<div class="home-link"><a href="#"><br><strong>Go Top</strong></a></div>
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
		<div class="home-link"><a href=" #header"><br><strong>Go Top</strong></a></div>
	</div>
	<div class="div1" id="updates">
		<div class="head-name">Updates</div>
		Sample Update
		<div class="home-link"><a href=" #header"><br><strong>Go Top</strong></a></div>
	</div>
	<div class="div2" id="photos">
		<div class="head-name">Photo Gallery</div>
		Pics Will Be Displayed Soon
		<div class="home-link"><a href=" #header"><br><strong>Go Top</strong></a></div>
	</div>
	<div class="div1" id="contact">
		<div class="head-name">Contact Details</div>
		E-Mail Address:-<br>
		niecrestmicrogrid@gmail.com<br>
		niecrest@gmail.com<br>
		<br>
		Postal Address:-<br>
		The National Institute of Engineering,<br>
		Center for Renewable Energy and Sustainable Technologies,<br>
		Manandavady Road, Mysore-570008, Karnataka ,India<br>
		<br>
		Contact Number:-<br>
		+91 - 821 4004 914<br>
		+91 - 821 4250 502<br>
		+91 - 966 3662 858<br>
		<br>
		<div class="home-link"><a href=" #header"><br><strong>Go Top</strong></a></div>
	</div>
	<div class="div2" id="login">
		<div class="head-name">Team Login</div>
		<div class="row">
			<div class="col-md-5">
				<form class="form" action="php/login.php" method="POST"><br>
					<input type="text" name="username" placeholder="Username" required style="color:black;"><br><br>
					<input type="password" name="password" placeholder="Password" required style="color:black;"><br><br>
					<input class="login-button" type="submit" name="submit" value="Log In" >
				</form>
			</div>
			<div class="col-md-7" style="padding-left:10%; padding-top:3%;">
				PS: This Login is Exclusively For Team Members only.<br><br>
				If You Are New Team Member Then Please Contact NIE-TEAM For The Details.
			</div>
		</div>
		<div class="home-link"><a href=" #header"><br><strong>Go Top</strong></a></div>
	</div>
	<div class="div1" id="footer">
		Copyright © The National Institute of Engineering, Mysore - Center for Renewable Energy & Sustanable Technologies.<br>
		Developed By Ram Prasad Agarwal and Shubham - Students at NIE.<br>
		All Rights Reserved.<br>
			</div>
</body>
<script type="text/javascript">
	function showdetail(a){
		if (a) {
			document.getElementById('showmore').style.display = "none";
			document.getElementById('nieteam-full').style.display = "block";
			document.getElementById('showless').style.display = "block";
		}
		else {
			document.getElementById('showmore').style.display = "block";
			document.getElementById('nieteam-full').style.display = "none";
			document.getElementById('showless').style.display = "none";
		};
	};
</script>
</html>
