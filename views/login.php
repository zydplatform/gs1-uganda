<?php
// Initialize the session
session_start();
 
// // Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location: ../views/dashboard/dashboard.php");
//     exit;
// }
require_once 'config.php';
 
// Define variables and initialize with empty values
 $fullname=$password='';
  $fullname_error=$password_error='';
 
// Processing form data when form is submitted
if(isset($_POST['login'])){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $fullname_error = "Please enter Username.";
    } else{
        $fullname = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_error = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($fullname_error) && empty($password_error)){
        // Prepare a select statement
        $sql = "SELECT membershipno, fullname, password FROM register WHERE fullname = ?";
        
        if($stmt = $connect_database->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_fullname);
            
            // Set parameters
            $param_fullname = $fullname;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $fullname, $password);
                    if($stmt->fetch()){
                        if(md5($password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["success"] = true;
                            $_SESSION["membershipno"] = $id;
                            $_SESSION["username"] = $fullname;                            
                            
                            // Redirect user to welcome page
                            header("location: ../views/dashboard/dashboard.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_error = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $fullname_error = "No account found with that User name.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $connect_database->close();
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Kiganda Ivan">
    <meta name="keywords" content="web application for barcodes using mobile first approach">
    <meta name="description" content="GS1 Uganda website">
    <title>GS1 Uganda</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="icon" href="../images/newlogo1.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css">
    body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    /*background-image: url('../images/eight.jpg');*/
}

.box {
    width: 500px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    background: white;
    /*border: solid 1px #3498db;*/
    border-radius: 5%;
    ;
    text-align: center;
    transition: 0.25s;
    margin-top: 100px
}

.box input[type="text"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 10px 10px;
    width: 250px;
    outline: none;
    color: #191919;
    border-radius: 24px;
    transition: 0.25s
}

.box h1 {
    color: #191919;
    text-transform: uppercase;
    font-weight: 500
}

.box input[type="text"]:focus,
.box input[type="password"]:focus {
    width: 300px;
    border-color: #2ecc71
}

.box input[type="submit"], .box button {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: black;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}

.box input[type="submit"]:hover, .box button:hover {
    background: rgba(0,0,0,0.1);
    border: none;
    color : white;
}

.forgot {
    text-decoration: underline
}

ul.social-network {
    list-style: none;
    display: inline;
    margin-left: 0 !important;
    padding: 0
}

ul.social-network li {
    display: inline;
    margin: 0 5px
}

.social-network a.icoFacebook {
    background-color: #191919;
}

.social-network a.icoTwitter{
    background-color: #191919;
}

.social-network a.icoGoogle{
    background-color: #191919;
}

.social-network a.icoFacebook:hover {
    background-color: #3B5998
}

.social-network a.icoTwitter:hover {
    background-color: #33ccff
}

.social-network a.icoGoogle:hover {
    background-color: #BD3518
}

.social-network a.icoFacebook:hover i,
.social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i {
    color: #fff
}

a.socialIcon:hover,
.socialHoverClass {
    color: #44BCDD
}

.social-circle li a {
    display: inline-block;
    position: relative;
    margin: 0 auto 0 auto;
    border-radius: 50%;
    text-align: center;
    width: 50px;
    height: 50px;
    font-size: 20px
}

.social-circle li i {
    margin: 0;
    line-height: 50px;
    text-align: center
}

.social-circle li a:hover i,
.triggeredHover {
    transform: rotate(360deg);
    transition: all 0.2s
}

.social-circle i {
    color: #fff;
    transition: all 0.8s;
    transition: all 0.8s
}
</style>
</head>
<body class="jumbotron">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="box" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="form-group <?php echo (!empty($fullname_error))? 'has-error':''; ?>">
                        
                    </div>
                    <!-- <h1>Login</h1> -->
                    <span><img src="../images/newlogo1.png" alt="gs1uganda-logo" style="width: 150px;height: 120px;"></span>
                     <input type="text" name="username" placeholder="Username">
                    <span class="help-block" style="color: rgba(255,10,51,1);"><?php echo $fullname_error; ?></span>
                     <input type="password" name="password" placeholder="Password">
                     <span class="help-block" style="color: rgba(255,10,51,1);"><?php echo $password_error; ?></span>
                    <button type="submit" name="login"><a  style="color: #191919;text-decoration: none;">Login</a></button>
                    <a href="signup.php" title="register with us">Not yet a member ?</a>
                    
                    <button id="index"><a href="../index.php" style="color: #191919;text-decoration: none;">Back To Website</a></button>
                    <div class="col-md-12">
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
    // validate login
    // function loginValidate(){
    //     $('blur').on(function{
    //         $('.box').validate();
    //     });
    // }

</script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>
<script type="text/javascript">
    // function relocate(){
        // window.location="../views/dashboard/dashboard.html";
    // }
</script>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
