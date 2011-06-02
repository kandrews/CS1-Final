<?php
	include("../includes/template.php");
	include("../includes/connect.php");
?>
	<?php renderHeader("Details","");
		  $search = $_POST['search2'] ;
  		  $trimmed = trim($search);
  

	$query = "SELECT * FROM posts WHERE content LIKE \"%$trimmed%\" OR author LIKE \"%$trimmed%\" 
			  OR tags LIKE \"%$trimmed%\"";
	
 	$results = mysql_query($query) or die("query fail");
	
	echo "<p>You searched for: &quot;" . $search . "&quot;</p>";
	
	while ($row = mysql_fetch_array($results)) {
			print("<h2><a class='index' href='../posts/blog.php'>".$row['author']."</a></h2>");
			}
		
		
	?>


<?php renderFooter(); ?>