<?php
	// Logic for logging a user in. Checks:
	//		* Neither field is empty
	//		* The user is registered
	//		* The user's account is activated
	//		* Check for valid username format: abc123
	//		* The username and password match
	
	include '../core/init.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	
	if (empty($username) || empty($password)) {
		$return['error_blank'] = true;
	} else if (!preg_match('/[a-z]+[0-9]+/', $username)) {
		$return['error_formatting'] = true;
	} else if (!user_exists($username)) {
		$return['error_user_not_exist'] = true;
	} else if (!user_activated($username)) {
		$return['error_user_not_activated'] = true;
	} else {
		$login = login($username, $password);
		if ($login === false) {
			$return['error_match'] = true;
		} else {
			$_SESSION['user_id'] = $login;
			$_SESSION['username'] = $username;
			$return['success'] = true;
		}
	}
	echo json_encode($return);
?>