<?php
	include("header.php");
?>
<!DOCTYPE html>
<html>
	<head>
	<style type="text/css">
		.layout{
			color: black;
			background-color : lightblue;
			font-size: 18px;
			font-family: sans-serif;
			height: 80%;
		}
	</style>
		<title>TravelPage</title>
		<script type="text/javascript">
			document.getElementById("adults").placeholder = "Adults";
			document.getElementById("children").placeholder = "Children";
			document.getElementById("infants").placeholder = "Infants";
		</script>
	</head>
	<body>
		<div class="layout">
			<center>
				<form method="post" style="font-color: black;" action="#">
					<b>Select Trip Type</b><br>
					<input type="radio" name="triptype" value="One Way"> One way
					<input type="radio" name="triptype" value="Round Trip" checked="1"> Round Trip<br><br>
					<b>Select Flight Type</b><br>
					<input type="radio" name="flighttype" value="International"> International
					<input type="radio" name="flighttype" value="India" checked="1"> India<br><br>
					<input type="textarea" name="source" placeholder="Depart From" autocomplete="on" required="required"><br>
					<input type="textarea" name="destination" placeholder="Going To" autocomplete="on" required="required"><br>
					<input class="textbox-n" type="text" onfocus="(this.type='date')"  id="date" name="departure" required="required" placeholder="Departure Date"><br>
					<input class="textbox-n" type="text" onfocus="(this.type='date')"  id="date" name="Arrival" required="required" placeholder="Return Date"><br>
					<input type="number" name="adults" min="1" max="10" placeholder="Adults">
					<input type="textarea" name="children" min="1" max="10" placeholder="Children" onfocus="this.type='number';" required="required">
					<input type="textarea" name="infants" min="1" max="10" placeholder="Infants" onfocus="this.type='number';" required="required"><br>
					<select name="dropdown" size="1">
						<option value="Economy" selected="1" >Economy</option>
						<option value="Bussiness" >Bussiness</option>
					</select><br>
					<input type="radio" name="faretype" value="Normal Fare" checked="1">Normal Fare
					<input type="radio" name="faretype" value="Special Return Fare">Special Return Fare
					<input type="radio" name="faretype" value="GDS Special Return Fare">GDS Special Return Fare<br>
					<input type="submit" name="book" value="Book!">
				</form>
			</center>
		</div>
	</body>
</html>
<?php
	include("footer.php");
?>