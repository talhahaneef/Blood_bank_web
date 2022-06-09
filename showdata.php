<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KHAN Blood Bank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-danger"  onclick="document.location='index.php'">
            <strong>Log out</strong>
          </a>
          
        </div>
      </div>
    </div>
</head>

<body>
  <center>
   <div>
   <h2>All Donors</h2>
<table class="table is-hoverable" border="1">
	
<tr><th>ID</th><th>Name</th><th>CNIC</th><th>Phone</th>
<th>City</th><th>Last Donation</th><th>Blood Group</th><th>Blood Bag</th>
<th>#</th><th>#</th></tr>

<?php
include("db.php");
$sql = "SELECT * FROM donor";
$donors=mysqli_query($conn, $sql)  or die(mysql_error());

while($donor = mysqli_fetch_array($donors))
{
$id = $donor['d_id'];	
echo "<tr>";	
echo "<td>" .$donor['d_id']."</td>";
echo "<td>" .$donor['d_name']."</td>";
echo "<td>" .$donor['d_cnic']."</td>";
echo "<td>" .$donor['d_phone']."</td>";
echo "<td>" .$donor['d_city']."</td>";
echo "<td>" .$donor['d_lastdonation']."</td>";
echo "<td>" .$donor['d_bloodgroup']."</td>";
echo "<td>" .$donor['d_bloodbag']."</td>";

echo "<td> <a href ='update.php?d_id=$id'>Edit</a></td>";
echo "<td> <a href ='delete.php?d_id=$id'>Delete</a></td>";
echo "</tr>";
}
mysqli_close($conn);
?>

</table>

</center>
</div>
</body>

