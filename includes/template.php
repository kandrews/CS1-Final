<?php

function renderHeader($title, $path) {
	echo '<!DOCTYPE HTML> 
		  <html>
			<head>
				<title>'.$title.'</title>
				<meta charset="UTF-8">
				<link type="text/css" rel="stylesheet" href="'.$path.'../includes/photography2.css" />
			</head>
			<body> 
				<div id= "container">
					<img src="../images/header2.png" alt= "header" />
					<div id= "content">
						<form action= "../search/searchresults.php" method="post" id= "float_right">	
							<input type="search" name= "search2" />
							<input type= "submit" value= "Search" />
						</form>
						<div id= "nav">
							<ul>
								<li><a title="Home Page" href="../lee_index.html" >HOME</a></li> 
			 					
								<li><a title="About Page" href="../about.html"  >ABOUT</a></li> 
			 
								<li><a title="Gallery" href="../gallery/gallery.html" >GALLERY</a></li> 
			 
								<li><a title="Blog" href="../posts/blog.php">BLOG</a></li> 
								
								<li><a title="Contact Page" href="../contact/contact.html">CONTACT</a></li> 
								 
								<li><a title="Friends" href="../friends/friends.php">FRIENDS</a></li> 
							</ul>	
						</div>
						<div id= "main">';
}

function renderFooter() {
	echo '		
						</div>
					<br class= "cb" />
				</div>

				<div id="ka">
				<a href="http://www.linkedin.com/pub/katie-andrews/32/847/681">developed by Katie Andrews </a>
				</div> 	
			</div>	
		</body>
	</html>';
}

?>