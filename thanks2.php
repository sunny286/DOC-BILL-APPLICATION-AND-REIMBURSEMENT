<?php
session_start();
if(!isset($_SESSION['ref_no']))
	header('location:http://172.16.0.195/DOC/approval.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>confirmation page...</title>
<link rel="stylesheet" type="text/css" href="thanks.css">
</head>
<center>
<body background="thnks.jpg">
      <h1 style="color:white;font-size: 50px;">Success! your Response has been submitted successfully.</h1>
         
<br><br>

  <br><br>
  <div class="but">
<input type="submit" button onclick="window.location.href='welcome.php'" value="Home" />
<input type="submit" button onclick="window.location.href='logout.php'" value="Sign out" />
</div>
</center>
</body>
</html>
