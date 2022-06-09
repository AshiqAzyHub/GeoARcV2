<?php
session_start();
require("config.php");
$chk=$_SESSION['check'];
if(isset($_POST['otpverify']))
{
  $enteredotp=$_POST['otp'];
  if($email_veri == $chk)
  {
    echo "<script>alert('email verified');window.location.href='CusDash.php';</script>";
  }
  else{
    echo "<script>alert('invalid otp');</script>";

  }

}
?>

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
    <title>Registration</title>
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
          <div class="col-xl-5"><img class="bg-img-cover bg-center" src="assets/images/login/3r.png" alt="looginpage"></div>
          <div class="col-xl-7 p-0"> 
              <form class="theme-form login-form"  method="post" enctype="multipart/form-data">
                <h4>Get Verified your Account</h4>
                <h6>Enter your verification details</h6>
                <div class="form-group">
					
              <div class="form-group">
              <label>otp</label>
              <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                <input class="form-control" type="text" name="otp"  placeholder="Enter OTP">
              </div>
            </div>

				  </div>
                
               
         
				  <div class="form-group">
          <td> <a href="GetVeri.php?cid=<?php echo $row['VStatus'];?>" ><li class="onhover-dropdown p-0">

					<button class="btn btn-primary btn-block" name="otpverify" type="submit">Get OTP</button>
				  </div>
</form>
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