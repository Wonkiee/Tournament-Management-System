<?php
session_start();
?>
<html>
<head>
  <title>Select Players</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/cities.css">
  <script type="text/javascript" src="js/javas.js"></script>
</head>
<body>
    <header class="clearfix">
      <div class="logo">
        <h1>Enter the Players</h1>
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
$var = $_POST['teamN'];
$_SESSION['varname'] = $var;

//connect to db and create table
$servername = "localhost";
$username = "root";
$password = "";
$dbname = $_SESSION['TournamentName'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);} 


  $sql1 = "CREATE TABLE $var (PlayerNumber int NOT NULL AUTO_INCREMENT, Name varchar(50) , PRIMARY KEY (PlayerNumber))";

  if ($conn->query($sql1) === TRUE) {  } 
  else {
      echo "Error: " . $sql1 . "<br>" . $conn->error;
  }

?>

  <form method="post" action="enterTeams.php" >

    <?php

    for($k=1;$k<=11;$k++){

    ?>
      <input type="text" name="PlayerName<?php echo $k; ?>"/><br/>
    <?php
    }

    ?>

      <input type="submit" value="Add" onclick="msg1()">      
  </form>

  <script>
    function msg1() {
    //  window.open("http://www.w3schools.com");
        alert("Players were successfully added");
    }
  </script>



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

