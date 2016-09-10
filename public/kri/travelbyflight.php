<!DOCTYPE html>
<html lang="en">
<head >
	<meta charset="utf-8">
	<title>Contact Us !</title>
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/gallery.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
</head>
<body>
	<div class="top">
		<div class="top-left">
			<ul class="top-one">
				<li id="first"><a href="" >+918588040053</a></li>
				<li class="end"><a href="" >travel.freak@anywhere.com</a></li>
			</ul>
		</div>
		<div class="top-right">
			<ul class="top-two">
				<li><a href="facebook.com">Facebook</a></li>
				<li><a href="google.com">google</a></li>
				<li><a href="twitter.com">twitter</a></li>
				<li><a href="linkedin.com">linkedin</a></li>
			</ul>
		</div>
	</div>
	<div class="content" style="height: 15%;">
		<div class="content-left">
			<ul class="content-one">
				<li><a href="home.html">TRAVELFREAK</a></li>
			</ul>
		</div>
		<div class="content-right">
			<ul class="content-two">
				<li><a href="home.html">Home</a></li>
				<li style="margin-top: -0.4em;margin-right:-0.4em;">
					<div class="drop2">
						<div class="dropbtn2" >&nbsp;Tickets</div>
						<div class="dropdown-content2">
							<a href="profile_settings.php">Airplane</a>
							<a href="account_settings.php">Train</a>
							<a href="account_settings.php">Bus</a>
						</div>
					</div>
				</li>
				<li><a href="google.com">Hotels</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="twitter.com">TravelDiaries</a></li>
				<li style="margin-top: -0.4em;margin-right:-0.4em;">
					<div class="drop">
						<div class="dropbtn" >&nbsp;Settings</div>
						<div class="dropdown-content">
							<a href="account_settings.html">Logout</a>
							<a href="profile_settings.html">Profile Settings</a>				
							<div style="margin-top: -0.4em;margin-right:-0.4em;">
								<div class="drop1">
								<div class="dropbtn1" >&nbsp;Account Settings</div>
									<div class="dropdown-content1">
										<a href="change_password.html">Change Password</a>
										<a href="account_settings.html">Delete Account</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="layout_contact_us">
		<div>
			<h2 style="font-size: 60px;text-align: center;color: black;font-family: 'Pacifico', cursive;">Travel Details</h2>
		</div>
		<div class="travelpage">
				<form method="post" style="color: black; text-align: center;" action="#">
					<b>Select Trip Type</b><br>
					<input type="radio" name="triptype" value="One Way"> One way
					<input type="radio" name="triptype" value="Round Trip" checked="1"> Round Trip<br><br><br>
					<b>Select Flight Type</b><br>
					<input type="radio" name="flighttype" value="International"> International
					<input type="radio" name="flighttype" value="India" checked="1"> India<br><br><br>
					<input type="textarea" name="source" placeholder="Depart From" autocomplete="on" required="required"><br><br>
					<input type="textarea" name="destination" placeholder="Going To" autocomplete="on" required="required"><br><br>
					<input class="textbox-n" type="text" onfocus="(this.type='date')"  id="date" name="departure" required="required" placeholder="Departure Date"><br><br>
					<input class="textbox-n" type="text" onfocus="(this.type='date')"  id="date" name="Arrival" required="required" placeholder="Return Date"><br><br>
					<input type="number" name="adults" min="1" max="10" placeholder="Adults">
					<input type="textarea" name="children" min="1" max="10" placeholder="Children" onfocus="this.type='number';" required="required">
					<input type="textarea" name="infants" min="1" max="10" placeholder="Infants" onfocus="this.type='number';" required="required"><br><br>
					<select name="dropdown" size="1">
						<option value="Economy" selected="1" >Economy</option>
						<option value="Bussiness" >Bussiness</option>
					</select><br><br>
					<input type="radio" name="faretype" value="Normal Fare" checked="1">Normal Fare
					<input type="radio" name="faretype" value="Special Return Fare">Special Return Fare
					<input type="radio" name="faretype" value="GDS Special Return Fare">GDS Special Return Fare<br><br>
					<input type="submit" name="book" value="Book!">
				</form>
		</div>
	</div>
	<div class="about">
		<div class="add">
			<div class="about_head">Address</div>
			<p>
				Cyber City<br>
				Phase IV, Gurgaon<br>
				Phone : +01244085085<br>
				Email : travel.freak@anywhere.com<br>
			</p>
		</div>
		<div class="nav">
			<div class="about_head">Navigation</div>
			<p>
				<a href="about_us.html">About</a><br>
				<a href="">Follow</a><br>
				<a href="">Gallery</a><br>
				<a href="contact_us.html">Contact</a><br>
			</p>
		</div>
		<div class="follow">
			<div class="about_head">Follow</div>
			<p>
				<a href="facebook.com">Facebook</a><br>
				<a href="google.com">Google</a><br>
				<a href="twitter.com">Twitter</a><br>
				<a href="linkedin.com">Linkedin</a><br>
			</p>
		</div>
		<div class="newsletter">
			<div class="about_head">Newsletter</div>
			<p>
				<form>
					<input type="email" name="email" placeholder="Enter your email here" style=" height: 2.5em; width: 20em;" required="required"></input>
					<input type="submit" name="submit" value="Subscribe" style="margin-top: 1em;padding: 0.8em;width: 10em;" ></input>
				</form>
			</p>
		</div>
		<div class="footer" style="color: grey;">
			&copy; 2016 Travel Freak | All Rights Reserved | 
		</div>
	</div>
</body>
</html> 