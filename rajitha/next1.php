<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>
<h2>Second Inning</h2> 

<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";

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

	$sql2 = "INSERT INTO inning2 (score,wickets,wide,noball,batsmen1,batsmen2,bowler,balls) VALUES ('$score','$wickets','$wide','$noball','$batsmen1','$batsmen2','$bowler','$ball')";

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
header("Location: inning2.php");
?>
</body>
</html>