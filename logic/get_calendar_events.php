<?php
	include '../core/init.php';


	$event_colors = array(
		'service-c'		=> '#16a5d7',
		'service-w'		=> '#b368d9',
		'fellowship'	=> '#2163c2',
		'other'			=> '#a8d324'
	);



	if (!empty($_GET['opt']) && $_GET['opt'] == 'get_all') {
		$query = "SELECT `event_id`, `event_name`,`event_start`, `event_end`, `event_type`, `event_all_day` FROM `events`";
		$result = mysql_query($query) or die(mysql_error());
		
		$events = array();
		
		while ($row = mysql_fetch_assoc($result)) {
		    $event = array(
				'id'		=> $row['event_id'],
				'title'		=> stripslashes($row['event_name']),
				'allDay'	=> ($row['event_all_day'] == 1) ? true : false
			);
			
			if ($event['allDay']) {
				$event['start'] = substr($row['event_start'], 0, 10).'T00:00';
			} else {
				$event['start'] = $row['event_start'];
				$event['end'] = $row['event_end'];
			}
			
			$event['color'] = $event_colors[$row['event_type']];
			
			$events[] = $event;
		}
		
		echo json_encode($events);
	} else if (!empty($_GET['opt']) && $_GET['opt'] == 'get_one') {
		
		$months = array(
			'01'	=> "Jan.",
			'02'	=> "Feb.",
			'03'	=> "Mar.",
			'04'	=> "Apr.",
			'05'	=> "May",
			'06'	=> "Jun.",
			'07'	=> "Jul.",
			'08'	=> "Aug.",
			'09'	=> "Sept.",
			'10'	=> "Oct.",
			'11'	=> "Nov.",
			'12'	=> "Dec."
		);
		
		
		$event_id = $_POST['event_id'];
		
		$query = "SELECT `event_id`, `event_name`,`event_start`, `event_end`, `event_location`, `event_type`, `event_description`, `event_all_day`, `event_creator` FROM `events` WHERE `event_id` = '$event_id'";
		$result = mysql_query($query) or die(mysql_error());
		$row = mysql_fetch_assoc($result);
		
		$start = $row['event_start'];
		$end = $row['event_end'];
		
		$return = array(
			'eventID'			=> $row['event_id'],
			
			'eventName'			=> stripslashes($row['event_name']),
			
			'eventLocation'		=> stripslashes($row['event_location']),
			
			'eventStartYear'	=> substr($start, 0, 4),
			'eventStartMonth'	=> $months[substr($start, 5, 2)],
			'eventStartDay'		=> substr($start, 8, 2),
			'eventStartDate'	=> substr($start, 5, 2).'/'.substr($start, 8, 2).'/'.substr($start, 0, 4),
			'eventStartHour'	=> (intval(substr($start, 11, 2)) > 12) ? intval(substr($start, 11, 2)) - 12 : intval(substr($start, 11, 2)),
			'eventStartMinute'	=> substr($start, 14, 2),
			'eventStartAM'		=> (intval(substr($start, 11, 2)) > 12) ? "pm" : "am",
			'eventStartTime'	=> ((intval(substr($start, 11, 2)) > 12) ? intval(substr($start, 11, 2)) - 12 : intval(substr($start, 11, 2))).':'.substr($start, 14, 2).' '.((intval(substr($start, 11, 2)) > 12) ? "pm" : "am"),
			
			'eventEndYear'		=> substr($end, 0, 4),
			'eventEndMonth'		=> $months[substr($end, 5, 2)],
			'eventEndDay'		=> substr($end, 8, 2),
			'eventEndDate'		=> substr($end, 5, 2).'/'.substr($end, 8, 2).'/'.substr($end, 0, 4),
			'eventEndHour'		=> (intval(substr($end, 11, 2)) > 12) ? intval(substr($end, 11, 2)) - 12 : intval(substr($end, 11, 2)),
			'eventEndMinute'	=> substr($end, 14, 2),
			'eventEndAM'		=> (intval(substr($end, 11, 2)) > 12) ? "pm" : "am",
			'eventEndTime'		=> ((intval(substr($end, 11, 2)) > 12) ? intval(substr($end, 11, 2)) - 12 : intval(substr($end, 11, 2))).':'.substr($end, 14, 2).' '.((intval(substr($end, 11, 2)) > 12) ? "pm" : "am"),
			
			'eventSameDay' 		=> (substr($start, 0, 10) == substr($end, 0, 10)) ? true : false,
			
			'eventType'			=> ucfirst($row['event_type']),
			'eventColor'		=> $event_colors[$row['event_type']],
			'eventDescription'	=> $row['event_description'],
			
			'eventCreator'		=> $row['event_creator'],
			
			'eventAllDay'		=> ($row['event_all_day'] == 1) ? true : false
		);
		
		echo json_encode($return);
	}
?>