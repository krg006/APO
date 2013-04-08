<?php
	ob_start();
	include '../core/init.php';
	include '../includes/head.php';


	// Logic for registering a new user. Checks:
	//		* All fields are entered
	//		* Passwords match confirmation
	//		* Email address is a valid Bucknell email address
	//		* The email address is not already in use
	if ($_GET['register'] == 'true') {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email_addr'];
		$password = $_POST['password'];
		$password_confirm = $_POST['password_confirm'];
		
		if ($first_name == '' || $last_name == '' || $email == '' || $password == '' || $password_confirm == '') {
			header("Location: members.php?register=show&fields=false");
		} else if ($password !== $password_confirm) {
			header("Location: members.php?register=show&password=false");
		} else if (substr($email, -13) !== '@bucknell.edu') {
			header("Location: members.php?register=show&email=false");
		} else if (user_exists(substr($email, 0, -13))) {
			header("Location: members.php?register=show&email=duplicate");
		} else {
			$registration = array(
			'username'			=> substr($email, 0, -13),
			'password'			=> $password,
			'first_name'		=> $first_name,
			'last_name'			=> $last_name,
			'activated'			=> 0
			);
			register_user($registration);
			header("Location: members.php?register=success");
		}
	}


	// Logic for logging a user in. Checks:
	//		* Neither field is empty
	//		* The user is registered
	//		* The user's account is activated
	//		* Check for valid username format: abc123
	//		* The username and password match
	
	if ($_GET['login'] == 'true') {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		
		if (empty($username) || empty($password)) {
			header("Location: members.php?login=error&fields=false");
		} else if (!preg_match('/[a-z]+[0-9]+/', $username)) {
			header("Location: members.php?login=error&format=false");
		} else if (!user_exists($username)) {
			header("Location: members.php?login=error&registered=false");
		} else if (!user_activated($username)) {
			header("Location: members.php?login=error&activated=false");
		} else {
			$login = login($username, $password);
			if ($login === false) {
				header("Location: members.php?login=error&match=false");
			} else {
				$_SESSION['user_id'] = $login;
				$_SESSION['username'] = $username;
				header("Location: members.php");
			}
		}
	}
	
?>

<body>
	
	<?php
		include '../includes/header.php';
	?>
	<script>
		$('#membersLink').css("font-weight", "bold");
	</script>
	
	<div style="margin-top: 29px;" align="center">
		<?php
			if (logged_in()) {
				include '../includes/dashboard/dashboard.php';
			} else {
				include '../includes/login.php';
				include '../includes/register.php';
			}
		?>
	</div>
	
	<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.10.2.custom.js"></script>
	<script type="text/javascript" src="../js/popups.js"></script>
	
</body>
</html>