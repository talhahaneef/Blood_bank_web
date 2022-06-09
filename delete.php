<?php
	include("db.php");  
	$id =$_REQUEST['d_id'];

	mysqli_query($conn, "DELETE FROM donor WHERE d_id = '$id'")
	or die(mysql_error());  	
	
	header("Location: showdata.php");
?> 