<div id="header" align="center" style="top: 0px; width:720px; margin: 0px auto; clear:both;">
    	<img class="scalable" src="../images/header.jpg">
    <div class="navigation" align="right">
        <ul>
        <li><a href="../pages/index.php"><span id="homeLink">Home</span></a></li>
        <li><a href="../pages/blog.php"><span id="blogLink">Blog</span></a></li>
        <li><a href="../pages/calendar.php"><span id="calendarLink">Calendar</span></a></li>
        <li><a href="../pages/about.php"><span id="aboutLink">About</span></a></li>
        <li><a href="../pages/members.php"><span id="membersLink">Members</span></a></li>
        </ul>
    </div>
</div>

<div>
	<div class="notif_bar">
		<div style="width: 720px; margin: 0px auto;">
			
			<span class="nice_big" id="notifs" isclickable="true" style="float: left;">Notifications</span>
			
			<span class="nice_big" id="logout" isclickable="true" style="float: right;">Log out</span>
			<span class="nice_big" isclickable="false" style="float: right;">Hi, <?php echo user_get_first_name($_SESSION['username']); ?>!</span>
	
			
	
		</div>	
	</div>
	
	
</div>

<script type="text/javascript">

	

	$(document).ready(function() {
		var showNotifs = false;
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
		
		$('#notifs').click(function() {
			if (showNotifs == false) {
				showNotifs = true;
				$('#notifications').fadeIn(50);
				$('#notifs').css("background", "#da9d19");
			} else {
				showNotifs = false;
				$('#notifications').fadeOut(50);
				$('#notifs').css("background", "none");
			}
			
		});
	});
</script>
