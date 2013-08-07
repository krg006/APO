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