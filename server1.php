<?php 
	session_start();
	// variable declaration
	$username = "";
	$email    = "";
	$picphoto = "";
	$workind = '';
	$workcomp= '';
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'doorregister');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		
$target_path = "uploads/";  
$target_path = $target_path.basename( $_FILES['picphoto']['name']);   
$photoload= basename( $_FILES['picphoto']['name']);
if(move_uploaded_file($_FILES['picphoto']['tmp_name'], $target_path)) {  
    //echo "File uploaded successfully!";  
} else{  
    //echo "Sorry, file not uploaded, please try again!";  
}  

$target_path1 = "uploadsid/";  
$target_path1 = $target_path1.basename( $_FILES['idproof']['name']);   
$photoload1= basename( $_FILES['idproof']['name']);
if(move_uploaded_file($_FILES['idproof']['tmp_name'], $target_path1)) {  
    //echo "File uploaded successfully!";  
} else{  
    //echo "Sorry, file not uploaded, please try again!";  
} 

$target_path2 = "uploadsadd/";  
$target_path2 = $target_path2.basename( $_FILES['addressproof']['name']);   
$photoload2= basename( $_FILES['addressproof']['name']);
if(move_uploaded_file($_FILES['addressproof']['tmp_name'], $target_path2)) {  
    //echo "File uploaded successfully!";  
} else{  
    //echo "Sorry, file not uploaded, please try again!";  
}
if(isset($_POST['workind'])){
	$workind= implode(", ",isset($_POST['workind']));
} 
if(isset($_POST['workcomp'])){
	$workcomp= implode(", ",isset($_POST['workcomp']));
} 



		// receive all input values from the form
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$middlename = mysqli_real_escape_string($db, $_POST['middlename']);
		$fathername = mysqli_real_escape_string($db, $_POST['fathername']);
		$dob1 = mysqli_real_escape_string($db, $_POST['dob']);
		$dob = date('Y-m-d', strtotime(str_replace('/', '-', $dob1)));
		$age = mysqli_real_escape_string($db, $_POST['age']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
		$nationality = mysqli_real_escape_string($db, $_POST['nationality']);
		$Marital = mysqli_real_escape_string($db, $_POST['Marital']);
		$profiles = mysqli_real_escape_string($db, $_POST['profiles']);
		//$workind = mysqli_real_escape_string($db, $_POST['workind']);
		$workindmore = mysqli_real_escape_string($db, $_POST['workindmore']);
		//$workcomp = mysqli_real_escape_string($db, $_POST['workcomp']);
		$workcompmore = mysqli_real_escape_string($db, $_POST['workcompmore']);
		$pastexp = mysqli_real_escape_string($db, $_POST['pastexp']);
		$expyrs = mysqli_real_escape_string($db, $_POST['expyrs']);
		$localadd = mysqli_real_escape_string($db, $_POST['localadd']);
		$permadd = mysqli_real_escape_string($db, $_POST['permadd']);
		$mobile1 = mysqli_real_escape_string($db, $_POST['mobile1']);
		$mobile2 = mysqli_real_escape_string($db, $_POST['mobile2']);
		$emailid = mysqli_real_escape_string($db, $_POST['emailid']);
		$Language = mysqli_real_escape_string($db, $_POST['Language']);
	  	$idproof = mysqli_real_escape_string($db, $_POST['idproof']);
	   	$addproof = mysqli_real_escape_string($db, $_POST['addproof']);
	   	$panno = mysqli_real_escape_string($db, $_POST['panno']);
	   	$familyref = mysqli_real_escape_string($db, $_POST['familyref']);
       	$friendref = mysqli_real_escape_string($db, $_POST['friendref']);
		$profilepic = mysqli_real_escape_string($db, $photoload);
		$idupload = mysqli_real_escape_string($db, $photoload1);
		$addupload = mysqli_real_escape_string($db, $photoload2);
		// form validation: ensure that the form is correctly filled
		if (empty($firstname)) { array_push($errors, "firstname is required"); }
		if (empty($dob)) { array_push($errors, "Date of Birth is required"); }
		if (empty($age)) { array_push($errors, "Age is required"); }
		if (empty($gender)) { array_push($errors, "Gender is required"); }
		if (empty($nationality)) { array_push($errors, "Nationality is required"); }
		if (empty($profiles)) { array_push($errors, "Profile type is required"); }
		if (empty($localadd)) { array_push($errors, "Local Address is required"); }
		if (empty($permadd)) { array_push($errors, "Permanent Address is required"); }
		if (empty($mobile1)) { array_push($errors, "Mobile Number is required"); }
		if (empty($idproof)) { array_push($errors, "ID Proof is required"); }
		if (empty($addproof)) { array_push($errors, "Address Proof is required"); }
		if (empty($picphoto)) { array_push($errors, "Profile Pic is required"); }
		if (empty($idproof)) { array_push($errors, "ID Proof is required"); }
		if (empty($addressproof)) { array_push($errors, "Address Proof is required"); }
		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO users (id,firstname, lastname, middlename,fathername,dob,age,gender,nationality,Marital,profiles,
			workind,workindmore,workcomp,workcompmore,pastexp,expyrs,localadd,permadd,mobile1,mobile2,emailid,Languages,idproof,addproof,panno,familyref,friendref,profilepic,idupload,addupload) 
					  VALUES(' ','$firstname', '$lastname', '$middlename','$fathername', '$dob', '$age','$gender', '$nationality', '$Marital','$profiles',
					   '$workind', '$workindmore','$workcomp', '$workcompmore', '$pastexp','$expyrs','$localadd', '$permadd','$mobile1', '$mobile2','$emailid', '$Language', '$idproof','$addproof', '$panno', '$familyref', '$friendref', '$profilepic', '$idupload', '$addupload')";
			mysqli_query($db, $query);
		}

	}
?>