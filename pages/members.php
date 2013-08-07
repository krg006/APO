<?php
	ob_start();
	include '../core/init.php';
	include '../includes/head.php';
?>

<body>
	<?php include '../includes/header.php';?>
	<script>$('#membersLink').addClass("buttonPressed");</script>
	
	<?php
		if (logged_in()) {
			include '../includes/members/dashboard/dashboard.php';
		} else {
			include '../includes/members/login_form.php';
			include '../includes/members/registration_form.php';
		}
	?>
</body>
</html>