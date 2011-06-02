	<?php 
	include("../includes/connect.php");
	$results = mysql_query("SELECT * FROM posts") or die("Could not complete query");
	mysql_close();
	?>

<!DOCTYPE html> 
<html>
	<!-- Errors start here, effect the rest of the page. !-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<meta http-equiv="X-UA-Compatible" content="IE=8" /> 
	<meta content="keywords" /> 
	<meta content="description" /> 
	<link rel="shortcut icon" href="../images/favicon.png" /> 

	<title>Lee Penzarella Photography</title> 
 	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/dark-hive/jquery-ui.css" type="text/css" media="all" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script> 
			<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js" type="text/javascript"></script> 
			<script src="http://jquery-ui.googlecode.com/svn/tags/latest/external/jquery.bgiframe-2.1.2.js" type="text/javascript"></script> 
			<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/i18n/jquery-ui-i18n.min.js" type="text/javascript"></script>
			<script type="text/javascript" src="jquery/jquery-ui-1.8.13.custom/js/jquery-ui-1.8.13.custom.min.js"></script>
			<link rel="stylesheet" href="../includes/photography2.css" type="text/css"/>

	
	<script type= "text/javascript">
	
	$(function() {
		$( "#accordion" ).accordion();
	});
	
	</script>
	</head>
		<body>
			<div id= "container">
				<img src="../images/header2.png" alt= "header" />
			<div id= "content">
				<form action= "../search/searchresults.php" method="post" id= "float_right">	
					<input type="text" name= "search2" />
					<input type= "submit" value= "Search" />
				</form>
				<div id= "nav">
					<ul>
						<li><a title="Home Page" href="../lee_index.html" >HOME</a></li> 
	 					
						<li><a title="About Page" href="../about.html"  >ABOUT</a></li> 
	 
						<li><a title="Gallery" href="../gallery/gallery.html" >GALLERY</a></li> 
	 
						<li><a title="Blog" href="blog.php" id="current">BLOG</a></li> 
						
						<li><a title="Contact Page" href="../contact/contact.html" >CONTACT</a></li> 
						 
						<li><a title="Friends" href="../friends/friends.php">FRIENDS</a></li> 
					</ul>	
				</div>
				
			<div id= "main">
				<p>
					<h1>Lee's Blog</h1>
				</p>
					<a class= "blog" href="new.php"><button>New post</button></a>
					
				<div id="accordion">
					<?php
					while ($row = mysql_fetch_array($results)) {
						print("<h3 name= 'blog_header'><a  href='show.php?id=".$row['id']."'>".$row['author']."</a></h3>");
						print("<div><p>".$row['content']."</p><br/><a href='delete.php?id=".$row['id']."'><button>Delete</button></a></div>");
					}
				?>
					
				</div>
				
			</div>
							
		<br class="cb" />	
	
	
		</div>
			<div id="ka">
				<a href="http://www.linkedin.com/pub/katie-andrews/32/847/681">developed by Katie Andrews </a>
			</div> 
	</div>		
	</body>
</html>
