<?php 
	// when starting the website this needs to run to start our session
	session_start();
	// error_reporting(0);

	// requiring the database when connecting 
	require 'database/connect.php';
	// adding the users function 
	require 'users.php';
	// requiring general file 
	require 'general.php';
	
	// this is a global variable that is being access by every page 
	$errors = array();

?>