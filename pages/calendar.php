<?php
	include '../core/init.php';
	include '../includes/head.php'; 
?>

<body>
	
	<?php
		if (logged_in()) {
			include '../includes/header_logged_in.php';
		} else {
			include '../includes/header.php';
		}
	?>
	<script>
		$('#calendarLink').css("font-weight", "bold");
	</script>
	
	<div id="body" align="center">
		<h1>What's on our agenda?</h1>
		<?php include '../includes/calendar.php'; ?>
	</div>
</body>
</html>