<style>
	input.createEventDate {
		width: 108px;
		margin-top: 5px;
		margin-bottom: 15px;
	}
</style>

<div class="popupBox" id="create_event_popup" barColor="gold" style="width: 696px; margin-left: -348px; height: 516px; margin-top: -258px;">
	<div class="boxheader">
		<div class="title">
			Create Event
		</div>
		<div class="x" onclick='killPopup("create_event_popup", "shade")'>
			<img src="../images/x.png" />
		</div>
	</div>
	<div class="boxbody">
		<center>
			<span class="error" id="enter_event_error"></span>
		</center>
		<form style="margin: 29px auto;">
			<div style="position: relative; margin: 0px auto; width: 595px; height: 380px;">
				<div style="float: left;">
					<h3 style="margin-bottom: 20px;">Event information:</h3><br><br>
					Event name:<br>
					<input class="APOInput" id="event_name" style="width: 264px; margin-top: 5px; margin-bottom: 15px;" align="left" type="text" placeholder="ex. Blood drive" />
					Event location:<br>
					<input class="APOInput" id="event_location" style="width: 264px;  margin-top: 5px; margin-bottom: 15px;" align="left" type="text" placeholder="ex. Davis Gym" />
					<div style="margin-top: 24px;">
						<div id="create_event_start" style="width: 108px; height:183px; float: left;">
							<h4 style="margin-bottom: 15px;">Start:</h4><br>
							Date: <br>
							<input class="APOInput createEventDate" id="event_start_date" type="text" readonly="true" placeholder="12/15/2013" />
							Time: <br>
							<input class="APOInput createEventDate" id="event_start_time" type="text" placeholder="10:30AM" />
							<input id="checkbox_all_day" class="APOCheck" value="false" type="checkbox" />
							<label for="checkbox_all_day" class="APOCheck">All Day</label><br>
						</div>
						
						<div id="create_event_divider" style="margin: 0px 24px;  height: 183px; width: 1px; background: #cccccc; float: left; display: ;" ></div>
						
						<div id="create_event_end" style="width: 108px; height:183px; float: left;">
							<h4 style="margin-bottom: 15px;">End:</h4><br>
							Date: <br>
							<input class="APOInput createEventDate" id="event_end_date" type="text" readonly="true" placeholder="12/15/2013" />
							Time: <br>
							<input class="APOInput createEventDate" id="event_end_time" type="text" placeholder="07:20PM" />
							
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
					<textarea id="event_description" wrap="on" style="width: 265px; height: 245px; margin-top: 5px;" placeholder="Enter a description about the event."></textarea>
				</div>
			</div>
			<span class="hint" style="margin: 30px 34px; float: left;">Time should be entered as <i>hh:mm</i>, like <i>01:25PM</i>.</span>
			<button class="APOButton" id="create_event_submit" buttonColor="blue" type="button" style="float: right; margin: 20px 40px;">Submit</button>
		</form>
	</div>
	<div class="boxfooter" style="margin: 29px;">
	</div>
</div>

<div id="shade" onclick='killAllPopups("shade")'></div>

<div class="APOPanel" id="panel_profile" style="width: 230px; position: relative;">
	<div class="panelheader">
		<?php echo user_get_first_name($_SESSION['username']).' '.user_get_last_name($_SESSION['username']); ?>
	</div>
	<div class="panelbody">
		<div style="position: relative; height: 356px;">
	    	<center>
	    	<div class="hoverpic">
	    		<div>
	    			<a href="#" style="text-decoration: none;">
	    				<img src="../images/profile_gold_light.png" />
		    			<div class="hoveroverlay">
		    				Change profile picture
		    			</div>
	    			</a>
	    		</div>
	    	</div>
	    	</center>
	    	<h5 id="profile_position_1" style="margin-left: 24px;"><?php get_first_position($_SESSION['username']); ?></h5><br>
	    	<h5 id="profile_position_2" style="margin-left: 24px;"><?php get_second_position($_SESSION['username']); ?></h5>
	    	<div class="navbar">
		    	<ul>
		    		<li>
		    			<a href="#" id="create_event">Create new event</a>
		    		</li>
		    		<li>
		    			<a href="#">Make blog post</a>
		    		</li>
		    		<li>
		    			<a href="../pages/logout.php">Log out</a>
		    		</li>
		    	</ul>
	    	</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function() {
		
		var eventType = "default";
    	
        $(".dropdown dt a").click(function() {
            $(".dropdown dd ul").toggle();
        });
                    
        $(".dropdown dd ul li a").click(function() {
        	var category = $(this).attr('class');
        	
        	if (category != 'category') {
        		var text = $(this).html();
        		if (category == 'service-type') {
        			var text = "Service " + $(this).html();
        		}
	            $(".dropdown dt a span").html(text);
	            $(".dropdown dd ul").hide();
	            
	            eventType = $("#event_type").find("dt a span.value").html();
        	}
        });
                    
        $(document).bind('click', function(e) {
            var $clicked = $(e.target);
            if (!$clicked.parents().hasClass("dropdown"))
                $(".dropdown dd ul").hide();
        });
		
		$('#create_event').click(function() {
			showPopup("create_event_popup", "shade");
		});
		
		$('#checkbox_all_day').click(function() {
			if ($('#checkbox_all_day').is(":checked")) {
				$('#event_start_time, #event_end_date, #event_end_time').attr('disabled', 'disabled');
			} else {
				$('#event_start_time, #event_end_date, #event_end_time').removeAttr('disabled');
			}
		});
		
		$('#create_event_submit').click(function() {
			$('#enter_event_error').hide();
			$.ajax({
	        	type : 'POST',
				url : '../logic/create_event.php',
				dataType : 'text',
				data : {
					event_name : $('#event_name').val(),
					event_location : $('#event_location').val(),
					event_type : eventType,
					event_start_date : $('#event_start_date').val(),
					event_start_time : $('#event_start_time').val(),
					event_all_day : ($('#checkbox_all_day').is(":checked")) ? "checked" : "unchecked",
					event_end_date : $('#event_end_date').val(),
					event_end_time : $('#event_end_time').val(),
					event_description : $('#event_description').val()
				},
				success : function(data) {
					if (data == 'success') {
						killPopup("create_event_popup", "shade");
					} else {
						$('#enter_event_error').text(data);
						$('#enter_event_error').fadeIn(250);
						$('#create_event_popup').css("height", "532");
					}
	      		},
	      		error : function(XMLHttpRequest, textStatus, errorThrown) {
					alert(errorThrown);
				}
		     });
		});
	});
	
	
	
	$(function(){
		$('#event_start_date, #event_end_date').datepicker({
			inline: true,
			showOtherMonths: true,
			dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
		});
	});
</script>