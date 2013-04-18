<div class="popupBox" id="create_serviceevent_popup" barColor="gold" style="width: 696px; margin-left: -348px; height: 440px; margin-top: -220px;">
	<div class="boxheader">
		<div class="title">
			Create Service Event
		</div>
		<div class="x" onclick='killPopup("create_serviceevent_popup", "shade")'>
			<img src="../images/x.png" />
		</div>
	</div>
	<div class="boxbody">
		<form style="margin: 29px auto;">
			<div style="position: relative; margin: 0px auto; width: 595px; height: 303px;">
				<div style="float: left;">
					<h3>Event information:</h3><br><br>
					Event name:<br>
					<input class="APOInput" id="event_name" style="width: 264px;" align="left" type="text" placeholder="Blood drive" />
					<div style="margin-top: 24px;">
						<div style="float: left">
							<h4>Start:</h4><br>
							<br>Date: <br>
							<input style="width: 108px;" id="event_start_date" class="APOInput" type="text" readonly="true" placeholder="12/15/2013" id="event_start_date" />
							<br>Time: <br>
							<input style="width: 108px; margin-bottom: 5px;" class="APOInput" id="event_start_time" type="time" />
							<input id="checkbox_all_day" class="APOCheck" type="checkbox" />
							<label for="checkbox_all_day" class="APOCheck">All Day</label><br>
						</div>
						
						<div style="margin: 0px 24px;  height: 183px; width: 1px; background: #cccccc; float: left;" ></div>
						
						<div style="float: left;">
							<h4>End:</h4><br>
							<br>Date: <br>
							<input style="width: 108px;" id="event_end_date" class="APOInput" type="text" readonly="true" placeholder="12/15/2013" id="event_start_date" />
							<br>Time: <br>
							<input style="width: 108px; margin-bottom: 5px;" class="APOInput" id="event_end_time" type="time" />
							
						</div>
					</div>
				</div>
				
				<div style="margin: 0px 32px;  height: 303px; width: 1px; background: #cccccc; float: left;" ></div>
				
				<div style="float: left;">
					<h3>Event description:</h3><br><br>
					<textarea id="event_description" wrap="off" style="width: 265px; height: 259px;" placeholder="Enter a description about the event."></textarea>
				</div>
			</div>
			<button class="APOButton" id="create_serviceevent_submit" buttonColor="blue" type="button" style="float: right; margin: 20px 40px;">Submit</button>
		</form>
	</div>
	<div class="boxfooter" style="margin: 29px;">
	</div>
</div>
<div id="shade" onclick='killAllPopups("shade")'></div>




<div class="APOPanel" color="gold" style="width: 620px; height: 400px;">
	<div class="panelheader">
		Upcoming Service Events
	</div>
	<div class="panelbody">

		<div id="upcoming_service_events" style="margin: 33px auto; position: relative; height: 300px; width: 556px;">
			<center>
				<table class="APOTable" header="yes" width="556px">
					<tr>
						<th width="50%">Event</th>
						<th width="10%">Date</th>
						<th width="15%">Time</th>
						<th width="15%">Location</th>
						<th width="10%"></th>
					</tr>
				</table>
				<div class="scroll-pane" id="upcoming_events" style="height: 211px; width: 556px;">
					<center>
						<table class="APOTable" width="556px">
							<tr>
								<td width="50%">Event name</td>
								<td width="10%">03/12</td>
								<td width="15%">12:00-12:00</td>
								<td width="15%">Davis Gym</td>
								<td width="10%">Sign up</td>
							</tr>
							<tr>
								<td>Event name</td>
								<td>03/12</td>
								<td>12:00-12:00</td>
								<td>Davis Gym</td>
								<td>Sign up</td>
							</tr>
							<tr>
								<td>Event name</td>
								<td>03/12</td>
								<td>12:00-12:00</td>
								<td>Davis Gym</td>
								<td>Sign up</td>
							</tr>
							<tr>
								<td>Event name</td>
								<td>03/12</td>
								<td>12:00-12:00</td>
								<td>Davis Gym</td>
								<td>Sign up</td>
							</tr>
							<tr>
								<td>Event name</td>
								<td>03/12</td>
								<td>12:00-12:00</td>
								<td>Davis Gym</td>
								<td>Sign up</td>
							</tr>
							<tr>
								<td>Event name</td>
								<td>03/12</td>
								<td>12:00-12:00</td>
								<td>Davis Gym</td>
								<td>Sign up</td>
							</tr>
							<tr>
								<td>Event name</td>
								<td>03/12</td>
								<td>12:00-12:00</td>
								<td>Davis Gym</td>
								<td>Sign up</td>
							</tr>
							<tr>
								<td>Event name</td>
								<td>03/12</td>
								<td>12:00-12:00</td>
								<td>Davis Gym</td>
								<td>Sign up</td>
							</tr>
						</table>
					</center>
				</div>
			</center>
			<button class="APOButton" id="create_serviceevent" buttonColor="blue" type="button" style="width: 124px; margin: 20px 0px; float: right;">Add event</button>
		</div>
	</div>
</div>

<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../js/popups.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		
		$('#create_serviceevent').click(function() {
			showPopup("create_serviceevent_popup", "shade");
		});
		
		$('#create_serviceevent_submit').click(function() {
			//alert('click');
			$.ajax({
	        	type : 'POST',
				url : '../../logic/create_event.php',
				dataType : 'json',
				data : {
					//event_name : 'test' //$('#event_name').val(),
					/*
					event_start_date : 'test', //$('#event_start_date').val(),
					event_start_time : 'test', //$('#event_start_time').val(),
					event_all_day : 'test', //$('#event_all_day').val(),
					event_end_date : 'test',// $('#event_end_date').val(),
					event_end_time : 'test', //$('#event_end_time').val(),
					event_description : 'test' //$('#event_description').val()
					*/
				},
				success : function(data) {
					alert(data.eventName);
					//alert('name: ' + data.eventName + ' start date: ' + date.eventStartDate + ' start time: ' + date.eventStartTime + ' all day? ' + date.eventAllDay + ' end date: ' + date.eventEndDate + ' end time: ' + date.eventEndTime + ' description' + date.eventDescription);
	      		},
	      		error : function(XMLHttpRequest, textStatus, errorThrown) {
					alert(errorThrown);
				}
		     });
		});
	});
	
	$('.scroll-pane#upcoming_events').perfectScrollbar();
</script>