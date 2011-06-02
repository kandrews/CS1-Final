<?php

	include('../includes/connect.php');
	$myId = $_GET['id'];
	
	$query = "DELETE FROM friends WHERE id='$myId'";
	
	
	$results = mysql_query($query) or die ("Could not get query");
	mysql_close();
	header("Location:friends.php");
?>
