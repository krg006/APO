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
		$('#aboutLink').css("font-weight", "bold");
	</script>
	
	<div id="body" align="center">
		<div id="aboutus" align="center">
			<h1>What is Alpha Phi Omega?</h1>
			<br>
			<p>Here we can go into further detail and explain as much as we want about our various facets. We can talk about "Leadership, Friendship, and Service" as well as facts about nationals and the fraternity as a whole. We can put contact info here so people can get in touch with us, should they want to.</p>
		</div>
	</div>
</body>
</html>