<link rel='stylesheet' type='text/css' href='../css/UIElements/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='../css/UIElements/popup.css' />

<script type='text/javascript' src='../js/fullcalendar.js'></script>
<script type='text/javascript' src='../js/perfect-scrollbar.js'></script>

<div class="popupBox" barColor="gold" id="event_info_popup" style="width: 436px; margin-left: -218px; height: 560px; margin-top: -230px;">
	<div class="boxheader">
		<div class="title">
			Event Information
		</div>
		<div class="x" onclick='killPopup("event_info_popup", "shade")'>
			<img src="../images/x.png" />
		</div>
	</div>
	<div class="boxbody" style="padding: 20px;">
		<h1 id="event_title"></h1><br>
		<table style="margin: 12px;" cellspacing="15px">
			<tr valign="baseline">
				<td width="70px"><h4>Where: </h4></td><td width="300px"><h4 id="event_where"></h4></td>
			</tr>
			<tr valign="baseline">
				<td width="70px"><h4>When: </h4></td><td width="300px"><h4 id="event_when"></h4></td>
			</tr>
			<tr valign="baseline">
				<td width="70px"><h4>Type: </h4></td><td width="300px"><h4 id="event_type"></h4></td>
			</tr>
			<tr valign="baseline">
				<td width="70px"><h4>What: </h4></td><td width="300px">
				<div id="event_description_wrapper" style="height: 240px; position: relative; overflow: hidden;">
					<h4 id="event_description"></h4>
				</div></td>
			</tr>
			<tr>
				<td colspan="2">
					<div style="float:left;">
						<img id="event_creator_sprite" style="width: 32px; height: 32px; float: left;" src="../images/profile_gold_on_blue.png" />
						<div id="event_creator_wrapper" style="display: none; float: left; padding: 7px;">
							<h5 id="event_creator"></h5>
						</div>
					</div>
					<button class="APOButton" id="event_edit_submit" buttonColor="gray" type="button" style="float: right; vertical-align: middle;">Edit</button>
				</td>
			</tr>
		</table>

	</div>
	<div class="boxfooter">

	</div>
</div>
<div id="shade" onclick='killAllPopups("shade")'></div>



<script>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek'
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
						$('#event_info_popup #event_title').text(data.eventName);
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
						$('#event_info_popup #event_type').text(data.eventType + " Event");
						$('#event_info_popup .boxheader').css("background", data.eventColor);
						$('#event_info_popup #event_creator').text("Posted by " + data.eventCreator);
						$('#event_info_popup #event_description').text(data.eventDescription);
						
		        		showPopup("event_info_popup", "shade");
		      		}
		      })
		    }
		});
	});

	$('#event_description_wrapper').perfectScrollbar();
	
	var slideToggle = true;
	
	$('#event_creator_sprite').hover(function() {
		if (slideToggle)
			$('#event_creator_wrapper').show("slide", { direction: "left" }, 200);
	}, 
	function() {
		if (slideToggle)
			$('#event_creator_wrapper').hide("slide", { direction: "left" }, 200);
	});
	
	$('#event_creator_sprite').click(function() {
		slideToggle = !slideToggle;
	});

</script>
<div id='calendar' style="margin-top: 24px;"></div>


