<script>
var eventCreator;
var eventData;	
var eventType;
<?php 
	if(logged_in()) {
		echo 'var loggedIn = true;';
	} else {
		echo 'var loggedIn = false;';
	}
?>
$(document).ready(function() {
	
	$('#event_title_wrapper').tipsy({gravity: 'n', title: 'title'});
	
	$('.calendar').fullCalendar({
		header: {
			left: 	'prev,next today',
			center: 'title',
			right: 	'month,agendaWeek'
		},
			
		events: "../logic/get_calendar_events.php?opt=get_all",
			
		eventClick: function(event) {
			$.ajax({
	        	type : 'POST',
				url : '../logic/get_calendar_events.php?opt=get_one',
				dataType : 'json',
				data : {
					event_id : event.id
				},
				success : function(data) {
					eventData = data;
					eventType = eventData.eventType;
					
					$('#event_info_popup #event_title').text(data.eventName);
					$('#event_info_popup #event_title_wrapper').prop('title', data.eventName);
						
					$('#event_info_popup #event_where').text(data.eventLocation);
						
					if (data.eventSameDay) {
						$('#event_info_popup #event_when').html(data.eventStartMonth + " " + data.eventStartDay + ", " + data.eventStartYear + ",  " + data.eventStartHour + ":" + data.eventStartMinute + data.eventStartAM + " - " + data.eventEndHour + ":" + data.eventEndMinute + data.eventEndAM);
					} else {
						$('#event_info_popup #event_when').html(data.eventStartMonth + " " + data.eventStartDay + ", " + data.eventStartYear + ",  " + data.eventStartHour + ":" + data.eventStartMinute + data.eventStartAM + " - <br>" + data.eventEndMonth + " " + data.eventEndDay + ", " + data.eventEndYear + ",  " + data.eventEndHour + ":" + data.eventEndMinute + data.eventEndAM);
					}
						
					if (data.eventAllDay) {
						$('#event_info_popup #event_when').html(data.eventStartMonth + " " + data.eventStartDay + ", " + data.eventStartYear + ", all day");
						
					}
					if (data.eventType.toLowerCase() == "service-c")
						$('#event_info_popup #event_type').text("Service Event to the Community");
					else if (data.eventType.toLowerCase() == "service-w")
						$('#event_info_popup #event_type').text("Service Event to the World");
					else
						$('#event_info_popup #event_type').text(data.eventType + " Event");
					//$('#event_info_popup .boxheader').css("background", data.eventColor);
					$('#event_info_popup #event_creator').text("Posted by " + data.eventCreator);
					eventCreator = data.eventCreator;
						
					$('#event_info_popup #event_description').text(data.eventDescription);
						
		        	showPopup("event_info_popup", "shade");
		      	}
		     });
		}
	});
	
	$(".dropdown img.flag").addClass("flagvisibility");

    $(".dropdown dt a").click(function() {
        $(".dropdown dd ul").toggle();
    });
                    
    $(".dropdown dd ul li a").click(function() {
       	var category = $(this).attr('class');
        	
       	if (category != 'category') {
       		var text = $(this).html();
       		if (category == 'service-type') {
       			var text = "Service " + $(this).html();
       		}
	        $(".dropdown dt a span").html(text);
	        $(".dropdown dd ul").hide();
	            
	        eventType = $("#event_type").find("dt a span.value").html();
       	}
    });
                    
    $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (!$clicked.parents().hasClass("dropdown"))
            $(".dropdown dd ul").hide();
    });
});

$('#event_description_wrapper').perfectScrollbar();
	
$('#checkbox_all_day').click(function() {
	if ($('#checkbox_all_day').is(":checked")) {
		$('#event_start_time, #event_end_date, #event_end_time').attr('disabled', 'disabled');
	} else {
		$('#event_start_time, #event_end_date, #event_end_time').removeAttr('disabled');
	}
});
	
$('#event_creator_sprite').click(function() {
	slideToggle = !slideToggle;
});
	
$('#event_edit_submit').click(function() {
	if (loggedIn) {
		if (eventCreator == '<?php echo $_SESSION['username'] ?>') {
			killPopup("event_info_popup", "shade");
				
			$('#edit_event_popup .boxheader').css("background", eventData.eventColor);
			$('#edit_event_popup #event_name').val(eventData.eventName);
			$('#edit_event_popup #event_location').val(eventData.eventLocation);
			$('#edit_event_popup #event_start_date').val(eventData.eventStartDate);
			if (eventData.eventAllDay) {
				$('#edit_event_popup #checkbox_all_day').prop('checked', true);
				$('#event_start_time, #event_end_date, #event_end_time').attr('disabled', 'disabled');
			} else {
				$('#edit_event_popup #checkbox_all_day').prop('checked', false);
				$('#event_start_time, #event_end_date, #event_end_time').removeAttr('disabled');
				$('#edit_event_popup #event_start_time').val(eventData.eventStartTime);
				$('#edit_event_popup #event_end_date').val(eventData.eventEndDate);
				$('#edit_event_popup #event_end_time').val(eventData.eventEndTime);
			}
			$('#edit_event_popup #event_description').val(eventData.eventDescription);
				
			if (eventData.eventType.toLowerCase() == 'service-c') {
				$(".dropdown dt a span").html('Service to the Community<span class="value">service-c</span>');
			} else if (eventData.eventType.toLowerCase() == 'service-w') {
				$(".dropdown dt a span").html('Service to the World<span class="value">service-w</span>');
			} else if (eventData.eventType.toLowerCase() == 'fellowship') {
				$(".dropdown dt a span").html('Fellowship<span class="value">fellowship</span>');
			} else {
				$(".dropdown dt a span").html('Other<span class="value">other</span>');
			}
				
			showPopup("edit_event_popup", "shade");
		} else {
			$('#event_info_edit_error_message').html('You did not create this event, and do not have permission to edit it.');
			showPopup("event_info_edit_error_popup", "shade");
		}
	} else {
		$('#event_info_edit_error_message').html('You are not logged in. <br> You must <a href="../pages/members.php">log in</a> before you can edit this event.');
		showPopup("event_info_edit_error_popup", "shade");
	}
});
	
$(function(){
	$('#event_start_date').datepicker({
		inline: true,
		showOtherMonths: true,
		dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
	});
});
	
$(function(){
	$('#event_end_date').datepicker({
		inline: true,
		showOtherMonths: true,
		dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
	});
});
</script>