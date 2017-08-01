
<html>
<head>
	<title>Knockout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cities.css">
	<script type="text/javascript" src="js/javas.js"></script>
</head>
<body>
		<header class="clearfix">
			<div class="logo">
				<h1>Knockout</h1>
				<h2></h2>
			</div>	<!-- logo -->

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
				<li><a href="index.php">Home</a></li>
				<li><a href="cityChoises.php">Admin Login</a></li>
				
				<li><a href="about.php">About Us</a></li>
			</ul>
		</nav>	
			 <link rel="stylesheet" href="css/style.css">
			<?php

function is_player($round, $row, $team) {
    return $row == pow(2, $round-1) + 1 + pow(2, $round)*($team - 1);
}

$num_teams = 16;
$total_rounds = floor(log($num_teams, 2)) + 1;
$max_rows = $num_teams*2;
$team_array = array();
$unpaired_array = array();
$score_array = array();

$team_array = array('foo' => 'bar' );
//$score_array = array("123","1245","2345");

for ($round = 1; $round <= $total_rounds; $round++) {
    $team_array[$round] = 1;
    $unpaired_array[$round] = False;
    $score_array[$round] = False;
}


echo "<div style ='font:11px/21px Arial,tahoma,sans-serif;color:#ff0000'><table border=\"2\" cellspacing=\"2\" cellpadding=\"2\">\n";
echo "\t<tr>\n";

for ($round = 1; $round <= $total_rounds; $round++) {

    echo "\t\t<td colspan=\"2\"><strong>Round $round</strong></td>\n";

}


echo "\t</tr>\n";

for ($row = 1; $row <= $max_rows; $row++) {

    echo "\t<tr>\n";

    for ($round = 1; $round <= $total_rounds; $round++) {
        $score_size = pow(2, $round)-1;
        if (is_player($round, $row, $team_array[$round])) {
            $unpaired_array[$round] = !$unpaired_array[$round];
            echo "\t\t<td>Team</td>\n";
            echo "\t\t<td width=\"40\">&nbsp;</td>\n";
            $team_array[$round]++;
            $score_array[$round] = False;
        } else {
            if ($unpaired_array[$round] && $round != $total_rounds) {
                if (!$score_array[$round]) {
                    echo "\t\t<td rowspan=\"$score_size\">Score</td>\n";
                    echo "\t\t<td rowspan=\"$score_size\" width=\"20\">$round</td>\n";
                    $score_array[$round] = !$score_array[$round];
                }
            } else {
                echo "\t\t<td colspan=\"2\">&nbsp;</td>\n";
            }
        }

    }

    echo "\t</tr>\n";

}

echo "</table>\n";

?>
		 
		  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                    

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