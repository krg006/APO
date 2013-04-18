<?php
	include '../core/init.php';
	
	//$event_name = $_POST['event_name'];
	/*
	$event_start_date = $_POST['event_start_date'];
	$event_start_time = $_POST['event_start_time'];
	$event_all_day = $_POST['event_all_day'];
	$event_end_date = $_POST['event_end_date'];
	$event_end_time = $_POST['event_end_time'];
	$event_description = $_POST['event_description'];
	
	 */
	
	$return = array(
		'eventName'			=> $event_name
		/*
		'eventStartDate'	=> $event_start_date,
		'eventStartTime'	=> $event_start_time,
		'eventAllDay'		=> $event_all_day,
		'eventEndDate'		=> $event_end_date,
		'eventEndTime'		=> $event_end_time,
		'eventDescription'	=> $event_description
		 * */
		 
	);
	
	echo json_encode($return);
?>