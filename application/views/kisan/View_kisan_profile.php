<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="../../application/views/kisan/images/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../../application/views/kisan/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../../application/views/kisan/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../../application/views/kisan/icon/icofont/css/icofont.css">
     <!-- Notification.css -->
     <link rel="stylesheet" type="text/css" href="../../application/views/kisan/pages/notification/notification.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../../application/views/kisan/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../application/views/kisan/css/jquery.mCustomScrollbar.css">
    <link href="../../application/views/kisan/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
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
                            <img class="img-fluid" src="../../application/views/kisan/images/logo.png" alt="Theme-Logo" />
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
                                            <img class="d-flex align-self-center img-radius" src="../../application/views/kisan/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="../../application/views/kisan/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="../../application/views/kisan/images/avatar-4.jpg" alt="Generic placeholder image">
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
                                    <img src="../../application/views/kisan/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
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
                                        <a href="auth-normal-sign-in.html">
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
                                    <img class="img-40 img-radius" src="../../application/views/kisan/images/avatar-4.jpg" alt="User-Profile-Image">
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
                                    <a href="../home">
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
                                            <a href="../Add_Marketing_Person">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Add Marketing Persons</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="../Marketing_Person_List">
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
                                    <a href="../dash">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Add Kisan Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../visits">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">visits</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../showdata">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Total Kisan List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../PendingKisan">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Pending Profile</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../CompleteKisan">
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
														<?php  
                                            // foreach($showKisanId as $showKisanId)  
                                            //        {  
                                                        ?>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column align-items-center text-center">
                                                            <img src="<?php echo base_url($showKisanId->image)?>" class="rounded-circle p-1 bg-primary" width="110"/> 
                                                            <div class="mt-3">
											
														<h4><?php echo $showKisanId->kisan_full_name;?></h4> 
                                                               <!-- <h4>John Doe</h4>-->
															 
                                                                <p class="text-secondary mb-1"><?php echo $showKisanId->mobile_no;?></p>
                                                                <p class="text-muted font-size-sm"><?php echo $showKisanId->full_address;?></p>
                                                                <!-- <button class="btn btn-outline-primary">Message</button> -->
																  
                                                            </div>
                                                        </div>
                                                        <hr class="my-4">
                                                        <ul class="list-group list-group-flush">
                                                            <h5>Family Details</h5>
                                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                <h6 class="mb-0">Number of Childs</h6>
                                                                <span class="text-secondary">&nbsp;&nbsp;<?php echo $showKisanId->child_count;?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                <h6 class="mb-0">Father's Name</h6>
                                                                <span class="text-secondary">&nbsp;&nbsp;<?php echo $showKisanId->father_name;?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                <h6 class="mb-0">Mother's Name</h6>
                                                                <span class="text-secondary">&nbsp;&nbsp;<?php echo $showKisanId->mother_name;?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                <h6 class="mb-0">Husband/Wife Name</h6>
                                                                <span class="text-secondary">&nbsp;&nbsp;<?php echo $showKisanId->husband_name;?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                <h6 class="mb-0">If any other profession in the family</h6>
                                                                <span class="text-secondary">&nbsp;&nbsp;<?php echo $showKisanId->other_profession;?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                <h6 class="mb-0">What is the profession</h6>
                                                                <span class="text-secondary">&nbsp;&nbsp;<?php echo $showKisanId->profession_name;?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                <h6 class="mb-0">By Whom</h6>
                                                                <span class="text-secondary">&nbsp;&nbsp;<?php echo $showKisanId->by_whom;?></span>
                                                            </li>
                                                        </ul>
														<?php
												            //  }
													       ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs nav-tabs-warning md-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#Asset" role="tab" aria-expanded="false">ASSET </a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Land" role="tab" aria-expanded="false">Land Details</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#visits" role="tab" aria-expanded="false">Visits</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Time_seeds" role="tab" aria-expanded="false">AT THE TIME OF SOWING</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content card-block">
                                                    <div class="tab-pane" id="Personal" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Personal Information</h4>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Kisan Full Name</label>
                                                                    <input type="text" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Mobile Number</label>
                                                                    <input type="tel" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Age</label>
                                                                    <input type="number" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Education</label>
                                                                    <input type="number" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <div class="form-group">
                                                                    <label class="form-label">Full Address</label>
                                                                    <textarea rows="5" cols="5" class="form-control form-txt-primary" placeholder="Default textarea"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select Gender</label>
                                                                </div>
                                                                <div class="radio-fade fade-in-primary">
                                                                    <label>
                                                                        <input type="radio" showKisanIdue="">
                                                                        <span class="text-inverse">Male</span>
                                                                    </label>
                                                                </div>
                                                                <div class="radio-fade fade-in-primary">
                                                                    <label>
                                                                        <input type="radio" showKisanIdue="">
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
                                                                            <input type="number" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Father's Name </label>
                                                                            <input type="number" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Mather's Name </label>
                                                                            <input type="number" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Husband / Wife Name </label>
                                                                            <input type="number" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label">If any other profession in the family</label>
                                                                            <input type="text" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">What is the profession</label>
                                                                            <input type="text" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">By Whom</label>
                                                                            <input type="text" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane active" id="Asset" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Asset Details</h4> <?php if(empty($_GET['addasset'])){ ?>   <a href="<?php echo base_url("Crud/showKisanDetail/$kisanid_un?addasset=$kisanid_un");?>" style="margin-left: 72%;font-family: ui-sans-serif;background-color: cornflowerblue;color: beige;padding: 8px;margin-top: 0px;border-radius: 12px;border: 1px solid aquamarine;">Add Assets</a>                                                                                                 
                                                        <h5>Total Vehicle&nbsp;&nbsp;&nbsp;<?php if(!empty($assetshowkisans)){ print_r($assetshowkisans->vehicle_count);}?></h5> 
                                                        <?php if(empty($_GET['assetvehicle'])){ ?>
                                                          
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                <tr>
                                                                        <th>Vehicle Type</th>
                                                                        <th>Vehicle Name</th>
                                                                        <th>Year/Model</th>
                                                                        <th>Vehicle company Name</th>
                                                                        <th>Used For</th>
                                                                        <th>Option</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>                                                                    
                                                                <?php 
                                                                foreach($assetshowkisan as $land_kisan_sun){ 
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php print_r($land_kisan_sun->vehicle_type_id);?></td>
                                                                        <td><?php print_r($land_kisan_sun->vehicle_name);?></td>
                                                                        <td><?php print_r($land_kisan_sun->year_model);?></td>
                                                                        <td><?php print_r($land_kisan_sun->vehicle_company);?></td>
                                                                        <td><?php print_r($land_kisan_sun->used_type_id);?></td>
                                                                        <td>
                                                                        <a href="<?php echo base_url('Crud/showKisanDetail/'.$kisanid_un.'?assetvehicle='.$land_kisan_sun->kisan_asset_id)?>"><button class="btn btn-warning btn-sm" type="button"><i class="ti-pencil-alt"></i></button></a>
                                                                            <button class="btn btn-danger btn-sm">
                                                                        <a href="<?php echo base_url('Crud/asset_vehi/'.$kisanid_un.'?assetvehicle='.$land_kisan_sun->kisan_asset_id)?>">
                                                                                <i class="ti-trash"></i></a>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <?php }?>
                                                                  
                                                                </tbody>
                                                            </table>
                                                        </div>
<?php } else{ 
    // $land_kisanid = $kisanid_un;
    $assetvehicle_unid = $_GET['assetvehicle'];
    $kisan_asset_unid = array('kisan_asset_id'=>$assetvehicle_unid);
     $datavehicleid = $this->Main_model->getSingleRowByWhere('kisan_assets_vehicle',$kisan_asset_unid);
    // print_r($datavehicleid);die;
    ?>
  <div class="col-md-6">
<div class="form-group"><a href="<?php echo base_url("Crud/showKisanDetail/$kisanid_un")?>" style="background-color: cadetblue; color: white; padding: 10px; border-radius: 12px;margin-left: 151%;">Back</a></div></div>
    <form method="post" action="<?=site_url('Crud/asset_update/'.$datavehicleid->kisan_asset_id);?>" enctype="multipart/form-data">
    <div class="row">
<?php //echo "$landshowdata->land_id"; ?>
<!-- <div class="col-md-12">
<div class="form-group"><h1>update not work</h1></div></div> -->
<div class="col-md-6">
<div class="form-group">

<label class="form-label">Vehicle Type</label>
<!-- <input type="text" value= "<?php //echo $datavehicleid->vehicle_type_id;?>"  class="form-control form-txt-primary"/> -->
<?php
    $vehicle_get = $this->Main_model->getAll('vehicle_type');
    // print_r($vehicle_get);die;
    ?>
<select name="vehicle_type_id" class="form-control form-txt-primary">
    <?php $i=0; foreach($vehicle_get as $vlaues){
        if(!empty($vlaues->Vehicle_Type))
        {
    echo "<option value='$vlaues->id'>$vlaues->Vehicle_Type</option>";
    }}?>
</select>
</div></div>
<div class="col-md-6">                                           
<div class="form-group">
    <?php
    $used_getall = $this->Main_model->getAll('user_for');
    ?>
<label class="form-label">Used Type</label>
<!-- <input type="text" value= "<?php //echo $datavehicleid->used_type_id;?>" name="used_type_id" class="form-control form-txt-primary"/> -->
<select name="used_type_id" class="form-control form-txt-primary">
    <?php $i=0; foreach($used_getall as $used_type){
        if(!empty($used_type->user_for))
        {
    echo "<option value='$used_type->id'>$used_type->user_for</option>";
    }}?>
</select>

</div></div>
<div class="col-md-6"> 
<div class="form-group">
<label class="form-label">Vehicle Name</label>
<input type="text" value= " <?php echo $datavehicleid->vehicle_name;?>" name="vehicle_name" class="form-control form-txt-primary"/>
</div></div>
<div class="col-md-6"> 
<div class="form-group">
<label class="form-label">Year Model</label>
<input type="text" value= "  <?php echo $datavehicleid->year_model;?>" name="year_model" class="form-control form-txt-primary"/>
</div></div><div class="col-md-6"> 


<div class="form-group">
<label class="form-label">Vehicle Company</label>
<input type="text" value="<?php echo $datavehicleid->vehicle_company;?>" name="vehi_company" class="form-control form-txt-primary"/>
</div></div>
<div class="col-md-6"> 
<div class="form-group">
    <input type="hidden" name="asset_vehi_id" value="<?php echo $_GET['assetvehicle']?>"/>
</div></div>

<div class="col-md-12"> 
<div class="modal-footer">

<input type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-30" value="submit">
</div></div></div>
</form>
<?php
}?>
                                                        
                                                        <hr>
                                                        <h4 class="sub-title">TOOLS FOR FARMING (ANY MACHINERY USED FOR FARMING)</h4>             
                                                       <?php if(empty($_GET['assettools'])){?>
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Tools Type</th>
                                                                        <th>Company Name</th>
                                                                        <th>Year/Model</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php 
                                                                foreach($kisan_assets_tools as $land_kisan_tools){ 
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php print_r($land_kisan_tools->tool_type);?></td>
                                                                        <td><?php print_r($land_kisan_tools->tool_year_model);?></td>
                                                                        <td><?php print_r($land_kisan_tools->company_name);?></td>
                                                                        <td>
                                                                        <a href="<?php echo base_url('Crud/showKisanDetail/'.$kisanid_un.'?assettools='.$land_kisan_tools->id)?>"><button class="btn btn-warning btn-sm"><i class="ti-pencil-alt"></i></button>
                                                                            <button class="btn btn-danger btn-sm">                                                                                
                                                                        <a href="<?php echo base_url('Crud/asset_tool_del/'.$kisanid_un.'?assettools='.$land_kisan_tools->id)?>">
                                                                                <i class="ti-trash"></i></a>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <?php }?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <?php }else{
// $land_kisanid = $kisanid_un;
$assettools = $_GET['assettools'];
$asset_toolsid = array('id'=>$assettools);
 $asset_toolsidget = $this->Main_model->getSingleRowByWhere('kisan_assets_tools',$asset_toolsid);
?>
<div class="col-md-6"> <div class="form-group"><a href="<?php echo base_url("Crud/showKisanDetail/$kisanid_un")?>" style="background-color: cadetblue; color: white; padding: 10px; border-radius: 12px;margin-left: 151%;">Back</a></div></div>
<form method="post" action="<?=site_url('Crud/asset_tools/').$asset_toolsidget->id;?>" enctype="multipart/form-data">
<div class="row">
<?php //echo "$landshowdata->land_id"; ?>
<!-- <div class="col-md-12"> -->
<!-- <div class="form-group"><h1>update not work</h1></div></div> -->
<div class="col-md-6">
<div class="form-group">
<label class="form-label">Tool Type</label>
<!-- <input type="text" value= "<?php //echo $asset_toolsidget->tool_type;?>" class="form-control form-txt-primary"/> -->
<?php
    $assets_tools = $this->Main_model->getAll('tools_type');
    // print_r($vehicle_get);die;
    ?>
<select name="assets_tools" class="form-control form-txt-primary">
    <?php $i=0; foreach($assets_tools as $astools){
        if(!empty($astools->tools_type))
        {
    echo "<option value='$astools->id'>$astools->tools_type</option>";
    }}?>
</select>
</div></div>
<div class="col-md-6">                                           
<div class="form-group">
<label class="form-label">Tool_year/Model</label>
<input type="text" value="<?php echo $asset_toolsidget->tool_year_model;?>" name="tool_year_model" class="form-control form-txt-primary"/>
</div></div>
<div class="col-md-6"> 
<div class="form-group">
<label class="form-label">Company Name</label>
<input type="text" value= " <?php echo $asset_toolsidget->company_name;?>" name="company_name" class="form-control form-txt-primary"/>
</div></div>

<div class="col-md-6"> 
<div class="form-group"><input type="hidden" name="asset_un_id" value="<?php echo $asset_toolsidget->id;?>"></div></div>



<div class="col-md-12"> 
<div class="modal-footer">

<input type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-30" value="submit">
</div></div></div>
</form>
<?php
} }else{
?>
 <div class="col-md-6"> <div class="form-group"><a href="<?php echo base_url("Crud/showKisanDetail/$kisanid_un")?>" style="background-color: cadetblue; color: white; padding: 10px; border-radius: 12px;margin-left: 151%;">Back</a></div></div>
<form method="post" action="<?php echo base_url('Crud/add_mrassets');?>">
    <div class="row">
    <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Total Vehicles Number </label>
                <input type="text" name="vehicle_count" class="form-control form-txt-primary" placeholder="" value="<?php if(!empty($assetshowkisans)){ print_r($assetshowkisans->vehicle_count);} ?>" style="border-radius: 12px;">
                <input type="hidden" name="kisan_id" id="kisan_id" value="<?php echo $_GET['addasset']?>">
            </div>
        </div>
        <div class="row Asset_vehicals">
        <div class="col-md-4">
            <div class="form-group">
                <?php
                $data['kisan_assets'] = $this->db->query('select * from vehicle_type')->result();
                $this->load->model('Main_model');
                ?>
                <label class="form-label">Vehicle Type</label>
                <select id='s' name="vehicle_type[]" class="form-control form-txt-primary"  style="border-radius: 12px;">
                    <?php
                    $i = 1;
                    foreach ($data['kisan_assets'] as $b) {
                        if(!empty($b->Vehicle_Type)){
                        echo "<option value='$b->id'>$b->Vehicle_Type</option>";
                         $j = $i + 1;
                        $i++; }
                    }
                    ?>
                    <input type='hidden' id='j' value='<?php echo $j;?>'/>
                </select>
                <input type='text' id='newopt' name="newopt"  style="border-radius: 12px;width: 89%;margin-top: 3px;"/>
                <button id='b' onclick="submitData()" type='button' class="btn btn-primary btn-sm btn-otp" name="vehicle_type"  style="border-radius: 12px;top: 69px;padding: 5px;">click me</button>
                <!-- <input type="submit" name="submit"class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit"> -->

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="form-label">Vehicle Name </label>
                <input type="text" name="vehicle_name[]" class="form-control form-txt-primary" placeholder="" style="border-radius: 12px;">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="form-label">Year/Model </label>
                <input type="text" name="tool_year_model[]" class="form-control form-txt-primary" placeholder="" style="border-radius: 12px;">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="form-label">Vehicle Company Name </label>
                <input type="text" name="vehicle_company[]" class="form-control form-txt-primary" placeholder="" style="border-radius: 12px;">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <?php
                $data['user_for'] = $this->db->query('select * from user_for')->result();
                ?>
                <label class="form-label">Used For</label>
                <select id="sa" name="used_type[]" class="form-control form-txt-primary myselect" style="border-radius: 12px;">
                    <?php
                    $use = 1;
                    foreach ($data['user_for'] as $b) {
                        if(!empty($b->user_for)){
                        echo "<option value='$b->id'>$b->user_for</option>";
                         } $satish = $b->id;
                        $usedvalue = $use + 1;
                        $use++;
                    }
                    ?>
                     <input type='hidden' id='usedvalue' value='<?php echo $usedvalue;?>'/>
                </select>
                <!-- <script>  $(function(){      $(".myselect").change(function(){          var satish = $(".myselect option:selected" ).text();          var satish = $( "#usedoption" ).val(satish);        })    })
                </script> -->
                <input type='text' id='usedopt' name="usedopt" style="border-radius: 12px;width: 89%;margin-top: 3px;"/><button id='usedbutton' class="btn btn-primary btn-sm btn-otp" type='button' onclick="submitUsed()" style="border-radius: 12px;top: 69px;padding: 5px;">click me</button>
            </div>

        </div>
        <div class="col-md-4">
        <div class="form-group changerohit"></div></div>
        </div>
        <div class="col-md-12">
            <div class="form-group"><button type="button" class="add_more_vehicals" style="margin-left: 79%;padding: 1%;color: darkgreen;background-color: darkgray;border-radius: 12px;width: 20%;border: 0px;">Add all</button></div></div>
            <script>
$(document).ready(function() {
    $("body").on("click", ".add_more_vehicals", function() {
        var html = $(".Asset_vehicals").first().clone();
        $(html).find(".changerohit").html("<label for=''>&nbsp;</label><br/><a style='border-radius: 100px;'class='btn btn-danger waves-effect text-center m-b-20 remove_Asset'>Remove</a>");
        $(".Asset_vehicals").last().after(html);

    });

    $("body").on("click", ".remove_Asset", function() {
        $(this).parents(".Asset_vehicals").remove();
    });
});

$("#usedbutton").click(function() {
                                                            var usedopt = $("#usedopt").val();
                                                            var usedvalue = $('#usedvalue').val();
                                                            $("#sa").append("<option selected value=" + usedvalue + ">" + usedopt + "</option>");
                                                            $("#usedopt").val("");
                                                        });

                                                        function submitUsed() {
                                                            var usedopt = $('#usedopt').val();
                                                            // alert(usedopt);
                                                            $.ajax({
                                                                url: "<?php echo base_url('Crud/user_for') ?>",
                                                                data: {
                                                                    'usedopt': usedopt
                                                                },
                                                                type: 'POST',
                                                                dataType: 'json',
                                                                success: function(response) {
                                                                    console.log(response);
                                                                    // alert('Complain Inserted Sucefully');
                                                                }
                                                            });
                                                        }

                                                        $("#b").click(function() {
                                                            var opt = $("#newopt").val();
                                                            var jval = $("#j").val();
                                                            $("#s").append("<option selected value=" + jval + ">" + opt + "</option>");
                                                            $("#newopt").val("");
                                                        });

                                                        function submitData() {
                                                            var newopt = $('#newopt').val();
                                                            $.ajax({
                                                                url: "<?php echo base_url('Crud/add_new_option') ?>",
                                                                data: {
                                                                    'newopt': newopt
                                                                },
                                                                type: 'POST',
                                                                dataType: 'json',
                                                                success: function(response) {
                                                                    console.log(response);
                                                                    //alert('Complain Inserted Sucefully');
                                                                }
                                                            });
                                                        }
</script>
        <div class="row add_toolstype">
<div class="col-md-4">
            <div class="form-group">
                <?php
                $data['tools_type'] = $this->db->query('select * from tools_type')->result();
                ?>
                <label class="form-label">Tools Type</label>
                <select id="tool_id" name="tool_type[]" class="form-control form-txt-primary myselect" style="border-radius: 12px;">
                    <?php
                    $tool = 1;
                    $tools_i = 1;
                    foreach ($data['tools_type'] as $b) {
                        if(!empty($b->tools_type)){
                        echo "<option value='$b->id'>$b->tools_type</option>";
                        }$tools_i = $tool + 1;
                        $tool++; 
                    }
                    ?>
                    <input type='hidden' id='tools_i' value='<?php echo $tools_i; ?>'/>
                </select>
                <input type='text' id='tools_opt' name="tools_opt" style="border-radius: 12px;width: 89%;margin-top: 3px;"/><button id='tools_bu' class="btn btn-primary btn-sm btn-otp" type='button' onclick="tools_submit()" style="border-radius: 12px;top: 69px;padding: 5px;">click me</button>
            </div>

        </div>      
        
        <div class="col-md-4">
            <div class="form-group">
                <label class="form-label">Year/Model </label>
                <input type="text" name="year_model[]" class="form-control form-txt-primary" placeholder="" style="border-radius: 12px;">
            </div>
        </div>
        
        
        <div class="col-md-3">
            <div class="form-group">
                <label class="form-label"> Company Name </label>
                <input type="text" name="company_name[]" class="form-control form-txt-primary" placeholder="" style="border-radius: 12px;">
            </div>
        </div>
        <div class="col-md-1">
            <div class="form_group_add">                                                                        
            </div></div>
        </div>
        
            <div class="col-md-12">
            <div class="form-group"><button type="button" class="add_three_filde" style="margin-left: 79%;padding: 1%;color: darkgreen;background-color: darkgray;border-radius: 12px;width: 20%;border: 0px;">Add all</button></div></div>
        <script>
$(document).ready(function() {
    $("body").on("click", ".add_three_filde", function() {
        var html = $(".add_toolstype").first().clone();
        $(html).find(".form_group_add").html("<label for=''>&nbsp;</label><br/><a style='border-radius: 100px;'class='btn btn-danger waves-effect text-center m-b-20 remove_toolstype'>Remove</a>");
        $(".add_toolstype").last().after(html);

    });

    $("body").on("click", ".remove_toolstype", function() {
        $(this).parents(".add_toolstype").remove();
    });
});

$("#tools_bu").click(function() {
                                                            var tools_opt = $("#tools_opt").val();
                                                            var tools_i = $('#tools_i').val();
                                                            $("#tool_id").append("<option selected value=" + tools_i + ">" + tools_opt + "</option>");
                                                            $("#tools_opt").val("");
                                                        })

                                                        function tools_submit() {
                                                            var tools_opt = $('#tools_opt').val();
                                                            // alert(tools_opt);
                                                            $.ajax({
                                                                url: "<?php echo base_url('Crud/tools_for') ?>",
                                                                data: {
                                                                    'tools_opt': tools_opt
                                                                },
                                                                type: 'POST',
                                                                dataType: 'json',
                                                                success: function(response) {
                                                                    console.log(response);
                                                                    // alert('Complain Inserted Sucefully');
                                                                }
                                                            });
                                                        }
                                                    </script>
        <div class="col-md-12">
            <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit">
            </div></div>
    </div>



</form>


<?php



}?>

                                                    </div>
                                                    <div class="tab-pane" id="Land" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Land Details</h4>
                                                      <?php if(empty($_GET['addlandkisan'])){ ?>  <div style="padding: 12px;"><a href="<?php echo base_url("Crud/showKisanDetail/$kisanid_un?addlandkisan=$kisanid_un");?>" style="margin-left: 72%;font-family: ui-sans-serif;background-color: cornflowerblue;color: beige;padding: 8px;margin-top: 0px;border-radius: 12px;border: 1px solid aquamarine;">Add LAND</a> 
</div> <?php if(empty($_GET['kisanlandid'])){ ?>
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <!-- <th>District Name</th>
                                                                        <th>Tehsil Name</th> -->
                                                                        <th>Panchayat Name</th>
                                                                        <th>Village Name</th>
                                                                        <th>Khesra No.</th>
                                                                        <th>Land Details</th>
                                                                        <th>Area Alot Name</th>
                                                                        <th>Land Size</th>
                                                                        <th>Soil Type</th>
                                                                        <th>Option</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                <?php 
                                                                foreach($landshowdata as $kisanlan){ 
                                                                    ?>
                                                                    <tr>
                                                                        <!-- <td><?php //print_r($kisanlan->district_name);?></td>
                                                                        <td><?php //print_r($kisanlan->tehsil_name);?></td> -->
                                                                        <td><?php print_r($kisanlan->panchayat_name);?></td>
                                                                        <td><?php print_r($kisanlan->village_name);?></td>
                                                                        <td><?php print_r($kisanlan->khesra_no);?></td>
                                                                        
                                                                        <td><?php print_r($kisanlan->land_details);?></td>
                                                                        <td><?php print_r($kisanlan->area_alot_name);?></td>
                                                                        <td><?php print_r($kisanlan->land_size);?></td>
                                                                        <td><?php print_r($kisanlan->soil_type);?></td>
                                                                        <td>
                                                                            <button class="btn btn-warning btn-sm">
                                                                                <a href="<?php echo base_url('Crud/showKisanDetail/'.$kisanid_un.'?kisanlandid='.$kisanlan->land_id)?>">
                                                                                    <i class="ti-pencil-alt"></i>
                                                                                </a>
                                                                            </button>
                                                                            <button class="btn btn-danger btn-sm">
                                                                            <a href="<?php echo base_url('Crud/delet_land/'.$kisanlan->land_id.'?kisan_id='.$kisanid_un)?>">
                                                                            <i class="ti-trash"></i></a></button>
                                                                        </td>
                                                                    </tr>
                                                                    <?php }?>
                                                             </tbody>
                                                            </table>
                                                        </div>
                                                        <?php }else{
                                                            // $land_kisanid = $kisanid_un;
                                                            $kisan_lan_un = $_GET['kisanlandid'];
                                                            $land_unid = array('land_id'=>$kisan_lan_un);
                                                             $datalandid= $this->Main_model->getSingleRowByWhere('kisan_land',$land_unid);
                                                            
                                                            ?>
                                                          <div class="col-md-6"> <div class="form-group"><a href="<?php echo base_url("Crud/showKisanDetail/$kisanid_un")?>" style="background-color: cadetblue; color: white; padding: 10px; border-radius: 12px;margin-left: 151%;">Back</a></div></div>
                                                            <form method="post" action="<?=site_url('Crud/update_land/'.$kisan_lan_un);?>" enctype="multipart/form-data">
                                                            <div class="row">
        <?php //echo "$landshowdata->land_id"; ?>
        <!-- <div class="col-md-12">
     <div class="form-group"><h1>update not work</h1></div></div> -->
        <!-- <div class="col-md-6">
     <div class="form-group">
    <label class="form-label">District Name</label>
    <input type="text" value= "<?php //echo $datalandid->district_name;?>" class="form-control form-txt-primary"/>
    </div></div>
        <div class="col-md-6">                                           
    <div class="form-group">
    <label class="form-label">Tehsil Name</label>
    <input type="text" value= "<?php //echo $datalandid->tehsil_name;?>" class="form-control form-txt-primary"/>
    </div></div> -->
    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Village Panchayat Name</label>
    <input type="text" value="<?php echo $datalandid->panchayat_name;?>" name="panchayat_name" class="form-control form-txt-primary"/>
    <input type="hidden" value="<?php echo $datalandid->land_id;?>" name="kisan_lan_id" class="form-control form-txt-primary"/>
    </div></div>
    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Village Name</label>
    <input type="text" value= "<?php echo $datalandid->village_name;?>" name="village_name" class="form-control form-txt-primary"/>
    </div></div><div class="col-md-6"> 


    <div class="form-group">
    <label class="form-label">Please fill the khesra Number</label>
    <input type="text" value= " <?php echo $datalandid->khesra_no;?>" name="khesra_no" class="form-control form-txt-primary"/>
    </div></div>
    <!-- <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Area Name</label>
    <input type="text" value= "  <?php //echo $datalandid->area_alot_name;?>" class="form-control form-txt-primary"/>
    </div>
    </div> -->
    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Land Details</label>
    <input type="text" value= " <?php echo $datalandid->land_details;?>" name="land_details" class="form-control form-txt-primary"/>
    </div></div>

    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Area ALot Name</label>
    <input type="text" value= "<?php echo $datalandid->area_alot_name;?>" name="area_alot_name" class="form-control form-txt-primary"/>
    </div></div> <div class="col-md-6"> 


    <div class="form-group">
    <label class="form-label">Land Size</label>
    <input type="text" value= " <?php echo $datalandid->land_size;?>" name="land_size" class="form-control form-txt-primary"/>
    </div></div>

    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Soil Type</label>
    <input type="text" value= " <?php echo $datalandid->soil_type;?>" name="soil_type" class="form-control form-txt-primary"/>
    </div></div>
    <div class="col-md-6"> 
    <div class="form-group"></div></div>

    <div class="col-md-12"> 
                                                   <div class="modal-footer">

        <input type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-30" value="submit" />
                                                   </div></div></div>
      </form>
    

                                                           <?php } }else{
                                                            ?>           <div class="col-md-6"> <div class="form-group"><a href="<?php echo base_url("Crud/showKisanDetail/$kisanid_un")?>" style="background-color: cadetblue; color: white; padding: 10px; border-radius: 12px;margin-left: 151%;">Back</a></div></div>
                                                            <form method="post" action="<?php echo base_url(); ?>Crud/kisan_land_add">
                                                            <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="hidden" name="land_kisan_id" id="land_kisan_id" value="<?php echo $kisanid_un;?>">
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    <div class="row after_add_more">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Village Panchayat Name</label>
                                                                            <input type="text" name="panchayat_name[]" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Village name</label>
                                                                            <input type="text" name="village_name[]" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Please fill the khesra Number</label>
                                                                            <input type="text" name="khesra_no[]" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Land Details</label>
                                                                            <input type="text" name="land_details[]" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Area A Lot Name</label>
                                                                            <input type="text" name="area_alot_name[]" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Soil Type</label>
                                                                            <input type="text" name="soil_type[]" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Land Size</label>
                                                                                    <input type="text" class="form-control" placeholder="Enter land Size" name="land_size[]" />
                                                                                </div>
                                                                            </div>
                                                                         <div class="col-md-6">
                                                                                <div class="form-group changerohit">
                                                                                <a class="btn  btn-success bg-l-red btn-sm adm-btn mt-2 add_more" style="border-radius: 100px;"><i class="fa fa-plus-circle" aria-hidden="true">Abb</i></a>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                 <div class="col-md-12">
                                                                        <input type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit">
    
                                                                    </div>
                                                                
                                                            </div>
                                                            </form>
                                                       <?php    

                                                            }?>
                                                             <script>
                                                        $(document).ready(function() {
                                                            $("body").on("click", ".add_more", function() {
                                                                var html = $(".after_add_more").first().clone();
                                                                $(html).find(".changerohit").html("<label for=''>&nbsp;</label><br/><a style='border-radius: 100px;'class='btn btn-danger waves-effect text-center m-b-20 remove'>Remove</a>");
                                                                $(".after_add_more").last().after(html);

                                                            });

                                                            $("body").on("click", ".remove", function() {
                                                                $(this).parents(".after_add_more").remove();
                                                            });
                                                        });
                                                    </script>
                                                    </div>
                                                    <div class="tab-pane" id="visits" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Visit</h4>
                                                        <?php if(empty($_GET['kisanvisits'])){?>
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S No.</th>
                                                                        <th>khesra No</th>
                                                                        <th>Data</th>
                                                                        <th>Option</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                <?php $i=1;
                                                                foreach($visitsget as $visits){ 
                                                                    $v_where = array('land_id'=>$visits->kisan_land_id);
                                                                    $Datagwt = $this->Main_model->getSingleRowByWhere('kisan_land',$v_where);
                                                                    ?>
                                                                    <tr>
                                                                    <td><?php echo $i;?></td>
                                                                    <td><?php if(!empty($Datagwt->khesra_no)){echo $Datagwt->khesra_no;}?></td>
                                                                     <td><?php print_r($visits->status_date);?></td>
                                                                       <td>
                                                                       
                                                                            <a href="<?php echo base_url('Crud/showKisanDetail/'.$kisanid_un.'?kisanvisits='.$visits->kisan_enquiry_id)?>">
                                                                                    <i class="ti-eye" aria-hidden="true" style="padding: 12px;background-color: green;color: white;border-radius: 12px;"></i>
                                                                                </a>
                                                                            <!-- <button class="btn btn-danger btn-sm" style="border-radius: 12px;">
                                                                            <a href="<?php //echo base_url('Crud/delet_land/'.$kisanlan->land_id.'?kisan_id='.$kisanid_un)?>">
                                                                            <i class="ti-trash"></i></a></button> -->
                                                                        </td>
                                                                    </tr>
                                                                    <?php $i++;}?>
                                                             </tbody>
                                                            </table>
                                                        </div>
                                                        <?php }
                                                        else{   
                                                            $vsh_where = array('kisan_enquiry_id'=>$_GET['kisanvisits']);
                                                            $Datagets = $this->Main_model->getSingleRowByWhere('kisan_visit',$vsh_where);
                                                            ?><div class="col-md-6"> <div class="form-group"><a href="<?php echo base_url("Crud/showKisanDetail/$kisanid_un")?>" style="background-color: cadetblue; color: white; padding: 10px; border-radius: 12px;margin-left: 151%;">Back</a></div></div>
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                            <tbody>
                                                                <tr><td colspan="2" style="background-color: cadetblue;color: white;border-radius: 12px;">AGRI INPUT USED (FERTILIZER, PESTICIDE ETC)</td></tr>
                                                                <tr>
                                                                    <td>Seed Crop Type used</td>
                                                                    <?php
                                                                     $seettype = array('id'=>$Datagets->seed_type_crop);
                                                                     $seetcroptype = $this->Main_model->getSingleRowByWhere('seed_type',$seettype);
                                                                    ?>
                                                                    <td><?php if(!empty($seetcroptype->seed_type)){echo $seetcroptype->seed_type;}?></td>
                                                                </tr>
                                                                <?php
                                                                     $seetsubtype = array('id'=>$Datagets->seed_subtype);
                                                                     $seetsubcroptype = $this->Main_model->getSingleRowByWhere('seed_subtype',$seetsubtype);
                                                                    ?>
                                                                <tr>
                                                                    <td>Select Crops Sub Types</td>
                                                                    <td><?php if(!empty($seetsubcroptype->seed_subtype)){echo $seetsubcroptype->seed_subtype;}?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Product Name</td>
                                                                    <td><?php echo $Datagets->product_name;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Brand</td>
                                                                    <td><?php echo $Datagets->brand;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cost of the Product</td>
                                                                    <td><?php echo $Datagets->cost_of_product;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Dose used of the Product(Acre/Beegha/Kg)</td>
                                                                    <td><?php echo $Datagets->dose_used;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Purchased From (Shop Details)</td>
                                                                    <td><?php echo $Datagets->purchased;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2" style="background-color: cadetblue;color: white;border-radius: 12px;">ISSUES WITH THE CROP</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Diseases</td>
                                                                    <td><?php echo $Datagets->diseases;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Type</td>
                                                                    <td><?php //echo $Datagets->;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Insects</td>
                                                                    <td><?php echo $Datagets->insect;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Type</td>
                                                                    <td><?php //echo $Datagets->;?></td>
                                                                </tr><tr>
                                                                    <td>Deficiencies</td>
                                                                    <td><?php echo $Datagets->deficiences;?></td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Type</td>
                                                                    <td><?php //echo $Datagets->;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2" style="background-color: cadetblue;color: white;border-radius: 12px;">CROP IMPACT %AGE</td>
                                                                    
                                                                </tr><tr>
                                                                    <td>Seed Crop Type</td>
                                                                    <td><?php echo $Datagets->seed_type;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Impact %age</td>
                                                                    <td><?php echo $Datagets->impact;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2" style="background-color: cadetblue;color: white;border-radius: 12px;">LABOUR COST</td>
                                                                  
                                                                </tr>
                                                                <tr>
                                                                    <td>Labour on daily wages how many & their costs</td>
                                                                    <td><?php echo $Datagets->labour_wages;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Self Labour</td>
                                                                    <td><?php echo $Datagets->self_labour;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Expense Name</td>
                                                                    <td><?php echo $Datagets->expense_name;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cost</td>
                                                                    <td><?php echo $Datagets->expense_cost;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2" style="background-color: cadetblue;color: white;border-radius: 12px;">EQUIPMENT USED & THEIR COST</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pumps for irrigation<br> (their electricity cost & their fuel costs)</td>
                                                                    <td><?php echo $Datagets->pump_irrigation;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tractors & other vehicles<br> (their fuel cost)</td>
                                                                    <td><?php echo $Datagets->tractor_vehicle;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Any transportation cost for <br>acquiring the required products</td>
                                                                    <td><?php echo $Datagets->transport;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Any other cost involved in crop production</td>
                                                                    <td><?php echo $Datagets->other_cost;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Billing PDF file</td>
                                                                    <td><a href="<?php //echo base_url('')$Datagets->image;?>"></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2" style="background-color: cadetblue;color: white;border-radius: 12px;">TOTAL EARNING OF THE FARMER, SEASON WISE</td>
                                                                   
                                                                </tr>
                                                                <tr>
                                                                    <td>Total Area</td>
                                                                    <td><?php echo $Datagets->total_area;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Impact %age</td>
                                                                    <td><?php echo $Datagets->impacts;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Total earnings</td>
                                                                    <td><?php echo $Datagets->total_earn;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Price at which the crop sold</td>
                                                                    <td><?php echo $Datagets->sold_price;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Transportation cost used for selling</td>
                                                                    <td><?php echo $Datagets->transport_cost;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Details of the place and person where<br/>The crop has been sold</td>
                                                                    <td><?php echo $Datagets->place_details;?></td>
                                                                </tr>
                                                               
                                                            </tbody>
                                                            </table>
                                                        </div>
                                                       <?php }
                                                        ?>

                                                    </div>
                                                    <div class="tab-pane" id="Time_seeds" role="tabpanel" aria-expanded="false">
                                                        <?php if(empty($_GET['timeseeds_land'])){?>
                                                    <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S No.</th>
                                                                        <th>khesra No</th>
                                                                        <th>product_name</th>
                                                                        <th>Option</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                <?php $i=1;
                                                                foreach($time_renewseason as $visits){ 
                                                                    $v_where = array('land_id'=>$visits->land_id);
                                                                    $Datagwt = $this->Main_model->getSingleRowByWhere('kisan_land',$v_where);
                                                                    ?>
                                                                    <tr>
                                                                    <td><?php echo $i;?></td>
                                                                    <td><?php if(!empty($Datagwt->khesra_no)){echo $Datagwt->khesra_no;}?></td>
                                                                     <td><?php print_r($visits->product_name);?></td>
                                                                       <td>
                                                                            
                                                                                <a href="<?php echo base_url('Crud/showKisanDetail/'.$kisanid_un.'?timeseeds_land='.$visits->seed_id)?>">
                                                                                    <i class="ti-eye" aria-hidden="true" style="padding: 12px;background-color: green;color: white;border-radius: 12px;"></i>
                                                                                </a>
                                                                          
                                                                            <!-- <button class="btn btn-danger btn-sm" style="border-radius: 12px;">
                                                                            <a href="<?php //echo base_url('Crud/delet_land/'.$kisanlan->land_id.'?kisan_id='.$kisanid_un)?>">
                                                                            <i class="ti-trash"></i></a></button> -->
                                                                        </td>
                                                                    </tr>
                                                                    <?php $i++;}?>
                                                             </tbody>
                                                            </table>
                                                        </div>
                                                        <?php } else{ 
                                                            $where_lands= array('seed_id'=>$_GET['timeseeds_land']);
                                                            $data_timeseeds= $this->Main_model->getSingleRowByWhere('kisan_seeds',$where_lands);
                                                            // print_r($data_timeseeds);die;
                                                            ?>
                                                            <div class="col-md-6"> <div class="form-group"><a href="<?php echo base_url("Crud/showKisanDetail/$kisanid_un")?>" style="background-color: cadetblue; color: white; padding: 10px; border-radius: 12px;margin-left: 151%;">Back</a></div></div>
                                                     
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                               <tbody>
                                                                <tr><td colspan="2" style="text-align: center;background-color: darkcyan;border-radius: 12px;color: ivory;font-family: initial;font-size: 18px;">SEEDS DETAILS</td></tr>
                                                                <tr>
                                                                    <td>Seed Crop Type used</td>
                                                                    <td><?php 
                                                                    if(!empty($data_timeseeds->seed_crop_used)){
                                                                        $wh_lands_crop= array('id'=>$data_timeseeds->seed_crop_used);
                                                                        $timeseeds_crop= $this->Main_model->getSingleRowByWhere('seed_type',$wh_lands_crop);
                                                                        if(!empty($timeseeds_crop)){
                                                                        echo $timeseeds_crop->seed_type;}
                                                                    };?></td>
                                                                </tr> 
                                                                <tr>
                                                                    <td>Select Crops Sub Types</td>
                                                                    <td><?php  
                                                                    if(!empty($data_timeseeds->select_subtype)){
                                                                        $wh_lands_subcrop= array('id'=>$data_timeseeds->select_subtype);
                                                                        $timeseeds_subcrop= $this->Main_model->getSingleRowByWhere('seed_subtype',$wh_lands_subcrop);
                                                                       if(!empty($timeseeds_subcrop)){
                                                                        echo $timeseeds_subcrop->seed_subtype;}
                                                                    };
                                                                    ?></td>
                                                                </tr> 
                                                                <tr>
                                                                    <td>Crop Name</td>
                                                                    <td><?php echo $data_timeseeds->crop_name; ?></td>
                                                                </tr> 
                                                                <tr>
                                                                    <td>Land Used for Sowing<br>(Total Land or from Section III)</td>
                                                                    <td><?php echo $data_timeseeds->land_used_sowing; ?></td>
                                                                </tr> 
                                                                <tr>
                                                                    <td>Seed Brand / Company Name</td>
                                                                    <td><?php echo $data_timeseeds->seed_brand; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2" style="text-align: center;background-color: darkcyan;border-radius: 12px;color: ivory;font-family: initial;font-size: 18px;">A - SEED PURCHASE DETAILS</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Total Seeds used(in gms or KG)</td>
                                                                    <td><?php echo $data_timeseeds->total_seeds; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Total Cost of the seeds</td>
                                                                    <td><?php echo $data_timeseeds->total_cost_seeds; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>purchased From (Shop Details)</td>
                                                                    <td><?php echo $data_timeseeds->purchased_from ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bill Image (optional)</td>
                                                                    <td><?php echo $data_timeseeds->image1; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Purchase Date</td>
                                                                    <td><?php echo $data_timeseeds->date; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2" style="text-align: center;background-color: darkcyan;border-radius: 12px;color: ivory;font-family: initial;">B - SEED TREATMENT DETAILS<br><a style="font-size: 22px;">Seed treatment product Used<a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Product Name</td>
                                                                    <td><?php echo $data_timeseeds->product_name; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Brand</td>
                                                                    <td><?php echo $data_timeseeds->brand; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Brand Cost of the Product</td>
                                                                    <td><?php echo $data_timeseeds->cost_of_product; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Dose used of the Product<br>(Acre/Beegha/Kg)</td>
                                                                    <td><?php echo $data_timeseeds->dose_used; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Purchased From <br>(Shop Details)</td>
                                                                    <td><?php echo $data_timeseeds->purchased; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Seed Treatment Bill Image</td>
                                                                    <td><?php echo $data_timeseeds->treimage; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Seed Treatment Date</td>
                                                                    <td><?php echo $data_timeseeds->tredate; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"  style="text-align: center;background-color: darkcyan;border-radius: 12px;color: ivory;font-family: initial;">C - SHOWING LAND PREPRATION COST<br><a style="font-size: 21px;">cost</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Labour</td>
                                                                    <td><?php echo $data_timeseeds->labour; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Labour Cost</td>
                                                                    <td><?php echo $data_timeseeds->labour_cost; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Expense Name</td>
                                                                    <td><?php echo $data_timeseeds->expense_name; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cost</td>
                                                                    <td><?php echo $data_timeseeds->expense_cost; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2" style="text-align: center;background-color: darkcyan;border-radius: 12px;color: ivory;font-family: initial;font-size: 18px;">Fertication</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fertication</td>
                                                                    <td><?php echo $data_timeseeds->fertication; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cost</td>
                                                                    <td><?php echo $data_timeseeds->fertication_cost; ?></td>
                                                                </tr>
                                                             </tbody>
                                                            </table>
                                                        </div><?php
                                                        }?>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <!-- <div class="card">
                                            <div class="card-header">
                                                <h5>Kisan Information</h5>
                                            </div>
                                            <div class="card-block">        
                                                <-- Nav tabs ->
                                                <ul class="nav nav-tabs nav-tabs-warning md-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Personal" role="tab" aria-expanded="false">Personal Information</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Asset" role="tab" aria-expanded="false">Profile</a>
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
                                                </ul>
                                                <-- Tab panes ->
                                                <div class="tab-content card-block">
                                                    <div class="tab-pane" id="Personal" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Personal Information</h4>
                                                        
                                                    </div>
                                                    <div class="tab-pane" id="Asset" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Asset Details</h4>
                                                        
                                                    </div>
                                                    <div class="tab-pane" id="Land" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Land Details</h4>
                                                        
                                                    </div>
                                                    <div class="tab-pane active" id="Crop" role="tabpanel" aria-expanded="true">
                                                        <h4 class="sub-title">Crop Details</h4>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                                                         <!-- End -->    
                                    
<div class="modal fade" id="kisanassetsvehicle" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php //site_url('Crud/update_land/').$landshowdata->land_id;?>" enctype="multipart/form-data">
      <div class="row">
        <?php //echo "$landshowdata->land_id"; ?>
        <div class="col-md-6">
     <div class="form-group">
    <label class="form-label">District Name</label>
    <input type="text" value= "<?php //echo $landshowdata->district_name;?>"/>
    </div></div>
        <div class="col-md-6">                                           
    <div class="form-group">
    <label class="form-label">Tehsil Name</label>
    <input type="text" value= "<?php //echo $landshowdata->tehsil_name;?>"/>
    </div></div>
    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Village Panchayat Name</label>
    <input type="text" value= " <?php //echo $landshowdata->panchayat_name;?>"/>
    </div></div>
    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Village Name</label>
    <input type="text" value= "  <?php //echo $landshowdata->village_name;?>"/>
    </div></div><div class="col-md-6"> 


    <div class="form-group">
    <label class="form-label">Please fill the khesra Number</label>
    <input type="text" value= " <?php //echo $landshowdata->khesra_no;?>"/>
    </div></div>
    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Area Name</label>
    <input type="text" value= "  <?php //echo $landshowdata->area_alot_name;?>"/>
    </div>
    </div>
    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Land Details</label>
    <input type="text" value= " <?php //echo $landshowdata->land_details;?>"/>
    </div></div>

    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Area ALot Name</label>
    <input type="text" value= "<?php //echo $landshowdata->area_alot_name;?>"/>
    </div></div> <div class="col-md-6"> 


    <div class="form-group">
    <label class="form-label">Land Size</label>
    <input type="text" value= " <?php //echo $landshowdata->land_size;?>"/>
    </div></div>

    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Soil Type</label>
    <input type="text" value= " <?php //echo $landshowdata->soil_type;?>"/>
    </div></div>


    <div class="col-md-12"> 
                                                   <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-md btn-block waves-effect text-center m-b-30" data-dismiss="modal">Close</button>

        <input type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-30" value="submit">
                                                   </div></div></div>
      </form>  
                                                   </div>
</div>
    </div>
  </div>
  <!-- ================================================================================================================ -->
    <div class="modal fade" id="exampleModalCenterland" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php //site_url('Crud/update_land/').$landshowdata->land_id;?>" enctype="multipart/form-data">
      <div class="row">
        <?php //echo "$landshowdata->land_id"; ?>
        <div class="col-md-6">
     <div class="form-group">
    <label class="form-label">District Name</label>
    <input type="text" value= "<?php //echo $landshowdata->district_name;?>"/>
    </div></div>
        <div class="col-md-6">                                           
    <div class="form-group">
    <label class="form-label">Tehsil Name</label>
    <input type="text" value= "<?php //echo $landshowdata->tehsil_name;?>"/>
    </div></div>
    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Village Panchayat Name</label>
    <input type="text" value= " <?php //echo $landshowdata->panchayat_name;?>"/>
    </div></div>
    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Village Name</label>
    <input type="text" value= "  <?php //echo $landshowdata->village_name;?>"/>
    </div></div><div class="col-md-6"> 


    <div class="form-group">
    <label class="form-label">Please fill the khesra Number</label>
    <input type="text" value= " <?php //echo $landshowdata->khesra_no;?>"/>
    </div></div>
    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Area Name</label>
    <input type="text" value= "  <?php //echo $landshowdata->area_alot_name;?>"/>
    </div>
    </div>
    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Land Details</label>
    <input type="text" value= " <?php //echo $landshowdata->land_details;?>"/>
    </div></div>

    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Area ALot Name</label>
    <input type="text" value= "<?php //echo $landshowdata->area_alot_name;?>"/>
    </div></div> <div class="col-md-6"> 


    <div class="form-group">
    <label class="form-label">Land Size</label>
    <input type="text" value= " <?php //echo $landshowdata->land_size;?>"/>
    </div></div>

    <div class="col-md-6"> 
    <div class="form-group">
    <label class="form-label">Soil Type</label>
    <input type="text" value= " <?php //echo $landshowdata->soil_type;?>"/>
    </div></div>


    <div class="col-md-12"> 
                                                   <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-md btn-block waves-effect text-center m-b-30" data-dismiss="modal">Close</button>

        <input type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-30" value="submit">
                                                   </div></div></div>
      </form>  
                                                   </div>
</div>
    </div>
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
<script type="text/javascript" src="../../application/views/kisan/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../../application/views/kisan/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../../application/views/kisan/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="../../application/views/kisan/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../application/views/kisan/js/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../../application/views/kisan/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="../../application/views/kisan/js/modernizr/modernizr.js"></script>
<!-- notification js -->
<!-- <script type="text/javascript" src="../../application/views/kisan/js/bootstrap-growl.min.js"></script>
<script type="text/javascript" src="../../application/views/kisan/pages/notification/notification.js"></script> -->
<!-- am chart -->
<script src="../../application/views/kisan/pages/widget/amchart/amcharts.min.js"></script>
<script src="../../application/views/kisan/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="../../application/views/kisan/pages/todo/todo.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="../../application/views/kisan/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="../../application/views/kisan/js/script.js"></script>
<script type="text/javascript " src="../../application/views/kisan/js/SmoothScroll.js"></script>
<script src="../../application/views/kisan/js/pcoded.min.js"></script>
<script src="../../application/views/kisan/js/demo-12.js"></script>
<script src="../../application/views/kisan/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../application/views/kisan/js/dataTables.bootstrap4.min.js"></script>
<script src="../../application/views/kisan/js/datatables-demo.js"></script>
<script src="../../application/views/kisan/js/jquery.dataTables.min.js"></script>
<script type="../../application/views/kisan/text/javascript" src="js/uploadimage.js"></script>

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
