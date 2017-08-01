
<html>
<head>
	<title>Update Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cities.css">
	<script type="text/javascript" src="js/javas.js"></script>
</head>
<body>
		<header class="clearfix">
			<div class="logo">
				<h1>First Inning</h1>
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
			
<h3>
<?php 
session_start();	

$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "trmdb";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT name FROM trm ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $dataBase = $row["name"];
        $conn->close();

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = $dataBase;
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT name,team1,team2 FROM matches ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo $row['team1'];
        $conn->close();
?></h3>

<form method = "POST" action = "next.php"  />
Score:<br> <input type="text" name="score"/> <br> 
Wickets:<br> <input type="text" name="wickets"/> <br> 
Wide:<br> <input type="text" name="wide"/> <br> 
No Ball:<br> <input type="text" name="noball"/> <br> 
Batsmen 1:<br> <input type="text" name="batsmen1"/> <br> 
Batsmen 2:<br> <input type="text" name="batsmen2"/> <br> 
Bowler:<br> <input type="text" name="bowler"/> <br>
<input type="submit" value="Submit" /><br>
<br>
</form>

<form action="inning2.php" method="get">
<input type="submit" value="Next Inning">
</form><br>

<script>
    function msg2() {
      window.open("test.php");
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

