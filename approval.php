<html>
<head>
<body background="aa.jpg">
<img src="logo.ng.png" alt="Image" width="1350" height="150">
<marquee><h2>ENTER REFERENCE NO TO APPROVE OR REJECT DESIRED FORM</h2></marquee>
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
                  <h2 class="text-center">Approval Portal</h2>
                  <p><b>Enter Reference Number<b></p>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="frm.php">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="ref" name="ref" placeholder="Reference Number" class="form-control"  type="text" required><br>
                        </div>
						<b><u>Remarks:</u></b><br><textarea name="msg" rows="3" cols="30" placeholder="Remarks if Rejected(optional)"></textarea>
                      </div>
                      <div class="form-group">
                        <input name="approve" class="btn btn-lg btn-primary btn-block" value="Approve" type="submit">
							<input name="reject" class="btn btn-lg btn-primary btn-block" value="Reject" type="submit">
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




