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
	<!-- <link rel="stylesheet" type="text/css" href="styles/styles.css"> -->
	<style>

</style>
	<!-- <link rel="stylesheet" type="text/css" href="styles/page-contents.css"> -->
	<link rel="stylesheet" href="dist/css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<!-- Nav bar ---- to be coppied on all the pages ********* start here -->


<div class="menu-btn">
        <span class="menu-btn__burger"></span>
</div>
<nav class="nav wrapper">
	<ul class="menu-nav">
    	<li class="menu-nav__item active">
            <a href="signin.php" class="menu-nav__link">
    			<span class="home"> Job Interview</class>
            </a>
        </li>
	    <li class="menu-nav__item dropdown">
			<a href="#"  class="menu-nav__link">
                Admin
            </a>
	<ul class="menu-area">
	    <!-- <ul class="image-menu-area">
		    <img src="images/job-interview1.jpg" alt="Job Interview">
						</ul> -->
						<ul>
							<h4>Main</h4>
							<li><a href="admin_AllMessages.php">All Messages  </a></li>
							<li><a href="admin_AllUsers.php">All Users </a></li>
							<li><a href="admin_all_cases.php">All Cases </a></li>
						</ul>
						<!-- <ul class="cv">
							<li><a href="#">Finance</a></li>
							<li><a href="#">Creative </a></li>
							<li><a href="#">Digital </a></li>
							<li><a href="#">Education </a></li>
							<li><a href="#">Engineering </a></li>
							<li><a href="#">Finance </a></li>
						</ul>
						
						
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
                <li class="menu-nav__item">
                     <?php 
                        if(isset($_SESSION['userId'])){
                            echo '<form action="includes/logout.inc.php" method="post">
                                <button type="submit" name= "logout-submit">Logout</button>
                            </form>';
                        }
                        else {
                            echo '<form action="includes/login.inc.php" method="post">
                                    <input type="text" name="mailuid" placeholder="E-mail/Username">
                                    <input type="password" name="pwd" placeholder="Password">
                                    <button type="submit" name= "login-submit">Login</button>
                                </form>
                                <a href="signup.php" class="link">Signup</a>';
                            }
                     ?>
                </li>
			</ul>
		<!-- </div> -->
		</nav>
	

<!-- Nav bar ---- to be coppied on all the pages ********* END here -->
	
<!-- ******************************************************************************************************************* -->