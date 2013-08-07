<?php
	include '../core/init.php';
	include '../includes/head.php'; 
?>

<link rel='stylesheet' type='text/css' href='../css/UIElements/fullcalendar.css' />

<script type='text/javascript' src='../js/fullcalendar.js'></script>
<script type='text/javascript' src='../js/perfect-scrollbar.js'></script>

<body>
	
	<?php include '../includes/header.php';?>
	<script>
		$('#calendarLink').addClass("buttonPressed");</script>
	</script>
	
	<?php include '../includes/calendar/event_info_popup.php'?>
	<?php include '../includes/calendar/edit_event_popup.php'?>
	<?php include '../includes/calendar/event_edit_error_popup.php'?>
	<div id="shade" onclick='killAllPopups("shade")'></div>
	
	<?php include '../includes/calendar/calendar_js.php'?>
	
	<div class="calendarWrapper mainContent" align="center">
		<h1 style="float:left">Calendar</h1>
		<br class="clear">
		<div class="calendar"></div>
	</div>
</body>
</html>