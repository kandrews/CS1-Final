<?php
	include('../includes/connect.php');
	$firstname= $_POST['firstname'];
	$lastname= $_POST['lastname'];
	$phone= $_POST['phone'];
	$email= $_POST['email'];
	$comment= $_POST['comment'];
	
	
	$to = 'katie.andrews94@gmail.com';
	$subject = "'Message from ".$firstname.",".$lastname."'";
	$message = "('".$comment."') you can reach me at ('".$phone."')";
	$headers = "'Reply-to:".$email."'From:".$email."'";
	$sent = mail($to, $subject, $message, $headers); 
	
	
	$query="INSERT INTO Contact (firstname, lastname, phone, email, comment) 
	VALUES ('".$firstname."', '".$lastname."','".$phone."', '".$email."','".$comment."')";

if (!mysql_query($query))
     
  {
  die('Error: ' . mysql_error());
  }
 header("Location:success.html"); 
 mysql_close();
 ?>
 

	