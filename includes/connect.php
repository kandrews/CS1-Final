<?php

	$server = "10.194.111.8";
	$username = "user_cb1f658c";
	$password = "EH;KlGeiZpW(q.";
	$database = "db_cb1f658c";

		mysql_connect($server, $username, $password) or die ("Could not connect to server");
		mysql_select_db($database) or die ("Could not connect to database");

?>