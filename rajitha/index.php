
<html>
<head>
    <title>Creating a Match</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/cities.css">
    <script type="text/javascript" src="js/javas.js"></script>
</head>
<body>
        <header class="clearfix">
            <div class="logo">
                <h1>Creating a Match</h1>
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
 $_SESSION['count'] = 0;

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
$db = $dataBase;
//$db = 'WestMinister';

$con=mysqli_connect($servername,$username,$password,$db);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?> 
 
<form method = "POST" action = "summaryBefore.php" />

TEAMS (1st Batting | 2nd Batting) : <select name="matchname1">
 
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '1'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '2'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '3'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '4'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '5'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '6'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '7'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '8'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '9'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '10'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '11'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '12'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '13'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '14'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '15'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>

              </select>  Vs <select name="matchname2">
  
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '1'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '2'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '3'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '4'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '5'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '6'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '7'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '8'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '9'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '10'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '11'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '12'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '13'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '14'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>
                    <option value='<?php $updateScore = mysqli_query($con, "SELECT name from Teams WHERE teamNumber = '15'"); $fetched = mysqli_fetch_assoc($updateScore); echo $fetched['name']; ?>'><?php  echo $fetched['name']; ?> </option>

              </select> <br>
ROUND : <input type="text" name="matchRound"/> <br>
GROUND : <input type="text" name="matchGround"/> <br>
<input type="submit" value="Submit" />

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
