
<html>
<head>
	<title>Detailed Score Card</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cities.css">
	<script type="text/javascript" src="js/javas.js"></script>
</head>
<body>
		<header class="clearfix">
			<div class="logo">
				<h1>Detailed Score Card</h1>
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
            <style type="text/css">
            	table,th,td{
            		border-collapse: collapse;
            	}
            </style>


            <div class="homecontent clearfix">

<h2 align='center'>Player Performance</h2> 


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
        $sql = "SELECT name FROM matches ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo "<b>". $row["name"].  "<br>";
        $main = $row["name"];
        $conn->close();
        

$db = $main;

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$array1 = array();
$count = 0;

$sql2 = "SELECT name FROM players";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $array1[$count] = $row["name"];
    $count = $count+1;
    }
} else {
    echo "0 results";
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<table border =1 align='center'>";  
 
echo "<tr align='center'>
  
  <td colspan=2></td>
  <td colspan=4><b>Batting</td>
  <td></td>
  <td colspan=5><b>Bowling</td>
  </tr>
  ";
echo "<tr align='center'>
  <td><b>Player Name</td>
  <td>   </td>
  <td width='10%'><b>Score</td>
  <td width='10%'><b>Balls Faced</td>
  <td width='10%'><b>6's</td>
  <td width='10%'><b>4's</td>
  <td width='0.5%'>&nbsp</td>
  <td width='10%'><b>Overs Bowled</td>
  <td width='10%'><b>Wickets</td>
  <td width='10%'><b>Wides</td>
  <td width='10%'><b>No Balls</td>
  <td width='10%'><b>Runs</td></tr></b>
  ";

for($count=1;$count<12;$count++){
$countPlus = $count - 1;

$updateScore = mysqli_query($conn, "SELECT * from players WHERE id = '$count'"); 
$fetched = mysqli_fetch_assoc($updateScore); 

echo "<tr align='center'>

<td>$array1[$countPlus]</td><td> </td>
<td> ".$fetched['score']." </td><td> ".$fetched['ballasfaced']." </td><td> ".$fetched['six']." </td><td> ".$fetched['four']." </td><td>&nbsp </td><td> ".$fetched['oversbowled']." </td><td> ".$fetched['wickets']." </td><td> ".$fetched['wide']." </td><td> ".$fetched['noball']." </td><td> ".$fetched['runs']." </td>

</tr>";
}

echo "<tr align='center'>
  
  <td colspan=2></td>
  <td colspan=4>&nbsp</td>
  <td colspan=5></td>
  </tr>
  ";
for($count=12;$count<23;$count++){
$countPlus = $count - 1;

$updateScore = mysqli_query($conn, "SELECT * from players WHERE id = '$count'"); 
$fetched = mysqli_fetch_assoc($updateScore); 

echo "<tr align='center'>

<td>$array1[$countPlus]</td><td> </td>
<td> ".$fetched['score']." </td><td> ".$fetched['ballasfaced']." </td><td> ".$fetched['six']." </td><td> ".$fetched['four']." </td><td> </td><td> ".$fetched['oversbowled']." </td><td> ".$fetched['wickets']." </td><td> ".$fetched['wide']." </td><td> ".$fetched['noball']." </td><td> ".$fetched['runs']." </td>

</tr>";
}

?>
</form>				
		 




		 	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                    

    <script src="js/index.js"></script>

	</footer><!-- footer -->
	
</div> <!-- wrapper -->