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
	<script>$('#calendarLink').css("color", "1e59ae");</script>
	
	<div class="body" align="center">
		<h1>Calendar</h1>
		<?php include '../includes/calendar.php'; ?>
		<br class="clear">
	</div>
</body>
</html>