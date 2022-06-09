<?php
require_once "config.php";

session_start();
if(isset($_POST['change']))
{
   $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=($_POST['password']);
$query=mysqli_query($link,"SELECT * FROM login WHERE email='$email' and phone='$phone'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="Login.php";
mysqli_query($link,"update login set password='$password' WHERE email='$email' and phone='$phone' ");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="Password Changed Successfully";
exit();
}
else
{
$extra="forgotpassword.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="Invalid email id or Phone no";
exit();
}
// if(empty($email)){      
//   echo'<script>alert("please enter email");</script>'; 
//   }
//  else if(empty($phone)){      
//   echo'<script>alert("please enter phone number");</script>'; 
//   }
//  else{
// $select_stmt = "SELECT email,phone FROM login WHERE  email !='$email',phone !='$phone'"; // sql select query
// //bind parameters
// $query = mysqli_query($link, $select_stmt);

// if(mysqli_num_rows($query)>0){
// $errorMsg="Sorry email or phone not exists"; //check new user type email already exists or not in email textbox

// }}
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
    <title>Forgot Password</title>
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
    <script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>
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
          <div class="col-xl-5"><img class="bg-img-cover bg-center" src="assets/images/login/fp.png" alt="looginpage"></div>
          <div class="col-xl-7 p-0"> 
            <!-- <div class="login-card"> -->
              <form class="theme-form login-form" method="post">
                <h4>Forgot Password</h4>
           
  
				 
				  <div class="form-group">
					<label>Email</label>
					<div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
					  <input class="form-control" type="email" name="email" required="" placeholder="Enter Email">
					</div>
				  </div>
                  <div class="form-group">
					<label>Phone No.</label>
					<div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
					  <input class="form-control" type="tel" name="phone" required="" placeholder="Enter Phone no ">
					</div>
				  </div>
  
  
				 
				
  
				  <div class="form-group">
					<label>Password</label>
					<div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
					  <input class="form-control" type="password" name="password" required="" placeholder="Enter Password">
					  <div class="show-hide"><span class="show">                         </span></div>
					</div>
                    <div class="form-group">
					<label>Confirm Password</label>
					<div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
					  <input class="form-control" type="password" name="cpassword" required="" placeholder="Enter Password">
					  <div class="show-hide"><span class="show">                         </span></div>
					</div>
         
				  </div>
				  <div class="form-group">
            
					<button class="btn btn-primary btn-block"  name="change" type="submit">Change</button>
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