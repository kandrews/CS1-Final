 <?php
 	include("../includes/connect.php");
	
  $to = $_POST['katie.andrews94@gmail.com']; 
  $subject = $_POST['firstname, lastname']; 
  $email = $_REQUEST['email']; 
  $message = $_REQUEST['comment']; 
  $headers = "From: $email"; 
  $sent = mail($to, $subject, $message, $headers); 
  
  if($sent) {
   header("Location:success.html"); 
  	} else {
  	print "We encountered an error sending your mail"; }

	mysql_close();
?>
