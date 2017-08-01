<html>

<body>
<?php
session_start();
$var = $_SESSION['varname'];
$NumOfTeams = $_SESSION['NumOfTeams'];

//connect to db and fill the table
$servername = "localhost";
$username = "root";
$password = "";
$dbname = $_SESSION['TournamentName'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

   for($k=1; $k<=11; $k++){
   		$tmp = "PlayerName$k";
		$Pn = $_POST[$tmp];
		$sql2 = "INSERT INTO $var (PlayerNumber, Name) VALUES (null, '$Pn')";

	  if ($conn->query($sql2) === TRUE) {  } 
	  else {
	      echo "Error: " . $sql2 . "<br>" . $conn->error;
	  }
	}

echo "Done and dusted !";
?>
<?php
header('Location: enterDB.php');
?>
</body>
</html>