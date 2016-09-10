<?php
	include("header.php");
	include("../includes/database_connection.php");
	include("../includes/functions.php");
	include("../includes/session.php");
?>

<?php
	if(!logged_in())
    	redirect_to("login.php");
?> 

	<div class="layout_about_us">
		<div>
			<h2 style="font-size: 50px;text-align: center;color: black;font-family: 'Pacifico', cursive;">About Us</h2>
		</div>
		<div class="queries">
			<div class="queries_head">
				<img src="images/a1.jpg" height=90% width=90% style="float: left;margin-top: -3%;"></img> 
			</div>
		</div>
		<div class="mail">
			<div style="float:left;font-size: 200%;color: #fd5c63;padding-top: 2%;width: 100%;">
				A few words about us
			</div>
			<div class="mail_content"><br><br>
				<div style="float: left;font-weight: bold;color: black;margin-left: -7%;padding-right: 2%;">
					Nowadays, their had been a widespread increase in the domestic as well as international migration of people because of their work, business, education and the most important <u>Tourism</u>. So they require a platform for booking tickets easily and quickly.
				</div>
				<div style="float: left;margin-left: -7%;"><br><br>
					So we as a team have decided to provide them a tickets as well as hotel booking platform which would allow them to book tickets effectively. 
				</div>
			</div>
		</div>
	</div>
	<div class="layout_about_us" style="height: 60%;">
		<div style="font-size: 50px;text-align: center;color: black;font-family: 'Pacifico', cursive;">
			Our Team
		</div>
		<div class="members">
			<div class="tushar">

			</div>
			<div class="aman">

			</div>
			<div class="krishna">

			</div>
		</div>
	</div>

<?php
	include("footer.php");
?>