<?php 
	include 'init.php';
	if (empty($_POST) === false) {
		// this is getting the usersname and password from the login form
		$username = $_POST['username'];
		$password = $_POST['password'];
		// checking for any errors when logging in
		if (empty($username) === true || empty($password) == true)	{
			$errors[] = 'Please enter username or password';
		} else if (user_exists($username) === false) {
			$errors[] = 'We can\'t find that username. Have you registered?';
		} elseif (user_active($username) === false) {
			$errors[] = 'You haven\'t activated your account!';
		} else {
			$login = login($username, $password);
			if ($login === false) {
				$errors[] = 'username or password is incorrect';
			} else {
				$_SESSION['user_id'] = $login;
				header('Location: ../index.php');
				exit();
			}
		}
	} else {
		$errors[] = 'No data received';
	}
		echo output_errors($errors);
?>