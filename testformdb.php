<?php
session_start();
if(!isset($_SESSION['email']))
	header('location:http://172.16.0.195/DOC/index.php');
$email=$_SESSION['email'];
$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
$ref_no=rand(100000,999999);
$_SESSION['ref']=$ref_no;
$amt=$_POST['price'];
$date = date('Y-m-d H:i:s');
$db = mysqli_connect('localhost', 'root', 'abcd1234#', 'logindb');
$query = "INSERT INTO forms (ref_no, email, date, status,amount) 
  			  VALUES('$ref_no', '$email', '$date','NOT PROCESSED', '$amt')";
  	mysqli_query($db, $query);
if(isset($_POST['submit'])){
    // Get the submitted form data
    $postData = $_POST;
    $item1 = $_POST['item1'];
    $description1 = $_POST['description1'];
    $price1 = $_POST['price1'];
	$tot1=$_POST['total1'];
    $message = $_SESSION['msg'];
	$name="IIIT_BHAGALPUR";
	
	$item2 = $_POST['item2'];
    $description2 = $_POST['description2'];
    $price2 = $_POST['price2'];
	$tot2=$_POST['total2'];
	
	$item3 = $_POST['item3'];
    $description3 = $_POST['description3'];
    $price3 = $_POST['price3'];
	$tot3=$_POST['total3'];
    
    $item4 = $_POST['item4'];
    $description4 = $_POST['description4'];
    $price4 = $_POST['price4'];
	$tot4=$_POST['total4'];
	
	$item5 = $_POST['item5'];
    $description5 = $_POST['description5'];
    $price5 = $_POST['price5'];
	$tot5=$_POST['total5'];
	
	$item6 = $_POST['item6'];
    $description6 = $_POST['description6'];
    $price6 = $_POST['price6'];
	$tot6=$_POST['total6'];
	
	$item7 = $_POST['item7'];
    $description7 = $_POST['description7'];
    $price7 = $_POST['price7'];
	$tot7=$_POST['total7'];
    // Check whether submitted data is not empty
    if(!empty($item1) && !empty($description1) && !empty($price1) && !empty($tot1) && !empty($message)){
        
            
            // Upload attachment file
            if(!empty($_FILES["attachment"]["name"])){
                
                // File path config
                $targetDir = "uploads/";
                $fileName = basename($_FILES["attachment"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                
                // Allow certain file formats
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to the server
                    if(move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)){
                        $uploadedFile = $targetFilePath;
                    }else{
                        $uploadStatus = 0;
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }else{
                    $uploadStatus = 0;
                    $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
                }
            }
            
                
                // Recipient
                $toEmail = '$email';

                // Sender
                $from = 'iiitbhagalpurofficial@gmail.com';
                $fromName = 'IIIT_BHAGALPUR';
                
				// Subject
                $emailSubject = 'Contact Request Submitted by '.$name;
                
                // Message 
                $htmlContent = '<h2>Contact Request Submitted</h2>
				<p><b>Message:</b><br/>'.$message.'</p><br><br>
                    <p><b>item:</b> '.$item1.'</p>
                    <p><b>description:</b> '.$description1.'</p>
                    <p><b>price:</b> '.$price1.'</p>
					<p><b>tot:</b> '.$tot1.'</p>
                    
					
					<p><b>item:</b> '.$item2.'</p>
                    <p><b>description:</b> '.$description2.'</p>
                    <p><b>price:</b> '.$price2.'</p>
					<p><b>tot:</b> '.$tot2.'</p>
					
					<p><b>item:</b> '.$item3.'</p>
                    <p><b>description:</b> '.$description3.'</p>
                    <p><b>price:</b> '.$price3.'</p>
					<p><b>tot:</b> '.$tot3.'</p>
						
						
						<p><b>item:</b> '.$item3.'</p>
                    <p><b>description:</b> '.$description3.'</p>
                    <p><b>price:</b> '.$price3.'</p>
					<p><b>tot:</b> '.$tot3.'</p>
					
					<p><b>item:</b> '.$item4.'</p>
                    <p><b>description:</b> '.$description4.'</p>
                    <p><b>price:</b> '.$price4.'</p>
					<p><b>tot:</b> '.$tot4.'</p>
					
					<p><b>item:</b> '.$item5.'</p>
                    <p><b>description:</b> '.$description5.'</p>
                    <p><b>price:</b> '.$price5.'</p>
					<p><b>tot:</b> '.$tot5.'</p>
					
					<p><b>item:</b> '.$item6.'</p>
                    <p><b>description:</b> '.$description6.'</p>
                    <p><b>price:</b> '.$price6.'</p>
					<p><b>tot:</b> '.$tot6.'</p>
					
					<p><b>item:</b> '.$item7.'</p>
                    <p><b>description:</b> '.$description7.'</p>
                    <p><b>price:</b> '.$price7.'</p>
					<p><b>tot:</b> '.$tot7.'</p>
					<br><br>
					<p>TO APPROVE OR DISSAPROVE Please VISIT with REF_NO='.$ref_no.':<u><a href="localhost/approval.php"><u></p>
					
					';
                
                // Header for sender info
                $headers = "From: $fromName"." <".$from.">";

                if(!empty($uploadedFile) && file_exists($uploadedFile)){
                    
                    // Boundary 
                    $semi_rand = md5(time()); 
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                    
                    // Headers for attachment 
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                    
                    // Multipart boundary 
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
                    
                    // Preparing attachment
                    if(is_file($uploadedFile)){
                        $message .= "--{$mime_boundary}\n";
                        $fp =    @fopen($uploadedFile,"rb");
                        $data =  @fread($fp,filesize($uploadedFile));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" . 
                        "Content-Description: ".basename($uploadedFile)."\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }
                    
                    $message .= "--{$mime_boundary}--";
                    $returnpath = "-f" . $email;
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
                    
                    // Delete attachment file from the server
                    @unlink($uploadedFile);
                }else{
                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 
                }
                
                // If mail sent
                if($mail){
                    $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';
                    
                    $postData = '';
                }else{
                    $statusMsg = 'Your contact request submission failed, please try again.';
                }
            }
			header('location:http://172.16.0.195/DOC/thanks.php');
    }
	else{
        $statusMsg = 'Please fill all the fields.';
    }
?>