<?php
	function register_user($registration_data) {
		array_walk($registration_data, 'array_sanitize');
		$registration_data['password'] = md5($registration_data['password']);
		
		$fields = '`' . implode('`, `', array_keys($registration_data)) . '`';
		$data = '\'' . implode('\', \'', $registration_data) . '\'';
		
		mysql_query('INSERT INTO `users` (' . $fields . ') VALUES (' . $data . ')');
	}
	
	function login($username, $password) {
		$user_id = user_id_from_username($username);
		
		$username = sanitize($username);
		$password = md5($password);
		
		$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
		return (mysql_result($query, 0) == 1) ? $user_id : false;
	}
	
	function logged_in() {
		return (isset($_SESSION['user_id']));
	}

	function user_exists($username) {
		$username = sanitize($username);
		$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'");
		return (mysql_result($query, 0) == 1) ? true : false;
	}
	
	function user_activated($username) {
		$username = sanitize($username);
		$query = mysql_query("SELECT `activated` FROM `users` WHERE `username` = '$username'");
		return (mysql_result($query, 0, 'activated') == 1) ? true : false;
	}
	
	function user_id_from_username($username) {
		$username = sanitize($username);
		$query = mysql_query("SELECT `user_id` FROM `users` WHERE `username` = '$username'");
		return mysql_result($query, 0, 'user_id');
	}
	
	function user_get_first_name($username) {
		$username = sanitize($username);
		$query = mysql_query("SELECT `first_name` FROM `users` WHERE `username` = '$username'");
		return mysql_result($query, 0, 'first_name');
	}
	
	function user_get_last_name($username) {
		$username = sanitize($username);
		$query = mysql_query("SELECT `last_name` FROM `users` WHERE `username` = '$username'");
		return mysql_result($query, 0, 'last_name');
	}

?>