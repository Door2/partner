<?php 
	session_start();
	// variable declaration
	$username = "";
	$email    = "";
	$picphoto = "";
	//$workind = array();
	$workcomp= '';
	$errors = array(); 
	$_SESSION['success'] = "";
	// connect to database
	$db = mysqli_connect('localhost', 'door2', 'door2', 'doorregister');
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }
	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		function array_implode(array $workind)
{
    return implode(',',$workind);
}
$workind  = array_implode($_POST['workind']);
		// receive all input values from the form
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$middlename = mysqli_real_escape_string($db, $_POST['middlename']);
		$dob1 = mysqli_real_escape_string($db, $_POST['dob']);
		$dob = date('Y-m-d', strtotime(str_replace('/', '-', $dob1)));
		//$today = date("Y-m-d");
                //$age = date_diff(date_create($dob1), date_create($today));
                $age = 25;
                $gender = mysqli_real_escape_string($db, $_POST['gender']);
		$expyrs = mysqli_real_escape_string($db, $_POST['expyrs']);
		$mobile1 = mysqli_real_escape_string($db, $_POST['mobile1']);
		$emailid = mysqli_real_escape_string($db, $_POST['emailid']);
		// form validation: ensure that the form is correctly filled
		if (empty($firstname)) { array_push($errors, "firstname is required"); }
		if (empty($dob)) { array_push($errors, "Date of Birth is required"); }
		if (empty($lastname)) { array_push($errors, "Lastname is required"); }
		if (empty($gender)) { array_push($errors, "Gender is required"); }
		if (empty($mobile1)) { array_push($errors, "Mobile Number is required"); }
		
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO users (firstname, lastname, middlename,fathername,dob,age,gender,nationality,Marital,profiles,
			workind,workindmore,workcomp,workcompmore,pastexp,expyrs,localadd,permadd,mobile1,mobile2,emailid,Languages,idproof,addproof,panno,familyref,friendref,profilepic,idupload,addupload) 
					  VALUES('$firstname', '$lastname', '$middlename','', '$dob', '$age','$gender', '', '','',
					   '$workind', '','', '', '','$expyrs','', '','$mobile1', '','$emailid', '', '','', '', '', '', '', '', '')";
			if(mysqli_query($db, $query)){
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($db);
                        }
                        mysqli_close($db);
		}
	}
?>
