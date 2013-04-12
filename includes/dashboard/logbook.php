<?php
	if ((isset($_GET['show']) && $_GET['show'] == 'enter_hours')) {
?>
		<div class="popupBox2" id="popupTest" style="width: 436px; margin-left: -218px; height: 350px; margin-top: -175px;">
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
		<div id="shade2" onclick='window.location.href="members.php"'></div>
<?php
	}
?>




<div class="APOPanel" color="blue" style="width: 620px; height: 400px; margin-left: 20px;">
	<div class="panelheader">
		Logbook
	</div>
	<div class="panelbody">
		<div id="num_service_hours" style="margin: 20px; position: relative; height: 326px; width: 129px; float: left;">
			<h2>My service hours:</h2>
			<br>
			<center>
				<span class="nice" style="margin-top: 75px; display: block; font-size: 18px;"><span style="font-size: 75px;">42</span>/70</span>
				<div style="position: absolute; bottom: 0px; width: 130px;">
					<button class="APOButton" buttonColor="blue" onclick='window.location.href="members.php?show=enter_hours"' style="width: 124px; margin-bottom: 10px;">Add hours</button>
				</div>
			</center>
		</div>
		
		<div style="margin: 20px 0px; position: relative; height: 326px; width: 1px; background: #cccccc; float: left;" ></div>
		
		<div id="my_service_hours" style="margin: 20px; position: relative; height: 326px; width: 410px; float: left;">
			<h2 style="margin-left: 0px;">My hours:</h2>
			<br>
			<center>
				<table class="APOTable" header="yes" width="410px">
					<tr>
					    <th width="250px">Event</th>
					    <th width="50px">Date</th>
					    <th width="40px">Hours</th>
					    <th width="40px"></th>
					</tr>
				</table>
				<div class="scroll-pane" id="my_hrs" style="height: 246px; width: 410px;">
					<center>
					<table class="APOTable" width="410px">
						<tr>
							<td width="250px"><a href="#">event_name</a></td><td width="50px">date1</td><td width="40px">hours1</td><td width="40px"><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
					</table>
					<center>
				</div>
				</center>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('.scroll-pane#my_hrs').perfectScrollbar();
	$(function(){
		$('#datepicker').datepicker({
			inline: true,
			showOtherMonths: true,
			dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
		});
	});
</script>