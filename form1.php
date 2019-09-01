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
<div class="panel panel-primary" style="margin:20px;">
	<div class="panel-heading">
        	<h3 class="panel-title">Registration Form</h3>
	</div>
<div class="panel-body">
<form method="post" action="form.php"  enctype="multipart/form-data">
<?php include('errors.php'); ?>
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-6 col-sm-6">
            <label for="name">First Name*	</label>
            <input type="text" class="form-control input-sm" name="firstname" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="name">Middle Name	</label>
            <input type="text" class="form-control input-sm" name="middlename" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="name">Last Name</label>
            <input type="text" class="form-control input-sm" name="lastname" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="name">Father Name	</label>
            <input type="text" class="form-control input-sm" name="fathername" placeholder="">
        </div>
        <div class="form-group col-md-4 col-sm-4">
            <label for="dob">Date of birth*</label>
            <input type="text" class="form-control input-sm datepicker" name="dob" placeholder="">
        </div>
	<div class="form-group col-md-4 col-sm-4">
            <label for="age">Age*</label>
            <input type="number" class="form-control input-sm" name="age" placeholder="">
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
            <label for="nationality">Nationality*</label>
            <input type="text" class="form-control input-sm" name="nationality" placeholder="">
        </div>
        <div class="form-group col-md-4 col-sm-4">
            <label for="Marital">Marital Status	</label>
            <select class="form-control input-sm" name="Marital">
		<option value="">-- Select Marital Status --</option>
		<option value="Single">Single</option>
		<option  value="Married">Married</option>
	      </select>
        </div>
        <div class = "form-group col-md-4 col-sm-4">
	      <label for="profiles">profile Type*</label>	 
	      <select class="form-control input-sm" name="profiles">
		<option value="">-- Select Profile Type --</option>
		<option value="Individual">Individual</option>
		<option  value="Company">Company</option>
	      </select>
	</div>
    <div class = "form-group col-md-9 col-sm-9">
	      <label for="workind">Work (Individual)*</label>	 
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
    <div class="form-group col-md-3 col-sm-3">
	      <label for="workindmore">More Details</label>
	      <textarea class="form-control input-sm" name="workindmore" rows="3"></textarea>
	   </div>
       <div class = "form-group col-md-9 col-sm-9">
	      <label for="workcomp">Work (Company)*</label>	 
	      <select class="form-control input-sm" multiple name="workcomp[]">
		<option value="">-- Select Work Type --</option>
		<option value="Interior Design">Interior Design</option>
		<option  value="Electrical Services">Electrical Services</option>
        <option value="Plumbing">Plumbing</option>
		<option  value="Rainwater Harvesting">Rainwater Harvesting </option>
        <option value="Pit/Well">Pit/Well</option>
		<option  value="Construction">Construction</option>
        <option value="Water Proofing">Water Proofing</option>
		<option  value="Painting">Painting</option>
        <option  value="Earth Movers">Earth Movers</option>
        <option value="Scrap Dealers">Scrap Dealers</option>
		<option  value="House appliances">House appliances</option>
        <option value="Desktop/Laptop">Desktop/Laptop</option>
		<option  value="Air Conditioning">Air Conditioning</option>
        <option  value="Pest Control">Pest Control</option>
        <option value="STP">STP</option>
		<option  value="Security">Security</option>
        <option value="2Wheeler">Automobile- 2Wheeler</option>
		<option  value="4Wheeler">4Wheeler</option>
        <option  value="Carwash">Car wash</option>
        <option value="Dry cleaners">Dry cleaners</option>
		<option  value="Cleaning">Cleaning</option>
	      </select>
          <span class="help-block">Hold down the Ctrl (windows) / Command (Mac) button to select multiple options</span>
	</div>
    <div class="form-group col-md-3 col-sm-3">
	      <label for="workcompmore">More Details</label>
	      <textarea class="form-control input-sm" name="workcompmore" rows="3"></textarea>
	   </div>
        <div class="form-group col-md-9 col-sm-9">
            <label for="pastexp">Past Experience</label>
            <input type="text" class="form-control input-sm" name="pastexp" placeholder="">
        </div>

        <div class="form-group col-md-3 col-sm-3">
            <label for="expyrs">No of Years</label>
            <input type="text" class="form-control input-sm" name="expyrs" placeholder="">
        </div>
        <div class="form-group col-md-12 col-sm-12">
	      <label for="localadd">Local Address*</label>
	      <textarea class="form-control input-sm" name="localadd" rows="3"></textarea>
	   </div>
       <div class="form-group col-md-12 col-sm-12">
	      <label for="permadd">Permanent Address*</label>
	      <textarea class="form-control input-sm" name="permadd" rows="3"></textarea>
	   </div>
       <div class="form-group col-md-6 col-sm-6">
            <label for="mobile1">Mobile Number 1*</label>
            <input type="text" class="form-control input-sm" name="mobile1" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile2">Mobile Number 2</label>
            <input type="text" class="form-control input-sm" name="mobile2" placeholder="">
        </div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="emailid">Email address</label>
            <input type="email" class="form-control input-sm" name="emailid" placeholder="">
        </div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="Language">Language Known</label>
            <input type="text" class="form-control input-sm" name="Language" placeholder="">
        </div>

	<div class="form-group col-md-6 col-sm-6">
            <label for="idproof">Id Proof*</label>
            <input type="text" class="form-control input-sm" name="idproof" placeholder="">
        </div>

	<div class="form-group col-md-6 col-sm-6">
            <label for="addproof">Address Proof*</label>
            <input type="text" class="form-control input-sm" name="addproof" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="panno">Pan No.</label>
            <input type="text" class="form-control input-sm" name="panno" placeholder="">
        </div>

	

	<div class="form-group col-md-12 col-sm-12" >
    <span class="help-block">Local Reference (Reference are Mandatory) </span>
	</div>
    <div class="form-group col-md-6 col-sm-6">
            <label for="familyref">Family Address and Contact</label>
            <input type="text" class="form-control input-sm" name="familyref" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="friendref">Friend's Address and Contact</label>
            <input type="text" class="form-control input-sm" name="friendref" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
	    <label for="photo">Photo*</label>
	    <input type="file" name="picphoto">
	    <p class="help-block">Please upload individual photo. Group photo is not acceptable.</p>
	</div>
    <div class="form-group col-md-3 col-sm-3">
	    <label for="idproof">ID Proof*</label>
	    <input type="file" name="idproof" id="idproof">
	    <p class="help-block">Please upload Govt ID proof photo. </p>
        </div>
    <div class="form-group col-md-3 col-sm-3">
	    <label for="addressproof">Address Proof*</label>
	    <input type="file" name="addressproof" id="addressproof">
	    <p class="help-block">Please upload Govt Address Proof photo.</p>
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