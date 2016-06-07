<?php 
	include 'init.php';

	$firstname 		= 	$_POST['firstname'];
	$lastname 		= 	$_POST['lastname'];
	$username 		= 	$_POST['username'];
	$email 			= 	$_POST['email'];
	$confirmemail 	= 	$_POST['comfirmemail'];
	$password		=	$_POST['password'];
	$retypepassword =	$_POST['retypepassword'];
	$month 			= 	$_POST['month'];
	$date			=	$_POST['date'];
	$year			=	$_POST['year'];
	$gender			=	$_POST['gender'];
	
	if (empty($firstname) === true) {
		echo "First Name is Required!";
	}
	if (empty($lastname) === true) {
		echo "Last Name Required!";
	}
	if (empty($username) === true) {
		if (user_exists($username) === true) {
			echo 'sorry, the username ' . $username . 'is already taken.';
		}
	}



 ?>