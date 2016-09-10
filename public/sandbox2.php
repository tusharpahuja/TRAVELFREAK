<!DOCTYPE html>
<html lang="en">
<head >
	<meta charset="utf-8">
	<title>Travel Anywhere !</title>
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/gallery.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
	<script type="text/javascript" src="js/change.js"></script>
	
</head>
<body >
	<div class="top" >
		<div class="top-left" >
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
	<div class="content" id="place" style="background-image: url('images/3.jpg');">
		<div class="content-left">
			<ul class="content-one">
				<li><a href="home.php">TRAVELFREAK</a></li>
			</ul>
		</div>
		<div class="content-right">
			<ul class="content-two">
				<li><a href="home.php">Home</a></li>
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
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="twitter.com">TravelDiaries</a></li>
				<li style="margin-top: -0.4em;margin-right:-0.4em;">
					<div class="drop">
						<div class="dropbtn" >&nbsp;Settings</div>
						<div class="dropdown-content" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,1);background-color: none;">
							<a href="account_settings.php">Logout</a>
							<a href="profile_settings.php">Profile Settings</a>				
							<div style="margin-top: -0.4em;margin-right:-0.4em;">
								<div class="drop1">
									<div class="dropbtn1" >&nbsp;Account Settings</div>
									<div class="dropdown-content1">
										<a href="change_password.php">Change Password</a>
										<a href="account_settings.php">Delete Account</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="block" id="name">
			<p class="circle ">HAWAII</p>
		</div>
		<div class="arrow">
			<img src="images/arrow.png" id="arr" onclick="change()">
		</div>
	</div>
	<div class="a_content">
		<div class="head">
			Top Tours
		</div>
		<div class="tour_desc">
			These are some of the most fascinating tour packages we have for you
		</div>
		<div class="places">
			<ul>
				<li><div class="block1">
					<img src="images/a.png" class="image"></img>
					<p class="place_name">San Francisco</p>
				</div></li>
				<li><div class="block1">
					<img src="images/a1.png" class="image"></img>
					<p class="place_name">Maldives</p>
				</div></li>
				<li><div class="block1">
					<img src="images/a2.png" class="image"></img>
					<p class="place_name">Ireland</p>
				</div></li>
				<li><div class="block1">
					<img src="images/a3.png" class="image"></img>
					<p class="place_name">New York</p>
				</div></li>
			</ul>
		</div>
	</div>
	<div class="offers" style="background: url('images/o1.jpg'); height: 400px;width: 90%;">
		<h1>TODAY BEST OFFERS</h1>
		<p> Here are todays best offers</p>
		<button>Click Here !</button>
	</div>
	<div class="news">
		<h1>News & Events</h1>
		<p>Here are some of the Blogs about the website</p>
		<div class="blogs">
			<div class="blog">
				<div class="img">
					<img src="images/n1.jpg">
				</div>
			</div>
			<div class="blog">
				<div class="img">
					<img src="images/n2.jpg">
				</div>
			</div>
			<div class="blog">
				<div class="img">
					<img src="images/n3.jpg">
				</div>
			</div>
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
				<a href="about_us.php">About</a><br>
				<a href="">Follow</a><br>
				<a href="">Gallery</a><br>
				<a href="contact_us">Contact</a><br>
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