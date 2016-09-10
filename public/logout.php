<?php
	include("../includes/database_connection.php");
	include("../includes/functions.php");
	include("../includes/session.php");
?>

<?php
	$_SESSION['current_user_id'] = null;
	$_SESSION['current_name'] = null;
	$_SESSION['current_username'] = null;
	destroySession();
	redirect_to("login.php");
?>
