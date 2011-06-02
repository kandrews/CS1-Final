<?php
	include('../includes/connect.php');
	include('../includes/template.php');
	renderHeader("Friends","");
	
	$name = $_POST['name'];
	$description = $_POST['description'];
	$url = $_POST['url'];
	
	$query = "SELECT * FROM friends";
	
 	$results = mysql_query($query) or die("query fail");
?>
	<p>
		<h1>Lee's Friends</h1>
		<a class= "blog" href="new_friend.php"><button>Add Friend</button></a>
			<?php
					while ($row = mysql_fetch_array($results)) {
						print("<h3><a class= 'friends' href='show.php?id=".$row['id']."'>".$row['name']."</a></h3>");
						print("<div><p>".$row['description']."</p></div>");
					}
				?>
	
	</p>	
				
<?php
	renderFooter();
	mysql_close();
?>