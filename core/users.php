<?php
	// this function is going to allow to know if the user is logged in
	function logged_in() 
	{
		return (!isset($_SESSION['user_id'])) ? true : false;
	}
	function mysqli_result($res, $row, $field=0) 
	{ 
		$res->data_seek($row); 
	    $datarow = $res->fetch_array(); 
	    return $datarow[$field]; 
	}
	// this function is checking if the user exists
	 function user_exists($username)
	 {
	 	// sanitize the user input to not allow unknown information to go through
		$username = sanitize($username);
		// query the database to see if the username exists and comparing it to the variable the user input
		$query = mysqli_query(connect(), "SELECT COUNT(user_id) FROM users WHERE username = '$username'");	
		// checking the row the data is at
		$check = mysqli_num_rows($query);
		// returning the information that was inputted
		return (mysqli_result($query, 0) == 1) ? true:false;
	 }
	 // checking if the user account is active
	 function user_active($username)
	 {
	 	// sanitize the user input to not allow unknown information to go through
	 	$username = sanitize($username);
	 	// query the database to see if the username is active and comparing it username and active field 
		$query = mysqli_query(connect(), "SELECT COUNT(user_id) FROM users WHERE username = '$username' AND active = 1");
		// checking the row the data is at
		$check = mysqli_num_rows($query);
		// checking the mysql_result function and comparing the value of one to see if they match
		return (mysqli_result($query, 0) == 1) ? true:false;
	 }
	 function user_id_from_username($username)
	 {
	 	// sanitize the user input to not allow unknown information to go through
	 	$username = sanitize($username);
	 	return mysqli_result(mysqli_query(connect(), "SELECT user_id FROM users WHERE username = '$username'"), 0, 'user_id' );
	 }
	 function login($username, $password)
	 {
	 	$user_id = user_id_from_username($username);
	 	// sanitize the user input to not allow unknown information to go through
	 	$username = sanitize($username);
	 	$password = md5($password);
	 	$query = mysqli_query(connect(), "SELECT COUNT(user_id) FROM users WHERE username = '$username' AND password = '$password'");
	 	return (mysqli_result($query, 0) == 1) ? $user_id : false;
	 }
 ?>