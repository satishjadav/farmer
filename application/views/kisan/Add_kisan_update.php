<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="images/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="icon/icofont/css/icofont.css">
     <!-- Notification.css -->
     <link rel="stylesheet" type="text/css" href="pages/notification/notification.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    
    <?php include("header.php");?>
</head>
<body>

    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="pcoded" class="pcoded body">        
        <div class="pcoded-overlay-box"></div>  

        <div class="pcoded-container navbar-wrapper">
            <!-- TopBar Content-->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.html">
                            <img class="img-fluid" sri="Images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-pink"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="Iiages/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="Iiages/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="Iiages/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="Iiages/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>Main/logout"></a>
                                          <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End -->
            
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">      
                    <!-- TopBar Content-->
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius" src="Iiages/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>Main Admin</span>
                                        <span id="more-details">Khachrod<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="#"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-search">
                                <span class="searchbar-toggle">  </span>
                                <div class="pcoded-search-box ">
                                    <input type="text" placeholder="Search">
                                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="Index">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Makerting</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="Today-Login-List">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Today's Login</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="Marketing-Person-List">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Total Marketing Persons</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Kisan Details</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="Add-Kisan-Information">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Add Kisan Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Kisan-Add-Listing">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Total Kisan List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pending-Kisan-List">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Pending Profile</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Complete-Kisan-List">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Complete Profile</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Task Detail</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="Task-View-List">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b></b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Today's Task List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Task-Complete-List">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Complete Task List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Task-pending-List">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Panding Task</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other">Other</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="map-google.html">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Marketing Person Query</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="map-google.html">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Kisan Query</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- End -->          
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <!-- Body Content-->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Kisan Information</h5>
                                            </div>
                                            <div class="card-block">
                                                
                                                <!-- Nav tabs -->
                                                 <ul class="nav nav-tabs nav-tabs-warning md-tabs" role="tablist">
                                                   <!-- <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Personal" role="tab" aria-expanded="false">Personal Information</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Asset" role="tab" aria-expanded="false">Asset Details</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Land" role="tab" aria-expanded="false">Land Details</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#Crop" role="tab" aria-expanded="true">Crop Details</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#TIME" role="tab" aria-expanded="true">AT THE TIME OF SOWING</a>
                                                        <div class="slide"></div> -->
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#visits" role="tab" aria-expanded="true">visits</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <!-- <div class="tab-content card-block">
                                                    <div class="tab-pane" id="Personal" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Personal Information</h4>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <form method="post" action="<?php echo base_url();?>Crud/updatedata" >
                                                                <div class="form-group">
                                                                    <label class="form-label">Kisan Full Name</label>
                                                                    <input type="text" name="kisan_full_name" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Mobile Number</label>
                                                                    <input type="tel" name="mobile_no" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Age</label>
                                                                    <input type="number" name="age" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Education</label>
                                                                    <input type="number" name="education" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <div class="form-group">
                                                                    <label class="form-label">Full Address</label>
                                                                    <textarea rows="5" name="full_address" cols="5" class="form-control form-txt-primary" placeholder="Default textarea"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select Gender</label>
                                                                </div>
                                                                <div class="radio-fade fade-in-primary">
                                                                    <label>
                                                                        <input type="radio" name="gender" value="">
                                                                        <span class="text-inverse">Male</span>
                                                                    </label>
                                                                </div>
                                                                <div class="radio-fade fade-in-primary">
                                                                    <label>
                                                                        <input type="radio" name="gender"value="">
                                                                        <span class="text-inverse">Female</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Family Member Details</label>                                                
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Childs</label>
                                                                            <input type="number" name="child_count" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Father's Name </label>
                                                                            <input type="text" name="father_name"class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Mother's Name </label>
                                                                            <input type="text" name="mother_name" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Husband / Wife Name </label>
                                                                            <input type="text" name="husband_name" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label">If any other profession in the family</label>
                                                                            <input type="text" name="other_profession" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">What is the profession</label>
                                                                            <input type="text" name="profession_name" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">By Whom</label>
                                                                            <input type="text" name="by_whom" class="form-control form-txt-primary" placeholder="">
                                                                            
                                                                           
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="Asset" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Asset Details</h4>
                                                        <div class="d-block">
                                                        <form method="post" action="<?php echo base_url();?>Crud/assets" >
                                                            <div class="form-group">
                                                                <label class="form-label">Total Vehicles Number </label>
                                                                <input type="text" name="vehicle_count" class="form-control form-txt-primary" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Vehicle Type </label>
                                                                    <select name="vehicle_type" class="form-control form-txt-primary">
                                                                        <option value="opt1">Select Type</option>
                                                                        <option value="opt2">Two Wheleer</option>
                                                                        <option value="opt3">Type 3</option>
                                                                        <option value="opt4">Type 4</option>
                                                                        <option value="opt5">Type 5</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Vehicle Name </label>
                                                                    <input type="text" name="vehicle_name" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Year/Model </label>
                                                                    <input type="text" name="year_model" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Vehicle Company Name </label>
                                                                    <input type="text" name="vehicle_company" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Used For </label>
                                                                    <select name="used_type" class="form-control form-txt-primary">
                                                                        <option value="opt1">Select Type</option>
                                                                        <option value="opt2">For Personal</option>
                                                                        <option value="opt3">For Farming</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4 class="sub-title">Tools for Farming  (any machinery used for farming) </h4>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Tools Type </label>
                                                                    <select name="tool_type" class="form-control form-txt-primary">
                                                                        <option value="opt1">Select Type</option>
                                                                        <option value="opt2">Mulching</option>
                                                                        <option value="opt3">Cultivator</option>
                                                                        <option value="opt4">Irrigation Pumps</option>
                                                                        <option value="opt5">Trashers</option>
                                                                        <option>Seed drill </option>
                                                                        <option>others</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Year/Model </label>
                                                                    <input type="text" name="tool_year_model" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label"> Company Name </label>
                                                                    <input type="text" name="company_name" class="form-control form-txt-primary" placeholder="">
                                                                    <input type="submit" name="submit"class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit">
                                                                         </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="Land" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Land Details</h4>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                            <form method="post" action="<?php echo base_url();?>Crud/agro" >
                                                            <div class="form-group">
                                                                    <label class="form-label">kisan_id</label>
                                                                    <input type="text" name="kisan_id" class="form-control form-txt-primary" placeholder="">
                                                                </div>  
                                                            
                                                            <div class="form-group">
                                                                    <label class="form-label">District Name</label>
                                                                    <input type="text" name="district_name" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Tehsil Name</label>
                                                                    <input type="text" name="tehsil_name" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Village Panchayat Name</label>
                                                                    <input type="text" name="panchayat_name" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Village name</label>
                                                                    <input type="text" name="village_name" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Please fill the khesra Number</label>
                                                                    <input type="text" name="khesra_no" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Land Details</label>
                                                                    <input type="text" name="land_details" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Area A Lot Name</label>
                                                                    <input type="text" name="area_alot_name" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Land Size</label>
                                                                    <input type="text" name="land_size" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Soil Type</label>
                                                                    <input type="text" name="soil_type"class="form-control form-txt-primary" placeholder="">
</br>
                                                                    <input type="submit" name="submit"class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit">
                                                                 </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane active" id="Crop" role="tabpanel" aria-expanded="true">
                                                        <h4 class="sub-title">Crop Details</h4>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                            <form method="post" action="<?php echo base_url();?>Crud/crop" >
                                                                <div class="form-group">
                                                                    <label class="form-label">Select Land </label>
                                                                    <select name="select_land" class="form-control form-txt-primary">
                                                                        <option value="opt1">Select Land</option>
                                                                        <option value="opt2">Land1</option>
                                                                        <option value="opt3">Land2</option>
                                                                        <option value="opt4">Land3</option>
                                                                    </select>
                                                                </div>                                            
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Crop Types  </label>
                                                                    <select name="crop_type" class="form-control form-txt-primary">
                                                                        <option value="opt1">Select Type</option>
                                                                        <option value="opt2">Field/Food Crops</option>
                                                                        <option value="opt3">Plantation Crops</option>
                                                                        <option value="opt4">Horiticultural Crops</option>
                                                                        <option value="opt5">Cash Crop</option>
                                                                    </select>
                                                                </div>                                            
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select Crops Sub Types  </label>
                                                                    <select name="crop_subtype" class="form-control form-txt-primary">
                                                                        <option value="opt1">Select Food Type</option>
                                                                        <option value="opt2">Wheat</option>
                                                                        <option value="opt3">Maize</option>
                                                                        <option value="opt4">Legumes</option>
                                                                        <option value="opt5">Potatoes</option>
                                                                        <option value="opt6">Rice</option>
                                                                        <option value="opt7">Tomatoes</option>
                                                                        <option value="opt8">Others</option>
                                                                    </select>
                                                                    <input type="submit" name="submit"class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit">
                                                                   </form>
                                                                </div>
                                                            </div>
                                                        </div>               
                                                    </div>
                                                    <div class="tab-pane active" id="TIME" role="tabpanel" aria-expanded="true">  
                                                        <h4 class="sub-title">A - Seeds Details</h4>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                            <form method="post" action="<?php echo base_url();?>Crud/seeds" >
                                                                <div class="form-group">
                                                                    <label class="form-label">Land Used for Sowing(Total Land or from Section III)</label>
                                                                    <input type="text" name="land_used_sowing" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Seed Crop Type used </label>
                                                                    <select name="seed_crop_used" class="form-control form-txt-primary">
                                                                        <option value="opt1">Select Type</option>
                                                                        <option value="opt2">Field/Food Crops</option>
                                                                        <option value="opt3">Plantation Crops</option>
                                                                        <option value="opt4">Horiticultural Crops</option>
                                                                        <option value="opt5">Cash Crop</option>
                                                                    </select>
                                                                </div>        
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select Crops Sub Types  </label>
                                                                    <select name="select_subtype" class="form-control form-txt-primary">
                                                                        <option value="opt1">Select Food Type</option>
                                                                        <option value="opt2">Wheat</option>
                                                                        <option value="opt3">Maize</option>
                                                                        <option value="opt4">Legumes</option>
                                                                        <option value="opt5">Potatoes</option>
                                                                        <option>Rice</option>
                                                                        <option>Tomatoes</option>
                                                                        <option>Others</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Seed Brand/Company Name</label>
                                                                    <input type="text" name="seed_brand" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <h4 class="sub-title">A - Seed Purchase Details</h4>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Total Seeds used(in gms or KG)</label>
                                                                    <input type="text" name="total_seeds" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Total Cost of the seeds</label>
                                                                    <input type="number" name="total_cost_seeds" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Pruchased From (Shop Details)</label>
                                                                    <input type="number" name="purchased_from" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <hr>
                                                        <h4 class="sub-title">B - Seed Treatment Details</h4>
                                                        <h4>Seed treatment product Used</h4>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Product Name</label>
                                                                    <input type="text" name="product_name" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Brand</label>
                                                                    <input type="text" name="brand" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Cost of the Product</label>
                                                                    <input type="text" name="cost_of_product" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Dose used of the Product(Acre/Beegha/Kg)</label>
                                                                    <input type="text" name="dose_used" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Purchased From (Shop Details)</label>
                                                                    <input type="text" name="purchased" class="form-control form-txt-primary" placeholder=""> 
                                                                    <input type="submit" name="submit"class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit">
                                                                </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                

                                                  -->
                                                  <?php 
												  //foreach ($article as $row): ?>
<li><a href="<?php //echo base_url() . "index.php/Crud/show_kisan_id/" . $row->kisan_enquiry_id; ?>"><?php// echo $row->product_name; $row->brand; 
$row->cost_of_product;?></a></li>
<?php// endforeach; ?>
<div id="detail">

<?php //foreach ($single_data as $row): ?>
<!-- <p>Edit Detail & Click Update Button</p> -->
                                                 
                                                <div class="tab-pane" id="visits" role="tabpanel" aria-expanded="false">
                                                <h4 class="sub-title text-center"> Visit </h4>
                                                <h4 class="sub-title">Agri Input Used (Fertilizer, Pesticide etc)</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <form method="post" action="<?php echo base_url() . "index.php/Crud/update_kisan_id1"?>">
                                                        <div class="form-group">
                                                        <label id="hide">Id :</label>
                                                          <input type="text" id="hide" name="did" value="<?php //echo $row->kisan_enquiry_id; ?>">
                                                            <label class="form-label">Product Name</label>
                                                            <input type="text" name="product_name" id="product_name" class="form-control form-txt-primary" placeholder="" value="<?php //echo $row->product_name; ?>">
                                                          
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Brand</label>
                                                            <input type="text" name="brand" id="brand"  class="form-control form-txt-primary" placeholder=""  value="<?php //echo $row->brand; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Cost of the Product</label>
                                                            <input type="text" name="cost_of_product" id="cost_of_product" class="form-control form-txt-primary" placeholder=""  value="<?php //echo $row->cost_of_product; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Dose used of the Product(Acre/Beegha/Kg)</label>
                                                            <input type="text" name="dose_used" id="dose_used" class="form-control form-txt-primary" placeholder=""  value="<?php //echo $row->dose_used; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Purchased From (Shop Details)</label>
                                                            <input type="text" name="purchased" id="purchased" class="form-control form-txt-primary" placeholder=""  value="<?php // echo $row->purchased; ?>">>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="sub-title"> Issues with the crop</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Diseases</label>
                                                            <input type="text" name="diseases" id="diseases" class="form-control form-txt-primary" placeholder=""  value="<?php //echo $row->dose_used; ?>">>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"> Type  </label>
                                                            <select name="select" name="type" class="form-control form-txt-primary">
                                                                <option value="opt1">Select Type</option>
                                                            </select>
                                                        </div>        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Insects</label>
                                                            <input type="text" name="insect" id="insect" class="form-control form-txt-primary" placeholder="" value="<?php //echo $row->insect; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"> Type  </label>
                                                            <select name="type" class="form-control form-txt-primary">
                                                                <option value="opt1">Select Type</option>
                                                            </select>
                                                        </div>        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Deficiencies</label>
                                                            <input type="text" name="deficiences" id="deficiences" class="form-control form-txt-primary" placeholder="" value="<?php //echo $row->deficiences; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"> Type  </label>
                                                            <select name="type" class="form-control form-txt-primary">
                                                                <option value="opt1">Select Type</option>
                                                            </select>
                                                        </div>        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Deficiencies</label>
                                                            <input type="text" name="deficiences" id="deficiences" class="form-control form-txt-primary" placeholder="" value="<?php //echo $row->deficiences; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"> Type  </label>
                                                            <select name="type" class="form-control form-txt-primary">
                                                                <option value="opt1">Select Type</option>
                                                            </select>
                                                        </div>        
                                                    </div>
                                                </div>

                                                <h4 class="sub-title">Crop impact %age</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Seed Crop Type </label>
                                                            <select name="seed_type" class="form-control form-txt-primary">
                                                                <option value="opt1">Select Type</option>
                                                                <option value="opt2">Field/Food Crops</option>
                                                                <option value="opt3">Plantation Crops</option>
                                                                <option value="opt4">Horiticultural Crops</option>
                                                                <option value="opt5">Cash Crop</option>
                                                            </select>
                                                        </div>        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Impact %age</label>
                                                           <!-- <input type="text" name="impact" id="impact" class="form-control form-txt-primary" placeholder=""  
                                                       -->
													   </div>
                                                    </div>
                                                </div>

                                                <h4 class="sub-title">Labour Cost</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Labour on daily wages how many & their costs</label>
                                                            <input type="text" name="labour_wages" id="labour_wages" class="form-control form-txt-primary" placeholder=""  
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Self Labour</label>
                                                            <input type="text" name="self_labour" id="self_labour" class="form-control form-txt-primary" placeholder="" 
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="sub-title">Equipment Used & Their Cost</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Pumps for irrigation (their electricity cost & their fuel costs)</label>
                                                            <input type="text" name="pump_irrigation" id="pump_irrigation" class="form-control form-txt-primary" placeholder="" 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Tractors & other vehicles (their fuel cost)   </label>
                                                            <input type="text" name="tractor_vehicle" id="tractor_vehicle" class="form-control form-txt-primary" placeholder="" value="<?php //echo $row->tractor_vehicle; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Any transportation cost for acquiring the required products</label>
                                                            <input type="text" name="transport" id="transport" class="form-control form-txt-primary" placeholder="" value="<?php //echo $row->transport; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Any other cost involved in crop production</label>
                                                            <input type="text" name="other_cost" id="other_cost" class="form-control form-txt-primary" placeholder="" value="<?php //echo $row->other_cost; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <!-- Upload image input-->
                                                        <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                                            <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
                                                            <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                                            <div class="input-group-append">
                                                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                                            </div>
                                                        </div>

                                                        <!-- Uploaded image area-->
                                                        <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                                                        <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                                                    </div>
                                                </div>

                                                <h4 class="sub-title">  Total Earning of the Farmer, Season WISE</h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Total Area</label>
                                                            <input type="text" name="total_area" id="total_area"class="form-control form-txt-primary" placeholder=""value="<?php echo $row->transport; ?>"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Impact %age</label>
                                                            <input type="text" name="impacts" id="impacts" class="form-control form-txt-primary" placeholder="" value="<?php echo $row->impacts; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Total earnings</label>
                                                            <input type="number" name="total_earn" id="total_earn" class="form-control form-txt-primary" placeholder=""value="<?php echo $row->total_earn; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Price at which the crop sold</label>
                                                            <input type="text" name="sold_price" id="sold_price" class="form-control form-txt-primary" placeholder="" value="<?php echo $row->sold_price; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Transportation cost used for selling </label>
                                                            <input type="number" name="transport_cost" id="transport_cost" class="form-control form-txt-primary" placeholder="" value="<?php echo $row->transport_cost; ?>">>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Details of the place and person where the crop has been sold</label>
                                                        
                                                            <input type="text" name="place_details" id="place_details" class="form-control form-txt-primary" placeholder="" value="<?php echo $row->place_details; ?>">>
  </div></div>
                                                            <input type="submit" name="dsubmit"  class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="update">
                                                            </form>
                                                            <?php //endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End -->    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>


    <!-- Required Jquery -->
<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="js/modernizr/modernizr.js"></script>
<!-- notification js -->
<script type="text/javascript" src="js/bootstrap-growl.min.js"></script>
<script type="text/javascript" src="pages/notification/notification.js"></script>
<!-- am chart -->
<script src="pages/widget/amchart/amcharts.min.js"></script>
<script src="pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="pages/todo/todo.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript " src="js/SmoothScroll.js"></script>
<script src="js/pcoded.min.js"></script>
<script src="js/demo-12.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/datatables-demo.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/uploadimage.js"></script>


<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>

</body>
</html>
