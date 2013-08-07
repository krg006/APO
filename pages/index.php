<?php
	include '../core/init.php';
	include '../includes/head.php'; 
?>

<body>
	
	<?php include '../includes/header.php';?>
	<script>
		$('#homeLink').addClass("buttonPressed");
		
		$(function() {
			$("#slideshow > div:gt(0)").hide();
				setInterval(function() { 
					$('#slideshow > div:first').fadeOut(3000).next().fadeIn(3000).end().appendTo('#slideshow');}, 8000);
		});
	</script>
	
	<div id="body" align="center">
		<h1><a href="http://www.apo.org" style="text-decoration: none; color: inherit;">Alpha Phi Omega</a></h1><br>
		<h3 style="margin: 0px;"><a href="http://www.bucknell.edu" style="text-decoration: none; color: inherit;">Bucknell University</a></h3>

		<div id="slideshow">
		   <div>
		     <img src="../images/slideshow/1.jpg">
		   </div>
		   <div>
		     <img src="../images/slideshow/2.jpg">
		   </div>
		   <div>
		     <img src="../images/slideshow/3.jpg">
		   </div>
		   <div>
		     <img src="../images/slideshow/4.jpg">
		   </div>
		</div>

		<div id="textlayout">
			<div id="whoarewe" align="center">
				<h1>Who are we?</h1><br>
				<h4>Iota Kappa Chapter</h4>
				<p>Under the guiding principles of leadership, friendship, and service, Alpha Phi Omega provides service to the community by donating time and effort to various organizations and causes.</p>
			</div>
			<div id="upcomingevents">
				<h1>Upcoming events</h1><br>
				<h4> </h4>
				<p>There are no upcoming events for Alpha Phi Omega as of yet. Please check back with us in the Fall Semester.</p>
			</div>
		</div>
	</div>
</body>
</html>