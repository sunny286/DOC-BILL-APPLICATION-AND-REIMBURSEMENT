<?php
session_start();
if(!isset($_SESSION['email']))
	header('location:http://172.16.0.195/DOC/forgot_password.php');
$q=$_SESSION['email'];
$num=rand(100000,999999);
echo $num;
if(mail("$q","FORGOT PASSWORD!!!","Your OTP IS $num","From : iiitbhagalpurofficial@gmail.com")){
    echo "mail sent";
}
else{
	echo "failed";
}
?>


<html>
<head>
<script>
function OTP_validation()
{
var num="<?php echo $num; ?>"; 
var OTP=document.otpf.otp.value;  
//setTimeout(function(){ window.location = "<URL HERE>";}, 5*60*1000);
if(num==OTP){  
return true; 
}  
else{  
alert("INVALID OTP");  
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
                  <p><b>Your OTP has been sent.<br>Enter Your OTP here.<b></p>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="reset_pass.php" name="otpf" onsubmit="return OTP_validation()">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="text" name="otp" placeholder="Enter Otp" class="form-control"  type="text" required>
                        </div>
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

