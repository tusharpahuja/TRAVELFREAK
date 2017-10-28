<?php
include("header.php");
include("../includes/database_connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Result Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
		function func(a)
		{
			$.ajax({
				type: 'post',
				url: 'flightsearch2.php',
				data: {'a' : a},
				success: function (result) {
					result = $.trim(result);
					window.alert(result);
				}
			});

		}
	</script>
	<style type="text/css">
		
		th{
			border-top:1px solid grey;
			border-bottom:1px solid grey; 
			width: 70px;
			text-align: center;
			color: #ce835b;
		}
		td {
			border-right:1px solid grey;
			border-left:1px solid grey; 
			width: 70px;
			text-align: center;
			color: #ce835b;
		}
		input[type=submit]{
			-webkit-border-radius: 28;
			-moz-border-radius: 28;
			border-radius: 28px;
			font-family: Georgia;
			color: #ffffff;
			font-size: 12px;
			background-color:#704846;
			padding: 10px 20px 10px 20px;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="layout_contact_us">
		<?php

		if (isset($_POST['submit']))
		{
			$table = $_POST['source'];
			$dest = $_POST['destination'];
			$dd = $_POST['departure'];
			$db = mysqli_connect("localhost",  "root", "techno2480","travelfreak") or die ('I cannot connect to the database because: ' . mysqli_error());
			$mydb=mysqli_select_db($db,"travelfreak");
			$sql="SELECT * FROM $table WHERE destination = '$dest' and dept_date = '$dd'" ;
			$result=mysqli_query($db,$sql);
			if($result)
			{	
				?> 
				<center>
					<p style="font: sans-serif; font-size: 40px; color: white;"> Search Result For Flight :  <?php echo $table;?> to <?php echo $dest;?> on <?php echo $dd;?> is  as follows.</p>
					<table style="width: 100%;">
						<tr>
							<th>S.No.</td>
								<th>Name</th>
								<th>Departure Time</th>
								<th>Arrival Time</th>
								<th>Price</th>
								<th>Hit To Book</th>
							</tr>
						</table>
					</center>
					<?php
					while($row=mysqli_fetch_array($result))
					{
						if(is_null($row))
							echo "No Result";
						else
						{
							$name  =$row['name'];
							if(!strcmp(substr($name,0,2),"6E")){
								$fli = "Indigo";
							}
							else{
								$fli = "Spice Jet";
							}
							$dept_time= $row['dept_time'];	
							$arr_time = $row['arr_time'];
							$arr_date = $row['arr_date'];
							$dept_date = $row['dept_date'];
							$price = $row['price'];
							$n = $row['num'];
							$place = $row['place'];
						}
						?>
						<center>
							<div class="outer_box" style="width: 1200px; height: 80px; margin: 10px; border: 3px solid grey;border-radius: 20px; color: white; font: sans-serif; font-size: 20px; ">
								<div class="inner_box" style="margin: 30px">

									<table style="width: 100%;">
										<tr>
											<td><?php echo $n; ?></td>
											<td><?php echo $fli; ?></td>
											<td><?php echo $name; ?></td>
											<td><?php echo $dept_time; ?></td>
											<td><?php echo $arr_time; ?></td>
											<td><?php echo $price; ?></td>
											<td><input type="submit" id = "<?php echo $n.',' ?> <?php echo $place ?>" name="ticket" value="BOOK!" onclick="func(this.id); "></td>
										</tr>
									</table>
								</div>
							</div>
						</center>
						<?php
					}
				}
			}	 
			?>
		</div>
	</body>
	</html>
	<?php
	include("footer.php");
	?>