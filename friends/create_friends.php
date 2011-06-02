<?php
	include('../includes/connect.php');

	$name= $_POST['name'];
	$description= $_POST['description'];
	$url = $_POST['url'];

	$query = "INSERT INTO friends (name, description, url) VALUES ('".$name."','".$description."','".$url."')";
	$results= mysql_query($query) or die("Could not complete query");
	
	
	header("Location:friends.php");
	
	mysql_close();
?>
