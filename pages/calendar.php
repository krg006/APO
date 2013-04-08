<?php
	include '../core/init.php';
	include '../includes/head.php'; 
?>

<body>
	
	<?php
		if (logged_in()) {
			include '../includes/header_logged_in.php';
	?>
		<style>
			body {
				background-color: #fbfbfb;
				background-image: url(../images/bg-top_loggedin.png);
				background-position: top;
				background-repeat: repeat-x;
			}
		</style>
	<?php
	
		} else {
			include '../includes/header.php';
		}
	?>
	<script>
		$('#calendarLink').css("font-weight", "bold");
	</script>
	
	<div id="body" align="center">
		<div id="calendar" align="center">
			<h1>What's on our agenda?</h1>
			<br>
			<p>Once we have a calendar of events next semester, we will use this to keep track of the dates of various community service events, as well as internal chapter meetings as well as other things.</p>
		</div>
	</div>
</body>
</html>