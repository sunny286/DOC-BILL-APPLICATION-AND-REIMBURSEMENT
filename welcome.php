<?php
session_start();
if(!isset($_SESSION['email']))
	header('location:http://172.16.0.195/DOC/index.php');
$email=$_SESSION['email'];


$con = mysqli_connect('172.16.0.195', 'root', 'abcd1234#', 'logindb');
$q="select name from users where email='$email'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_row($result);
$base_pay=$row[0];

?>

<html>
   
   <head>
   
      
	  <link rel="stylesheet" type="text/css" href="wlc.css">

   </head>
   
   <body background="wlc.jpg" style="background-position: center;background-repeat: no-repeat;background-size: cover";>
   <center>
   <img src="logo.ng.png" alt="Image" width="1366" height="150">
   <marquee><h2><b> To Check Status Of Previous Bills,Click On Status Button Below.<b></h2></marquee>
   </center>
   <br>
      <div class="card">
	<h1>Welcome Ms/Mr. <?php echo ucfirst($base_pay); ?></h1>
	<h1>Branch :<select class="department" name="branch" style="appearance: none;-webkite-appearance: none;-moz-appearance: none;-o-appearance: none;-ms-appearance: none;
background: #f5f5f5 url('image-path') no-repeat right center;
border: 1px solid #eeeeee;
width:100px;
height:35;
padding:10px;
">
				<option value="Cse" >CSE</option>
				<option value="Ece">ECE</option>
				<option value="Mech">MECH</option>
				<option value="B_H-warden">B_H-WARDEN</option>
				<option value="G_H-warden">G_H-WARDEN</option>
				<option value="BS_H">BS_H</option>
				</select></h1>
	<h1>Select Choice:</h1>
	
	<ul>
		<li>
			<input type="radio" onclick="window.location='insert_data.php';" name="Bill Application" id="one" checked />
			<label for="one"><b>DOC Bill Application</b></label><br><br>
			<div class="check"></div>
		</li>
		
		<li>
			<input type="radio" onclick="window.location='insert_data.php';" name="Bill Reimbursement" id="two" />
			<label for="two"><b>Bill Reimbursement</b></label>
			
			<div class="check"></div>
		</li>
	</ul>
</div>
      <div class="stat"> 
	  <input type="submit"  value="status" button onclick="window.location.href='forms2.php'">
	  </div>
      <div class="sign_out"> 
	  <input type="submit"  value="Sign Out" button onclick="window.location.href='logout.php'">
	  </div>
   </body>
   
</html>