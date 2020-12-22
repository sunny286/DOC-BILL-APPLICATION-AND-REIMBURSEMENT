<?php
session_start();
$emil=$_SESSION['email'];
$db = mysqli_connect('172.16.0.195', 'root', 'abcd1234#', 'logindb');
if (isset($_POST['passw'])) {
  $p = md5($_POST['passw']);//encrypt the password before saving in the database

  	$query = "update users set password='$p' where email='$emil'";
  	mysqli_query($db, $query);
	$_SESSION['pas']=$_POST['passw'];
	header("Location:http://172.16.0.195/DOC/pss_thnks.php");
}
