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