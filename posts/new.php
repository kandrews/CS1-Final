<?php
include('../includes/connect.php');
include('../includes/template.php');
?>
<?php renderHeader('New Post','');?>
		<h1>Create a new post</h1>
			<form name="newPostForm" action="create.php" method="post" class="font">
				Title: <br />
				<input type= "text" name= "author"><br/>
				Post:<br />
				<textarea cols="40" rows="8" name= "content" ></textarea><br /> 
				Tags (separated by commas):<br />
				<input type= "text" name= "tags" /><br />
			
				<input type="submit" />
			</form>
					<br />
<?php renderFooter();?>