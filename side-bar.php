<?php require_once 'php/controller/config.php';   ?>
    <?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">

<head>


    <title>AMK Inventory Management System </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
	  <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
  </head>

  <body>
      
 
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper">
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!">
                           <i class="ti-menu"></i>
                       </a>
                       <div class="mobile-search">
                           <div class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control" placeholder="Enter Keyword">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <a href="home.php">INVENTORY MANAGEMENT</a>
                        
                       <a class="mobile-options">
                           <i class="ti-more"></i>
                       </a>
                   </div>

                   <div class="navbar-container container-fluid">
                       <ul class="nav-left">
                           <li>
                               <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                           </li>
                           <!-- <li class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </li> -->
                       </ul>
                       <ul class="nav-right">
                           <li>
                           <!-- <li class="header-notification"> -->
                               <a>  <!-- <a href="#!">     -->
                                   <!-- <i class="ti-bell"></i>
                                   <span class="badge bg-c-pink"></span> -->
                                   <span style="margin-right: 320px">Amk Variety Store</span>
                               </a>
                               <!-- <ul class="show-notification">
                                   <li>
                                       <h6>Notifications</h6>
                                   <hr></hr>
                                   </li>
                                   <li>
                        
                                   </li>  
                               </ul> -->
                           </li>
   
   
   
                           <li class="user-profile header-notification">
                               <a href="#!">
               <?php
				$id = $_SESSION['user'];
				$sql = $dbh->prepare("SELECT * FROM `user_tbl` WHERE `user_id`='$id'");
				$sql->execute();
				$fetch = $sql->fetch();
	?>
                       <span><?php echo $fetch['fullname']." "?> </span>   
                                   <i class="ti-angle-down"></i>
                               </a>

                               <ul class="show-notification profile-notification">
                                   <li>
                                       <a href="php/logout.php">
                                       <i class="ti-layout-sidebar-left"></i> Logout
                                   </a>
                                   </li>
                               </ul>
                           </li>
                       </ul>
                   </div>
               </div>
           </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="home.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Products &amp; Invoice</div>
                            <ul class="pcoded-item pcoded-left-item">
                            <li>
                                        <a href="pos.php">
                                            <span class="pcoded-micon"><i class="ti-shopping-cart"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">POS</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    <li>
                                        <a href="products.php">
                                            <span class="pcoded-micon"><i class="ti-clipboard"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Products</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add_product.php">
                                            <span class="pcoded-micon"><i class="ti-plus"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Add Product</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                       
                                        <li>
                                            <a href="invoice.php">
                                                <span class="pcoded-micon"><i class="ti-receipt"></i><b>D</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.dash.main">Invoice</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="add-invoice.php">
                                                <span class="pcoded-micon"><i class="ti-plus"></i><b>D</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.dash.main">Add invoice</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>    
                                        </ul>
                    </nav>
    </body>
    </html>
	