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
		$('#blogLink').css("font-weight", "bold");
	</script>
	
	<div id="body" align="center">
		<div id="blog" align="center">
			<h1>What have we been up to?</h1>
			<br>
			<p>Here we can keep a journal of members' experiences at various community service events. They will be interesting to read and keep track of, as well as provide an insight into the good we will be doing for the community once we start in the Fall.</p>
		</div>
	</div>
</body>
</html>