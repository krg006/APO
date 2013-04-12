<?php
	// Logic for registering a new user. Checks:
	//		* All fields are entered
	//		* Passwords match confirmation
	//		* Email address is a valid Bucknell email address
	//		* The email address is not already in use
	
	include '../core/init.php';
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email_addr'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];
	
	if ($first_name == '' || $last_name == '' || $email == '' || $password == '' || $password_confirm == '') {
		$return['error_blank'] = true;
	} else if ($password !== $password_confirm) {
		$return['error_match'] = true;
	} else if (substr($email, -13) !== '@bucknell.edu') {
		$return['error_improper_email'] = true;
	} else if (user_exists(substr($email, 0, -13))) {
		$return['error_already_registered'] = true;
	} else {
		$registration = array(
		'username'			=> substr($email, 0, -13),
		'password'			=> $password,
		'first_name'		=> $first_name,
		'last_name'			=> $last_name,
		'activated'			=> 0
		);
		$return['success'] = true;
		register_user($registration);
	}
	
	echo json_encode($return);
?>