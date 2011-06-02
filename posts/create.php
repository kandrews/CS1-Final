<?php
	include('../includes/connect.php');

	$author= $_POST['author'];
	$content= $_POST['content'];
	$tags = $_POST['tags'];

	$query = "INSERT INTO posts (author, content, tags) VALUES ('".$author."','".$content."','".$tags."')";
	$results= mysql_query($query) or die("Could not complete query");
	
	
	header("Location:blog.php");
	
	mysql_close();
?>
