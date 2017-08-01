
<html>
<head>
  <title>Player Performance</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/cities.css">
  <script type="text/javascript" src="js/javas.js"></script>
</head>
<body>
    <header class="clearfix">
      <div class="logo">
        <h1>Player Performance</h1>
        <h2></h2>
      </div>  <!-- logo -->

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
    <div class="home-col">
    
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
$mn1 = $row['team1'];
$mn2 = $row['team2'];
$TournamentName = $dataBase;

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$array1 = array();
$count = 0;

$sql1 = "CREATE TABLE players (id INT(10) ,name VARCHAR(20),score INT(5) NOT NULL,ballasfaced INT(5),six INT(3),four INT(3),oversbowled VARCHAR(4),wickets INT(3) NOT NULL,wide INT(3),noball INT(3),runs INT(3),PRIMARY KEY (id))";


if (mysqli_query($conn, $sql1)) {
} else {
   //   echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}


$conn1 = new mysqli($servername, $username, $password);
$sqlCopy1 = "INSERT INTO $db.players (id,name) SELECT PlayerNumber,Name FROM $TournamentName.$mn1;";
mysqli_query($conn1, $sqlCopy1);
$sqlCopy2 = "INSERT INTO $db.players (id,name) SELECT (PlayerNumber+11),Name FROM $TournamentName.$mn2;";
mysqli_query($conn1, $sqlCopy2);


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

$name = 0;
echo "<table border =1 align='center'>";  
?>
<form method="post" action="testhidden.php" >
<?php 
    for ($raw=1; $raw <= 23; $raw++) {   
        echo "<tr align='center'> \n";
        $var = $raw;  
        for ($col=1; $col <= 10; $col++) {   
           $index = $raw - 2;        
           $p = $col * $raw;
           if( ($col == 1) && ($raw == 1) ){echo "<td>Player Name</td>";}
           else if( ($col == 2) && ($raw == 1) ){echo "<td width='10%'>Score</td>";}
           else if( ($col == 3) && ($raw == 1) ){echo "<td width='10%'>Balls Faced</td>";} 
           else if( ($col == 4) && ($raw == 1) ){echo "<td width='10%'>6's</td>";} 
           else if( ($col == 5) && ($raw == 1) ){echo "<td width='10%'>4's</td>";} 
           else if( ($col == 6) && ($raw == 1) ){echo "<td width='10%'>Overs Bowled</td>";} 
           else if( ($col == 7) && ($raw == 1) ){echo "<td width='10%'>Wickets</td>";} 
           else if( ($col == 8) && ($raw == 1) ){echo "<td width='10%'>Wides</td>";}
           else if( ($col == 9) && ($raw == 1) ){echo "<td width='10%'>No Balls</td>";} 
           else if( ($col == 10) && ($raw == 1)){echo "<td width='10%'>Runs</td>";}
           else if( ($col == 1) && ( $raw = $var ) ){echo "<td>$array1[$index]</td>";}   
  
          else{echo "<td>
              <select name=$name>
                    <option value=0>0</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
              </select> </td>"; 
          $name+=1;
          }                    
        }  
            echo "</tr>"; 
    } 
         
        echo "</table>";  
?>
<input type="submit">
</form>








    </div>        

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
</body>
</html>
