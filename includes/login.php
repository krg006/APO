<div id="body" align="center" style="margin-top: 50px">
	<h2>Members of Alpha Phi Omega - Iota Kappa Chapter can log in below:</h2>
	<div class="APOShadowbox" align="center" style="width: 336px;">
		<form action="members.php?login=true" method="post">
			<center>
				<?php
					if (isset($_GET['fields']) && $_GET['fields'] == 'false') {
				?>
						<span class="error">You must enter a username and a password.</span>
				<?php
					}
					if (isset($_GET['activated']) && $_GET['activated'] == 'false') {
				?>
						<span class="error">
							Your account has not been activated yet.<br>
							You will receive an email when your account is activated. 
						</span>
				<?php
					}
					if (isset($_GET['format']) && $_GET['format'] == 'false') {
				?>
						<span class="error">You have entered an incorrectly formatted username.</span><br>
						<span class="error" style="font-size: 12px;">Your username is the first part of your bucknell email address.</span>
				<?php
					}
					if (isset($_GET['registered']) && $_GET['registered'] == 'false') {
				?>
						<span class="error">
							You have not registered yet.<br>
							<a href="members.php?register=show">Register now.</a>
						</span>
				<?php
					}
					if (isset($_GET['match']) && $_GET['match'] == 'false') {
				?>
						<span class="error">Incorrect username and/or password.</span>
				<?php
					}
				?>

				<p><input class="APOInput" type="text" placeholder="Username" name="username"></p>
				<p><input class="APOInput" type="password" placeholder="Password" name="password"></p>
			</center>
			<button class="APOButton" buttonColor="gray" style="float:left;" type="button" onclick='window.location.href="members.php?register=show"'>
				Register
			</button>
			<input class="APOButton" buttonColor="blue" type="submit" style="float:right;" value="Log in" />
		</form>
	</div>
</div>