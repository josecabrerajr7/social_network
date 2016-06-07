<?php
	// using sanitize function helps out with sql injections of data that not supposed to be there
	function sanitize($data)
	{
		return mysqli_real_escape_string(connect(), $data);
	}
	// the output error function is going to allow the user to display it in a unorder list 
	function output_errors($errors)
	{
		return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
	}
?>