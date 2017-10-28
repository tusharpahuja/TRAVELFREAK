<?php include("header.php"); ?>
<?php 
	$connection = mysqli_connect('localhost', 'root', 'root','travelfreak');
	if (!$connection){
	 die("Database Connection Failed" . mysqli_error());
	}
	$select_db = mysqli_select_db($connection,'travelfreak');
	if (!$select_db){
	 die("Database Selection Failed" . mysqli_error());
	}
	else{
		$flag=0;
		$sql="SELECT * FROM blog ORDER BY RAND() LIMIT 1";
		$result=mysqli_query($connection,$sql);
		$row = mysqli_fetch_assoc($result);
		if ($row > 0) {
	    $flag=1;
		}
		}		
?>
 <div class="blogtext">
	<div class="heading"><h1><?php if($flag==1) echo $row['heading'];?></h1></div>
	<div class="publish_info"><?php if($flag==1) echo $row['author'];?>	</div>
	<div class="content"><?php if($flag==1) echo $row['content'];?></div>
	<center><a href="blog.php"><button class="button button5"> Next </button></a></center>
</div>


<hr width="90%" size="5" color="grey">
<?php include("footer.php");?>
