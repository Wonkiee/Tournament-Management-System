<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>

<h2>Enter the points for each team;</h2> 

<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";

$db = $_SESSION['matchname'];

// Create connection
$conn = new mysqli($servername, $username, $password);

if( isset($_POST['score']) && isset($_POST['wickets']) && isset($_POST['wide']) && isset($_POST['noball']) && isset($_POST['batsmen1']) && isset($_POST['batsmen2']) && isset($_POST['bowler']) ){
		$score = $_POST['score'];
		$wickets = $_POST['wickets'];
		$wide = $_POST['wide'];
		$noball = $_POST['noball'];
		$batsmen1 = $_POST['batsmen1'];
		$batsmen2 = $_POST['batsmen2'];
		$bowler = $_POST['bowler'];
		if($wide == 1 || $noball == 1){
			$ball = '0';
			$score = $score+1;
		}else{
			$ball = '1';
		}

	$sql2 = "INSERT INTO inning1 (score,wickets,wide,noball,batsmen1,batsmen2,bowler,balls) VALUES ('$score','$wickets','$wide','$noball','$batsmen1','$batsmen2','$bowler','$ball')";

	$dbuse = "USE $db";
	mysqli_query($conn, $dbuse);

	if (mysqli_query($conn, $sql2)) {

	} else {
    	echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
	}
}
else{echo "table insertion not completed!";
}
mysqli_close($conn);

?>

</body>
</html>