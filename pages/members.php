<?php
	ob_start();
	include '../core/init.php';
	include '../includes/head.php';
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
				include '../includes/login_form.php';
				include '../includes/registration_form.php';
			}
		?>
	</div>
	
	<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.10.2.custom.js"></script>
	<script type="text/javascript" src="../js/popups.js"></script>
	
</body>
</html>