<?php

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
    <title>Contractor Page</title>
    <!-- Google font-->
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
        <a class="setting-primary" href="ContraEdit.php"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="assets/images/dashboard/1.png" alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">Contractor</span></div>
        <a href="#"> <h6 class="mt-3 f-14 f-w-600"><?php echo $_SESSION['fname'] ?></h6></aclass="badge-right"><span class="badge badge-primary">Verified</span>       

        <p class="mb-0 font-roboto">MCA Department</p>
        <ul>
            <li>
                <span><span class="counter">17</span></span>
                <p>Total Work</p>
            </li>
            <li>
                <span>10</span>
                <p>Completed</p>
            </li>
            <li>
                <span><span class="counter">7</span></span>
                <p>Pending</p>
            </li>
        </ul>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                   
                    <li class="sidebar-main-title">
                        <div>
                            <h6>General</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title active" href="javascript:void(0)"><i data-feather="home"></i><span>Dashboard</span></a>                  
                        <ul class="nav-submenu menu-content" style="display: block;">
                            <li><a href="#" class="active">New Requests</a></li>
                            <li><a href="#" class="">Accepted</a></li>
                        </ul>
                    </li>

                   
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="airplay"></i><span>Ecommerce</span></a>
                        <ul class="nav-submenu menu-content"  style="display: none;">
                          <li><a href="#" class="">Product</a></li>
                          <li><a href="#" class="">Order History</a></li>
                          <li><a href="invoice.html" class="">Invoice</a></li>
                          <li><a href="#" class="">Cart</a></li>
                          <li><a href="#" class="">Wishlist</a></li>
                          <li><a href="#" class="">Checkout</a></li>
                        </ul>
                      </li>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="message-circle"></i><span>Chat</span></a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="#" class="">Chat App</a></li>
                            <li><a href="#" class="">Video chat</a></li>
                        </ul>
                    </li>
                
                   
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
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