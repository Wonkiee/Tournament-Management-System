<html>
<body>
<title>Player Statistics</title>
<h1>Batsmen's and Bowler's Stats</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "players";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to Server and Database!";

$array1 = array();
$count = 0;

$sql = "SELECT name FROM players";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "name: " . $row["name"]."<br>";
        $array1[$count] = $row["name"];
        //echo "name: " . $array1[$count]."<br>";
        $count = $count+1;
    }
} else {
    echo "0 results";
}


?>
 <table border="1">
  
  <tr>
    <th>Player Name</th>
    <th>Score</th>
    <th>Balls Faced</th>
    <th>6'S</th>
    <th>4'S</th>
    <th>Overs Bowled</th>
    <th>Wickets</th>
    <th>Wides</th>
    <th>No Balls</th>
    <th>Runs</th>
  </tr>
  <tr><td>Team 1</td></tr>
  <tr>
    <td><?php echo $array1[0]; ?></td>
    <td><input type="text" name="mname"/></td>
    <td><input type="text" name="mname"/></td>
    <td><input type="text" name="mname"/></td>
    <td><input type="text" name="mname"/></td>
    <td><input type="text" name="mname"/></td>
    <td><input type="text" name="mname"/></td>
    <td><input type="text" name="mname"/></td>
    <td><input type="text" name="mname"/></td>
    <td><input type="text" name="mname"/></td>
  </tr>
  <tr>
    <td><?php echo $array1[1];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[2];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[3];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[4];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[5];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[6];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>


  <tr>
    <td><?php echo $array1[0]; ?></td>
    <td> ssad </td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[1];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[2];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[3];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr><td>Team 2</td></tr>
  <tr>
    <td><?php echo $array1[4];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[5];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[6];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>

  <tr>
    <td><?php echo $array1[0]; ?></td>
    <td> ssad </td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[1];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[2];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[3];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[4];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[5];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[6];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
  </tr>
  <tr>
    <td><?php echo $array1[6];?></td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    <td>$100</td>
    </tr>
</table> 

















</body>
</html>