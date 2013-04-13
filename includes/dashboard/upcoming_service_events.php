<div class="popupBox2" id="create_event" style="width: 436px; margin-left: -218px; height: 350px; margin-top: -175px; display: none;">
	<div class="boxheader">
		<div class="title">
			Enter Hours
		</div>
		<div class="x" onclick='window.location.href="members.php"'>
			<img src="../images/x.png" />
		</div>
	</div>
	<div class="boxbody">
		<form action="members.php?enter_hours=true" method="post" style="margin: 29px auto;">
			<ul style="list-style-type: none;">
				<li style="margin-bottom: 24px;">
					Event name: <br>
					<input class="APOInput" align="left" type="text" placeholder="Blood drive" name="event_name" />
				</li>
				<li style="margin-bottom: 24px;">
					<div style="float: left">
						Date attended: <br>
						<input style="width: 216px;" class="APOInput" type="text" id="datepicker" readonly="true" placeholder="12/15/2013" name="event_date" />
					</div>
					<div style="float: left; margin-left: 12px;">
						Hours attended: <br>
						<input style="width: 108px;" class="APOInput" type="text" placeholder="1.5" name="num_hours" />
					</div>
				</li>
				<input class="APOButton" buttonColor="blue" type="submit" style="float:right; margin: 40px; margin-bottom: 0px;" value="Submit" />
			</ul>
		</form>
	</div>
	<div class="boxfooter" style="margin: 29px;">
		By submitting these hours, you verify they are accurate.
	</div>
</div>
<div id="shade2" style="display: none;" onclick='window.location.href="members.php"'></div>




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
			<button class="APOButton" buttonColor="blue" onclick='showPopup("create_event", "shade2")' style="width: 124px; margin: 20px 0px; float: right;">Add event</button>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('.scroll-pane#upcoming_events').perfectScrollbar();
</script>