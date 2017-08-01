<?php
	session_start();

    $_SESSION['Loading_Count'] = 0;
?>

<html>

<?php 	
$_SESSION['NumOfTeams'] = $_POST['numOfTeams'];
$trmname = $_POST['tournamentName'];
$_SESSION['TournamentName'] = $_POST['tournamentName'];

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
				$sql = "SELECT name FROM trm where name = '$trmname'";
				$result = $conn->query($sql);	

			if ($result->num_rows > 0) {
     			// output data of each row
     			header("Location: index.php");
				} else {
    	 		

$sql2 = "INSERT INTO trm (name) VALUES ('$trmname')";
mysqli_query($conn, $sql2);

$conn->close();


$url = "actcc.php";
header("Location: $url");
}
?>

</html>