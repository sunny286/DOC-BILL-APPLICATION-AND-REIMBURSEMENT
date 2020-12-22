<?php
session_start();
if(!isset($_SESSION['email'])){
	
	header('location:http://172.16.0.195/DOC/forgot_password.php');
$emil=$_SESSION['email'];}
?>


<html>
<head>
<script>
function pass_validation()
{
var firstpassword=document.f1.passw.value;  
var secondpassword=document.f1.passw2.value;  

if(firstpassword==secondpassword){  
return true;  
}  
else{  
alert("Please Enter Same Password");  
return false;  
}  
}
</script>
<body background="aa.jpg">
<img src="logo.ng.png" alt="Image" width="1350" height="150">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="main.css">-->

 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p><b>Enter Your New Password.<b></p>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="pss.php" onsubmit="return pass_validation()" name="f1">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" type="password" id="passw" name="passw" required placeholder="New Password "></br><br>
                          <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" type="password" id="passw2" name="passw2" required placeholder="Confirm New Password "></br><br>						  </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
</body>
</head>
<html>