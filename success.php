<?php
    session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false)
   {
    header("Location: cityChoises.php");
}
?>
<html>
<head>
    <title>Tournament Handling</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/cities.css">
    <script type="text/javascript" src="js/javas.js"></script>

    <style type="text/css">
        input#create
        {
            width: 400px;
            height: 30px;
        }
    </style>
</head>
<body>
        <header class="clearfix">
            <div class="logo">
                <h1>Admin Login</h1>
                <h2></h2>
            </div>  <!-- logo -->

            <div class="Socialmeadia">
                <ul>
                <li><a href="https://www.facebook.com/dimhuman/"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a></li>
                <li><a href="https://aboutme.google.com/u/0/#profile_photo"><i class="fa fa-youtube fa-fw" aria-hidden="true"></i></a></li>
                <li><a href="https://plus.google.com/101103879572967818603"><i class="fa fa-google-plus fa-fw" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a></li>
                </ul>
            </div> <!-- Socialmeadia -->

        </header>
        
<footer>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cityChoises.php">Admin Login</a></li>
                
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>  
             <link rel="stylesheet" href="css/style.css">
                 
          <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <div class="homecontent clearfix">
            <form align='center' method="post" action="team/index.php">
            <input id = "create" type = "submit" value="Create a new Tournament">        
            <p class="message"></p>
            </form>  

            <form align='center' method="post" action="rajitha/index.php">  
            <input id = "create" type = "submit" value="Manage current Tournament">        
            <p class="message"></p>
            </form>

            <form align='center' method="post" action="rajitha/easy.php">  
            <input id = "create" type = "submit" value="Manage current Match">        
            <p class="message"></p>
            </form> 

            <form align='center' method="post" action="rajitha/past.php">  
            <input id = "create" type = "submit" value="Refer to past Summaries">        
            <p class="message"></p>
            </form> 

            <form align='center'  method="post" action="cityChoises.php"> 
            <input type = "submit" value="Logout">        
              <p class="message"></p>             
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



<html>
<head>
	<title></title>
</head>
<body>
<header class="clearfix">
<div class="logo">
	<h1></h1>


	

</div>
</header>
</body>
</html>
