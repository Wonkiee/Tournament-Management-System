<?php
	session_start();

	$_SESSION['TeamNames'] = array($_POST['team1'] , $_POST['team2'], $_POST['team3'] , $_POST['team4'] , $_POST['team5'] , $_POST['team6'], $_POST['team7'] , $_POST['team8'] , $_POST['team9'] , $_POST['team10'], $_POST['team11'] , $_POST['team12'] , $_POST['team13'] , $_POST['team14'], $_POST['team15']);

	header('Location: enterDB.php');
?>