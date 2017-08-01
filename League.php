
<html>
<head>
	<title>League</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cities.css">
	<script type="text/javascript" src="js/javas.js"></script>
</head>
<body>
		<header class="clearfix">
			<div class="logo">
				<h1>League</h1>
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
				<li><a href="index.php">Home</a></li>
				<li><a href="cityChoises.php">Admin Login</a></li>
				
				<li><a href="about.php">About us</a></li>
			</ul>
		</nav>	
			 <link rel="stylesheet" href="css/style.css">    
			<?php



function scheduler($teams){
    if (count($teams)%2 != 0){
        array_push($teams,"bye");
    }
    $away = array_splice($teams,(count($teams)/2));
    $home = $teams;
    for ($i=0; $i < count($home)+count($away)-1; $i++){
        for ($j=0; $j<count($home); $j++){
            $round[$i][$j]["Home"]=$home[$j];
            $round[$i][$j]["Away"]=$away[$j];
        }
        if(count($home)+count($away)-1 > 2){
            $tem = array_splice($home,1,1);
            $tem1 = array_shift($tem);
            array_unshift($away,$tem1);
            array_push($home,array_pop($away));
        }
    }
    return $round;
}
?>

<?php
//Hidding Null value errors ;)
error_reporting(0);

// Connect to database and fetch data
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TMDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

// Fetching Data
$sql = "SELECT teamNumber, name FROM teams";
$result = $conn->query($sql);
$members = array();

if (($result->num_rows) > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         array_push($members, $row["name"]);
     }
} else {
     echo "0 results";
}

$conn->close();
?>

<?php $schedule = scheduler($members); ?>
<?php
foreach($schedule AS $round => $games){
    echo "Round: ".($round+1)."<BR>";
    foreach($games AS $play){
        echo $play["Home"]." - ".$play["Away"]."<BR>";
    }
    echo "<BR>";
}
?>
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