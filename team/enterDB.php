
<html>
<head>
	<title>About</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cities.css">
	<script type="text/javascript" src="js/javas.js"></script>
	<style type="text/css">
		input#create{
			width: 150px;
			height: 30px;
		}
	</style>
</head>

<body>
		<header class="clearfix">
			<div class="logo">
				<h1>Who are We</h1>
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

    $_SESSION['Loading_Count'] += 1;

//error_reporting(0);

$NArr = array($_SESSION['TeamNames'][0] , $_SESSION['TeamNames'][1] , $_SESSION['TeamNames'][2] , $_SESSION['TeamNames'][3] , $_SESSION['TeamNames'][4] , $_SESSION['TeamNames'][5] , $_SESSION['TeamNames'][6] , $_SESSION['TeamNames'][7] , $_SESSION['TeamNames'][8] , $_SESSION['TeamNames'][9] , $_SESSION['TeamNames'][10] , $_SESSION['TeamNames'][11] , $_SESSION['TeamNames'][12] , $_SESSION['TeamNames'][13] , $_SESSION['TeamNames'][14]);

//connecting and passing data to the database
if($_SESSION['Loading_Count'] == 1){

	$servername = "localhost";
	$username = "root";
	$password = "";
//	$dbname = "TMDB";
	$dbname = $_SESSION['TournamentName'];


//connecting
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Cretaing the database
	$sql1 = "CREATE DATABASE $dbname";
	if (mysqli_query($conn, $sql1)) { //echo "database created" ;
	} 
	else {
		header("Location: index.php");
	}

//use database
	$dbuse = "USE $dbname";
	mysqli_query($conn, $dbuse);

//creating table 'Teams'
	$sql2 = "CREATE TABLE Teams (teamNumber INT(11) NOT NULL AUTO_INCREMENT, name VARCHAR(30), PRIMARY KEY (teamNumber))";

	if (mysqli_query($conn, $sql2)) { //echo "table created" ;
	} 
	else { echo "Error creating table: " . mysqli_error($conn); }

$sql3 = "CREATE TABLE matches (id INT(11) NOT NULL AUTO_INCREMENT, name VARCHAR(30),team1 VARCHAR(30),team2 VARCHAR(30), PRIMARY KEY (id))";

	if (mysqli_query($conn, $sql3)) { //echo "table created" ;
	} 
	else { echo "Error creating table: " . mysqli_error($conn); }

//Entering data to the table 'Teams'
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);} 

	for ($i = 0 ; $NArr[$i] != null ; $i++){
		$sql = "INSERT INTO Teams (teamNumber, name)
		VALUES (null, '$NArr[$i]')";

		if ($conn->query($sql) === TRUE) {	}
		else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}

//Choose the team to enter the players
echo "Select the teams to enter the players; <br/><br/>";

for ($j = 0 ; $NArr[$j] != null; $j++){

	?>

	<form method="post" action="enterPlayers.php" >
  		<input id="create" type="submit" value= "<?php echo "".$NArr[$j]."";?>" name="teamN"/>
	</form>
	
	<?php
}
if($_SESSION['Loading_Count'] == 1){
$conn->close();
}
?>

<form action="../New%20Tournament.php">
    <input type="submit" value="Continue" />
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




























