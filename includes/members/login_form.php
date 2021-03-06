<div class="loginWrapper">
	<h1 style="float:left">Log in</h1>
	<br class="clear">
	<div class="APOShadowbox" align="center" style="width: 336px;">
		<form>
			<center>
				<span class="error" id="e_blank">You must enter a username and a password.</span>
				<span class="error" id="e_not_activated">
					Your account has not been activated yet.<br>
					You will receive an email when your account is activated. 
				</span>
				<span class="error" id="e_username_incorrect_formatting">You have entered an incorrectly formatted username.</span>
				<span class="smallerror" id="e_username_incorrect_formatting">Your username is the first part of your bucknell email address.</span>
				
				<span class="error" id="e_not_yet_registered">
					You have not registered yet.
				</span>
				<span class="error" id="e_incorrect_username_or_password">Incorrect username and/or password.</span>

				<p><input id="username" type="text" placeholder="Username" name="username"></p>
				<p><input id="password" type="password" placeholder="Password" name="password"></p>
			</center>
			<button class="gray" id="register" style="float:left;" type="button">Register</button>
			<button class="blue" id="login" type="submit" style="float:right;">Log In</button>
		</form>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#login').click(function() {
			$.ajax({
				type : 'POST',
				url : '../logic/login.php',
				dataType : 'json',
				data : {
					username : $('#username').val(),
					password : $('#password').val()
				},
				success : function(data) {
					$('#e_blank').hide();
					$('#e_username_incorrect_formatting').hide();
					$('#e_not_yet_registered').hide();
					$('#e_not_activated').hide();
					$('#e_incorrect_username_or_password').hide();
						
					if (data.error_blank) {
						$('#e_blank').show();
					} else if (data.error_formatting) {
						$('#e_username_incorrect_formatting').show();
					} else if (data.error_user_not_exist) {
						$('#e_not_yet_registered').show();
					} else if (data.error_user_not_activated) {
						$('#e_not_activated').show();
					} else if (data.error_match) {
						$('#e_incorrect_username_or_password').show();
					} else if (data.success) {
						window.location.href="../pages/members.php"
					}
				}
				/*,
				error : function(XMLHttpRequest, textStatus, errorThrown) {
					alert(errorThrown);
				}
				*/
			});
			return false;
		});
	}); 
</script>