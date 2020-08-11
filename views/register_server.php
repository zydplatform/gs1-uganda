<?php
 require_once 'config.php';

 // session_start();
$fullname ='';
 $email='';
 $dept='';
 $tel='';
 $contactperson='';
 $owner='';
 $bname='';
 $bregno='';
 $bceo='';
 $btel='';
 $country='';
 $nature_business='';
 $mybusiness='';
 $companysize='';
 $physical_address='';
 $postal_address='';
 $district='';
 $documents='';
 $pass='';
 $cpass='';
 $username_error=$useremail_error=$pass_error=$cpass_error="";
if(isset($_POST['register'])){
	$fullname = stripcslashes($_POST['uname']);
	$email = stripcslashes($_POST['email']);
	$dept = stripcslashes($_POST['dept']);
	$tel = stripcslashes($_POST['telephone']);
	$contactperson = stripcslashes($_POST['contactp']);
	$owner = stripcslashes($_POST['owner']);
	$bname = stripcslashes($_POST['bname']);
	$bregno = stripcslashes($_POST['regno']);
	$bceo = stripcslashes($_POST['bceo']);
	$btel = stripcslashes($_POST['btel']);
	$country = stripcslashes($_POST['input_30']);
	$nature_business = stripcslashes($_POST['input_33']);
	$mybusiness = stripcslashes($_POST['input_34']);
	$companysize = stripcslashes($_POST['input_35']);
	$physical_address = stripcslashes($_POST['address']);
	$postal_address = stripcslashes($_POST['paddress']);
	$district = stripcslashes($_POST['district']);
	$documents= stripcslashes($_POST['docs']);
	$pass  = stripcslashes($_POST['password']);
	$cpass = stripcslashes($_POST['cpassword']);

	// validate user info with server
	if (empty($fullname)) {
	 $username_error = "Username is required"; 
	}
 	if (empty($email)) {
 	$useremail_error = "Email is required"; 
 }
 	if (empty($pass)) { 
 		$pass_error = "Password is required"; 
 	}
  	if ($pass != $cpass) {
    	$cpass_error= "The two passwords do not match";
 	 }

 	 // check if user already exists
 	 $user_check_query = "SELECT * FROM register WHERE fullname='$fullname' OR email='$email' LIMIT 1";
  	$result = mysqli_query($connect_database, $user_check_query);
  	$user = mysqli_fetch_assoc($result);

  	$user_exist_error=$userexist_email_error="";

  if ($user) { // if user exists

    if ($user['fullname'] === $fullname) {
      $user_exist_error = "Username already exists";

    }

    if ($user['email'] === $email) {
      $userexist_email_error = "email already exists";
    }
  }
	
	if(count($errors) == 0){
		$pass = md5($pass);
		// if(password_verify($pass, $hashed_password))
		// $cpass = md5($cpass);
		$sql ="INSERT INTO register(fullname,email,dept,tel,contactperson,owner,bname,bregno,bceo,btel,country,business_nature,
		business_line,company_size,physical_address,postal_address,district,password,confirm_password,docs)
		VALUES('$fullname','$email','$dept','$tel','$contactperson','$owner','$bname','$bregno','$bceo','$btel','$country','$nature_business','$mybusiness','$companysize','$physical_address','$postal_address','$district','$pass','$cpass','$documents')";
		if($connect_database->query($sql)== TRUE)
		{
			// echo "data inserted successfully";
			header('location: login.php');
		}
		else{
			echo "error".$sql."<br>".$connect_database->error;
		}

	}
}

$connect_database->close();
 ?>