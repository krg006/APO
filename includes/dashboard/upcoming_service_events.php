<div class="popupBox" id="create_serviceevent_popup" barColor="gray" style="width: 696px; margin-left: -348px; height: 440px; margin-top: -220px;">
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
					<input class="APOInput" style="width: 264px;" align="left" type="text" placeholder="Blood drive" name="event_name" />
					<div style="margin-top: 24px;">
						<div style="float: left">
							<h4>Start:</h4><br>
							<br>Date: <br>
							<input style="width: 108px;" class="APOInput" type="text" id="datepicker" readonly="true" placeholder="12/15/2013" name="event_start_date" />
							<br>Time: <br>
							<input style="width: 108px; margin-bottom: 5px;" class="APOInput" type="time" placeholder="1" name="event_start_hour" />
							<input id="checkbox_all_day" class="APOCheck" type="checkbox" />
							<label for="checkbox_all_day" class="APOCheck">All Day</label><br>
						</div>
						
						<div style="margin: 0px 24px;  height: 183px; width: 1px; background: #cccccc; float: left;" ></div>
						
						<div style="float: left;">
							<h4>End:</h4><br>
							<br>Date: <br>
							<input style="width: 108px;" class="APOInput" type="text" id="datepicker" readonly="true" placeholder="12/15/2013" name="event_start_date" />
							<br>Time: <br>
							<input style="width: 108px;" class="APOInput" type="time" placeholder="1" name="event_start_hour" /><br>
						</div>
					</div>
				</div>
				
				<div style="margin: 0px 32px;  height: 303px; width: 1px; background: #cccccc; float: left;" ></div>
				
				<div style="float: left;">
					<h3>Event description:</h3><br><br>
					<textarea wrap="off" style="width: 265px; height: 259px;" placeholder="Enter a description about the event."></textarea>
				</div>
			</div>
			<button class="APOButton" id="add_serviceevent_submit" buttonColor="blue" type="button" style="float: right; margin: 20px 40px;">Submit</button>
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


<script type="text/javascript">
	$(document).ready(function() {
		
		$('#create_serviceevent').click(function() {
			showPopup("create_serviceevent_popup", "shade");
		})
	});
	
	$('.scroll-pane#upcoming_events').perfectScrollbar();
</script>