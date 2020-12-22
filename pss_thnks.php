<?php
session_start();
if(!isset($_SESSION['email']))
	header('location:http://172.16.0.195/DOC/forgot_password.php');
$q=$_SESSION['email'];
$pss=$_SESSION['pas'];
if(mail("$q","Password Changed!!!","Your New Password Is $pss","From : iiitbhagalpurofficial@gmail.com")){
    echo "mail sent";
}
else{
	echo "failed";
}
?>
<html>
<head>
<title>confirmation page...</title>
<link rel="stylesheet" type="text/css" href="tks.css">
</head>
<center>
<body background="ww.jpg" style="background-position: center;background-repeat: no-repeat;background-size: cover;">
      <h1 style="color:white;font-size: 50px;">Success! your Password has been Changed Successfully.</h1>
      <p style="color:white;font-size: 25px;"><b>You will receive a confirmation mail shortly. </b></p>
      
  <div class="sign_out"> 

	  <input type="submit"  value="Home" button onclick="window.location.href='index.php'">
	  </div>
</center>
</body>
</html>