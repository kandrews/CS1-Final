<?php

	include('../includes/connect.php');
	$myId = $_GET['id'];
	
	$query = "DELETE FROM posts WHERE id='$myId'";
	
	
	$results = mysql_query($query) or die ("Could not get query");
	mysql_close();
	header("Location:blog.php");
?>
