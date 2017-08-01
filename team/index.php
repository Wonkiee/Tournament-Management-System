<html>
<?php
        session_start();
?>

<html>
<head>
	<title>Team Selection</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cities.css">
	<script type="text/javascript" src="js/javas.js"></script>
</head>
<body>
		<header class="clearfix">
			<div class="logo">
				<h1 align="center">Team Selection</h1>
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
				<form action="hidden1.php" method = "POST" >

<?php
    echo "<b>Enter the name of the tournament : </b>";
?>

		<input type="text" name="tournamentName"></br></br>

		<b>Enter the number of teams :</b>
			  <select id="numOfTeams" name="numOfTeams">
			    <option value="1">1</option>
			    <option value="2">2</option>
			    <option value="3">3</option>
			    <option value="4">4</option>
			    <option value="5">5</option>
			    <option value="6">6</option>
			    <option value="7">7</option>
			    <option value="8">8</option>
			    <option value="9">9</option>
			    <option value="10">10</option>
			    <option value="11">11</option>
			    <option value="12">12</option>
			    <option value="13">13</option>
			    <option value="14">14</option>
			    <option value="15">15</option>
			  </select></br></br>

        <input type="submit"/>

</form>

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
