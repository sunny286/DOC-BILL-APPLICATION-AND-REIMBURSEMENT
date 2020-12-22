<?php
if(!isset($_SESSION['email']))
	header('location:http://172.16.0.195/DOC/index.php');
$email=$_SESSION['email'];

$con = mysqli_connect('172.16.0.195', 'root', 'abcd1234#', 'logindb');
$q="select name from users where email='$email'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_row($result);
$base_pay=$row[0];

?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
   
      
	  <link rel="stylesheet" type="text/css" href="">

   </head>
   
   <body background="Wooden-Wallpaper-HD-002.jpg" style="background-position: center;background-repeat: no-repeat;background-size: cover";>
   <center>
   <img src="logo.ng.png" alt="Image" width="1366" height="150">
   <br>
      <div class="card">
	<h1>Welcome Ms/Mr. <?php echo ucfirst($base_pay); ?></h1>
	<h2><b><marquee>YOUR FORMS AND IT'S STATUS ARE:-</marquee><b></h2>
	<center>
	<h2><?php
$servername = "172.16.0.195";
$username = "root";
$password = "abcd1234#";
$dbname = "logindb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ref_no,email,status,date,amount from forms where email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>REF_NO</th><th>EMAIL</th><th>DATE/TIME</th><th>STATUS</th><th>AMOUNT</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ref_no"]. "</td><td>" . $row["email"] . "</td><td>" . $row["date"]. "</td><td>" .ucfirst($row["status"]). "</td><td>" . $row["amount"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "NO FORMS SUBMITTED.";
}

$conn->close();
?></h2><center>
	
	
</div>
	  
	  </div>
	  <center>
	  <input type="submit" button onclick="window.location.href='welcome.php'" style="width: 260px;
			height: 35px;
			background: #fff;
			border: 1px solid #fff;
			cursor: pointer;
			border-radius: 2px;
			color: #a18d6c;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 6px;
			margin-top: 10px;" value="Home" />
	  <input type="submit"  value="Sign Out" style="width: 260px;
			height: 35px;
			background: #fff;
			border: 1px solid #fff;
			cursor: pointer;
			border-radius: 2px;
			color: #a18d6c;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 6px;
			margin-top: 10px;"button onclick="window.location.href='logout.php'">
	
	  <center>
   </body>
   
</html>