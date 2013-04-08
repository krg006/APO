<?php
	if ((isset($_GET['register']) && $_GET['register'] == 'show')) {
?>
		<div class="popupBox" barColor="gold" id="register_popup" style="width: 436px; margin-left: -218px; height: 560px; margin-top: -230px;">
			<div class="boxheader">
				<div class="title">
					Registration
				</div>
				<div class="x" onclick='window.location.href="members.php"'>
					<img src="../images/x.png" />
				</div>
			</div>
			<div class="boxbody">
				<center>
					<h3>Please complete the fields below. All inputs are required.</h3><br>
					<?php
						if (isset($_GET['fields']) && $_GET['fields'] == 'false') {
					?>		
						<span>You did not fill out every field.</span><br>
					<?php
						}
						if (isset($_GET['password']) && $_GET['password'] == 'false') {
					?>		
						<span>Your passwords do not match.</span><br>
					<?php
						}
						if (isset($_GET['email']) && $_GET['email'] == 'false') {
					?>		
						<span>Please enter your <i>@bucknell.edu</i> email address.</span><br>
					<?php
						}
						if (isset($_GET['email']) && $_GET['email'] == 'duplicate') {
					?>		
						<span>That email address has already been registered.<br>
							Have you <a href="#">forgotten your password</a>?</span><br>
					<?php
						}
					?>
					
				</center>
				<br>
				<form action="members.php?register=true" method="post" style="margin: 29px auto;">
					<ul style="list-style-type: none;">
						<li style="margin-bottom: 24px;">
							First name: <br>
							<input class="APOInput" align="left" type="text" placeholder="Joe" name="first_name" />
						</li>
						<li style="margin-bottom: 24px;">
							Last name: <br>
							<input class="APOInput" type="text" placeholder="Smith" name="last_name" />
						</li>
						<li style="margin-bottom: 24px;">
							Bucknell email address: <br>
							<input class="APOInput" type="text" placeholder="jms999@bucknell.edu" name="email_addr" />
						</li>
						<li style="margin-bottom: 24px;">
							Password: <br>
							<input class="APOInput" type="password" placeholder="Password" name="password" />
						</li>
						<li style="margin-bottom: 24px;">
							Confirm password: <br>
							<input class="APOInput" type="password" placeholder="Password" name="password_confirm" />
						</li>
						<input class="APOButton" buttonColor="blue" type="submit" style="float:right; margin-right: 40px;" value="Submit" />
					</ul>
				</form>
			</div>
			<div class="boxfooter" style="padding-right: 50px;">
				You will be notified via email when your account is active.
			</div>
		</div>
		<div id="shade" onclick='window.location.href="members.php"'></div>
<?php
	}
	if ((isset($_GET['register']) && $_GET['register'] == 'success')) {
?>
		<div class="popupBox" id="popbox1" style="width: 436px; margin-left: -218px; height: 130px; margin-top: -65px;">
			<div class="boxheader">
				<div class="title">
					Registration
				</div>
				<div class="x" onclick='window.location.href="members.php"'>
					<img src="../images/x.png" />
				</div>
			</div>
			<div class="boxbody">
				Registration success!<br>
				You will be notified via email when your account has been activated.
			</div>
			<div class="boxfooter">
				<button class="APOButton" buttonColor="gray" type="button" onclick='window.location.href="members.php"'>Ok</button>
			</div>
		</div>
		<div id="shade" onclick='window.location.href="members.php"'></div>
<?php
	}
?>
