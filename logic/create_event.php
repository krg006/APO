<?php
	include '../core/init.php';
	
	//-------------------BEGIN-EMPTY-CHECKS------------------//
	
	
	$name = $_POST['event_name'];
	$location = $_POST['event_location'];
	$type = $_POST['event_type'];
	$start_date = $_POST['event_start_date'];
	$start_time = $_POST['event_start_time'];
	$all_day = $_POST['event_all_day'];
	$end_date = $_POST['event_end_date'];
	$end_time = $_POST['event_end_time'];
	$description = $_POST['event_description'];
	
	if (empty($name)) {
		echo "You need to enter a name for the event.";
		die();
	}
	
	if (empty($location)) {
		echo "You need to enter the event's location.";
		die();
	}
	
	if (empty($start_date)) {
		echo "You need to enter a start date";
		die();
	} else {
		$start = array(
			'year'	=> substr($start_date, 6, 4),
			'month'	=> substr($start_date, 0, 2),
			'day'	=> substr($start_date, 3, 2)
		);
		$start_date = $start['year'].'-'.$start['month'].'-'.$start['day'];
	}

	if ($all_day == "unchecked") {
		if (empty($start_time)) {
			echo "You need to enter a start time";
			die();
		} else if(!preg_match("/[0-9][0-9]:[0-9][0-9][\s]*[aApP][mM]/", $start_time)) {
			echo "You didn't input the start time correctly";
			die();
		} else {
			$h = substr($start_time, 0, 2);
			$start['hour'] = (preg_match("/[aA]/", $start_time)) ? (($h == 12) ? 0 : $h) : (($h == 12) ? $h : ($h + 12) % 24);
			$start['min'] = substr($start_time, 3, 2);
			$start_time =  $start['hour'].':'.$start['min'];
		}
		
		if (empty($end_date)) {
			echo "You need to enter a end date";
			die();
		} else {
			$end = array(
				'year'	=> substr($end_date, 6, 4),
				'month'	=> substr($end_date, 0, 2),
				'day'	=> substr($end_date, 3, 2)
			);
			$end_date = $end['year'].'-'.$end['month'].'-'.$end['day'];
		}
	
		if (empty($end_time)) {
			echo "You need to enter a end time";
			die();
		} else if(!preg_match("/[0-9][0-9]:[0-9][0-9][\s]*[aApP][mM]/", $end_time)) {
			echo "You didn't input the end time correctly";
			die();
		} else {
			$h = substr($end_time, 0, 2);
			$end['hour'] = (preg_match("/[aA]/", $end_time)) ? (($h == 12) ? 0 : $h) : (($h == 12) ? $h : ($h + 12) % 24);
			$end['min'] = substr($end_time, 3, 2);
			$end_time = $end['hour'].':'.$end['min'];
		}
	}
	
	if (empty($description)){
		$description = "No description";
	}
	//-------------------END-EMPTY-CHECKS--------------------//
	//-------------------BEGIN-DATE-CHECKS-------------------//
	
	
	if ($all_day == "unchecked") {
		if ($end['year'] > $start['year']) {

		} else {
			if ($end['month'] > $start['month']) {

			} else {
				if ($end['day'] > $start['day']) {
					
				} else {
					if ($end['hour'] > $start['hour']) {

					} else {
						if ($end['min'] > $start['min']) {

						} else {
							echo "Your end date is before the start date.";
							die();
						}
					}
				}
			}
		}
	}
	//-------------------END-DATE-CHECKS---------------------//
	//-------------------INSERT-INTO-DB----------------------//
	
	
	$event = array(
		'event_name'		=> mysql_real_escape_string($name),
		'event_start'		=> $start_date.'T'.$start_time,
		'event_end'			=> $end_date.'T'.$end_time,
		'event_location'	=> mysql_real_escape_string($location),
		'event_type'		=> $type,
		'event_description'	=> mysql_real_escape_string($description),
		'event_all_day'		=> ($all_day == "unchecked") ? 0 : 1,
		'event_creator'		=> $_SESSION['username']
	);
	
	$fields = '`' . implode('`, `', array_keys($event)) . '`';
	$data = '\'' . implode('\', \'', $event) . '\'';
	
	mysql_query('INSERT INTO `events` (' . $fields . ') VALUES (' . $data . ')');
	
	echo 'success';
?>