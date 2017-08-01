
<html>
<head>
	<title>Summary</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cities.css">
	<script type="text/javascript" src="js/javas.js"></script>
</head>
<body>
		<header class="clearfix">
			<div class="logo">
				<h1>Summary of the match</h1>
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
	
<?php
 session_start();

$_SESSION['testCount']=0;

$servername = "localhost";
$username = "root";
$password = "";

$team1 = $_POST['matchname1'];
$team2 = $_POST['matchname2'];

$_SESSION['matchname1'] = $_POST['matchname1'];
$_SESSION['matchname2'] = $_POST['matchname2'];
$_SESSION['matchRound'] = $_POST['matchRound'];

$db = "ROUND_".$_POST['matchRound']."_".$_SESSION['matchname1']."_VS_".$_SESSION['matchname2'];
$_SESSION['matchName'] = $db;

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
				$match1 = $row["name"];
				$conn->close();



$servername = "localhost";
$username = "root";
$password = "";
$dbname = $match1;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}	
$sql2 = "INSERT INTO matches (name,team1,team2) VALUES ('$db','$team1','$team2')";
mysqli_query($conn, $sql2);

$conn->close();   

echo "Teams : ".$_SESSION['matchname1']." VS ".$_SESSION['matchname2']."<br>";
echo "Round : ".$_SESSION['matchRound']."<br>";
echo "Ground : ".$_POST['matchGround'];

// Create connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//create the database for the match
$sql = "CREATE DATABASE $db";

	if (mysqli_query($conn, $sql)) {
	} 
	else {
    	header("Location: index.php");
	}

$db_connect = mysqli_connect($servername, $username, $password, $db);

if($db_connect){
}
else{echo "failed to conect to database";
}

	$sql1 = "CREATE TABLE inning1 (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,score INT(5) NOT NULL, wickets INT(2) NOT NULL, wide INT(3),noball INT(3),batsmen1 VARCHAR(30),batsmen2 VARCHAR(30),bowler VARCHAR(30),balls INT(5))";
	$sql2 = "CREATE TABLE inning2 (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,score INT(5) NOT NULL, wickets INT(2) NOT NULL, wide INT(3),noball INT(3),batsmen1 VARCHAR(30),batsmen2 VARCHAR(30),bowler VARCHAR(30),balls INT(5))";
	
	if (mysqli_query($db_connect, $sql1)) {

	} else {
    	echo "Error: " . $sql1 . "<br>" . mysqli_error($db_connect);
	}	
		if (mysqli_query($db_connect, $sql2)) {

	} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($db_connect);
	}

mysqli_close($conn);

?> 

<form action="inning1.php">
	<br><input type="submit" value="Continue to Update Match Information" onclick="msg2();"/>
</form>

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

