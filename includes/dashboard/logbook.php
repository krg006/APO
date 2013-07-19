<div class="popupBox" id="add_hours_popup" style="width: 436px; margin-left: -218px; height: 350px; margin-top: -175px;">
	<div class="boxheader">
		<div class="title">
			Add Service Hours
		</div>
		<div class="x" onclick='killPopup("add_hours_popup", "shade")'>
			<img src="../images/x.png" />
		</div>
	</div>
	<div class="boxbody">
		<form style="margin: 29px auto;">
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
				<button class="blue" id="add_hours_submit" type="button" style="float:right; margin: 40px; margin-bottom: 0px;">Submit</button>
			</ul>
		</form>
	</div>
	<div class="boxfooter" style="margin: 29px;">
		By submitting these hours, you verify they are accurate.
	</div>
</div>
<div id="shade" onclick='killAllPopups("shade")'></div>




<div class="APOPanel" style="width: 620px;">
	<div class="panelheader">
		Logbook
	</div>
	<div class="panelbody">
		<div id="num_service_hours" style="margin: 20px; position: relative; height: 326px; width: 129px; float: left;">
			<h4>My service hours:</h4>
			<br>
			<center>
				<span class="nice" style="margin-top: 75px; display: block; font-size: 18px;"><span style="font-size: 75px;">42</span>/70</span>
				<div style="position: absolute; bottom: 0px; width: 130px;">
					<button class="orange" id="add_hours" onclick='showPopup("add_hours_popup", "shade")' style="margin-bottom: 0px;">Add hours</button>
				</div>
			</center>
		</div>
		
		<div style="margin: 20px 0px; position: relative; height: 326px; width: 1px; background: #cccccc; float: left;"></div>
		
		<div id="my_service_hours" style="margin: 20px; position: relative; height: 326px; width: 410px; float: left;">
			<h4 style="margin-left: 0px;">My hours:</h4>
			<br>
			
			<div class="APOTableHeader" style="width: 410px;">
				<div class="APOTableLabel" style="width: 280px;">Event</div>
				<div class="APOTableLabel" style="width: 50px;">Date</div>
				<div class="APOTableLabel" style="width: 50px;">Hours</div>
				<br class="clear">
			</div>
			<div class="scroll-pane" id="my_hrs" style="height: 246px; width: 412px;">
				<div id="scroll_wrapper" style="border: 1px solid #cccccc;">
					<div class="APOTableRow" style="width: 410;">
						<div class="APOTableLabel" style="width: 278;">
							<span style="width: 210px">event_name stretch this out to be as long as possible blah blah blah</span>
							<img class="APOTableRowButton ButtonEdit"/>
							<img class="APOTableRowButton ButtonTrash"/>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>date</span>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>3</span>
						</div>
					</div>
					
					<div class="APOTableRow" style="width: 410;">
						<div class="APOTableLabel" style="width: 278;">
							<span style="width: 210px">event_name stretch this out to be as long as possible blah blah blah</span>
							<img class="APOTableRowButton ButtonEdit"/>
							<img class="APOTableRowButton ButtonTrash"/>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>date</span>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>3</span>
						</div>
					</div>
					
					<div class="APOTableRow" style="width: 410;">
						<div class="APOTableLabel" style="width: 278;">
							<span style="width: 210px">event_name stretch this out to be as long as possible blah blah blah</span>
							<img class="APOTableRowButton ButtonEdit"/>
							<img class="APOTableRowButton ButtonTrash"/>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>date</span>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>3</span>
						</div>
					</div>
					
					<div class="APOTableRow" style="width: 410;">
						<div class="APOTableLabel" style="width: 278;">
							<span style="width: 210px">event_name stretch this out to be as long as possible blah blah blah</span>
							<img class="APOTableRowButton ButtonEdit"/>
							<img class="APOTableRowButton ButtonTrash"/>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>date</span>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>3</span>
						</div>
					</div>
					
					<div class="APOTableRow" style="width: 410;">
						<div class="APOTableLabel" style="width: 278;">
							<span style="width: 210px">event_name stretch this out to be as long as possible blah blah blah</span>
							<img class="APOTableRowButton ButtonEdit"/>
							<img class="APOTableRowButton ButtonTrash"/>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>date</span>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>3</span>
						</div>
					</div>
					
					<div class="APOTableRow" style="width: 410;">
						<div class="APOTableLabel" style="width: 278;">
							<span style="width: 210px">event_name stretch this out to be as long as possible blah blah blah</span>
							<img class="APOTableRowButton ButtonEdit"/>
							<img class="APOTableRowButton ButtonTrash"/>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>date</span>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>3</span>
						</div>
					</div>
					
					<div class="APOTableRow" style="width: 410;">
						<div class="APOTableLabel" style="width: 278;">
							<span style="width: 210px">event_name stretch this out to be as long as possible blah blah blah</span>
							<img class="APOTableRowButton ButtonEdit"/>
							<img class="APOTableRowButton ButtonTrash"/>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>date</span>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>3</span>
						</div>
					</div>
					
					<div class="APOTableRow" style="width: 410;">
						<div class="APOTableLabel" style="width: 278;">
							<span style="width: 210px">event_name stretch this out to be as long as possible blah blah blah</span>
							<img class="APOTableRowButton ButtonEdit"/>
							<img class="APOTableRowButton ButtonTrash"/>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>date</span>
						</div>
						<div style="margin: 10px 0px;  height: 20px; width: 1px; background: #cccccc; float: left;"></div>
						<div class="APOTableLabel" style="width: 50px;">
							<span>3</span>
						</div>
					</div>
					
					
				</div>
			</div>
			
			<!--
				<table class="APOTable" header="yes" width="410px">
					<tr>
					    <th width="250px">Event</th>
					    <th width="50px">Date</th>
					    <th width="40px">Hours</th>
					    <th width="40px"></th>
					</tr>
				</table>
				<div class="scroll-pane" id="my_hrs" style="height: 246px; width: 410px;">
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
				</div>
			-->
		</div>
		
		<br class="clear">
		
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {

		$('#add_hours').click(function() {
			showPopup("add_hours_popup", "shade");
		})
	});
	
	$('.scroll-pane#my_hrs').perfectScrollbar();
	
	$(function(){
		$('#datepicker').datepicker({
			inline: true,
			showOtherMonths: true,
			dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
		});
	});
</script>