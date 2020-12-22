<?php
session_start();
$q=$_POST['email'];
$con=mysqli_connect('172.16.0.195', 'root', 'abcd1234#', 'logindb');
    $x="select email from users where email='$q'";
    $result=mysqli_query($con,$x);
    $num=mysqli_num_rows($result);
if($num==1){
	$_SESSION['email']=$q;
	header('location:http://172.16.0.195/DOC/sendmail.php');
	
}
else
{	
	 echo "Invalid  Email";
	 header('location:http://172.16.0.195/DOC/forgot_password.php?error=INVALID_EMAIL');
}

?>