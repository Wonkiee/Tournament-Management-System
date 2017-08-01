<!DOCTYPE html>
<html>
<head>
	<title>Cricket Tournamnet management system</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cities.css">
	<script type="text/javascript" src="js/javas.js"></script>
</head>
<style type="text/css">
        input#create
        {
            width: 400px;
            height: 30px;
        }
    </style>
<body>
	<link rel="stylesheet" href="css/style.css">
	<header class="clearfix">
		<div class="logo">
			<h1>Score Board</h1>
			<h2></h2>
		</div>	<!-- logo -->

		<div class="Socialmeadia">
			<ul>
			<li><a href="https://www.facebook.com/dimhuman/"<i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a></li>
			<li><a href="https://aboutme.google.com/u/0/#profile_photo"><i class="fa fa-youtube fa-fw" aria-hidden="true"></i></a></li>
			<li><a href="https://plus.google.com/101103879572967818603"><i class="fa fa-google-plus fa-fw" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a></li>
			</ul>
		</div> <!-- Socialmeadia -->
	</header>

		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="cityChoises.php">Admin Login</a></li>
				<li><a href="about.php">About us</a></li>
			</ul>
		</nav>	



		<div class="homecontent clearfix">
			<div class="home-col">
				<h2>Match Details</h2>

				<?php
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
				?>

				<h1> </br> </h1>
				<img id="image1" src="images/home/images1.jpg" >
				<?php
				echo "</br><h3> First Inning </h3></br>";
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
         		echo "Total: ". $row["Total"].  "<br>";
         		$total = $row["Total"];
     			}
				} else {
    	 		echo "0 results";
				}
				if ($result1->num_rows > 0) {
     			// output data of each row
     			while($row1 = $result1->fetch_assoc()) {
         		echo "Wickets: ". $row1["wicketTotal"].  "<br>";
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
         		echo "Over " .$over. "." .($row2["balls"]-6*$over). "<br>";
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
				echo "##Run Rate: ". $runrate.  "               ##Wickets in hand: ".$wickHand."<br>";
//#################Player Info#############################				
				$sqlg = "SELECT batsmen1,batsmen2,bowler FROM inning1 ORDER BY id DESC LIMIT 1";
				$resultg = $conn->query($sqlg);
				if ($resultg->num_rows > 0) {
     			// output data of each row
     			while($rowg = $resultg->fetch_assoc()) {
     			$b1 = $rowg["batsmen1"];
         		$b2 = $rowg["batsmen2"];
         		$b3 = $rowg["bowler"];
         		$sqlp = "SELECT name,score,ballasfaced FROM players where id = '$b1'";
				$resultp = $conn->query($sqlp);
				$rowp = $resultp->fetch_assoc();
				echo " " .$rowp['name']. "*        ".$rowp['score']. "(".$rowp['ballasfaced']. ") </br>";
         		$sqlp = "SELECT name,score,ballasfaced FROM players where id = '$b2'";
				$resultp = $conn->query($sqlp);
				$rowp = $resultp->fetch_assoc();
				echo " " .$rowp['name']. "         ".$rowp['score']. "(".$rowp['ballasfaced']. ") </br></br>";
				$sqlp = "SELECT name,oversbowled,wickets FROM players where id = '$b3'";
				$resultp = $conn->query($sqlp);
				$rowp = $resultp->fetch_assoc();
				echo " " .$rowp['name']. "         [Wickets: ".$rowp['wickets']. "]   [Overs Bowled: ".$rowp['oversbowled']. "] </br>";
     			}
				} else {
    	 		echo "0 results";
				}
				$conn->close();

				?>
				
				<?php
//#######################Second INNIng##################################################################				
				echo "</br> <h3>Second Inning</h3> </br>";			
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = $main; //main is the variable before 1 inning
				// Create connection 
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
     			die("Connection failed: " . $conn->connect_error);
				}	
				$sql = "SELECT SUM(score) AS Total FROM inning2";
				$result = $conn->query($sql);

				$sql1 = "SELECT SUM(Wickets) AS wicketTotal FROM inning2";
				$result1 = $conn->query($sql1);
				$sql2 = "SELECT SUM(balls) AS balls FROM inning2";
				$result2 = $conn->query($sql2);
				
				$total1 = '';
				$over1 = '';
				$wicketsT='';
				if ($result->num_rows > 0) {
     			// output data of each row
     			while($row = $result->fetch_assoc()) {
         		echo "Total: ". $row["Total"].  "<br>";
         		$total1 = $row["Total"];
     			}
				} else {
    	 		echo "0 results";
				}
				if ($result1->num_rows > 0) {
     			// output data of each row
     			while($row1 = $result1->fetch_assoc()) {
         		echo "Wickets: ". $row1["wicketTotal"].  "<br>";
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
         		echo "Over " .$over. "." .($row2["balls"]-6*$over). "<br>";
     			}
				} else {
    	 		echo "0 results";
				}
				if($over1=='0'){
					$runrate='0';
				}else{
				$runrate = $total1/$over1;
				}
				$wickHand =  '10'-$wicketsT;
				$reqrun = $total - $total1+'1';
				echo "##Run Rate: ". $runrate.  "               ##Wickets in hand: ".$wickHand."<br>";
				echo "##Runs Required to win: ".$reqrun.  "</br>";

//#################Player Info#############################				
				$sqlg = "SELECT batsmen1,batsmen2,bowler FROM inning2 ORDER BY id DESC LIMIT 1";
				$resultg = $conn->query($sqlg);
				if ($resultg->num_rows > 0) {
     			// output data of each row
     			while($rowg = $resultg->fetch_assoc()) {
     			$b1 = $rowg["batsmen1"];
         		$b2 = $rowg["batsmen2"];
         		$b3 = $rowg["bowler"];
         		$sqlp = "SELECT name,score,ballasfaced FROM players where id = '$b1'";
				$resultp = $conn->query($sqlp);
				$rowp = $resultp->fetch_assoc();
				echo " " .$rowp['name']. "*        ".$rowp['score']. "(".$rowp['ballasfaced']. ") </br>";
         		$sqlp = "SELECT name,score,ballasfaced FROM players where id = '$b2'";
				$resultp = $conn->query($sqlp);
				$rowp = $resultp->fetch_assoc();
				echo " " .$rowp['name']. "         ".$rowp['score']. "(".$rowp['ballasfaced']. ") </br></br>";
				$sqlp = "SELECT name,oversbowled,wickets FROM players where id = '$b3'";
				$resultp = $conn->query($sqlp);
				$rowp = $resultp->fetch_assoc();
				echo " " .$rowp['name']. "         [Wickets: ".$rowp['wickets']. "]   [Overs Bowled: ".$rowp['oversbowled']. "] </br>";
     			}
				} else {
    	 		echo "0 results";
				}
				$conn->close();
				?>

				<?php /////////////////////////////////////////////////// ?>				
				<form method = "POST" action = "detailedCard.php"  />
				<br> <input id = "create" type="submit" value="Detailed View"/> <br>
				</form>
			</div> <!-- home-col -->



			<div class="home-col">
				<h2>Tournament Details</h2>
				<?php
//############################################################################################################################
//####################Tournament details####################################################################################				
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
				$arr1 = '';
				if ($result->num_rows > 0) {
     			// output data of each row
     			while($row = $result->fetch_assoc()) {
         		echo "Tournament Name: ". $row["name"].  "<br>";
         		$arr1 = $row["name"];
     			}
				} else {
    	 		echo "0 results";
				}
				
				?>


				<h1> </br> </h1>
				<img id="image1" src="images/home/images.png" >
				<?php

					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = $arr1;
					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
    					die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "SELECT distinct name FROM matches";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   	 				// output data of each row
					echo "<h3>Matches</h3>";	
    				while($row = $result->fetch_assoc()) {
        			echo "</br> " . $row["name"].  "</br> ";
    				}
					} else {
    				echo "0 results";
					}
					//echo "</br>" .$arr1[0]. "</br>";
					$conn->close();
				?>
				
			</div> <!-- home-col -->
			</div>
			<div class="copyrights">
		
			<div class="left">
				Copyrights &copy; Domain Name. All Rights Reserved
			</div>
			<div class="rights">
				Website by RDK Groups
			</div>
		</div> <!-- copyrights -->

<script src="bower_components/jquery/jquery.js"></script>

<script>
	$(function() {
		$("#image1").fadeOut(1000).delay(1000).slideDown(1000);

	})

</script>

</body>

</html> 
