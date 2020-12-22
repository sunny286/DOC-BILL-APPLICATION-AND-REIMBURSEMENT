<html>
<head>
<script>
function validateEmail() {
	var email=document.f1.emailaddress.value;
    var re = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;
    if (re.test(email)) {
        if (email.indexOf('@iiitbh.ac.in', email.length - '@iiitbh.ac.in'.length) !== -1) {
			return true;
        } else {
            alert('Email must be a IIITBH domain e-mail address (xy@iiitbh.ac.in).');
			return false;
        }
    } else {
        alert('Not a valid e-mail address.');
		return false;
    }
}
function pass_validation()
{
var firstpassword=document.f1.password1.value;  
var secondpassword=document.f1.password2.value;  

if(firstpassword==secondpassword){  
return true;  
}  
else{  
alert("please enter same password");  
return false;  
}  
} 
</script>
<title>DOC BILL APPLICATION AND REIMBURSEMENT SYSTEM</title>
<link rel="stylesheet" type="text/css" href="main_reg.css">
</head>
<div class="body"></div>
		
		<div class="header2">
			<div><b>IIIT BHAGALPUR</b></div></div>
		<div class="header1">
		<img src="150dpi.png">
		</div>
		<div class="header" style="position: absolute;top: calc(60% - 35px);left: calc(80% - 255px);">
		<div><b>REGIS</b><span><b>TER</b></span></div>
		</div>
		<br>
		
		
		<div class="login">
				<form name="f1" action="registerdb.php" method="post" onsubmit="return (pass_validation()&&validateEmail())">
				
					 <input required type="text" placeholder="Name" name="name" ><br></br>
					
				<input required type="text" placeholder="Designation" name="designation" > Eg: HOD <br></br>
				
				<input required type="text" placeholder="Mobile" name="mobile" maxlength="10" > <br>
					
					
				<input id="email" name="emailaddress" placeholder="Email address(@iiitbh.ac.in)"  class="form-control"  type="email"
						style = "
							width: 250px;
							height: 30px;
							background: transparent;
							border: 1px solid rgba(255,255,255,0.6);
							border-radius: 2px;
							color: white;
							font-family: 'Exo', sans-serif;
							font-size: 16px;
							font-weight: 400;
							padding: 4px;
							margin-top: 10px;"><br>
				<input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" type="password" id="password" name="password1" required placeholder="Password " ></br>
				<input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" type="password" id="password" name="password2" required placeholder="Confirm Password " ></br>
				</br>
<!-- At least 6 characters
At least 1 uppercase character
At least 1 lowercase character	
At least 1 number -->
				<select class="department" name="branch">
				<option value="Cse" >CSE</option>
				<option value="Ece">ECE</option>
				<option value="mech">MECH</option>
				<option value="B_H-warden">B_H-WARDEN</option>
				<option value="G_H-warden">G_H-WARDEN</option>
				<option value="BS_H">BS_H</option>
				</select>
			
				<input type="submit"  value="Register" style="border: 1px solid rgba(0,0,0,0.6); color:black;" ><br></br>
				<a href="index.php" style="color:yellow">Already a Member?</a>
				</form></div>
				</html>
