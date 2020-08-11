<?php 
$servername ='localhost';
$username ='root';
$password ='';
$db = 'gs1-uganda';

$connect_database = new mysqli($servername, $username, $password, $db);
if($connect_database->connect_error){
	die("Connection to Database Failed: ".$connect_database->connect_error);
}
// echo "Connected Successfully to Database";

  // $connect_database->close();

 ?>