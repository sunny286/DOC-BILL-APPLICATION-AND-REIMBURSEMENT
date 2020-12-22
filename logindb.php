
<?php
session_start();
$email=$_POST['emailaddress'];
$password=md5($_POST['password']);

$con = mysqli_connect('172.16.0.195', 'root', 'abcd1234#', 'logindb');
$q="select *from users where email='$email' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
	$_SESSION['email']=$email;
	$_SESSION['branch']= $_POST['branch'];
	$_SESSION['name']= $_POST['name'];
	header('location:http://172.16.0.195/DOC/welcome.php');
	
}
else
{	
	
	 header('location:http://172.16.0.195/DOC/index.php?error=INVALID_USERNAME_OR_PASSWORD');
}

?>