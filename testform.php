<html>
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
<form align='center' action="test.php" method='post'>
<!-- Display submission status -->
<?php if(!empty($statusMsg)){ ?>
    <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
<?php } ?>


 <h2> <b><u>Reimbursement Description:</u></b><br><br><textarea name="msg" class="form-control" rows="7" cols="50" placeholder="Description."><?php echo !empty($postData['msg'])?$postData['msg']:''; ?></textarea>
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
    <td><input type="text" name="item1" value="<?php echo !empty($postData['item1'])?$postData['item1']:''; ?>"><br></td>
    <td><input type="text" name="description1" value="<?php echo !empty($postData['description1'])?$postData['description1']:''; ?>"><br></td>
    <td><input type="text" name="price1" value="<?php echo !empty($postData['price1'])?$postData['price1']:''; ?>"><br></td>
	<td><input type="text" name="total1" value="<?php echo !empty($postData['total1'])?$postData['total1']:''; ?>"><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item2" value="<?php echo !empty($postData['item2'])?$postData['item2']:''; ?>"><br></td>
    <td><input type="text" name="description2" value="<?php echo !empty($postData['description2'])?$postData['description2']:''; ?>"><br></td>
    <td><input type="text" name="price2" value="<?php echo !empty($postData['price2'])?$postData['price2']:''; ?>"><br></td>
	<td><input type="text" name="total2" value="<?php echo !empty($postData['total2'])?$postData['total2']:''; ?>"><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item3" value="<?php echo !empty($postData['item3'])?$postData['item3']:''; ?>"><br></td>
    <td><input type="text" name="description3" value="<?php echo !empty($postData['description3'])?$postData['description3']:''; ?>"><br></td>
    <td><input type="text" name="price3" value="<?php echo !empty($postData['price3'])?$postData['price3']:''; ?>"><br></td>
	<td><input type="text" name="total3" value="<?php echo !empty($postData['total3'])?$postData['total3']:''; ?>"><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item4" value="<?php echo !empty($postData['item4'])?$postData['item4']:''; ?>"><br></td>
    <td><input type="text" name="description4" value="<?php echo !empty($postData['description4'])?$postData['description4']:''; ?>"><br></td>
    <td><input type="text" name="price4" value="<?php echo !empty($postData['price4'])?$postData['price4']:''; ?>"><br></td>
	<td><input type="text" name="total4" value="<?php echo !empty($postData['total4'])?$postData['total4']:''; ?>"><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item5" value="<?php echo !empty($postData['item5'])?$postData['item5']:''; ?>"><br></td>
    <td><input type="text" name="description5" value="<?php echo !empty($postData['description5'])?$postData['description5']:''; ?>"><br></td>
    <td><input type="text" name="price5" value="<?php echo !empty($postData['price5'])?$postData['price5']:''; ?>"><br></td>
	<td><input type="text" name="total5" value="<?php echo !empty($postData['total5'])?$postData['total5']:''; ?>"><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item6" value="<?php echo !empty($postData['item6'])?$postData['item6']:''; ?>"><br></td>
    <td><input type="text" name="description6" value="<?php echo !empty($postData['description6'])?$postData['description6']:''; ?>"><br></td>
    <td><input type="text" name="price6" value="<?php echo !empty($postData['price6'])?$postData['price6']:''; ?>"><br></td>
	<td><input type="text" name="total6" value="<?php echo !empty($postData['total6'])?$postData['total6']:''; ?>"><br></td>
  </tr>
  <tr>
    <td><input type="text" name="item7" value="<?php echo !empty($postData['item7'])?$postData['item7']:''; ?>"><br></td>
    <td><input type="text" name="description7" value="<?php echo !empty($postData['description7'])?$postData['description7']:''; ?>"><br></td>
    <td><input type="text" name="price7" value="<?php echo !empty($postData['price7'])?$postData['price7']:''; ?>"><br></td>
	<td><input type="text" name="total7" value="<?php echo !empty($postData['total7'])?$postData['total7']:''; ?>"><br></td>
  </tr>
</table>
<br>
<b>GRAND TOTAL PRICE </b> <input type="text" name="price">
<br>
<br>

<b>Attach Document</b> <input type="file" name="attachment"> 
<!-- <input type="submit" value='Submit' onclick="foo()" /> -->
<input type="submit" name="submit" class="btn" value="SUBMIT">
</form>
<center>
<input type="submit" button onclick="window.location.href='welcome.php'" value="Home" />
<input type="submit" button onclick="window.location.href='logout.php'" value="Sign out" />
</center>

</body>
</html>