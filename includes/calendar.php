<link rel='stylesheet' type='text/css' href='../css/UIElements/fullcalendar.css' />

<script type='text/javascript' src='../js/fullcalendar.js'></script>
<script type='text/javascript' src='../js/perfect-scrollbar.js'></script>

<div class="popupBox" id="event_info_popup" style="width: 436px; margin-left: -218px; margin-top: -230px;">
	<div class="boxheader">
		<div class="title">
			<a class="no_effect" href="#" id="event_title_wrapper" title=" " style="text-decoration: none; cursor: default;">
				<h1 class="ellipsis" style="max-width: 360px;" id="event_title"></h1>
			</a>
		</div>
		<div class="x" onclick='killPopup("event_info_popup", "shade")'>
			<img src="../images/x.png" />
		</div>
		
		<br class="clear"/>
	</div>
	<div class="boxbody" style="padding: 20px;">
		<table style="margin: 12px;" cellspacing="15px">
			<tr valign="baseline">
				<td width="70px"><span>Where: </span></td><td width="300px"><span id="event_where"></span></td>
			</tr>
			<tr valign="baseline">
				<td width="70px"><span>When: </span></td><td width="300px"><span id="event_when"></span></td>
			</tr>
			<tr valign="baseline">
				<td width="70px"><span>Type: </span></td><td width="300px"><span id="event_type"></span></td>
			</tr>
			<tr valign="baseline">
				<td width="70px"><span>What: </span></td>
				<td width="300px">
					<div id="event_description_wrapper" style="height: 100px; position: relative; overflow: hidden;">
						<span id="event_description"></span>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<div class="boxfooter">
		<div style="float:left;">
			<div id="event_creator_wrapper" style="float: left;">
				<h5 class="gray_dark" id="event_creator"></h5>
			</div>
		</div>
		<button class="cyan" id="event_edit_submit" type="button" style="float: right; vertical-align: middle;">Edit</button>
		<br class="clear">
	</div>
</div>

<style>
	input.createEventDate {
		width: 108px;
		margin-top: 5px;
		margin-bottom: 15px;
	}
</style>

<div class="popupBox" id="edit_event_popup" barColor="gold" style="width: 696px; margin-left: -348px; height: 516px; margin-top: -258px;">
	<div class="boxheader">
		<div class="title">
			Edit Event
		</div>
		<div class="x" onclick='killPopup("edit_event_popup", "shade")'>
			<img src="../images/x.png" />
		</div>
	</div>
	<div class="boxbody">
		<center>
			<span class="error" id="edit_event_error"></span>
		</center>
		<form style="margin: 29px auto;">
			<div style="position: relative; margin: 0px auto; width: 595px; height: 380px;">
				<div style="float: left;">
					<h3 style="margin-bottom: 20px;">Event information:</h3><br><br>
					Event name:<br>
					<input class="APOInput" id="event_name" style="width: 264px; margin-top: 5px; margin-bottom: 15px;" align="left" type="text"/>
					Event location:<br>
					<input class="APOInput" id="event_location" style="width: 264px; margin-top: 5px; margin-bottom: 15px;" align="left" type="text"/>
					<div style="margin-top: 24px;">
						<div id="create_event_start" style="width: 108px; height: 183px; float: left;">
							<h4 style="margin-bottom: 15px;">Start:</h4><br>
							Date: <br>
							<input class="APOInput createEventDate" id="event_start_date" type="text" readonly="true"/>
							Time: <br>
							<input class="APOInput createEventDate" id="event_start_time" type="text" />
							<input id="checkbox_all_day" class="APOCheck" value="false" type="checkbox" />
							<label for="checkbox_all_day" class="APOCheck">All Day</label><br>
						</div>
						
						<div id="create_event_divider" style="margin: 0px 24px; height: 183px; width: 1px; background: #cccccc; float: left; display: ;" ></div>
						
						<div id="create_event_end" style="width: 108px; height:183px; float: left;">
							<h4 style="margin-bottom: 15px;">End:</h4><br>
							Date: <br>
							<input class="APOInput createEventDate" id="event_end_date" type="text" readonly="true"/>
							Time: <br>
							<input class="APOInput createEventDate" id="event_end_time" type="text"/>
							
						</div>
					</div>
				</div>
				
				<div style="margin: 0px 32px;  height: 378px; width: 1px; background: #cccccc; float: left;" ></div>
				
				<div style="float: left;">
					<h3 style="margin-bottom: 20px;">Event description:</h3><br><br>
					Event type:<br>
					<dl id="event_type" class="dropdown" style="width: 265px;">
				        <dt><a href="#" style="width: 265px;"><span style="margin: 4 0 0 4;">Select type</span></a></dt>
				        <dd>
				            <ul>
				            	<li><a class="category" href="#">Service</a></li>
				                <li><a class="service-type" href="#">to the Community<span class="value">service-c</span></a></li>
				                <li><a class="service-type" href="#">to the World<span class="value">service-w</span></a></li>
				                <li><a href="#">Fellowship<span class="value">fellowship</span></a></li>
				                <li><a href="#">Other<span class="value">other</span></a></li>
				            </ul>
				        </dd>
				    </dl>
    				Event summary:<br>
					<textarea id="event_description" wrap="on" style="width: 265px; height: 245px; margin-top: 5px;"></textarea>
				</div>
			</div>
			<span class="hint" style="margin: 30px 34px; float: left;">Time should be entered as <i>hh:mm</i>, like <i>01:25PM</i>.</span>
			<button class="blue" id="edit_event_submit" type="button" style="float: right; margin: 20px 40px;">Save</button>
		</form>
	</div>
	<div class="boxfooter" style="margin: 29px;">
	</div>
</div>

<div class="popupBox" id="event_info_edit_error_popup" style="width: 436px; margin-left: -218px; height: 150px; margin-top: -75px;">
	<div class="boxheader">
		<div class="title">
			Cannot edit
		</div>
		<div class="x" onclick='killPopup("event_info_edit_error_popup", "shade")'>
			<img src="../images/x.png" />
		</div>
	</div>
	<div class="boxbody" style="padding: 20px;">
		<span id="event_info_edit_error_message"></span>
	</div>
	<div class="boxfooter">
		<button class="gray" id="event_info_edit_er_popup_close" style="float: right; margin: 0px; 35px" type="button" onclick='killPopup("event_info_edit_error_popup", "shade")'>Ok</button>
	</div>
</div>

<div id="shade" onclick='killAllPopups("shade")'></div>


<script>

	var loggedIn;
	var eventCreator;
	var eventData;	
	var eventType;

	<?php if(logged_in()) { ?>
			loggedIn = true;
	<?php } else { ?>
			loggedIn = false;
	<?php } ?>

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
							$('#event_info_popup #event_when').html(data.eventStartMonth + " " + data.eventStartDay + ", " + data.eventStartYear + ",  " + 
																data.eventStartHour + ":" + data.eventStartMinute + data.eventStartAM + " - " + 
																data.eventEndHour + ":" + data.eventEndMinute + data.eventEndAM);
						} else {
							$('#event_info_popup #event_when').html(data.eventStartMonth + " " + data.eventStartDay + ", " + data.eventStartYear + ",  " + 
																data.eventStartHour + ":" + data.eventStartMinute + data.eventStartAM + " - <br>" + 
																data.eventEndMonth + " " + data.eventEndDay + ", " + data.eventEndYear + ",  " + 
																data.eventEndHour + ":" + data.eventEndMinute + data.eventEndAM);
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
<div class='calendar'></div>


