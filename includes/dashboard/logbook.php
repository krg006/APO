<?php
	if ((isset($_GET['show']) && $_GET['show'] == 'enter_hours')) {
?>
		<div class="popupBox2" id="popupTest" style="width: 436px; margin-left: -218px; height: 130px; margin-top: -65px;">
			<div class="boxheader">
				<div class="title">
					Popup Test
				</div>
				<div class="x" onclick='killPopup("popupTest", "shade2")'>
					<img src="../images/x.png" />
				</div>
			</div>
			<div class="boxbody">
				Test popup!<br>
				Active user is <?php echo user_get_first_name($_SESSION['username']); ?>.
			</div>
			<div class="boxfooter">
				<button class="APOButton" buttonColor="gray" type="button" onclick='killPopup("popupTest", "shade2")'>Close</button>
			</div>
		</div>
		<div id="shade2" onclick='killPopup("popupTest", "shade2")'></div>
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
			<h2>My hours:</h2>
			<br>
			<center>
				<table class="APOTable" header="yes" width="380px">
					<tr>
					    <th width="250px">Event</th>
					    <th width="50px">Date</th>
					    <th width="40px">Hours</th>
					    <th width="40px"></th>
					</tr>
				</table>
				<div class="scroll-pane" style="height: 246px;">
					<center>
					<table class="APOTable" width="380px">
						<tr>
							<td width="250px"><a href="#" style="padding: 8px;">event_name</a></td><td width="50px">date1</td><td width="40px">hours1</td><td width="40px"><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#" style="padding: 8px;">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#" style="padding: 8px;">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#" style="padding: 8px;">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#" style="padding: 8px;">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#" style="padding: 8px;">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#" style="padding: 8px;">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#" style="padding: 8px;">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#" style="padding: 8px;">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#" style="padding: 8px;">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td><a href="#" style="padding: 8px;">event_name</a></td><td>date1</td><td>hours1</td><td><a href="#">Edit</a></td>
						</tr>
					</table>
					<center>
				</center>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('.scroll-pane').perfectScrollbar();
</script>