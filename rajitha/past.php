
<html>
<head>
	<title>Refer To Past Summaries</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cities.css">
	<script type="text/javascript" src="js/javas.js"></script>
</head>
<body>
		<header class="clearfix">
			<div class="logo">
				<h1>Refer To Past Summaries</h1>
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
			
<form action="past1.php" method = "POST" >

<?php
	$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "trmdb";
        // Create connection
        $con = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($con->connect_error) {
          die("Connection failed: " . $con->connect_error);
        } 
    echo "<b>Enter the name of the tournament : </b>";
?>

		<select name="tournamentName">
 
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '1'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '2'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '3'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '4'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '5'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '6'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '7'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '8'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '9'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '10'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '11'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '12'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '13'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '14'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from trm WHERE id = '15'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>

     </select>
<input type="submit" value="Submit" />

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
