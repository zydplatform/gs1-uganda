<?php
 require_once '../config.php';

 // session_start();
$productname ='';
 $productprice='';
 $productdetails='';
 $productqty = '';
 $mfgdate='';
 $expdate='';
 $pname_error=$pprice_error=$pdetails_error=$mfgdate_error=$expdate_error=$qty_error="";
if(isset($_POST['addproduct'])){
	$productname = stripcslashes($_POST['pname']);
	$productprice = stripcslashes($_POST['pprice']);
	$productdetails = stripcslashes($_POST['pdetails']);
	$productqty =stripcslashes($_POST['qty']);
	$mfgdate = stripcslashes($_POST['mfg']);
	$expdate= stripcslashes($_POST['exp']);

	// validate user info with server
	if (empty($productname)) {
	 $pname_error = " Product name is required"; 
	}
 	if (empty($productprice)) {
 	$pprice_error = "Product Price is required"; 
 }
 	if (empty($productdetails)) { 
 		$pdetails_error = "Product specific details required"; 
 	}
  	if ($mfgdate) {
    	$mfgdate_error= "Date Manufactured required";
 	 }
 	   	if ($expdate) {
    	$expdate_error= "Date Manufactured required";
 	 }
 	 // check if user already exists
 	 $product_query = "SELECT * FROM products WHERE productname='$productname'  LIMIT 1";
  	if($stmt = $connect_database->prepare($product_query)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_productname);
            
            // Set parameters
            $param_productname = $productname;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if product exists, if yes then verify password
                if($stmt->num_rows > 0){                    
                    // Bind result variables
                    $stmt->bind_result($productname);
                    if($stmt->fetch())

                    	$pname_error = "Product Already Exists";

                    }
                    else{
                    	echo "No product found with this name";
                    }
                }
                else
                {
                	echo "Please try again later !";
                }
   		$stmt->close();
   }
	
	// if(count($errors) == 0){
		// if(password_verify($pass, $hashed_password))
		// $cpass = md5($cpass);
		$sql ="INSERT INTO products(productname,productprice,productspecification,mfgdate,expdate,productqty)
		VALUES('$productname','$productprice','$productdetails','$mfgdate','$expdate','$productqty')";
		if($connect_database->query($sql)== TRUE)
		{
			// echo "data inserted successfully";
			header('location: dashboard.php');
		}
		else{
			echo "error".$sql."<br>".$connect_database->error;
		}

	// }
}

// $connect_database->close();
 ?>
 