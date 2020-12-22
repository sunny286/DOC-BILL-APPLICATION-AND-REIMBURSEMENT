<?php
session_start();

// initializing variables
$name = "";
$email    = "";
$designation= "";
$mobile = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('172.16.0.195', 'root', 'abcd1234#', 'logindb');

// REGISTER USER
if (isset($_POST['name'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $designation = mysqli_real_escape_string($db, $_POST['designation']);
  $mobile = $_POST['mobile'];
  $email = mysqli_real_escape_string($db, $_POST['emailaddress']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  $branch=mysqli_real_escape_string($db, $_POST['branch']);


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE mobile='$mobile' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['mobile'] === $mobile) {
      array_push($errors, "Mobile number already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name, designation, mobile, email, password,branch) 
  			  VALUES('$name', '$designation', '$mobile','$email', '$password','$branch')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	
		header("Location:http://172.16.0.195/DOC/index.php");
  }
  else{
	  
	  header("Location:http://172.16.0.195/DOC/register.php?error=MOBILE_OR_EMAIL_ALREADY_EXISTS");
}
}
