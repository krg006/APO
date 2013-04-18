<?php
	include '../core/init.php';

	if (!empty($_GET['opt']) && $_GET['opt'] == 'get_all') {
		$query = "SELECT `event_id`, `event_name`,`event_start_date_and_time`, `event_end_date_and_time`, `event_all_day` FROM `events`";
		$result = mysql_query($query) or die(mysql_error());
		
		$events = array();
		
		while ($row = mysql_fetch_assoc($result)) {
		    $event = array(
				'id'		=> $row['event_id'],
				'title'		=> $row['event_name'],
				'start'		=> $row['event_start_date_and_time'],
				'end'		=> $row['event_end_date_and_time'],
				'allDay'	=> ($row['event_all_day'] == 1) ? true : false
			);
			
			$events[] = $event;
		}
		
		echo json_encode($events);
	} else if (!empty($_GET['opt']) && $_GET['opt'] == 'get_one') {
		
		$months = array(
			'01'	=> "January",
			'02'	=> "February",
			'03'	=> "March",
			'04'	=> "April",
			'05'	=> "May",
			'06'	=> "June",
			'07'	=> "July",
			'08'	=> "August",
			'09'	=> "September",
			'10'	=> "October",
			'11'	=> "November",
			'12'	=> "December"
		);
		
		
		$event_id = $_POST['event_id'];
		
		$query = "SELECT `event_name`,`event_start_date_and_time`, `event_end_date_and_time`, `event_description`, `event_all_day` FROM `events` WHERE `event_id` = '$event_id'";
		$result = mysql_query($query) or die(mysql_error());
		$row = mysql_fetch_assoc($result);
		
		$start = $row['event_start_date_and_time'];
		$end = $row['event_end_date_and_time'];
		
		$return = array(
			'eventName'			=> $row['event_name'],
			
			'eventStartYear'	=> substr($start, 0, 4),
			'eventStartMonth'	=> $months[substr($start, 5, 2)],
			'eventStartDay'		=> substr($start, 8, 2),
			'eventStartHour'	=> (intval(substr($start, 11, 2)) >= 12) ? intval(substr($start, 11, 2)) - 12 : intval(substr($start, 11, 2)),
			'eventStartMinute'	=> substr($start, 14, 2),
			'eventStartAM'		=> (intval(substr($start, 11, 2)) >= 12) ? false : true,
			
			'eventEndYear'		=> substr($end, 0, 4),
			'eventEndMonth'		=> $months[substr($end, 5, 2)],
			'eventEndDay'		=> substr($end, 8, 2),
			'eventEndHour'		=> (intval(substr($end, 11, 2)) >= 12) ? intval(substr($end, 11, 2)) - 12 : intval(substr($end, 11, 2)),
			'eventEndMinute'	=> substr($end, 14, 2),
			'eventEndAM'		=> (intval(substr($end, 11, 2)) >= 12) ? false : true,
			
			'eventDescription'	=> $row['event_description'],
			
			'eventAllDay'		=> ($row['event_all_day'] == 1) ? true : false
		);
		
		echo json_encode($return);
	}
?>