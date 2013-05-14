<div class="popupBox" barColor="gold" id="register_popup" style="width: 436px; margin-left: -218px; height: 560px; margin-top: -230px;">
	<div class="boxheader">
		<div class="title">
			Registration
		</div>
		<div class="x" onclick='killPopup("register_popup", "shade")'>
			<img src="../images/x.png" />
		</div>
	</div>
	<div class="boxbody">
		<center>
			<h4>Please complete the fields below. All inputs are required.</h4><br>
			<span class="error" id="e_register_blank">You did not fill out every field.</span>
			<span class="error" id="e_register_match">Your passwords do not match.</span>
			<span class="error" id="e_register_improper_email">Please enter your <i>@bucknell.edu</i> email address.</span>
			<span class="error" id="e_register_already_registered">That email address has already been registered.<br>
				Have you <a href="#">forgotten your password</a>?</span>
		</center>
		<br>
		<form id="form_register" method="post" style="margin: 29px auto;">
			<ul style="list-style-type: none;">
				<li style="margin-bottom: 24px;">
					First name: <br>
					<input class="APOInput" id="first_name" align="left" type="text" placeholder="Joe" name="first_name" />
				</li>
				<li style="margin-bottom: 24px;">
					Last name: <br>
					<input class="APOInput" id="last_name" type="text" placeholder="Smith" name="last_name" />
				</li>
				<li style="margin-bottom: 24px;">
					Bucknell email address: <br>
					<input class="APOInput" id="email_addr" type="text" placeholder="jms999@bucknell.edu" name="email_addr" />
				</li>
				<li style="margin-bottom: 24px;">
					Password: <br>
					<input class="APOInput" id="password_register" type="password" placeholder="Password" name="password" />
				</li>
				<li style="margin-bottom: 24px;">
					Confirm password: <br>
					<input class="APOInput" id="password_confirm" type="password" placeholder="Password" name="password_confirm" />
				</li>
				<button class="APOButton" id="register_submit" buttonColor="blue" type="button" style="float:right; margin-right: 40px;">Register</button>
			</ul>
		</form>
	</div>
	<div class="boxfooter" style="padding-right: 50px;">
		You will be notified via email when your account is active.
	</div>
</div>

<div class="popupBox" id="registration_confirmation" style="width: 436px; margin-left: -218px; height: 150px; margin-top: -75px;">
	<div class="boxheader">
		<div class="title">
			Registration
		</div>
		<div class="x" onclick='killPopup("registration_confirmation", "shade")'>
			<img src="../images/x.png" />
		</div>
	</div>
	<div class="boxbody" style="padding: 20px;">
		Registration success!<br>
		You will be notified via email when your account has been activated.
	</div>
	<div class="boxfooter">
		<button class="APOButton" id="dialog_close" buttonColor="gray" style="float: right; margin: 0px; 35px" type="button" onclick='killPopup("registration_confirmation", "shade")'>Ok</button>
	</div>
</div>
<div id="shade" onclick='killAllPopups("shade")'></div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#register_submit').click(function() {
			$.ajax({
				type : 'POST',
				url : '../logic/register.php',
				dataType : 'json',
				data : {
					first_name : $('#first_name').val(),
					last_name : $('#last_name').val(),
					email_addr : $('#email_addr').val(),
					password : $('#password_register').val(),
					password_confirm : $('#password_confirm').val()
				},
				success : function(data) {
					$('#e_register_blank').hide();
					$('#e_register_match').hide();
					$('#e_register_improper_email').hide();
					$('#e_register_already_registered').hide();
					
					
					if (data.error_blank) {
						$('#e_register_blank').show();
					} else if (data.error_match) {
						$('#e_register_match').show();
					} else if (data.error_improper_email) {
						$('#e_register_improper_email').show();
					} else if (data.error_already_registered) {
						$('#e_register_already_registered').show();
					} else if (data.success) {
						killPopup("register_popup", "shade");
						showPopup("registration_confirmation", "shade");
					}
				},
				error : function(XMLHttpRequest, textStatus, errorThrown) {
					alert(errorThrown);
				}
			});
			return false;
		});
		
		$('#register').click(function() {
			showPopup("register_popup", "shade");
		})
	});
	
</script>

