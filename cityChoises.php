<!DOCTYPE HTML>
<?php
                session_start();
                    
                $username = "user";
                $password = "password";
                    
//                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
//                    header("Location: success.php");
//                }
                    
                if (isset($_POST['username']) && isset($_POST['password'])) {
                    if($_POST['username'] == $username && $_POST['password'] == $password) {
                        $_SESSION['loggedin'] = true;
                        header("Location: success.php");
                        
                    }
                }
?>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cities.css">
	<script type="text/javascript" src="js/javas.js"></script>
</head>
<body>
		<header class="clearfix">
			<div class="logo">
				<h1>Admin Login</h1>
				<h2></h2>
			</div>	<!-- logo -->

			<div class="Socialmeadia">
				<ul>
				<li><a href="https://www.facebook.com/dimhuman/"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a></li>
				<li><a href="https://aboutme.google.com/u/0/#profile_photo"><i class="fa fa-youtube fa-fw" aria-hidden="true"></i></a></li>
				<li><a href="https://plus.google.com/101103879572967818603"><i class="fa fa-google-plus fa-fw" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a></li>
				</ul>
			</div> <!-- Socialmeadia -->

		</header>
		
<footer>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="cityChoises.php">Admin Login</a></li>
				
				<li><a href="about.php">About us</a></li>
			</ul>
		</nav>	
			 <link rel="stylesheet" href="css/style.css">
			<div class="login-page">
		  <div class="form">
		    <form method="post" action = "cityChoises.php" class="register-form">
		      <input type="text" placeholder="name"/>
		      <input type="password" placeholder="password"/>
		      <input type="text" placeholder="email address"/>
		      <button>create</button>
		      <p class="message">Already registered? <a href="#">Sign In</a></p>
		    </form>
		    <form class="login-form" method="post" action = "cityChoises.php">
		      <input type="text" name = "username" placeholder="username"/>
		      <input type="password" name = "password"  placeholder="password"/>
             <button>Login</button>        
		      <p class="message">Not registered? <a href="#">Create an account</a></p>
		    </form>
		  </div>
		</div>
		  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                    

    <script src="js/index.js"></script>

	</footer><!-- footer -->
		<div class="copyrights">
			<div class="left">
				Copyrights &copy; Domain Name. All Rights Reserved
			</div>
			<div class="rights">
				Website by RDK Groups
			</div>
		</div> <!-- copyrights -->
	
</div> <!-- wrapper -->