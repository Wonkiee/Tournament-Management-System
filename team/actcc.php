<?php
        session_start();
?>
<html>
<head>
	<title>Team Names</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cities.css">
	<script type="text/javascript" src="js/javas.js"></script>
</head>
<body>
		<header class="clearfix">
			<div class="logo">
				<h1>Team Names</h1>
				<h2></h2>
			</div>	<!-- logo -->

			<div class="Socialmeadia">
				<ul>
				<li><a href=https://www.facebook.com/shahein.perera?fref=ts"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a></li>
				<li><a href="https://aboutme.google.com/u/0/#profile_photo"><i class="fa fa-youtube fa-fw" aria-hidden="true"></i></a></li>
				<li><a href="https://plus.google.com/101103879572967818603"><i class="fa fa-google-plus fa-fw" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a></li>
				</ul>
			</div> <!-- Socialmeadia -->

		</header>
		
<footer>
		<nav>
			<ul>
				<li><a href="/Project/index.php">Home</a></li>
				<li><a href="/Project/cityChoises.php">Admin Login</a></li>
				
				<li><a href="/Project/about.php">About Us</a></li>
			</ul>
		</nav>	
			 <link rel="stylesheet" href="css/style.css">
			     
		  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
            <div class="homecontent clearfix">
		<div class="home-col">
			
	<h2 align='center'>Enter the Team Names</h2>

	<form align='center' action="hidden2.php" method="POST">

<?php
for($count=1; $count<=$_SESSION['NumOfTeams'] ;$count++){
?>

	  Team #<?php echo $count; ?>: 
	  <input type="text" name="team<?php echo $count; ?>">
	  <br><br>

<?php
}
?>

	  <input type="submit" value="Submit" onclick="msg()">
	</form>

	<script>
		function msg() {
    		alert("Teams were successfully submitted!");
		}
	</script>




        </div>        

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
</body>
</html>

