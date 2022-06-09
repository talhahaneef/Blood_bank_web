<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<title>KHAN Blood Bank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<!-- validation script  -->
<script>
function validate() {

 var regex = /^[a-zA-Z ]*$/;
 var d_name = document.getElementById("d_name").value;

 if(d_name == ''){
	alert('Donor Name is required');
	return false;
 	}
 if (!regex.test(d_name)) {
	alert('Donor Name should be text only');
	return false;
 	}

 var d_cnic = document.getElementById("d_cnic").value;
 if(d_cnic == ''){
	alert('Donor CNIC is required');
	return false;
 	}
 var isnum = /^\d+$/.test(d_cnic);
 if (!isnum) {
	alert('Donor CNIC should be number only');
	return false;
 	} 

 var d_city = document.getElementById("d_city").value;
 if(d_city == ''){
	alert('City is required');
	return false;
 	}
 if (!regex.test(d_city)) {
	alert('City should be text only');
	return false;
 	}   	

   var d_phone = document.getElementById("d_phone").value;
 if(d_phone == ''){
	alert('Donor Phone Number is required');
	return false;
 	}
 var isnum = /^\d+$/.test(d_phone);
 if (!isnum) {
	alert('Donor Phone Number should be number only');
	return false;
 	} 

   var d_lastdonation = document.getElementById("d_lastdonation").value;
 if(d_lastdonation == 'Last Donation'){
	alert('Last Donation is required');
	return false;
 	}
 if (!regex.test(d_lastdonation)) {
	alert('Last Donation should be text only');
	return false;
 	}  
 
   var d_bloodgroup = document.getElementById("d_bloodgroup").value;
 if(d_bloodgroup == 'Blood Group'){
	alert('Blood Group is required');
	return false;
 	}
 if (!regex.test(d_bloodgroup)) {
	alert('Blood Group should be text only');
	return false;
 	}  

   var d_bloodbag = document.getElementById("d_bloodbag").value;
 if(d_bloodbag == 'Select Blood Bag'){
	alert('Blood Bag is required');
	return false;
 	}
 if (!regex.test(d_bloodbag)) {
	alert('Blood Bag should be text only');
	return false;
 	} 
return true;
}
</script>


    <!-- Header  -->
    <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="">
      <img src="" width="" height="">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-success"  onclick="document.location='showdata.php'">
            <strong>DataBase</strong>
          </a>
		  <a class="button is-danger"  onclick="document.location='index.php'">
            <strong>Log out</strong>
          </a>
          
        </div>
      </div>
    </div>
  </div>
</nav>


</head>

<body >
<center>

<h1 class="button is-danger">KHAN Blood Bank LODHRAN</h1>
<br><br>

<form method="post" onsubmit="return validate()">
<table border="1">
<div>
<!-- GetData Form -->
<tr>
<td><input class="input is-rounded" type="text" name="d_name" size="30" placeholder="Name"  >
</td></tr> 
<tr>
<td><input class="input is-rounded" type="text" name="d_cnic" placeholder="CNIC">
</td></tr> 
<tr>
<td><input class="input is-rounded" type="text" name="d_phone" placeholder="Phone">
</td></tr> 
<tr>
<td><input class="input is-rounded" type="text" name="d_city" placeholder="City">
</td></tr> 
</div>
</table>
<!-- last donation Drop Down -->
<br> 

<div class="select is-rounded"  name="d_lastdonation">
  <select name="d_lastdonation" id="d_lastdonation">
    <option>Last Donation</option>
    <option value="3 Months ago">3 Months ago</option>
	<option value="6 Months ago">6 Months ago</option>
	<option value="9 Months ago">9 Months ago</option>
	<option value="More than 12 Months">More than 12 Months</option>
  </select>
</div>
<br> <br>
<!-- Blood Group Drop Down -->     
<div class="select is-rounded" name="d_bloodgroup">
  <select name="d_bloodgroup" id="d_bloodgroup">
    <option >Blood Group</option>
    <option value="A+">A+</option>
	<option value="A-">A-</option>
	<option value="B+">B+</option>
	<option value="B-">B-</option>
	<option value="AB+">AB+</option>
	<option value="AB-">AB-</option>
	<option value="O+">O+</option>
	<option value="O+">O-</option>
	</select>
</div>      
 
<br> <br>
<!-- Blood Bag Drop Down -->     
<div class="select is-rounded" name="d_bloodbag">
  <select name="d_bloodbag" id="d_bloodbag">
    <option>Blood Bag</option>
    <option value="200 ML">200 ML</option>
	<option value="500 ML">500 ML</option>
	<option value="1000 ML">1000 ML</option>
	</select>
</div>


<!-- SUBmit button -->
<br> <br>
<div><button class="button is-danger" name="submit" >Donate</button>
</div>

<?php

if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
	$d_name=$_POST['d_name'];
	$d_cnic= $_POST['d_cnic'];
	$d_phone= $_POST['d_phone'];
	$d_city= $_POST['d_city'];
	$d_lastdonation= $_POST['d_lastdonation'];
	$d_bloodgroup= $_POST['d_bloodgroup'];
	$d_bloodbag= $_POST['d_bloodbag'];
	
												
	mysqli_query($conn, "INSERT INTO donor(d_name,d_cnic,d_phone,d_city,d_lastdonation,d_bloodgroup,d_bloodbag) 
		 VALUES ('$d_name','$d_cnic','$d_phone','$d_city','$d_lastdonation','$d_bloodgroup','$d_bloodbag')")
	 or die(mysql_error());
	}



?>
</form>
</center>
</body>