<link rel='stylesheet' type='text/css' href='../css/UIElements/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='../css/UIElements/popup.css' />

<script type='text/javascript' src='../js/jquery-1.9.1.js'></script>
<script type='text/javascript' src='../js/jquery-ui-1.10.2.custom.js'></script>
<script type='text/javascript' src='../js/fullcalendar.js'></script>
<script type='text/javascript' src='../js/popups.js'></script>

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
	</div>
	<div class="boxfooter" style="padding-right: 50px;">
		You will be notified via email when your account is active.
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
					url : '../logic/calendar_events.php?opt=get_one',
					dataType : 'json',
					data : {
						event_id : event.id
					},
					success : function(data) {
						$('#event_info_popup #event_title').text(data.eventName);
		        		showPopup("event_info_popup", "shade");
		      		}
		      })
		    }
		});
	});

</script>
<div id='calendar' style="margin-top: 24px;"></div>


