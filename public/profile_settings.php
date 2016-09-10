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

<?php
	$error = array();
	$error1 = "";

	if(isset($_POST['save_changes'])){
		$current_username = $_SESSION['current_username'];
		$new_username = mysql_entities_fix_string($_POST['new_username']);
		$location = mysql_entities_fix_string($_POST['location']);
		$bio = mysql_entities_fix_string($_POST['bio']);
		$bday = $_POST['bday'];	
		
		if($current_username==$new_username)
			$new_username_available=1;
		else
			$new_username_available=valid_username($new_username,$connection);

		if($new_username_available == 1){
			$new_username = mysqli_real_escape_string($connection,$new_username);
			$location = mysqli_real_escape_string($connection,$location);
			$bio = mysqli_real_escape_string($connection,$bio);
			$updated_username = update_username($current_username,$new_username,$connection);
			$_SESSION['current_username'] = $new_username; 
			$updated_location = update_location($current_username,$location,$connection);
			$updated_bio = update_bio($current_username,$bio,$connection);
			$updated_birthday = update_birthday($current_username,$bday,$connection);
			if(!$updated_username){
				array_push($error,"Username could not be updated");
			}
			if(!$updated_location){
				array_push($error,"Location could not be updated");
			}
			if(!$updated_bio){
				array_push($error,"Bio could not be updated");
			}
			/*if(!$updated_birthday){
				array_push($error,"Birthday could not be updated");
			}*/

			if (empty($error)){
				$error1 .= "Details changed successfully";
			}
			else{
				$error1 .= "<b>" . "Correct the following errors". "</b><br>";
				foreach ($error as $key) {
					$error1 .= $key . "<br>";
				}
			}
		}
		else{
			$error1 = "Username already taken";
		}
	}
?>

<?php
	global $url;
	$error2 = "";
	$current_user_id=$_SESSION['current_user_id'];
	$pull="SELECT * FROM user_details WHERE user_id = $current_user_id";
	$allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
	$extension = @end(explode(".", $_FILES["file"]["name"]));
	if(isset($_POST['pupload'])){
	    if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/JPG") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/pjpeg"))
	        && ($_FILES["file"]["size"] < 2000000)
	        && in_array($extension, $allowedExts)){
		        if ($_FILES["file"]["error"] > 0)
		        {
		            $error2 .= "Return Code: " . $_FILES["file"]["error"] . "<br>";
		        }
		        else
		        {
		            $error2 .= '<div class="plus">';
		            $error2 .= "Uploaded Successully";
		            $error2 .= '</div>';

		            $error2 .= "<br/><b><u>Image Details</u></b><br/>";

		            $error2 .= "Name: " . $_FILES["file"]["name"] . "<br/>";
		            $error2 .= "Type: " . $_FILES["file"]["type"] . "<br/>";
		            $error2 .= "Size: " . ceil(($_FILES["file"]["size"] / 1024)) . " KB"; 

		            if (file_exists("upload/" . $_FILES["file"]["name"]))
		            {
		                unlink("upload/" . $_FILES["file"]["name"]);
		            }
		            else
		            {
		                $pic=$_FILES["file"]["name"];
		                $conv=explode(".",$pic);
		                $ext=$conv['1'];

		                move_uploaded_file($_FILES["file"]["tmp_name"],
		                    "upload/". $current_user_id.".".$ext);
		                $error2 .= "Stored in as: " . "upload/" . $current_user_id.".".$ext;
		                $url=$current_user_id.".".$ext;

		                $query="UPDATE user_details SET url='$url' where user_id = $current_user_id";
		                $result=mysqli_query($connection,$query);
		                if($result)
		                {
		                    $error2 .= "<br/>Saved to Database successfully";
		                }
		            }
		        }
	    }
	    else
	        $error2 .= "File Size Limit Crossed 2 MB Use Picture Size less than 2 MB";
	}
?>

	<div class="layout_contact_us">
		<div>
			<h2 style="font-size: 60px;text-align: center;color: black;font-family: 'Pacifico', cursive;">Profile Settings</h2>
		</div>
		<div class="queries" style="color: black; margin-left: 30%;">
			<div class="queries_content">
				<form  action="profile_settings.php" method='POST' enctype="multipart/form-data" style="color: black;"> 
						<p> 
							<label class="uname" data-icon="u" > Username :</label>&nbsp;
							<input id="name" name="new_username" type="text" placeholder="mynewusername" style="height: 1em;padding: 1em;width: 24em;"/>
						</p>
						<p> 
							<label class="Location" data-icon="e" > Location :</label>&nbsp;&nbsp;&nbsp;&nbsp;
							<input id="location" name="location" type="text" placeholder="mylocation" style="height: 1em;padding: 1em;width: 24em;"/> 
						</p>
						<p> 
							<label class="Bio" data-icon="e" > Bio :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input id="bio" name="bio" type="text" placeholder="mybio" style="height: 1em;padding: 1em;width: 24em;"/> 
						</p>
						<p> 
							<label class="Birthday" data-icon="e" > Birthday :</label>&nbsp;&nbsp;&nbsp;&nbsp;
							<input id="birthday" name="bday"  type="date" placeholder="mybirthday" style="height: 1em;padding: 1em;width: 24em;"/> 
						</p>
						<p class="sign up button" align="center"> 
							<input type="submit" name="save_changes" value="Save Changes">
						</p>
						<div style="color: black;"> <?php echo $error1 ?> </div>
						<p align="center">
							<input type="file" name="file"  />
						</p>
						<p class="sign up button" align="center"> 
							<input type="submit" name="pupload" class="button" value="Upload" />
						</p>
						<div style="color: black;"> <?php echo $error2 ?> </div>
					</form>
			</div>
		</div>
	</div>
<?php
	include("footer.php");
?>