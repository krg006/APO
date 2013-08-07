<div class="headerWrapper">
	<center>
    	<img class="scalable" src="../images/header.png">
    </center>
	<div class="navigationBar">
		<div class="header" align="center">
			<div class="navigation">
			<?php
			if (logged_in())
				echo '<a href="../pages/logout.php" style="float: left;">Log Out</a>';
			?>
			    <a id="membersLink" href="../pages/members.php">Members</a>
			    <a id="aboutLink" href="../pages/about.php">About</a>
			    <a id="calendarLink" href="../pages/calendar.php">Calendar</a>
			    <a id="blogLink" href="../pages/blog.php">Blog</a>
			    <a id="homeLink" href="../pages/index.php">Home</a>
			</div>
			<br class="clear">
		</div>
	</div>
</div>

<script type="text/javascript">
	var navBarTopOrig;
	var navBar;
	var navBarBorderTop;

	$(document).ready(function() {
		navBar			= $('.navigationBar');
		navBarTopOrig 	= navBar.position().top;
		navBarBorderTop	= {
			"border-top-width" : navBar.css("border-top-width")
		}
	});

	$(window).scroll(function() {			
		if ($(window).scrollTop() > navBarTopOrig) {
			navBar.addClass("sticky");
			navBar.css("border-top-width", "0");
			$('.mainContent').css("margin-top", "31px");
			
		} else {
			navBar.removeClass("sticky");
			navBar.css(navBarBorderTop);
			$('.mainContent').css("margin-top", "");
		}
	});

</script>