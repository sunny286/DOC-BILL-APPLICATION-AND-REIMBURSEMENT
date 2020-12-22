<?php
session_start();
if(!isset($_SESSION['email']))
	header('location:http://172.16.0.195/DOC/index.php');
$email=$_SESSION['email'];
$msg=$_POST['msg'];
$_SESSION['msg']=$msg;
?>

<html>
<head>
<!---
<script type='text/javascript'>

function foo() {


var user_choice = window.confirm('Would you like to continue?');


if(user_choice==true) {


window.location='connect.php';  // you can also use element.submit() if your input type='submit' 


} else {


return false;


}
}

</script>
--->
<title></title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}ke
</style>
</head>
<body bgcolor='#FFFFFF'>
<center>
<img src="logo.ng.png" alt="Image" width="1350" height="150">
</center>

<h1 align='center'>DOC Bill Application form</h1>
<form align='center' action='testformdb.php' method='post'>

 <h2> <b><u>Reimbursement Description:</u></b><br><br><textarea name="msg" rows="7" cols="50" readonly><?php echo $msg;?> 
</textarea>
<br><br>

<h2><u>Enter Details and Estimate of items</u></h2>

<table>
  <tr>
    <th>Item.</th>
    <th>Description.</th>
    <th>Price per unit.</th>
	<th>Total.</th>
  </tr>
  <tr>
    <td><input type="text" name="item1" value="<?php echo $_POST['item1'];?>" readonly><br></td>
    <td><input type="text" name="description1" value="<?php echo $_POST['description1'];?>" readonly><br></td>
    <td><input type="text" name="price1" value="<?php echo $_POST['price1'];?>" readonly><br></td>
	<td><input type="text" name="total1" value="<?php echo $_POST['total1'];?>" readonly><br></td>
  </tr>
  <tr>
    <<td><input type="text" name="item2" value="<?php echo $_POST['item2'];?>" readonly><br></td>
    <td><input type="text" name="description2" value="<?php echo $_POST['description2'];?>" readonly><br></td>
    <td><input type="text" name="price2" value="<?php echo $_POST['price2'];?>" readonly><br></td>
	<td><input type="text" name="total2" value="<?php echo $_POST['total2'];?>" readonly><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item3" value="<?php echo $_POST['item3'];?>" readonly><br></td>
    <td><input type="text" name="description3" value="<?php echo $_POST['description3'];?>" readonly><br></td>
    <td><input type="text" name="price3" value="<?php echo $_POST['price3'];?>" readonly><br></td>
	<td><input type="text" name="total3" value="<?php echo $_POST['total3'];?>" readonly><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item4" value="<?php echo $_POST['item4'];?>" readonly><br></td>
    <td><input type="text" name="description4" value="<?php echo $_POST['description4'];?>" readonly><br></td>
    <td><input type="text" name="price4" value="<?php echo $_POST['price4'];?>" readonly><br></td>
	<td><input type="text" name="total4" value="<?php echo $_POST['total4'];?>" readonly><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item5" value="<?php echo $_POST['item5'];?>" readonly><br></td>
    <td><input type="text" name="description5" value="<?php echo $_POST['description5'];?>" readonly><br></td>
    <td><input type="text" name="price5" value="<?php echo $_POST['price5'];?>" readonly><br></td>
	<td><input type="text" name="total5" value="<?php echo $_POST['total5'];?>" readonly><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item6" value="<?php echo $_POST['item6'];?>" readonly><br></td>
    <td><input type="text" name="description6" value="<?php echo $_POST['description6'];?>" readonly><br></td>
    <td><input type="text" name="price6" value="<?php echo $_POST['price6'];?>" readonly><br></td>
	<td><input type="text" name="total6" value="<?php echo $_POST['total6'];?>" readonly><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item7" value="<?php echo $_POST['item7'];?>" readonly><br></td>
    <td><input type="text" name="description7" value="<?php echo $_POST['description7'];?>" readonly><br></td>
    <td><input type="text" name="price7" value="<?php echo $_POST['price7'];?>" readonly><br></td>
	<td><input type="text" name="total7" value="<?php echo $_POST['total7'];?>" readonly><br></td>
  </tr>
</table>
<br>
<b>GRAND TOTAL PRICE </b> <input type="text" name="price" value="<?php echo $_POST['price'];?>" readonly>
<br>
<br>
<p style="background-color:yellow;">Are you sure you want to submit your application...</p>
<input type="radio" name="option" value="yes"> Yes<br>
<input type="radio" name="option" value="no" onclick="window.location='insert_data.php';"> No<br>
<input type="submit" name="submit" class="btn" value="SUBMIT">
</form>
<center>
<input type="submit" button onclick="window.location.href='welcome.php'" value="Home" />
<input type="submit" button onclick="window.location.href='logout.php'" value="Sign out" />
</center>

</body>
</html>