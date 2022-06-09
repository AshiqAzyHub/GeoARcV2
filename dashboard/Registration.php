<?php

require_once "config.php";
$errorMsg=NULL;
$registerMsg=NULL;
if(isset($_POST['register'])) 
{
 $fname = $_POST['fname']; 
 $lname = $_POST['lname']; 
 $gender = $_POST['gender'];
 $email  = $_POST['email']; 
 $phone = $_POST['phone'];
 $address = $_POST['address'];
 $password = $_POST['password']; 
 $role = $_POST['role'];



 if(empty($fname)){      
  echo'<script>alert("please enter first name");</script>'; 
  }
 else if(empty($lname)){      
  echo'<script>alert("please enter last name");</script>'; 
  }
 else if(empty($gender)){      
  echo'<script>alert("please enter gender");</script>'; 
  }
  else if(empty($email)){      
    echo'<script>alert("please enter email");</script>'; 
   }
 else if(empty($phone)){      
  echo'<script>alert("please enter phone number");</script>'; 
  }
 else if(empty($address)){      
  echo'<script>alert("please enter address");</script>'; 
 }
 else if(empty($role)){      
  echo'<script>alert("please select your profile");</script>'; 
 }
 else if(empty($password)){      
  echo'<script>alert("please enter password");</script>'; 
 }
else{
 
 
   $select_stmt = "SELECT email FROM login
          WHERE  email='$email'"; // sql select query
      //bind parameters
   $query = mysqli_query($link, $select_stmt);
   
   if(mysqli_num_rows($query)>0){
    $errorMsg="Sorry email already exists"; //check new user type email already exists or not in email textbox

  }
   

    else{
      $insert_stmt="INSERT INTO login(fname,lname,gender,email,phone,address,role,password) VALUES('$fname','$lname','$gender','$email','$phone','$address','$role','$password')"; //sql insert query  
              
      mysqli_query($link,$insert_stmt);
    
   
    $registerMsg="Register Successfully.....Wait Login page"; //execute query success message
    header("refresh:2;Login.php"); //refresh 4 second and redirect to index.php page
   }
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
    <br><br><br>
    <section>         
      <div class="container-fluid p-0"> 
        <div class="row m-0">
          <div class="col-xl-5"><img class="bg-img-cover bg-center" src="assets/images/login/3r.png" alt="looginpage"></div>
          <div class="col-xl-7 p-0"> 
            <div class="login-card">
              <form class="theme-form login-form" method="post">
                <h4>Create your account</h4>
                <h6>Enter your personal details to create account</h6>
                <div class="form-group">
					<label>Your Name</label>
					<div class="small-group">
					  <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
						<input class="form-control" type="text" name="fname" required="" placeholder="First Name">
					  </div>
					  <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
						<input class="form-control" type="text" name="lname" required="" placeholder="Last Name">
					  </div>
					</div>
				  </div>
        
  
				  <div class="form-group">
					  <label class="col-sm-3 control-label"><b>Gender</label>
					   <div class="col-sm-6">  
					 <br>  
					 <input type="radio" value="Male" name="gender" checked > Male   
					 <input type="radio" value="Female" name="gender"> Female   
					 <input type="radio" value="Other" name="gender"> Other  </b>
				  </div> 
          <br>
				  <div class="form-group">
					<label>Email</label>
					<div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
					  <input class="form-control" type="email" name="email" required="" placeholder="Enter Email Address">
					</div>
				  </div>

<div class="alert alert" role="alert">
<a class="alert-link"> <?php echo"$errorMsg" ?></a></div>

          <div class="form-group">
            <label>Phone</label>
            <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
              <input class="form-control" type="tel" name="phone" pattern="^\d{10}$" required=""  size="10" placeholder="Enter Phone Number">
            </div>
            </div>
  
				  <div class="form-group">
					  <label>Address</label>
					  <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
						<input class="form-control" type="text" required="" name="address" placeholder="Enter Address">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-3 control-label"><b>Role</label>

            <select  name="role">
              <option value = "select">Select Role</option>
              <?php
              $ss = mysqli_query($link,"SELECT * FROM `role_tb` where role !='Admin'");
              while($rr = mysqli_fetch_assoc($ss)){?>
                <option value = "<?php echo $rr['role'];?>"><?php echo $rr["rolename"];?></option>

            <?php  } ?>

</select>
					  <!-- <div class="col-sm-10">
						
						<br>  
					 <input  type="radio" value="Customer" name="role" checked > Customer  
					 <input  type="radio" value="Architect" name="role"> Architect  
					 <input  type="radio" value="Contrctor" name="role"> Contractor  </b>
					  </div> -->
					</div>
  
				  <div class="form-group">
					<label>Password</label>
					<div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
					  <input class="form-control" type="password" name="password" required=""  placeholder="Enter Password">
					  <div class="show-hide"><span class="show">                         </span></div>
					</div>
				  </div>
				  <div class="form-group">
					<div class="checkbox">
					  <input id="checkbox1" type="checkbox">
					  <label class="text-muted" for="checkbox1">Agree with <span>Privacy Policy                   </span></label>
					</div>
				  </div>
				  <div class="form-group">
					<button class="btn btn-primary btn-block" name="register" type="submit">Create Account</button>
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
                <p>Already have an account?<a class="ms-2" href="Login.php">Sign in</a></p>
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