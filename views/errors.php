<style type="text/css">
	.error{
		color: red;
	}
</style>
<?php 
// include('register_server.php');
 $errors = array();
 // validate fields
 $fullname_error ='';
 $email_error='';
 $dept_error='';
 $role_error='';
 $tel_error='';
 $myid_error='';
 $owner_error='';
 $bname_error='';
 $phno_error='';
 $bregno_error='';
 $bmail_error='';
 $btel_error='';
 $logo_error='';
 $country_error='';
 $nature_business_error='';
 $mybusiness_error='';
 $companysize_error='';
 $physical_address_error='';
 $postal_address_error='';
 $district_error='';
 $city_error='';
 $documents_error='';
 $pass_error='';
 $cpass_error='';
 
    // Check if username is empty
    if(empty(trim($_POST["uname"]))){
        $fullname_error = "Please enter Username.";
    } else{
        $fullname = trim($_POST["email"]);
    }
        if(empty(trim($_POST["username"]))){
        $fullname_error = "Please enter Username.";
    } else{
        $fullname = trim($_POST["dept"]);
    }
        if(empty(trim($_POST["role"]))){
        $fullname_error = "Please enter Username.";
    } else{
        $fullname = trim($_POST["telephone"]);
    }
        if(empty(trim($_POST["personalid"]))){
        $fullname_error = "Please enter Username.";
    } else{
        $fullname = trim($_POST["owner"]);
    }
        if(empty(trim($_POST["bname"]))){
        $fullname_error = "Please enter Username.";
    } else{
        $fullname = trim($_POST["phno"]);
    }
        if(empty(trim($_POST["regno"]))){
        $fullname_error = "Please enter Username.";
    } else{
        $fullname = trim($_POST["companysize"]);
    }
        if(empty(trim($_POST["username"]))){
        $fullname_error = "Please enter Username.";
    } else{
        $fullname = trim($_POST["username"]);
    }
        if(empty(trim($_POST["username"]))){
        $fullname_error = "Please enter Username.";
    } else{
        $fullname = trim($_POST["username"]);
    }
        if(empty(trim($_POST["username"]))){
        $fullname_error = "Please enter Username.";
    } else{
        $fullname = trim($_POST["username"]);
    }
        if(empty(trim($_POST["username"]))){
        $fullname_error = "Please enter Username.";
    } else{
        $fullname = trim($_POST["username"]);
    }
        if(empty(trim($_POST["username"]))){
        $fullname_error = "Please enter Username.";
    } else{
        $fullname = trim($_POST["username"]);
    }
        if(empty(trim($_POST["username"]))){
        $fullname_error = "Please enter Username.";
    } else{
        $fullname = trim($_POST["username"]);
    }

	if(empty($fullname)){
		array_push($errors, "Full Name is required");
	}
	if(empty($email)){
		array_push($errors, "Email is required");
	}
	if(empty($dept)){
		array_push($errors, "Deaprtment you work in is required");
	}
	if(empty($role)){
		array_push($errors, "Role you play in the department of the company is required");
	}
	if(empty($tel)){
		array_push($errors, "Telephone is required");
	}
	if(empty($myid)){
		array_push($errors, "NIN number or Passport Number is required");
	}
	if(empty($owner)){
		array_push($errors, "Owner is required");
	}
	if(empty($bname)){
		array_push($errors, "Business Name is required");
	}
	if(empty($phno)){
		array_push($errors, "Phone Number is required");
	}
	if(empty($bregno)){
		array_push($errors, "Business Registration Number is required");
	}
	if(empty($bmail)){
		array_push($errors, "Business Email is required");
	}
	if(empty($btel)){
		array_push($errors, "Business Telephone or Fax  is required");
	}
	if(empty($logo)){
		array_push($errors, "Company logo is required");
	}
	if(empty($country)){
		array_push($errors, "Country is required");
	}
	if(empty($nature_business)){
		array_push($errors, "Nature of Business is required");
	}
	if(empty($mybusiness)){
		array_push($errors, "Line of Business is required");
	}
	if(empty($companysize)){
		array_push($errors, "Current Company Size is required");
	}
	if(empty($physical_address)){
		array_push($errors, "Physical Address is required");
	}
	if(empty($postal_address)){
		array_push($errors, "Postal Address is required");
	}
	if(empty($district)){
		array_push($errors, "District is required");
	}
	if(empty($city)){
		array_push($errors, "City is required");
	}
	if(empty($documents)){
		array_push($errors, "Documents are required");
	}
	if(empty($pass)){
		array_push($errors, "Password is required");
	}
	if(empty($cpass)){
		array_push($errors, "Password is required");
	}
	if($pass != $cpass){
		array_push($errors, "The two passwords do not match");
	}

if(count($errors) >0 ): 
 ?>
 <div class="error">
 	<?php 
 		foreach ($errors as $error) : 	 ?>
 			<strong><?php echo $error; ?></strong>

 	<?php endforeach ?>
 </div>
 <?php endif ?>