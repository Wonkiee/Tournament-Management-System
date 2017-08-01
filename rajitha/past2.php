
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
		<?php  

		session_start();

		$trmm = $_SESSION['tournamentName'];
		$dataBase = $_POST['matchName'];
		//echo "<b>The Match ". $dataBase.  "";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = $trmm;
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        } 
        $main = '';
        $team1 = '';
        $team2 = '';
        $sql = "SELECT name,team1,team2 FROM matches where name = '$dataBase'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
           	$main = $row["name"];
        	$team1 = $row["team1"];
        	$team2 = $row["team2"];
          }
        } else {
          echo "0 results";
        }
        echo "<b>The Match ". $main.  "";
        

        $conn->close();
//################First Inning######################################################################        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = $main;
        // Create connection 
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT SUM(score) AS Total FROM inning1";
        $result = $conn->query($sql);

        $sql1 = "SELECT SUM(Wickets) AS wicketTotal FROM inning1";
        $result1 = $conn->query($sql1);
        $sql2 = "SELECT SUM(balls) AS balls FROM inning1";
        $result2 = $conn->query($sql2);
        
        $total = '';
        $over1 = '';
        $wicketsT='';
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            //echo "Total: ". $row["Total"].  "<br>";
            $total = $row["Total"];
          }
        } else {
          echo "0 results";
        }
        if ($result1->num_rows > 0) {
          // output data of each row
          while($row1 = $result1->fetch_assoc()) {
            $wicketsT=$row1["wicketTotal"];
          }
        } else {
          echo "0 results";
        }
        if ($result2->num_rows > 0) {
          // output data of each row
          while($row2 = $result2->fetch_assoc()) {
          $over1 = $row2["balls"]/6;  
          $over = floor($row2["balls"]/6);
          }
        } else {
          echo "0 results";
        }
        if($over1=='0'){
          $runrate='0';
        }else{
        $runrate = $total/$over1;
        }
        $wickHand =  '10'-$wicketsT;
//#################################Second Inning##############        
        $sql = "SELECT SUM(score) AS Total FROM inning2";
        $result = $conn->query($sql);

        $sql1 = "SELECT SUM(Wickets) AS wicketTotal FROM inning2";
        $result1 = $conn->query($sql1);
        $sql2 = "SELECT SUM(balls) AS balls FROM inning2";
        $result2 = $conn->query($sql2);
        
        $total1 = '';
        $over2 = '';
        $wicketsT1='';
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $total1 = $row["Total"];
          }
        } else {
          echo "0 results";
        }
        if ($result1->num_rows > 0) {
          // output data of each row
          while($row1 = $result1->fetch_assoc()) {
            $wicketsT1=$row1["wicketTotal"];
          }
        } else {
          echo "0 results";
        }
        if ($result2->num_rows > 0) {
          // output data of each row
          while($row2 = $result2->fetch_assoc()) {
          $over2 = $row2["balls"]/6;  
          $over = floor($row2["balls"]/6);
          }
        } else {
          echo "0 results";
        }
        if($over2=='0'){
          $runrate1='0';
        }else{
        $runrate1 = $total1/$over1;
        }
        $wickHand1 =  '10'-$wicketsT1;
        $reqrun1 = $total - $total1;
        if($total>$total1){
          echo " is WON BY ".$team1." FROM ".$reqrun1." MARKS</br>" ;
        }elseif ($total==$total1) {
          echo " Match is Draw </br>" ;
        }else{
          echo " is WON BY ".$team2." WITH ".$wickHand1." WICKETS IN HAND</br>" ;
        }

echo "First Inning: ";
echo " ". $total. " - ".$wicketsT. "<br>";
echo "Second Inning: ";
echo " ". $total1. " - ".$wicketsT1. "<br>";
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

    <script src="js/index.js"></script>

	</footer><!-- footer -->

		
	
</div> <!-- wrapper -->
</body>
</html>
