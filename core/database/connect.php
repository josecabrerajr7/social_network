<?php
	function connect() 
	{
		// database ip or server name goes here
		$db_server = "localhost";
		// database username that its going to ask when logging in
		$db_username = "";
		// database password is required when logging in
		$db_password = "";
		// database name of where the tables and info are store at
		$db_name = "";
		// this is the table name, where we want the table to open at
		$db_table_name = "";
	
		// connecting too the database with the credentials
		return mysqli_connect($db_server, $db_username, $db_password, $db_name);
	}
	// displaying a message if connection was successful or failure
	 /* if(!connect()) {
		die('Connection was\'t successfully' .  mysqli_connect_error());
	}
	echo 'Connected successfully'; */



 ?>