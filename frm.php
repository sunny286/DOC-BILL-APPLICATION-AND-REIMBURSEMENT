<?php
session_start();
$ref=$_POST['ref'];
$con = mysqli_connect('172.16.0.195', 'root', 'abcd1234#', 'logindb');
$ref_db="select ref_no from forms where ref_no='$ref'";
$stat="select status from forms where ref_no='$ref'";
$restat=mysqli_query($con,$stat);
$resdb=mysqli_query($con,$ref_db);
$row=mysqli_fetch_row($restat);
$num=mysqli_num_rows($resdb);
$base_pay=$row[0];
if($num){
if(isset($_POST['approve'])){
	if($base_pay=='NOT PROCESSED'){
		$_SESSION['ref_no']=$ref;
		$q="update forms set status='PROCESSING' where ref_no='$ref'";
		mysqli_query($con,$q);
		if(mail("xyz.director@iiitbh.ac.in","Application/bill For Approval!!!","","From : iiitbhagalpurofficial@gmail.com")){
			echo " "; 
		}
		else{
			echo "failed";
		}
		header('location:http://172.16.0.195/DOC/thanks2.php');
	}
	else if($base_pay=='PROCESSING'){
		$_SESSION['ref_no']=$ref;
		$q="update forms set status='APPROVED' where ref_no='$ref'";
		mysqli_query($con,$q);
		header('location:http://172.16.0.195/DOC/thanks2.php');
}
	else{
		header('location:http://172.16.0.195/DOC/approval.php');
	}
}
if(isset($_POST['reject'])){
	$q="update forms set status='REJECTED' where ref_no='$ref'";
		mysqli_query($con,$q);
		header('location:http://172.16.0.195/DOC/thanks2.php');
}
}
?>