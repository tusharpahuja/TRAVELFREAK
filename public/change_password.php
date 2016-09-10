<?php
	include("header.php");
	include("../includes/database_connection.php");
	include("../includes/functions.php");
	include("../includes/session.php");
?>

<?php
	global $error;
	if(!logged_in()){
		redirect_to("login.php");
	}	

	if(isset($_POST['save_changes'])){
		$old_password = mysql_entities_fix_string($_POST['old_password']);
		$new_password = mysql_entities_fix_string($_POST['new_password']);
		$confirm_password = mysql_entities_fix_string($_POST['confirm_password']);
		$username = $_SESSION['current_username'];
		$username = $username. "@!";
		$hashed_password = password_hashing($old_password);
		$query = "SELECT password FROM user_details WHERE username='$username'";
		$result = mysqli_query($connection,$query);
		$row = mysqli_fetch_assoc($result);
		if($hashed_password === $row['password']){
			$new_password = mysqli_real_escape_string($connection,$new_password);
			$confirm_password = mysqli_real_escape_string($connection,$confirm_password);
			if($new_password === $confirm_password){
				$new_hashed = password_hashing($new_password);
				$query = "UPDATE user_details SET password = '$new_hashed' WHERE username = '$username'";
				$result = mysqli_query($connection,$query);
				if($result){
					$error = "Password changed successfully";
				}
				else{
					$error = "Password updation failed";
				}
			}
			else{
				$error = "Passwords do not match";
			}
		}
		else{
			$error = "Enter the password correctly";
		}
	}
?>
	<div class="layout_settings">
		<div>
			<h2 style="font-size: 60px;text-align: center;color: black;font-family: 'Pacifico', cursive;">Change Password</h2>
		</div>
		<div class="settings_col">
			<div class="settings_content" >
				<form  action="change_password.php" method='POST' enctype="multipart/form-data"> 
						<p> 
							<label for="old_password" class="uname" data-icon="p" > Old Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input id="old_password" name="old_password" required="required" type="password" placeholder="myoldpassword" style="height: 1em;width: 20em;padding: 1em;" />
						</p>
						<p> 
							<label for="new_password" class="uname" data-icon="p" > New Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input id="new_password" name="new_password" required="required" type="password" placeholder="mynewpassword" style="height: 1em;width: 20em;padding: 1em;"/>
						</p>
						<p> 
							<label for="confirm_password" class="uname" data-icon="p" > Confirm Password :</label>&nbsp;&nbsp;
							<input id="confirm_password" name="confirm_password" required="required" type="password" placeholder="mynewpassword" style="height: 1em;width: 20em;padding: 1em;"/>
						</p>
						<p class="sign up button"> 
							<input type="submit" name="save_changes" value="Save Changes">
						</p>
						<?php echo $error ?>
					</form>
			</div>
		</div>
	</div>
<?php
	include("footer.php");
?>