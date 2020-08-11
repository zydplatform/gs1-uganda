<?php
// include '../login.php';

if(isset($_SESSION['logout'])){
// Initialize the session
// session_start();
 
// Unset all of the session variables
// $_SESSION = array();                      
                      
	unset($_SESSION["membershipno"]);
	unset($_SESSION["bname"]);
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: ../login.php");
}
exit;
?>