<?php
require("db.php");
$id =$_REQUEST['d_id'];
$sql = "SELECT * FROM donor WHERE d_id  = '$id'";
$result = mysqli_query($conn, $sql);
$donor = mysqli_fetch_array($result);

if (!$result) die("Error: Data not found..");

$d_name=$donor['d_name'];
$d_cnic= $donor['d_cnic'];	
$d_phone=$donor['d_phone'];
$d_city=$donor['d_city'];
$d_lastdonation=$donor['d_lastdonation'];
$d_bloodgroup=$donor['d_bloodgroup'];
$d_bloodbag=$donor['d_bloodbag'];


if(isset($_POST['submit']))
{	
echo "posted!";
	$d_name=$_POST['d_name'];
	$d_cnic= $_POST['d_cnic'];
	$d_phone=$_POST['d_phone'];
	$d_city=$_POST['d_city'];
	$d_lastdonation=$_POST['d_lastdonation'];
	$d_bloodgroup = $_POST['d_bloodgroup'];
	$d_bloodbag = $_POST['d_bloodbag'];
	

	mysqli_query($conn, "UPDATE donor SET d_name ='$d_name', d_cnic ='$d_cnic',
		 d_phone ='$d_phone',d_city ='$d_city' ,d_lastdonation ='$d_lastdonation',
		 d_bloodgroup ='$d_bloodgroup',d_bloodbag ='$d_bloodbag'
		 WHERE d_id = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: showdata.php");
}
mysqli_close($conn); 

?>

<html>
<head>
<title></title>
</head>

<body bgcolor="#DEDEDE">
<center>
<form method="post">
<table border="1">

	<tr>
		<td>Passenger Name:</td>
		<td><input type="text" name="passenger_name" value="<?php echo $passenger_name ?>"/></td>
	</tr>
	<tr>
		<td>Passenger CNIC:</td>
		<td><input type="text" name="passenger_cnic" value="<?php echo $passenger_cnic ?>"/></td>
	</tr>
	<tr>
		<td>Passenger Other Information:</td>
		<td><textarea name="passenger_info"><?php echo $passenger_info ?></textarea></td>
	</tr>
	<tr>
		<td>From:</td>
		<td><input type="text" name="travel_from" value="<?php echo $travel_from ?>"/></td>
	</tr>
	<tr>
		<td>To:</td>
		<td><input type="text" name="travel_to" value="<?php echo $travel_to ?>"/></td>
	</tr>
	<tr>
		<td>Date:</td>
		<td><input type="text" name="travel_date" value="<?php echo $travel_date ?>"/> <pre>Format 2015-02-15</pre></td>
	</tr>
	<tr>
		<td>Time:</td>
		<td><input type="text" name="travel_time" value="<?php echo $travel_time ?>"/><pre>Format 13:31:22</pre></td>
	</tr>
	<tr>
		<td>No of Seats:</td>
		<td><input type="text" name="no_of_seats" value="<?php echo $no_of_seats ?>"/></td>
	</tr>
	<tr>
		<td><a href='index.php'>Home page</a></td>
		<td><input type="submit" name="submit" value="Update Booking"/></td>
	</tr>
</table>
</form>
</center>
</body>
</html>
