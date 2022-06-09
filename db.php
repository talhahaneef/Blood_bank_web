<?php  
	$conn = mysqli_connect('localhost', 'root', '', 'blood');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
?>