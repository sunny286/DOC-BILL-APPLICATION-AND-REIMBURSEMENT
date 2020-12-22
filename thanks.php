<?php
session_start();
if(!isset($_SESSION['email']))
	header('location:http://172.16.0.195/DOC/index.php');
$email=$_SESSION['email'];
$ref_no=$_SESSION['ref'];
if(mail("$email","Request Submitted!!!","Your form has been submitted successfully.Your ref_no is '$ref_no'.","From : iiitbhagalpurofficial@gmail.com")){
echo " "; 
}
else{
	echo "failed";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>confirmation page...</title>
<link rel="stylesheet" type="text/css" href="thanks.css">
</head>
<center>
<body background="thnks.jpg" style="background-position: center;background-repeat: no-repeat;background-size: auto;";>
      <h1 style="color:white;font-size: 50px;">Success! your form has been submitted successfully.</h1>
      <p><b style="color:white;font-size: 25px;">You will receive a confirmation mail shortly. </b></p>
      <p><b style="color:white;font-size: 25px;">You can check your status with the reference code that can be found in your mail.</b></p>
<br><br>

  <br><br>
  <div class="but">
<input type="submit" button onclick="window.location.href='welcome.php'" value="Home" />
<input type="submit" button onclick="window.location.href='logout.php'" value="Sign out" />
</div>
</center>
</body>
</html>
