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
    <title>Admin Page</title>

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
        <div class="badge-bottom"><span class="badge badge-primary">Admin</span></div>
        <a href="#"> <h6 class="mt-3 f-14 f-w-600"><?php echo $_SESSION['fname'] ?></h6></a>
        <p class="mb-0 font-roboto">GeoArc Admin</p>
       
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
                            <li><a href="AdminDash.php" class="active">Home</a></li>
                            <li><a href="Complaintpage.php" class="">Complaints</a></li>
							<li><a href="Verification.php" class="">Verifications</a></li>
                        </ul>
                    </li>

                    
                
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="box"></i><span>Architect</span></a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="AllArc.php" class="">View All Architects</a></li>
                            <li><a href="VeriArc.php" class="">Verified Architects</a></li>
                        </ul>
                    </li>
				
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="folder-plus"></i><span>Contractor</span></a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="AllContra.php" class="">View All Contractor</a></li>
                            <li><a href="VeriContra.php" class="">Verified Contractor</a></li>
                 
                            
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
            <li class="breadcrumb-item"><a href="AdminDash.php">Home</a></li>
           
          </ol>
        </div>
        <div class="col-sm-6"></div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container">
    <div class="email-wrap bookmark-wrap">
      <div class="row">
        <div class="email-right-aside bookmark-tabcontent contacts-tabs">
          <div class="card email-body radius-left">
            <div class="ps-0">
              <div class="tab-content">
                <div class="tab-pane fade active show" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
                  <div class="card mb-0">
                    <div class="card-header d-flex">
                      <h5>User Activity</h5>
                    </div>
                    <!-- <div class="container"> -->
                    <!-- <ul class="box-info" > -->
                    <!-- <div class="container"> -->
                      <style>
                        /*  Counter Section  */

                        .container{
    margin-top:100px;
}

.counter-box {
	display: block;
	background: #f6f6f6;
	padding: 40px 20px 37px;
	text-align: center
}

.counter-box p {
	margin: 5px 0 0;
	padding: 0;
	color: #909090;
	font-size: 18px;
	font-weight: 500
}

.counter-box i {
	font-size: 60px;
	margin: 0 0 15px;
	color: #d2d2d2
}

.counter { 
	display: block;
	font-size: 32px;
	font-weight: 700;
	color: #666;
	line-height: 28px
}

.counter-box.colored {
      background: #3acf87;
}

.counter-box.colored p,
.counter-box.colored i,
.counter-box.colored .counter {
	color: #fff
}
</style>
<?php
                       $cust = mysqli_query($link,"SELECT * FROM `login` where VStatus=1");
                       $count_cust = mysqli_num_rows($cust);
              
                            $arc = mysqli_query($link,"SELECT * FROM `login` where role='2'");
                            $count_arc = mysqli_num_rows($arc);
              
                            $cont = mysqli_query($link,"SELECT * FROM `login` where role='3'");
                            $count_cont = mysqli_num_rows($cont);
              
                      $total = mysqli_query($link,"SELECT * FROM `login` where role ='4'");
                            $count_total = mysqli_num_rows($total);
              
                  
                      ?>
    <div class="row">

	<div class="four col-md-3">
		<div class="counter-box colored">
			<!-- <i class="fa fa-thumbs-o-up"></i> -->
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg>
			<span class="counter"><?php echo $count_cust;?></span>
			<p>Total Verified Users</p>
		</div>
	</div>
	<div class="four col-md-3">
		<div class="counter-box">
			<!-- <i class="fa fa-group"></i> -->
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
  <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
</svg>
      <span class="counter"><?php echo $count_arc;?></span>
			<p>Total Architects</p>
		</div>
	</div>
	<div class="four col-md-3">
		<div class="counter-box">
			<!-- <i class="fa  fa-shopping-cart"></i> -->
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
</svg>
			<span class="counter"><?php echo $count_cont;?></span>
			<p>Total Contractors</p>
		</div>
	</div>
	<div class="four col-md-3">
		<div class="counter-box">
			<!-- <i class="fa  fa-user"></i> -->
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
</svg>
			<span class="counter"><?php echo $count_total;?></span>
			<p>Total Customer</p>
		</div>
	</div>

	</section>
                    

                    <div class="table-data">
                      <div class="order">
                        <div class="head">
                          <h3>Recent Verification Requests</h3>
                          <i class='bx bx-search' ></i>
                          <i class='bx bx-filter' ></i>
                        </div>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Sr No.</th>
                              <th>User Name</th>
                              <th>Date of Request</th>
                              <th>Profile</th>
                              <th>Verification Status</th>
                              
                            </tr>
                          </thead>
                          <?php
                            $i=1;
                         $sql="SELECT * from login where VStatus='0' and role='2' or role='3'";
                         $query = mysqli_query($link,$sql);
                          if(mysqli_num_rows($query)>0){
                         
                         while($row=mysqli_fetch_assoc($query)){
                         ?>   
                          <tbody>
                          
                            <tr>
                             
                <td><?php echo $i; ?></td>     
                <td><?php echo $row['fname'];?></td> 
                <td><?php echo $row['Date'];?></td> 
                <td><span ><?php if($row['role']==2){echo"Architect";}else if($row['role']==3){echo"Contractor";}else if($row['role']==4){echo"Customer";}?></span></td>
                <td><span ><?php if($row['VStatus']==0){echo"Not Verified";}else if($row['VStatus']==1){echo"Verified";} ?></span></td>
                <td><a href="VerifyArc.php?aid=<?php echo $row['login_id'];?>">View</a> </td>
              </tr>
            <?php $i++;}}
            else{
               echo "No record Found!";
              
            }?>
              
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>
                      
                    </div>

              </div>
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