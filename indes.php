<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KHAN Blood Bank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  
<html lang="en" dir="ltr">
  
  <body>
    <div class="wrapper">
      <div class="title">KHAN Blood Bank
        <br>
        <div class="slo">Blood Bank Management System</div>
      </div>
       
      <form action="getdata.php" method="post">
        <div class="field">
          <input type="text" name="user" required>
          <label>Username</label>
        </div>
        <div class="field">
          <input type="password" name="pass" required>
          <label>Password</label>
        </div>
        
        <div class="field">
          <input type="submit" value="Login">
        </div>
      </form>
    </div>


    

</body>
</html>


<?php
?>