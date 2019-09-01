<?php include('server.php');
error_reporting(0); ?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration Form</title>

    <!-- Bootstrap -->
    
    <link href="css/date.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	
	<script src="js/date.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

	<script type='text/javascript'>
	$(function() {
		//calendar call function
		$('.datepicker').dcalendar();
		$('.datepicker').dcalendarpicker();
		
	});
	</script>
  </head>
  <body>
      <header class="header"><img src="images/doorslogo.png" /></header>
<div class="panel panel-primary" >
	<div class="panel-heading">
        	<h3 class="panel-title">Registration Form</h3>
	</div>
<div class="panel-body">
<form method="post" action="form.php"  enctype="multipart/form-data">
<?php include('errors.php'); ?>
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-4 col-sm-4">
            <label for="name">First Name*	</label>
            <input type="text" class="form-control input-sm" name="firstname" placeholder="">
        </div>
        <div class="form-group col-md-4 col-sm-4">
            <label for="name">Middle Name	</label>
            <input type="text" class="form-control input-sm" name="middlename" placeholder="">
        </div>
        <div class="form-group col-md-4 col-sm-4">
            <label for="name">Last Name*</label>
            <input type="text" class="form-control input-sm" name="lastname" placeholder="">
        </div>
        <div class="form-group col-md-4 col-sm-4">
            <label for="dob">Date of birth*</label>
            <input type="text" class="form-control input-sm datepicker" name="dob" placeholder="">
        </div>
	
        <div class = "form-group col-md-4 col-sm-4">
	      <label for="gender">Gender*</label>	 
	      <select class="form-control input-sm" name="gender">
		<option value="">-- Select Gender --</option>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
		
	      </select>
	</div>
    <div class="form-group col-md-4 col-sm-4">
            <label for="mobile1">Mobile Number*</label>
            <input type="text" class="form-control input-sm" name="mobile1" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="expyrs">Total Experience *</label>
            <input type="text" class="form-control input-sm" name="expyrs" placeholder="">
        </div>
        
    
	<div class="form-group col-md-3 col-sm-3">
            <label for="emailid">Email address</label>
            <input type="email" class="form-control input-sm" name="emailid" placeholder="">
        </div>
    <div class = "form-group col-md-6 col-sm-6">
	      <label for="workind">Work Domain*</label>	 
	      <select class="form-control input-sm" multiple name="workind[]">
		<option value="">-- Select Work Type --</option>
		<option value="Carpenter">Carpenter</option>
		<option  value="Electrician">Electrician</option>
        <option value="Painter">Painter</option>
		<option  value="Mason">Mason</option>
        <option value="Plumber">Plumber</option>
		<option  value="Welder">Welder</option>
        <option value="Gardener">Gardener</option>
		<option  value="Housekeeping">Housekeeping</option>
        <option  value="Helper">Helper</option>
        <option value="Maid">Maid</option>
		<option  value="Baby Sitter">Baby Sitter</option>
        <option value="Core cutting">Core cutting</option>
		<option  value="Fabrication">Fabrication</option>
	      </select>
          <span class="help-block">Hold down the Ctrl (windows) / Command (Mac) button to select multiple options </span>
	</div>
    
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-3 col-sm-3 pull-right" >
			<input type="submit" class="btn btn-primary" name="reg_user" value="Register"/>
	</div>
</div>
</form>
</div>
</body>
</html>