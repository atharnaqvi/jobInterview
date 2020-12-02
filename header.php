<?php  
    session_start();
    include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
	</style>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<link rel="stylesheet" href="dist/css/main.css">
	<title>Job Interview</title>

</head>
<body>
<!-- Nav bar ---- to be coppied on all the pages ********* start here -->


<div class="menu-btn">
        <span class="menu-btn__burger"></span>
</div>
<nav class="nav wrapper">
 <ul class="menu-nav">
    <li class="menu-nav__item active">
            <a href="index.php" class="menu-nav__link">
    			<span class="home"> Job Interview</class>
            </a>
    </li>
	<li class="menu-nav__item dropdown">
			<a href="#"  class="menu-nav__link">
                Services
            </a>
	 <ul class="menu-area">
		
	    <ul class="image-menu-area">
		    <img src="images/job-interview2.jpg" alt="Job Interview">
		</ul>
		<ul>
			<h4><a href="services.php">Our Top Services</a></h4>
			<li><a href="Resume_Review.php">Resume Review  </a></li>
			<li><a href="career-advice.php">30 Min Career Advice </a></li>
			<li><a href="jobs-search.php">Jobs Search Strategy </a></li>
			<li><a href="mock-interview.php">Mock Interview </a></li>
		</ul>
		<ul>
			<h4>How we work?</h4>
			<li><a href="#">Process Map</a></li>
			<li><a href="#">What we do and what we don't</a></li>
			<li><a href="#">Why us?</a></li>
			<li><a href="#">Who are our Interviewers?</a></li>
			<li><a href="#">Why not talk to us?</a></li>
		</ul>
		<!-- <ul class="cv">
			
			<li><a href="#">Finance</a></li>
			<li><a href="#">Creative </a></li>
			<li><a href="#">Digital </a></li>
			<li><a href="#">Education </a></li>
			<li><a href="#">Engineering </a></li>
			<li><a href="#">Finance </a></li>
		</ul>
		<ul id="interview">
			<li><a href="#">Healthcare  </a></li>
			<li><a href="#">Hospitality </a></li>
			<li><a href="#">HR </a></li>
			<li><a href="#">Insurance </a></li>
			<li><a href="it.php">IT </a></li>
			<li><a href="#">Legal </a></li>
		</ul> -->
	<!-- 	<ul id="interview">
		<h4>Top Industries</h4>
			<li><a href="#">Logistics </a></li>
			<li><a href="#">Management</a></li>
			<li><a href="#">Marketing  </a></li>
			<li><a href="#">Manufacturing </a></li>
			<li><a href="#">Media </a></li>
			<li><a href="#">Nursing </a></li>
			<li><a href="#">Property </a></li>
		</ul> -->
		<!-- <ul id="interview">
			<li><a href="#">Sales </a></li>
			<li><a href="#">Secretarial </a></li>
			<li><a href="#">Senior Appointments </a></li>
			<li><a href="#">Telecoms </a></li>
			<li><a href="#">Travel and Tourism  </a></li>
			<li><a href="#">Retail </a></li>							
		</ul> -->
		
						
	 </ul>
	</li>
	<li class="menu-nav__item">
        <a href="#" class="menu-nav__link">
            Employer
        </a>
    </li>
	<li class="menu-nav__item">
        <a href="contact.php" class="menu-nav__link">
            Contact
    	</a>
    </li>
 </ul>
		<!-- </div> -->
</nav>
	

<!-- Nav bar ---- to be coppied on all the pages ********* END here -->
	
<!-- ******************************************************************************************************************* -->