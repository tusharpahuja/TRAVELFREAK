<?php 
include("../includes/database_connection.php");
include("../includes/functions.php");
include("../includes/session.php");
?>
<?php
if(logged_in())
    redirect_to("home.php");
?> 
<?php
global $error_in_name,$error_in_email,$error_in_password,$error_in_username;
$salt_string="@!";
if (isset($_POST['submit'])) 
{
    $name = mysqli_real_escape_string($connection,(mysql_entities_fix_string($_POST['name'])));
    $email = mysqli_real_escape_string($connection,(mysql_entities_fix_string($_POST['email'])));
    $password = mysqli_real_escape_string($connection,(mysql_entities_fix_string($_POST['password'])));
    $confirm_password = mysqli_real_escape_string($connection,(mysql_entities_fix_string($_POST['confirm_password'])));
    $username = mysqli_real_escape_string($connection,(mysql_entities_fix_string($_POST['username'])));
    $hash_password = password_hashing($password);
    $validation_of_name=valid_name($name);
    $validation_of_email=valid_email($email,$connection);
    $validation_of_username=valid_username($username,$connection);
    $validation_of_password=valid_password($password,$confirm_password);
    if($validation_of_name==1 && $validation_of_email==1 && $validation_of_password==1 && $validation_of_username==1)
        $check=1;
    else
        $check=0;
    if ($check==1) 
    {
        $name.=$salt_string;
        $username.=$salt_string;
        $email.=$salt_string;
        $query = "INSERT INTO user_details(name,email,username,password) VALUES('$name','$email','$username','$hash_password')";
        $result = mysqli_query($connection,$query);
        if (!$result)
        {
            echo "INSERT failed: $query<br>" .  $connection->error . "<br><br>";
        }
        else
        {
            redirect_to("LOGIN.php");
        }
        ?>
        <script>
            var login_value = 1; 
        </script>
        <?php
    }
    else
    {

        ?>

        <script>
            var login_value = 0; 
        </script>

        <?php
    }

}  
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/signup1.css" />
</head>
<body>
<div class="signup">
<div class="text">
<h1 align=center><b>Registration</b></h1>
<form name="registration" action="" method="post">
<pre>
<font face="Segoe UI">
Name: 	<input type="text" name="name" placeholder="First Name"> 
Username:	<input type="text" name="username" placeholder="Username" required /><br>
Email:	 	<input type="email" name="email" placeholder="Email" required /><br>
Password: 	<input type="password" name="password" placeholder="Password" required /><br>
Confirm_Password: 	<input type="password" name="confirm_password" placeholder="Password" required /><br>
Date Of Birth:	<input type="date" name="dob"><br>
Address:	
			<textarea name="address" rows=5 cols='15'>Your Address Here...</textarea>
</font>
</pre>
<input type="submit" name="submit" value="Register" />
</form>
</div>
</div>
</body>
</html>