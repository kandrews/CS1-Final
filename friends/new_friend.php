<?php
include('../includes/connect.php');
include('../includes/template.php');
?>
<?php renderHeader('New Friend','');?>
		<h1>Add a new friend</h1>
			<form name="newPostForm" action="create_friends.php" method="post" class="font">
				Name: <br />
				<input type= "text" name= "name"><br/>
				Description:<br />
				<textarea cols="40" rows="8" name= "description" ></textarea><br /> 
				Url:<br />
				<input type= "text" name= "url" /><br />
			
				<input type="submit" />
			</form>
					<br />
<?php renderFooter();?>