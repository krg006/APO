<div id="header" align="center" style="top: 0px; width:720px; margin: 0px auto; clear:both;">
    <a href="../pages/index.php"><img src="../images/header.png"></a>
    <div id="navlist" align="right">
        <ul>
        <li><a class="navlist" href="../pages/index.php"><span id="homeLink">HOME</span></a></li>
        <li><a class="navlist" href="../pages/blog.php"><span id="blogLink">BLOG</span></a></li>
        <li><a class="navlist" href="../pages/calendar.php"><span id="calendarLink">CALENDAR</span></a></li>
        <li><a class="navlist" href="../pages/about.php"><span id="aboutLink">ABOUT</span></a></li>
        <li><a class="navlist" href="../pages/members.php"><span id="membersLink">MEMBERS</span></a></li>
        </ul>
    </div>
</div>

<div class="notif_bar">
	
	<div style="width: 720px; margin: 0px auto;">
		<span class="nice_big" isclickable="true" style="float: left;">Notifications</span>
		
		<span class="nice_big" id="logout" isclickable="true" style="float: right;">Log out</span>
		<span class="nice_big" isclickable="false" style="float: right;">Hi, <?php echo user_get_first_name($_SESSION['username']); ?>!</span>

	</div>
	
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#logout').click(function() {
			$.ajax({
				url : '../pages/logout.php',
				success : function(data) {
					$('.notif_bar').fadeOut(250);
					loggedIn = false;
	      		},
	      		error : function(XMLHttpRequest, textStatus, errorThrown) {
					alert(errorThrown);
				}
			});
		});
	});
</script>
