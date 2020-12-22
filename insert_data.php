<?php
session_start();
if(!isset($_SESSION['email']))
	header('location:http://172.16.0.195/DOC/index.php');
$email=$_SESSION['email'];
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
}
</style>
</head>
<body bgcolor='#FFFFFF'>
<center>
<img src="logo.ng.png" alt="Image" width="1350" height="150">
</center>

<h1 align='center'>DOC Bill Application form</h1>
<form align='center' action='insert_data2.php' method='post'>

 <h2> <b><u>Reimbursement Description:</u></b><br><br><textarea name="msg" class="form-control" rows="7" cols="50" placeholder="Description......"></textarea>
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
    <td><input type="text" name="item1"><br></td>
    <td><input type="text" name="description1"><br></td>
    <td><input type="text" name="price1"><br></td>
	<td><input type="text" name="total1"><br></td>
  </tr>
  <tr>
    <<td><input type="text" name="item2"><br></td>
    <td><input type="text" name="description2"><br></td>
    <td><input type="text" name="price2"><br></td>
	<td><input type="text" name="total2"><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item3"><br></td>
    <td><input type="text" name="description3"><br></td>
    <td><input type="text" name="price3"><br></td>
	<td><input type="text" name="total3"><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item4"><br></td>
    <td><input type="text" name="description4"><br></td>
    <td><input type="text" name="price4"><br></td>
	<td><input type="text" name="total4"><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item5"><br></td>
    <td><input type="text" name="description5"><br></td>
    <td><input type="text" name="price5"><br></td>
	<td><input type="text" name="total5"><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item6"><br></td>
    <td><input type="text" name="description6"><br></td>
    <td><input type="text" name="price6"><br></td>
	<td><input type="text" name="total6"><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item7"><br></td>
    <td><input type="text" name="description7"><br></td>
    <td><input type="text" name="price7"><br></td>
	<td><input type="text" name="total7"><br></td>
  </tr>
</table>
<br>
<b>GRAND TOTAL PRICE </b> <input type="text" name="price">
<br>
<br>

<b>Attach Document</b><input type="file" name="image" id="image" />  
<!-- <input type="submit" value='Submit' onclick="foo()" /> -->
<input type="submit" name="submit" value="submit"> 
</form>
<center>
<input type="submit" button onclick="window.location.href='welcome.php'" value="Home" />
<input type="submit" button onclick="window.location.href='logout.php'" value="Sign out" />
</center>

</body>
</html>