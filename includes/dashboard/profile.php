<div class="APOPanel" color="gold" style="width: 230px; height: 400px; margin-right: 20px;">
	<div class="panelheader">
		<?php echo user_get_first_name($_SESSION['username']).' '.user_get_last_name($_SESSION['username']); ?>
	</div>
	<div class="panelbody">
		<div style="padding-top: 10px; position: relative; height: 356px;">
	    	<center>
	    	<div class="hoverpic">
	    		<div>
	    			<a href="#" style="text-decoration: none;">
	    				<img src="../images/profile_gold_on_blue.png" />
		    			<div class="hoveroverlay">
		    				Change profile picture
		    			</div>
	    			</a>
	    		</div>
	    	</div>
	    	</center>
	    	
	    	<div class="navbar">
		    	<ul>
		    		<li>
		    			<a href="#">Make blog post</a>
		    		</li>
		    		<li>
		    			<a href="#">Fraternity bylaws</a>
		    		</li>
		    		<li>
		    			<a href="../pages/logout.php">Log out</a>
		    		</li>
		    	</ul>
	    	</div>
		</div>
	</div>
</div>