<style>
	body {
		background-color: #fbfbfb;
		background-image: url(../images/bg-top_loggedin.png);
		background-position: top;
		background-repeat: repeat-x;
	}
</style>

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
    	<p style="margin-top: 21px; text-align: right;">
    		<span class="nice" style="color: #fbfbfb; font-size: 16px;">
    			Hi, <?php echo user_get_first_name($_SESSION['username']); ?>! You are logged in. 
    			<a href="../pages/logout.php">Log out</a>
    		</span>
    	</p>
</div>