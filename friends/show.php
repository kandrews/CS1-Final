<?php
	include("../includes/template.php");
	include("../includes/connect.php");
?>
	<?php renderHeader("Details","");
		$myID = $_GET['id'];
		$results = mysql_query("SELECT * FROM friends WHERE id =".$myID) or die("ERROR query fail");
		
		$row = mysql_fetch_array($results);
	?>

<?php
		echo("<a class='friends' href='http://".$row['url']."'> ".$row['name']."</a>"); 
		print("<p>".$row['description']."</p><a href='delete.php?id=".$row['id']."'><button value='delete'>Delete</button></a><br />");		
		
?> 
		<br />
		

 
<?php renderFooter(); ?>