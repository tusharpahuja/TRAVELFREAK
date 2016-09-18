<?php
	include("../includes/database_connection.php");
	include("../includes/functions.php");
	include("../includes/session.php");
?>

<?php
	if(!logged_in())
   		redirect_to("login.php");
?> 

<!DOCTYPE html>
<html lang="en">
<head >
	<meta charset="utf-8">
	<title>Travel Anywhere !</title>
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/gallery1.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
	<script type="text/javascript">
		var count1 = 1;
		var total1 = 10;
		var count2 = 1;
		var total2 = 3;

		function slide(a){
			var image = document.getElementById('img');
			count += a; 
			if(count>total){
				count = 1;
			}
			if(count < 1){
				count = 10;
			}
			image.src = "images/z" + count + ".jpg";

		}

		function change(){
			var places = ['url(\"images/3.jpg\")','url(\"images/2.jpg\")','url(\"images/5.jpg\")','url(\"images/6.jpg\")'];
			var k = document.getElementById('place').style.backgroundImage;
			str = "";
			if(k===places[0]){
				k = places[1];
				str += "HONG KONG";
			}
			else if(k===places[1]){
				k = places[2];
				str += "MEXICO";
			}
			else if(k===places[2]){
				k = places[3];
				str += "AUSTRALIA";
			}
			else if(k===places[3]){
				k = places[0];
				str += "HAWAII";
			}
			document.getElementById('place').style.backgroundImage = k;
			document.getElementById('write').innerHTML = str;
		}

		function cancel(){
			document.getElementById('highbox').style.display="none";
			document.getElementById('cancel').style.display="none";
			document.getElementById('i1').style.display="none";
		}
	</script>
</head>
<body >
	<div class="top">
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
							<a href="logout.php">Logout</a>
							<a href="profile_settings.php">Profile Settings</a>				
							<div style="margin-top: -0.4em;margin-right:-0.4em;">
								<div class="drop1">
									<div class="dropbtn1" >&nbsp;Account Settings</div>
									<div class="dropdown-content1">
										<a href="change_password.php">Change Password</a>
										<a href="delete_account.php">Delete Account</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="block" id="name">
			<p class="circle" id="write">HAWAII</p>
		</div>
		<div class="arrow" >
			<img src="images/rightarrow.png" id="arr" onClick="change()">
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

<?php
	include("footer.php");
?>