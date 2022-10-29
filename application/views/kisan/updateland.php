<!DOCTYPE html>
<?php 
// session_start();

if(!empty($this->session->userdata('personid'))){
    $userid = $this->session->userdata('personid');
    // $userid = 'Kishan parsnal details';
}
?>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="images/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Google font-->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
                                    <span class="search-icon"><i class="ti-search" aria-hidden="flase"></i></span>
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
                                    <a href="index">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Add Kisan Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="showdata">
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
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Personal" role="tab" aria-expanded="false">Personal Information</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Asset" role="tab" aria-expanded="true">Asset Details</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Land" role="tab" aria-expanded="true">Land Details</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Crop" role="tab" aria-expanded="false">Crop Details</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#Time_seeds" role="tab" aria-expanded="true">AT THE TIME OF SOWING</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#visits" role="tab" aria-expanded="true">visits</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content card-block">
                                                    <!-- <div class="tab-pane" id="Personal" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Personal Information</h4>
                                                        <div class="row">

<form method="post" action="<//site_url('Crud/update/').$editkisan1->kisan_id;?>" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <label class="form-label">Kisan Full Name</label>
                                                                    <input type="text" value="<?php //echo $editkisan1->kisan_full_name;?>"  name="kisan_full_name" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Mobile Number</label>
                                                                    <input type="tel" value="<?php// echo $editkisan1->mobile_no;?>" name="mobile_no" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Age</label>
                                                                    <input type="number" value="<?php //echo $editkisan1->age;?>" name="age" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Education</label>
                                                                    <input type="text"  value="<?php // echo $editkisan1->education;?>" name="education" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <div class="form-group">
                                                                    <label class="form-label">Full Address</label>
                                                                    <textarea rows="5" cols="5" value="<?php //echo $editkisan1->full_address;?>" name="full_address"  class="form-control form-txt-primary" placeholder="Default textarea"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label  value="<?php //echo $editkisan1->gender;?>" class="form-label">Select Gender</label>
                                                                    
                                                                </div>
                                                                <div class="radio-fade fade-in-primary">
                                                                    <label>
                                                                        <input type="radio" name="gender" value="male" <?php echo ($editkisan1->gender=='male') ? 'checked' : '';?>>
                                                                        <span class="text-inverse">Male</span>
                                                                    </label>
                                                                </div>
                                                                <div class="radio-fade fade-in-primary">
                                                                    <label>
                                                                        <input type="radio" name="gender"value="female" <?php echo ($editkisan1->gender=='female') ? 'checked' : '';?>>
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
                                                                            <input type="number" value="<?php //echo $editkisan1->child_count;?>" name="child_count" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Father's Name </label>
                                                                            <input type="text" value="<?php //echo $editkisan1->father_name;?>" name="father_name"class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Mother's Name </label>
                                                                            <input type="text" value="<?php //echo $editkisan1->mother_name;?>" name="mother_name" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Husband / Wife Name </label>
                                                                            <input type="text" value="<?php //echo $editkisan1->husband_name;?>"  name="husband_name" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label">If any other profession in the family</label>
                                                                            <input type="text" value="<?php //echo $editkisan1->other_profession;?>" name="other_profession" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">What is the profession</label>
                                                                            <input type="text" value="<?php //echo $editkisan1->profession_name;?>" name="profession_name" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">By Whom</label>
                                                                            <input type="text" value="<?php //echo $editkisan1->by_whom;?>" name="by_whom" class="form-control form-txt-primary" placeholder="">
																			  <input type="file" name="image" class="form-control form-txt-primary" placeholder="">
                                                                            <input type="submit" name="submit"class="btn btn-primary btn-md btn-block waves-effect text-center m-b-30" value="submit">
                                                                        
                                                                          </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->

                                                    <div class="tab-pane" id="Land" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Land Details</h4>
                                                        <div class="table-responsive">
                                                        <form method="post" action="<?=site_url('Crud/update_land/').$editlandform->land_id;?>" enctype="multipart/form-data">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Details</th>
                                                                    
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>                        
                                                                        <th>District Name</th>
                                                                        <td>
                                                                     <input type="text" value= "  <?php echo $editlandform->district_name;?>"/>

                                                                       
                                                                        </td>
                                             
                                                                    </tr>

                                                                    <tr>                        
                                                                        <th>Tehsil Name</th>
                                                                        <td>
                                                                        <input type="text" value= "<?php echo $editlandform->tehsil_name;?>"/>
                                                                        </td>
                                                                     
                                                                    </tr>

                                                                    <tr>                        
                                                                        <th>Village Panchayat Name</th>
                                                                        <td>
                                                                        <input type="text" value= "<?php echo $editlandform->panchayat_name;?>"/>
                                                                        </td>
                                                                       
                                                                    </tr>

                                                                    <tr>                        
                                                                        <th>Village Name</th>
                                                                        <td> 
                                                                        <input type="text" value= " <?php echo $editlandform->village_name;?>"/>
                                                                        </td>
                                                                        
                                                                    </tr>

                                                                    <tr>                        
                                                                        <th>Please fill the khesra Number</th>
                                                                        <td> 
                                                                        <input type="text" value= " <?php echo $editlandform->khesra_no;?>"/>
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    
                                                                    <tr>                        
                                                                        <th>Area Name</th>
                                                                        <td>
                                                                        <input type="text" value= "  <?php echo $editlandform->area_alot_name;?>"/>
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>                        
                                                                        <th>Land Details</th>
                                                                        <td>
                                                                        <input type="text" value= "  <?php echo $editlandform->land_details;?>"/>
                                                                    </td>
                                                                     
                                                                    </tr>
                                                                    <tr>                        
                                                                        <th>Area ALot Name</th>
                                                                        <td> 
                                                                        <input type="text" value= " <?php echo $editlandform->area_alot_name;?>"/>
                                                                    </td>
                                                                     
                                                                    </tr>
                                                                    <tr>                        
                                                                        <th>Land Size</th>
                                                                        <td> <input type="text" value= " <?php echo $editlandform->land_size;?>"/>
                                                                    </td>
                                                                      
                                                                    </tr>
                                                                    <tr>                        
                                                                        <th>Soil Type</th>
                                                                        <td>
                                                                       
                                                                        <input type="text" value= "  <?php echo $editlandform->soil_type;?>"/>
                                                                      
                                                                    </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>

                                                                            <input type="submit" name="submit"class="btn btn-primary btn-md btn-block waves-effect text-center m-b-30" value="submit">

</td>
</tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>










