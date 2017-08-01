<?php
session_start();
$_SESSION['testCount'] = 1;

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
        $sql = "SELECT name,team1,team2 FROM matches ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo "<b>". $row["name"].  "<br>";
        $main = $row["name"];
        $conn->close();


$servername = "localhost";
$username = "root";
$password = "";
$db = $main;

$con=mysqli_connect($servername,$username,$password,$db);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
for($field = 1; $field < 23; $field++){
	//$field = 1; 
	//$field < 23; $field++){

$field0 = (($field-1)*9 + 0);
$field1 = (($field-1)*9 + 1);
$field2 = (($field-1)*9 + 2);
$field3 = (($field-1)*9 + 3);
$field4 = (($field-1)*9 + 4);
$field5 = (($field-1)*9 + 5);
$field6 = (($field-1)*9 + 6);
$field7 = (($field-1)*9 + 7);
$field8 = (($field-1)*9 + 8);

$updateScore = mysqli_query($con, "SELECT score from players WHERE id = '$field'");
	$fetched = mysqli_fetch_assoc($updateScore);
	$fetchedUpdateSum = $fetched['score'] + $_POST[$field0];
	$sqlCopy1 = "UPDATE players SET score=$fetchedUpdateSum WHERE id = '$field'";
	mysqli_query($con, $sqlCopy1);
$updateBallsfaced = mysqli_query($con,"SELECT ballasfaced from players WHERE id = '$field'");
	$fetched = mysqli_fetch_assoc($updateBallsfaced);
	$fetchedUpdateSum = $fetched['ballasfaced'] + $_POST[$field1];
	$sqlCopy1 = "UPDATE players SET ballasfaced=$fetchedUpdateSum WHERE id = '$field'";
	mysqli_query($con, $sqlCopy1);
$updateSix = mysqli_query($con,"SELECT six from players WHERE id = '$field'");
	$fetched = mysqli_fetch_assoc($updateSix);
	$fetchedUpdateSum = $fetched['six'] + $_POST[$field2];
	$sqlCopy1 = "UPDATE players SET six=$fetchedUpdateSum WHERE id = '$field'";
	mysqli_query($con, $sqlCopy1);
$updateFour = mysqli_query($con,"SELECT four from players WHERE id = '$field'");
	$fetched = mysqli_fetch_assoc($updateFour);
	$fetchedUpdateSum = $fetched['four'] + $_POST[$field3];
	$sqlCopy1 = "UPDATE players SET four=$fetchedUpdateSum WHERE id = '$field'";
	mysqli_query($con, $sqlCopy1);
$updateOversbowled = mysqli_query($con,"SELECT oversbowled from players WHERE id = '$field'");
	$fetched = mysqli_fetch_assoc($updateOversbowled);
	$fetchedUpdateSum = $fetched['oversbowled'] + $_POST[$field4];
	$sqlCopy1 = "UPDATE players SET oversbowled=$fetchedUpdateSum WHERE id = '$field'";
	mysqli_query($con, $sqlCopy1);
$updateWickets = mysqli_query($con,"SELECT wickets from players WHERE id = '$field'");
	$fetched = mysqli_fetch_assoc($updateWickets);
	$fetchedUpdateSum = $fetched['wickets'] + $_POST[$field5];
	$sqlCopy1 = "UPDATE players SET wickets=$fetchedUpdateSum WHERE id = '$field'";
	mysqli_query($con, $sqlCopy1);
$updateWide = mysqli_query($con,"SELECT wide from players WHERE id = '$field'");
	$fetched = mysqli_fetch_assoc($updateWide);
	$fetchedUpdateSum = $fetched['wide'] + $_POST[$field6];
	$sqlCopy1 = "UPDATE players SET wide=$fetchedUpdateSum WHERE id = '$field'";
	mysqli_query($con, $sqlCopy1);
$updateNoballs = mysqli_query($con,"SELECT noball from players WHERE id = '$field'");
	$fetched = mysqli_fetch_assoc($updateNoballs);
	$fetchedUpdateSum = $fetched['noball'] + $_POST[$field7];
	$sqlCopy1 = "UPDATE players SET noball=$fetchedUpdateSum WHERE id = '$field'";
	mysqli_query($con, $sqlCopy1);
$updateRuns = mysqli_query($con,"SELECT runs from players WHERE id = '$field'");
	$fetched = mysqli_fetch_assoc($updateRuns);
	$fetchedUpdateSum = $fetched['runs'] + $_POST[$field8];
	$sqlCopy1 = "UPDATE players SET runs=$fetchedUpdateSum WHERE id = '$field'";
	mysqli_query($con, $sqlCopy1);

}
//}

header("Location: test.php");
?>

