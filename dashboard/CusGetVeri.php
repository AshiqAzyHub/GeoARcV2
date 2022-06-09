<?php
session_start();
include'config.php';
// if(!isset($_SESSION['user']))
// {
// header('location:CusDash.php');
// }
$regid=$_SESSION['login_id'];

if(isset($_POST['getotp']))
{
  $user=$_POST['email'];
  $q=mysqli_query($con,"select * from login where email='$user'");
  $count=mysqli_num_rows($q);
  if($count>0)
  {
  //   $otp=rand(100000,999999);
  //   $_SESSION['check']=$otp;
  //   $to      = $user;
  //   $subject = 'Email Verification';
  //   $message = 'GeoArc Welcomes you!..Here is your verification OTP code:  '.$otp;
  //   $headers = 'From: GeoArc <ashiqazycloud@gmail.com>'       . "\r\n" .
  //         'X-Mailer: PHP/' . phpversion();

  //   $result=mail($to, $subject, $message, $headers);
  //   if($result)
  //   {
  //     mysqli_query($con,"insert into login(login_id,email)values('$regid','$user')");

  //     echo "<script>alert('Mail Send Successfully');window.location.href='CusGetOtp.php';</script>";     
  //   }
  //   else
  //   {
  //     echo "<script>alert('Something went wrong...');</script>";
     
  //   }
  // }
  // else
  // {
  //   echo "<script>alert('Email not found');</script>";
  // }
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer;
use PHPMailer\SMTP;
use PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'geoarc2022@gmail.com';                     //SMTP username
    $mail->Password   = 'Geo@7002';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sender@geoarc.com', 'GeoArc');
    $mail->addAddress('reply@geoarc.com', 'GeoArc');     //Add a recipient
    while($row = mysqli_fetch_array($email))
    {
        $fname=$row['First Name'];
        $phone=$row['Phone'];
        $email=$row['Email'];
    }
    $mail->addAddress($emailid);               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email From GeoArc';
    // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}}
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
                <label>Email</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                  <input class="form-control" type="email" name="email" required="" placeholder="Enter Email">
                </div>
              </div>
				  </div>
                
               
         
				  <div class="form-group">
				  </div>
          <button class="btn btn-primary btn-block" name="getotp" type="submit" href="CusGetOtp.php">Get OTP</button>

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