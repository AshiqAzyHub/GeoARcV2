<?php

$host="localhost";
$user="root";
$password="";
$db="geoarcv2";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$password=$_POST["password"];



	$sql="select * from login where email='".$email."' AND password='".$password."'  ";

	$result=mysqli_query($data,$sql);

  if(mysqli_num_rows($result)){

	$row=mysqli_fetch_array($result);

	if($row["role"]=="1")
	{	
    $_SESSION["fname"]=$row['fname'];
		$_SESSION["email"]=$row['email'];
    $_SESSION["role"]=$row['role'];
    $_SESSION["login_id"]=$row['login_id'];
  

		header("location:AdminDash.php");
	}

	elseif($row["role"]=="4")
	{
    $_SESSION["fname"]=$row['fname'];
		$_SESSION["email"]=$row['email'];
    $_SESSION["role"]=$row['role'];
    $_SESSION["login_id"]=$row['login_id'];

		
		header("location:CusDash.php");
	}
	elseif($row["role"]=="2")
	{
    $_SESSION["fname"]=$row['fname'];
		$_SESSION["email"]=$row['email'];
    $_SESSION["role"]=$row['role'];
    $_SESSION["login_id"]=$row['login_id'];

		
		header("location:ArchDash.php");
	}
	elseif($row["role"]=="3")
	{
    $_SESSION["fname"]=$row['fname'];
		$_SESSION["email"]=$row['email'];
    $_SESSION["role"]=$row['role'];
    $_SESSION["login_id"]=$row['login_id'];

		
		header("location:ContraDash.php");
	}}

	else
	{
		echo '<script>alert("username or password incorrect");</script>';
	}

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Login</title>
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
	<!-- Page Header Start-->
	<div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="dashboard"><img class="img-fluid" src="assets/images/logo/logo.png" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="dashboard"><img class="img-fluid" src="assets/images/logo/dark-logo.png" alt=""></a></div>
            <!-- <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div> -->
          </div>
        </div>
    </div>
    <!-- page-wrapper Start-->
    <section>         
      <div class="container-fluid p-0"> 
        <div class="row m-0">
          <div class="col-xl-5"><img class="bg-img-cover bg-center" src="assets/images/login/C1.gif" alt="looginpage"></div>
          <div class="col-xl-7 p-0"> 
            <!-- <div class="login-card" > -->
              <form class="theme-form login-form" method="post">
                <h4>Login Details</h4>
                <h6>Enter your email and password to login</h6>
           
  
				 
				  <div class="form-group">
					<label>Email</label>
					<div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
					  <input class="form-control" type="email" name="email" required="" placeholder="Enter Email">
					</div>
				  </div>
  
				 
				
  
				  <div class="form-group">
					<label>Password</label>
					<div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
					  <input class="form-control" type="password" name="password" required="" placeholder="Enter Password">
					  <div class="show-hide"><span class="show">                         </span></div>
					</div>
          <div class="radio outer-xs">
		  	<a href="forgotpassword.php" class="forgot-password pull-right">Forgot your Password?<br></a>
		</div>
				  </div>
				  <div class="form-group">
            
					<button class="btn btn-primary btn-block"  value="Login" type="submit">Login</button>
				  </div>
                <div class="login-social-title">                
                  <h5>Sign in with</h5>
                </div>
                <div class="form-group">
                  <ul class="login-social">
                    <li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
                    <li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i data-feather="instagram">                  </i></a></li>
                  </ul>
                </div>
                <p>Don't have an account?<a class="ms-2" href="Registration.php">Sign Up</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- page-wrapper end-->
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/sweet-alert/sweetalert.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>