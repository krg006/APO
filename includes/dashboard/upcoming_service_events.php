<div class="popupBox" id="create_serviceevent_popup" barColor="gold" style="width: 696px; margin-left: -348px; height: 510px; margin-top: -255px;">
	<div class="boxheader">
		<div class="title">
			Create Service Event
		</div>
		<div class="x" onclick='killPopup("create_serviceevent_popup", "shade")'>
			<img src="../images/x.png" />
		</div>
	</div>
	<div class="boxbody">
		<center>
			<span class="error" id="enter_serviceevent_error"></span>
		</center>
		<form style="margin: 29px auto;">
			<div style="position: relative; margin: 0px auto; width: 595px; height: 362px;">
				<div style="float: left;">
					<h3 style="margin-bottom: 20px;">Event information:</h3><br>
					Event name:<br>
					<input class="APOInput" id="event_name" style="width: 264px; margin-top: 5px; margin-bottom: 15px;" align="left" type="text" placeholder="ex. Blood drive" />
					Event location:<br>
					<input class="APOInput" id="event_location" style="width: 264px;  margin-top: 5px; margin-bottom: 15px;" align="left" type="text" placeholder="ex. Davis Gym" />
					<div style="margin-top: 24px;">
						<div id="create_serviceevent_start" style="width: 108px; height:183px; float: left;">
							<h4 style="margin-bottom: 15px;">Start:</h4><br>
							Date: <br>
							<input style="width: 108px; margin-top: 5px; margin-bottom: 15px;" id="event_start_date" class="APOInput" type="text" readonly="true" placeholder="12/15/2013" />
							Time: <br>
							<input style="width: 108px;  margin-top: 5px; margin-bottom: 15px;" class="APOInput" id="event_start_time" type="text" placeholder="10:30AM" />
							<input id="checkbox_all_day" class="APOCheck" value="false" type="checkbox" />
							<label for="checkbox_all_day" class="APOCheck">All Day</label><br>
						</div>
						
						<div id="create_serviceevent_divider" style="margin: 0px 24px;  height: 183px; width: 1px; background: #cccccc; float: left; display: ;" ></div>
						
						<div id="create_serviceevent_end" style="width: 108px; height:183px; float: left;">
							<h4 style="margin-bottom: 15px;">End:</h4><br>
							Date: <br>
							<input style="width: 108px; margin-top: 5px; margin-bottom: 15px;" id="event_end_date" class="APOInput" type="text" readonly="true" placeholder="12/15/2013" />
							Time: <br>
							<input style="width: 108px;  margin-top: 5px; margin-bottom: 15px;" class="APOInput" id="event_end_time" type="text" placeholder="07:20PM" />
							
						</div>
					</div>
				</div>
				
				<div style="margin: 0px 32px;  height: 362px; width: 1px; background: #cccccc; float: left;" ></div>
				
				<div style="float: left;">
					<h3 style="margin-bottom: 20px;">Event description:</h3><br>
					<textarea id="event_description" wrap="on" style="width: 265px; height: 317px; margin-top: 20px;" placeholder="Enter a description about the event."></textarea>
				</div>
			</div>
			<span class="hint" style="margin: 30px 34px; float: left;">Time should be entered as <i>hh:mm</i>, like <i>01:25PM</i>.</span>
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
			<button class="APOButton" id="create_serviceevent" buttonColor="blue" type="button" style="width: 124px; margin: 20px 0px; float: right;">
				Add event
			</button>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		
		$('#create_serviceevent').click(function() {
			showPopup("create_serviceevent_popup", "shade");
		});
		
		$('#checkbox_all_day').click(function() {
			if ($('#checkbox_all_day').is(":checked")) {
				$('#event_start_time, #event_end_date, #event_end_time').attr('disabled', 'disabled');
			} else {
				$('#event_start_time, #event_end_date, #event_end_time').removeAttr('disabled');
			}
		});
		
		$('#create_serviceevent_submit').click(function() {
			$('#enter_serviceevent_error').hide();
			
			$.ajax({
	        	type : 'POST',
				url : '../logic/create_event.php',
				dataType : 'text',
				data : {
					event_name : $('#event_name').val(),
					event_location : $('#event_location').val(),
					event_type : 'service',
					event_start_date : $('#event_start_date').val(),
					event_start_time : $('#event_start_time').val(),
					event_all_day : ($('#checkbox_all_day').is(":checked")) ? "checked" : "unchecked",
					event_end_date : $('#event_end_date').val(),
					event_end_time : $('#event_end_time').val(),
					event_description : $('#event_description').val()
				},
				success : function(data) {
					if (data == 'success') {
						killPopup("create_serviceevent_popup", "shade");
					} else {
						$('#enter_serviceevent_error').text(data);
						$('#enter_serviceevent_error').fadeIn(250);
					}
	      		},
	      		error : function(XMLHttpRequest, textStatus, errorThrown) {
					alert(errorThrown);
				}
		     });
		});
	});
	
	$('.scroll-pane#upcoming_events').perfectScrollbar();
	
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