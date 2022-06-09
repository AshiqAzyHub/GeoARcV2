<?php
include('config.php');
session_start();
if($_SESSION['email']==""){
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Complaint Page</title>

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
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/css/chartist.css">
  <link rel="stylesheet" type="text/css" href="assets/css/date-picker.css">
  <link rel="stylesheet" type="text/css" href="assets/css/prism.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vector-map.css">
<!-- Plugins css Ends-->
<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<!-- App css-->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
  <div class="main-header-right row m-0">
    <div class="main-header-left">
      <div class="logo-wrapper"><a href="dashboard"><img class="img-fluid" src="assets/images/logo/logo.png" alt=""></a></div>
      <div class="dark-logo-wrapper"><a href="dashboard"><img class="img-fluid" src="assets/images/logo/dark-logo.png" alt=""></a></div>
      <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div>
    </div>
    <div class="left-menu-header col">
      <ul>
        <li>
          <form class="form-inline search-form">
            <div class="search-bg"><i class="fa fa-search"></i>
              <input class="form-control-plaintext" placeholder="Search here.....">
            </div>
          </form>
          <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
        </li>
      </ul>
    </div>
    <div class="nav-right col pull-right right-menu p-0">
      <ul class="nav-menus">
        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
       
        <a href="logout.php" >
        <li class="onhover-dropdown p-0">
          <button class="btn btn-primary-light" type="button"><i data-feather="log-out"></i>Log out</button>
        </li>
        </a>
    
      </ul>
    </div>
    <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
  </div>
</div>
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="assets/images/dashboard/1.png" alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">Customer</span></div>
        <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600"><?php echo $_SESSION['fname'] ?></h6></a>
        <p class="mb-0 font-roboto"><?php echo $_SESSION['email'] ?></p>
       
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>General</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title active" href="#"><i data-feather="home"></i><span>Dashboard</span></a>                  
                        <ul class="nav-submenu menu-content" style="display: block;">
                            <li><a href="#" class="active">Home</a></li>
                            <li><a href="#" class="">Complaints</a></li>
							<li><a href="#" class="">Verifications</a></li>
                        </ul>
                    </li>

                    
                
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="box"></i><span>Architect</span></a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="#" class="">View All Architects</a></li>
                            <li><a href="#" class="">Verified Architects</a></li>
                        </ul>
                    </li>
				
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="folder-plus"></i><span>Contractor</span></a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="#" class="">View All Contractor</a></li>
                            <li><a href="#" class="">Verified Contractor</a></li>
                 
                            
                        </ul>
                    </li>
                                       <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="airplay"></i><span>Ecommerce</span></a>
                        <ul class="nav-submenu menu-content"  style="display: none;">
                            <li><a href="#" class="">Add Product</a></li>
							<li><a href="#" class="">Remove Product</a></li>
							<li><a href="#" class="">Purchase History</a></li>
							<li><a href="#" class="">Complaints</a></li>
                            <li><a href="#" class="">Sales Chart</a></li>
							
                        </ul>
                    </li>
                   
               
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="message-circle"></i><span>Chat</span></a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="#" class="">Chat App</a></li>
                        </ul>
                    </li>
                
                    
                    
                   
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
       
<div class="page-body">
  <!-- Container-fluid starts-->
              <!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-5">
          <h3>Home</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html" data-bs-original-title="" title="">Home</a></li>
            <li class="breadcrumb-item">Complaints</li>
          </ol>
        </div>
        <div class="col-sm-6"></div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
 <?php
 if(isset($_POST['complaint'])) 

 {
 $role = $_POST['role'];

 $complaint = $_POST['comp']; 
 $CompAgainst = $_POST['fname']; 
 $CompStatus = 0;
 $login = $_SESSION['login_id'];
 
  
 if(empty($role)){      
   echo'<script>alert("please select profile");</script>'; 
   }
  else if(empty($complaint)){      
   echo'<script>alert("please select person");</script>'; 
   }
  else if(empty($CompAgainst)){      
   echo'<script>alert("please enter complaint");</script>'; 
   }
//  else{
  
  
//     $select_stmt = "SELECT login_id FROM complaint
//            WHERE  email='$email'"; // sql select query
//        //bind parameters
//     $query = mysqli_query($link, $select_stmt);
    
//     if(mysqli_num_rows($query)>0){
//      $errorMsg="Sorry already complainted"; //check new user type email already exists or not in email textbox
 
//    }
    
 
     else{
       $insert_stmt="INSERT INTO complaint(login_id,role,complaint,CompAgainst,CompStatus) VALUES($login,$role,'$complaint','$CompAgainst',$CompStatus)"; //sql insert query  
               
       mysqli_query($link,$insert_stmt);
     
    
     $registerMsg="Register Successfully.....Wait Login page"; //execute query success message
     #header("refresh:2;CusDash.php"); //refresh 4 second and redirect to index.php page
    }
   }
 
   ?>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="edit-profile">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header pb-0">
              <h4 class="card-title mb-0">File Complaint</h4>
              <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
            </div>
            <div class="card-body">
              <form method="post">
                <!-- <div class="form-group">
					<label>Complainter Name</label>
					<div class="input-group"></i></span>
          <h3 class="mb-1 f-20 txt-primary"><?php echo $_SESSION['fname'] ?></h3>
					</div>
				  </div>
          <div class="form-group">
					<label>Complainter Profile</label>
					<div class="input-group"></i></span>
          <h3 class="mb-1 f-20 txt-primary"><?php if($_SESSION['role']==2){echo"Architect";}else if($_SESSION['role']==3){echo"Contractor";}else if($_SESSION['role']==4){echo"Customer";} ?></h3>
					</div>
				  </div> -->
           
               
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
$('#role').on('change', function() {
var role = this.value;
$.ajax({
url: "selectperson.php",
type: "POST",
data: {
role : role
},
cache: false,
success: function(result){
  $("#fname").html(result);
}
});
});
});  

</script>
   <?php
   
   $query="SELECT * FROM role_tb WHERE `rolename` !='Admin'";

   $result = $link->query($query);
   ?>
   <br><br>  <div class="form-group">
					<label>Complaint Against</label>
					<div class="dropdown"></i></span>
					
   <select class="form-select" id="role" name="role" style="color:black;">
       <option value ="">Select role</option>
       <?php
       if($result->num_rows>0){
           while($row = $result->fetch_array()){

               echo '<option value="'.$row['role'].'">'.$row['rolename'].'</option>';
           }
       }else
       {
         
           echo '<option value="">Not available<option>';
       }
       ?>
   </select>
   <br><br></div>
				  </div>
          <div class="form-group">
					<label>Name </label>
					<div class="dropdown"></i></span>
   <select class="form-select" id="fname" name="fname"style="color:black;">
   </select>
   </div>
				  </div>
            </select>
                <div class="mb-3">
                  <h6 class="form-label">Complaint</h6>
                  <textarea class="form-control" name="comp" rows="5"></textarea>
                </div>
     
                <div class="form-footer">
                  <button class="btn btn-primary btn-block" name="complaint">Complaint</button>
                </div>
              </form>
            </div>
          </div>
        </div>
           
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2022-23 © GeoArc All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with Ashiq <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
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

      <script src="assets/js/custom-card/custom-card.js"></script>
      <script src="assets/js/notify/bootstrap-notify.min.js"></script>

      <script src="assets/js/notify/index.js"></script>

    <!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="assets/js/script.js"></script>
<!-- Plugin used-->  </body>
</html>