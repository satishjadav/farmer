<?php
if(empty($this->session->userdata['adminperson'])){
    redirect(base_url() .'Crud/login');
}
$datas = $this->session->userdata['adminperson'];
if($datas['role'] == '1' || $datas['role'] == '2' || $datas['role'] == '3'){
    $nuser_id = $datas['username'];
}else{
    redirect(base_url() .'Crud/kisan');
}
?>

<!DOCTYPE html>
<?php
// session_start();

//if(!empty($this->session->userdata('personid'))){
//$userid = $this->session->userdata('personid');

//}

?>
<html>

<head>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <meta charset="utf-8" />
    <link rel="icon" href="<?php base_url();?>../application/views/kisan/images/favicon.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kisan</title>
    
    <link type="text/css" href="<?php echo base_url('application\views\kisan\js\cropper.css');?>">
    <style>
    .pedit{
        font-size: 40px;
        position:absolute;
        top:80px;
        cursor: pointer;
    }
    .pedit:hover{
        color:#27aae1;
    }
    #upload_image{
        display: none;
    }
</style>
    <!-- Google font-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/css/style.css">
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/css/jquery.mCustomScrollbar.css">
    
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/icon/themify-icons/themify-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.3/croppie.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.3/croppie.min.css"></link>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" /> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <!-- Required Fremwork -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url() ?>css/bootstrap/css/bootstrap.min.css" /> -->
    <!-- themify-icons line icon -->
    <!-- <link rel="stylesheet" type="text/css" href="icon/themify-icons/themify-icons.css" /> -->
    <!-- ico font -->
    <!-- <link rel="stylesheet" type="text/css" href="../application/views/kisan/icon/icofont/css/icofont.css" />-->
    <!-- Notification.css -->
    <!-- <link rel="stylesheet" type="text/css" href="../application/views/kisan/pages/notification/notification.css" /> -->
    <!-- Style.css -->
    <!-- <link rel="stylesheet" type="text/css" href="../application/views/kisan/css/style.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="../application/views/kisan/css/jquery.mCustomScrollbar.css" /> -->
    <!-- <link href="../application/views/kisan/css/dataTables.bootstrap4.min.css" rel="stylesheet" />  -->

    <?php //include("header.php"); ?>
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
                        <a href="#">
                            <img class="img-fluid" src="../application\views\kisan/images/logo.png" alt="Theme-Logo" />
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
                                <a href="" onclick="javascript:toggleFullScreen()">
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
                                            <img class="d-flex align-self-center img-radius" src="../application\views\kisan/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="../application\views\kisan/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="../application\views\kisan/images/avatar-4.jpg" alt="Generic placeholder image">
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
                                    <img src="../application\views\kisan/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                            <i class="ti-settings">Settings</i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"> Profile</i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-email">My Messages</i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-lock">Lock Screen</i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('Main/logout'); ?>"></a>
                                        <i class="ti-layout-sidebar-left">Logout</i>
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
                            <div>
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius" src="../application\views\kisan/images/avatar-4.jpg" alt="User-Profile-Image">
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
                                <span class="searchbar-toggle"> </span>
                                <div class="pcoded-search-box ">
                                    <input type="text" placeholder="Search">
                                    <span class="search-icon"><i class="ti-search" aria-hidden="flase"></i></span>
                                </div>
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="home">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Makerting</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="Today_Login_List">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <spa n class="pcoded-mtext" data-i18n="nav.basic-components.alert">Today's Login</span>
                                                    <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="center">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Add Center</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="Add_Marketing_Person">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Add Marketing Persons</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="Marketing_Person_List">
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
                                    <a href="dash">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Add Kisan Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="visits">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">visits</span>
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
                                    <a href="PendingKisan">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Pending Profile</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="CompleteKisan">
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
                                                        <a class="nav-link active" data-toggle="tab" href="#Personal" role="tab" aria-expanded="true" style="border: 0px;background-color: aliceblue;">Personal Information</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Asset" role="tab" aria-expanded="true" style="border: 0px;background-color: aliceblue;">Asset Details</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Land" role="tab" aria-expanded="true" style="border: 0px;background-color: aliceblue;">Land Details</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <!-- <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Crop" role="tab" aria-expanded="false">Crop Details</a>
                                                        <div class="slide"></div>
                                                    </li> -->
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Time_seeds" role="tab" aria-expanded="true" style="border: 0px;background-color: aliceblue;">AT THE TIME OF SOWING</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <!-- <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#visits" role="tab" aria-expanded="true">visits</a>
                                                        <div class="slide"></div>
                                                    </li> -->
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content card-block">
                                                    <div class="tab-pane active" id="Personal" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Personal Information</h4>                                                        
                                                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Crud/index">
                                                        <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Kisan Full Name</label>
                                                                        <input type="text" name="kisan_full_name" class="form-control form-txt-primary" placeholder="">
                                                                        <input type="hidden" name="relation_id" value="<?php echo $nuser_id;?>">
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
                                                                        <input type="text" name="education" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
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
                                                                            <input type="radio" name="gender" value="male" required>
                                                                            <span class="text-inverse">Male</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio-fade fade-in-primary">
                                                                        <label>
                                                                            <input type="radio" name="gender" value="female">
                                                                            <span class="text-inverse">Female</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Family Member Details</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Childs</label>
                                                                        <input type="number" name="child_count" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Father's Name </label>
                                                                        <input type="text" name="father_name" class="form-control form-txt-primary" placeholder="">
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

                                                                <div class="col-md-12">
                                                                    <!-- <div class="form-group">
                                                                        <label class="form-label">Kisan Image</label>
                                                                        <input type="file" name="image" class="form-control form-txt-primary" placeholder="">

                                                                    </div> -->
                                                                    <div class="row">
                                                                    <div class="col-md-4  form-group" style="margin-top: 2%;font-size: larger;font-family: serif;">
                                                                    <span id="errorMs"></span>
                                                                    <input type="hidden" name="image" id="myImages" class="form-control form-txt-primary" placeholder=""> 
                                                                    <lable class="form-lable"> Kisan Image</lable>
                                                                    </div>
                                                                        <div class="col-md-8">
                                                                            <label style="margin-top: 29px;">
                                                                                <input type="file" name="upload_image" id="upload_image">
                                                                                <span id="uploaded_image"><img src="<?php echo base_url('application/views/kisan/icon/ezgif.com-gif-maker.gif');?>" class="img-responsive profile-photo" style="width: 30%;border-radius: 21px;margin-left: 32px;"/></span>
                                                                            </label>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>

                                                                <!-- <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                    <label class="form-label">Other Details</label>
                                                                    <button  type="button" class="addService">Add other</button> 
                                                                <-- <input type="text" class="form-control" placeholder="Enter  Name" name="othname[]"/> ->
                                                                </div>
                                                                    </div> -->
                                                                <!-- 
 <div class="after-add-more1">
<div class="col-sm-12">                                
      <div class="form-group">
      <label class="form-label">Other Details</label>
      <a class="btn btn-success add-more1">+ Add More</a>
           <input type="text" class="form-control" placeholder="Enter  Name" name="othname[]"/>
      </div>
  </div> -->


                                                                <!-- <div class="col-md-6">
      <div class="form-group change">
          <label for="">&nbsp;</label><br/>
          <a class="btn btn-success add-more1">+ Add More</a> 
      </div>
  </div>
</div> -->



                                                                <!-- ==============================  Othname not use array =================================== -->

                                                                <!-- <div class="form-group change">
    <div class="after-add-more_question1">
<div class="col">
<input type="text" name="othname[]" id="othname[]" class="form-control" placeholder=" Concern Person" required="true">
<input type="text"  name="relation[]" id="relation[]" class="form-control" placeholder=" Relation" required="true"> 
</div>
<div class="col-md-1">
<div class="change">
<a class="btn bg-l-red btn-sm adm-btn mt-2 text-light add-more56" style="border-radius: 0px;"><i class="btn btn-success add-more" aria-hidden="true">Other Details</i></a>
</div>
</div>
</div> 
</div> -->
                                                                <!-- ================================================================================= -->


                                                                <!-- <div id="dynamic_field">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name[]">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email[]">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="mobno">Mobile Number:</label>
      <div class="col-sm-5">          
        <input type="number" class="form-control" id="mobno" placeholder="Enter Mobile Number" name="mobno[]">
      </div>
    </div>
    </div>  
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
      </div>
    </div>
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> 
  -->
                                                                <!-- =================================================================== -->

                                                                <div class="col-md-12">
                                                                    <div class="row after_add_more_fild">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                        <label class="m-0">Name</label>
                                                                                <input type="text" name="othname[]" class="form-control form-txt-primary" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="m-0">Relation</label>
                                                                                <input type="text" id="userrelation[]" name="relation[]"class="form-control form-txt-primary" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col text-center">
                                                                            <div class="changefild">
                                                                                <a class="btn bg-l-red btn-sm adm-btn mt-2 add_more_button" style="border-radius: 100px;"><i class="fa fa-plus-circle" aria-hidden="true">Sub</i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <!-- =========================  More option    ======================= -->

                                                                <!-- <div class="table-responsive">
    <table class="table table-bordered" id="crud_table">
     <tr>
      <th width="30%">Name</th>
      <th width="10%">Relation</th>
      <th width="5%" style="color:red;">Action</th>
     </tr>
     <tr>
      <td contenteditable="true" class="item_name[]"></td>
      <td contenteditable="true" class="item_relation[]"></td>
      <td></td>
     </tr>
    </table>
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
    </div>
    <div align="center">
     <button type="button" name="save" id="save" class="btn btn-info">Saved</button>
    </div>
    <br />
    <div id="inserted_item_data"></div>
   </div> -->



                                                                <input type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-30" value="submit">

                                                            


                                                        </div></form>
                                                    </div>




                                                    <!-- ==========================  more option ======================== -->

                                                    <!-- <script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true' class='item_name[]'></td>";
   html_code += "<td contenteditable='true' class='item_relation[]'></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
 
 $('#save').click(function(){
  var item_name = [];
  var item_relation = [];
  $('.item_name').each(function(){
   item_name.push($(this).text());
  });
  $('.item_relation').each(function(){
   item_relation.push($(this).text());
  });
  $.ajax({
   url:"<?php //echo base_url('Crud/index')
        ?>",
   method:"POST",
   data:{'item_name':item_name,'item_relation':item_relation},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
    // fetch_item_data();
   }
  });
 });
 
}
);
</script> -->


                                                    <!-- ==========================  more option end ======================== -->
                                                    <script>
                                                        $(document).ready(function() {
                                                            $("body").on("click", ".add_more_button", function() {
                                                                var html = $(".after_add_more_fild").first().clone();
                                                                $(html).find(".changefild").html("<a class='btn  bg-l-red btn-sm removefild'>Remove</a>");
                                                                $(".after_add_more_fild").last().after(html);
                                                                // console.log('userrelation');
                                                            });

                                                            $("body").on("click", ".removefild", function() {
                                                                $(this).parents(".after_add_more_fild").remove();
                                                            });
                                                        });
                                                    </script>

                                                    <!-- <script type="text/javascript">
    $(document).ready(function(){      
      var i=1; 
      $('#add').click(function(){  
           i++;             
           $('#dynamic_field').append('<div id="row'+i+'"><input type="text" class="form-control"  placeholder="Enter Name" name="name[]"><input type="email" class="form-control" id="email" placeholder="Enter email" name="email[]"><input type="number" class="form-control" id="mobno" placeholder="Enter Mobile Number" name="mobno[]"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div>');
     console.log(i);
        });
     
     $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id"); 
           var res = confirm('Are You Sure You Want To Delete This?');
           if(res==true){
           $('#row'+button_id+'').remove();  
           $('#'+button_id+'').remove();  
           }
      });  
  
    });  
</script> -->



                                                    <!-- <script>
// add sub. questions
  $(document).ready(function() {
    $("body").on("click",".add-more56",function(){ 
        var html = $(".after-add-more_question1").first().clone();
  $(html).find(".change").html("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>-</a>");
$(".after-add-more_question1").last().after(html);
});

    $("body").on("click",".remove",function(){ 
        $(this).parents(".after-add-more_question1").remove();
    });
});

</script> -->






                                                    <!-- <script>
$(document).ready(function() {
$("body").on("click",".add-more1",function(){ 
var html = $(".after-add-more1").first().clone();
$(html).find(".change").html("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
$(".after-add-more1").last().after(html);
});
$("body").on("click",".remove",function(){ 
$(this).parents(".after-add-more1").remove();
});
});
</script> -->





                                                    <!-- <script>
$(document).on('click', '.addService', function(){
	var html = `  
    <div class="row">
 
    <div class="col-md-6">
    
                                                                        <div class="form-group">
                                                                            <label class="form-label"> Name </label>
                                                                            <input type="text" name="othname[]" class="form-control form-txt-primary" placeholder="">
                                                                            </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                            <div class="form-group">
                                                                            <label class="form-label"> relation</label>
                                                                            <input type="text" name="relation[]" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                        </div>
                                                               
                                                                    </div>`;
                                                                  
    
  
  $(this).parent().append(html);
});
</script> -->















                                                    <!--asset details starting here......................................................................................-->

                                                    <div class="tab-pane" id="Asset" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Asset Details</h4>
                                                        <?php if(!empty($this->session->userdata('kisan_data'))){?>
                                                        <form method="post" action="<?php echo base_url('Crud/assets') ?>">
                                                            <div class="row">
                                                            <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Total Vehicles Number </label>
                                                                        <input type="text" name="vehicle_count" class="form-control form-txt-primary" placeholder="">
                                                                        <input type="hidden" name="kisan_id" id="kisan_id" value="<?php echo $this->session->userdata('kisan_data')['k_id'];?>">
                                                                    </div>
                                                                </div>
                                                                <div class="row Asset_vehicals">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <?php
                                                                        $data['kisan_assets'] = $this->db->query('select * from vehicle_type')->result();
                                                                        $this->load->model('Main_model');
                                                                        ?>
                                                                        <label class="form-label">Vehicle Type </label>
                                                                        <select id='s' name="vehicle_type[]" class="form-control form-txt-primary">
                                                                            <?php
                                                                            $i = 1;
                                                                            foreach ($data['kisan_assets'] as $b) {
                                                                                echo "<option value='$b->id'>$b->Vehicle_Type</option>";
                                                                                $j = $i + 1;
                                                                                $i++;
                                                                            }
                                                                            ?>
                                                                            <input type='hidden' id='j'value='<?php echo $j; ?>'/> 
                                                                        </select>
                                                                        <input type='text' id='newopt' name="newopt" />
                                                                        <button id='b' onclick="submitData()" type='button' class="btn btn-primary btn-sm" name="vehicle_type">click me</button>
                                                                        <!-- <input type="submit" name="submit"class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit"> -->

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Vehicle Name </label>
                                                                        <input type="text" name="vehicle_name[]" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Year/Model </label>
                                                                        <input type="text" name="tool_year_model[]" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Vehicle Company Name </label>
                                                                        <input type="text" name="vehicle_company[]" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
                                                                        
                                                                <!--... bbbbbbbbbbbbbbbbb.................................................-->

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <?php
                                                                        $data['user_for'] = $this->db->query('select * from user_for')->result();
                                                                        ?>
                                                                        <label class="form-label">Used For</label>
                                                                        <select id="sa" name="used_type[]" class="form-control form-txt-primary myselect">
                                                                            <?php
                                                                            $use = 1;
                                                                            foreach ($data['user_for'] as $b) {
                                                                                echo "<option value='$b->id'>$b->user_for</option>";
                                                                                $satish = $b->id;
                                                                                $usedvalue = $use + 1;
                                                                                $use++;
                                                                            }
                                                                            ?>
                                                                            <input type='hidden' id='usedvalue' value='<?php echo $usedvalue;?>'/>
                                                                        </select>
                                                                        <!-- <script>  $(function(){      $(".myselect").change(function(){          var satish = $(".myselect option:selected" ).text();          var satish = $( "#usedoption" ).val(satish);        })    })
                                                                        </script> -->
                                                                        <input type='text' id='usedopt' name="usedopt" /><button id='usedbutton' class="btn btn-primary btn-sm" type='button' onclick="submitUsed()">click me</button>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-4">
                                                                <div class="form-group changerohit"></div></div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group"><button type="button" class="add_more_vehicals">Add all</button></div></div>
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
                                                    </script>
                                                                <!--.....................................................-->

                                                                <!-- <input type="text" name="used_type_id" id="usedoption"> -->
                                                                <div class="row add_toolstype">

<!-- ============================== jhgjhghjj ==================================== -->
<div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <?php
                                                                        $data['tools_type'] = $this->db->query('select * from tools_type')->result();
                                                                        // $data['user_for'] = $this->db->query('select * from user_for')->result();
                                                                        ?>
                                                                        <label class="form-label">Tools Type</label>
                                                                        <select id="tool_id" name="tool_type[]" class="form-control form-txt-primary myselect">
                                                                            <?php
                                                                            $tool = 1;
                                                                            $tools_i = 1;
                                                                            foreach ($data['tools_type'] as $b) {
                                                                                echo "<option value='$b->id'>$b->tools_type</option>";
                                                                                $tools_i = $tool + 1;
                                                                                $tool++;
                                                                            }
                                                                            ?>
                                                                             <input type='hidden' id='tools_i' value='<?php echo $tools_i; ?>'/> 
                                                                        </select>
                                                                        <input type='text' id='tools_opt' name="tools_opt" /><button id='tools_bu' class="btn btn-primary btn-sm" type='button' onclick="tools_submit()">click me</button>
                                                                    </div>

                                                                </div>
<!-- ============================== kjhkjhkj ====================================== -->


                                                                <!-- <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <?php ?>
                                                                        <label class="form-label">Tools Type </label>
                                                                        <select id="" name="" class="form-control form-txt-primary">
                                                                            <?php
                                                                            
                                                                            ?>
                                                                        </select><input type="text" id="" /><button type="button" id="" class="btn btn-primary btn-sm" >click me</button>
                                                                    </div>
                                                                </div> -->
                                                                <!--.............................................................-->
                                                                
                                                                
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Year/Model </label>
                                                                        <input type="text" name="year_model[]" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label"> Company Name </label>
                                                                        <input type="text" name="company_name[]" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="form_group_add">                                                                        
                                                                    </div></div>
                                                                </div>
                                                                
                                                                    <div class="col-md-12">
                                                                    <div class="form-group"><button type="button" class="add_three_filde">Add all</button></div></div>
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
                                                    </script>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                <input type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit">
                                                                    </div></div>
                                                            </div>



                                                        </form>
                                                        <?php }else{
                                                            echo 'Plase Kisan Add Personal Information';
                                                            }?>
                                                    </div>

 <script type="text/javascript" src="<?php echo base_url('application/views/kisan/js/cropper.js');?>"></script>
 <div class="row">
<div id="myModal" role="dialog" class="modal fade">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    
      <div class="modal-header">
        <h4 class="modal-title">Upload Image</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-8">
                <div id="image_demo" style="width:400px;"></div>
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary crop_image">Upload</button>
            </div>
                
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    
    </div>
  </div>
</div>
</div>


                                                    <!--script tag starting.........................................................................-->
                                                    <script>
                                                        //vehicle type script......................

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
                                                        //..............................................................vehicle type.............................
                                                        //...........................user for ......................................................................
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
                                                        //...........................................................................user for...........................

                                                        //........................tools ....................................................
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


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.3/croppie.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('application/views/kisan/js/cropper.js')?>"></script>
<script>
$(document).ready(function(){
    $image_crop = $('#image_demo').croppie({
        enableExif:true,
        viewport:{    width:200, height:200, type:'circle' // circle  square
        },
        boundary:{ width:300, height:300 }  });
    $('#upload_image').on('change',function(){
        var reader = new FileReader();
        reader.onload = function (event){
            $image_crop.croppie('bind',{
                url:event.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
        $("#myModal").modal("show");
    });
    $('.crop_image').click(function(event){
        $image_crop.croppie('result',{
            type:'canvas',
            size:'viewport'
        }).then(function(response){
            $.ajax({
                url:'<?php echo base_url('Crud/upload_crop_image');?>',
                type:'post',
                dataType: 'html',
                data:{'image':response},
                success:function(dats){
                    $('#myModal').modal('hide');
                    const data = JSON.parse(dats);
                        // alert(data.path);
                    $('#myImages').val(data.path);
                    $('#uploaded_image').html(data.url);
                    
                   
                }
        });
        })
    });
});
 </script>
                                                    <!--script tag end..............................................................................-->

                                                    <!--asset detail ending.............................................................................................-->

                                                    <!--..............................land detail starting.............................................................-->
                                                    <div class="tab-pane" id="Land" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Land Details</h4>
                                                        <?php if(!empty($this->session->userdata('kisan_data'))){?>
                                                        <form method="post" action="<?php echo base_url(); ?>Crud/agro">
                                                        <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <input type="hidden" name="land_kisan_id" id="land_kisan_id" value="<?php echo $this->session->userdata('kisan_data')['k_id'];?>">
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
                                                                        <!-- <div class="col-md-3">
      <div class="form-group">
          <label class="control-label">Land Mark(Area)</label>
          <input maxlength="200" type="text" class="form-control" placeholder="Enter Serial Number" name="lg_sl[]" />
      </div>
  </div>
  <div class="col-md-3">
      <div class="form-group">
          <label class="control-label">Alot Area Name</label>
          <input maxlength="200" type="text" class="form-control" placeholder="Enter Modem Serial Number" name="lg_md_sl[]" />
      </div>
  </div>
  <div class="col-md-3">
      <div class="form-group">
          <label class="control-label">Khasra No.</label>
          <input maxlength="200" type="text" class="form-control" placeholder="Enter Modem Serial Number" name="lg_md_sl[]" />
      </div>
  </div>
  <div class="col-md-3">
      <div class="form-group">
          <label class="control-label">Remark</label>
          <input maxlength="200" type="text" class="form-control" placeholder="Enter Modem Serial Number" name="lg_md_sl[]" />
      </div>
  </div> -->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group changerohit">

                                                                                <a class="btn  btn-success bg-l-red btn-sm adm-btn mt-2 add_more" style="border-radius: 100px;"><i class="fa fa-plus-circle" aria-hidden="true">Abb</i></a>
                                                                            </div>
                                                                        </div>
                                                                    

                                                                </div>
                                                                <!-- <div class="col-md-12">
      <div class="form-group">
          <label for="">&nbsp;</label><br/>
          <a class="btn btn-success add_more">+ Add More</a>
      </div>
  </div> -->
                                                                <div class="col-md-12">
                                                                    <input type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit">

                                                                </div>
                                                            
                                                        </div>
                                                        </form>
                                                        <?php
                                                        }else{
                                                            echo'Plase Kisan Add Personal Information';
                                                        }?>
                                                    </div>

                                                    <!--....................................................................-->



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





                                                    <!--..........................land detail end..................................................................-->















                                                    <!--.................crop details starting here...........................................................-->
                                                    <!-- //  $data['kisan_crop']=$this->Main_model->getAll('kisan_crop','kisan_enquiry_id','asc'); ?> -->
                                                    <div class="tab-pane" id="Crop" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Crop Details</h4>
                                                        <?php
                                                        //$data['select_land'] = $this->db->query('select * from select_land')->result(); 
                                                        ?>
                                                        <form method="post" action="<?php echo base_url(); ?>Crud/crop">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Crop Name</label><br />
                                                                        <input type="text" name="name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Kisna Id</label><br />
                                                                        <input type="text" name="crop_kisan_id" id="crop_kisan_id" value="kissan id temp = 9<?php //echo $this->session->userdata('newdata')['k_id'];
                                                                                                                                                            ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">

                                                                        <label class="form-label">select land</label>
                                                                        <?php
                                                                        $land_kisan_id = 9;
                                                                        $data['kisan_land'] = $this->db->query('select * from kisan_land where land_kisan_id="' . $land_kisan_id . '"')->result(); ?>
                                                                        <select name="kisan_land_user1" class="form-control form-txt-primary">
                                                                            <?php
                                                                            $kisan_lan1 = 1;
                                                                            foreach ($data['kisan_land'] as $b) {

                                                                                echo "<option value='$b->land_id'>$b->land_size</option>";
                                                                                $kisan_lan2 = $kisan_lan1 + 1;
                                                                                $kisan_lan1++;
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!-- <input type="text" name="kisan_land_user" id="kisan_land_user" value="<?php //echo $kisan_lan2;
                                                                                                                                            ?>"> -->
                                                                <!-- <div class="col-md-4">
<div class="form-group">
<?php
// $data['crop_type'] = $this->db->query('select * from crop_type')->result(); 
?>
// <select name="crop_type_user1">
// <?php
    // $crop_type12=1;foreach($data['crop_type'] as $b){

    //     echo "<option value='$b->id'>$b->crop_type</option>";
    //     $crop_type2 = $crop_type12 + 1;
    //     $crop_type12++;
    //         } 
    ?>
</select>
</div></div-->
                                                                <!-- <input type="text" name="crop_type_id" id="crop_type_id"value="1 Null<?php //echo $this->session->userdata('croptype')['c_id'];
                                                                                                                                            ?>"> -->
                                                                <!--<div class="col-md-4">
<div class="form-group">
<?php
// $land_kisan_id =9;
// $data['crop_subtype'] = $this->db->query('select * from crop_subtype')->result(); 
?>
// <select name="`crop_subtype_user1">
// <?php
    // $kisan_lan1=1;foreach($data['crop_subtype'] as $b){

    //     echo "<option value='$b->id'>$b->crop_subtype</option>";
    //     $kisan_lan2 = $kisan_lan1 + 1;
    //     $kisan_lan1++;
    //         } 
    ?>
</select-->
                                                                <!-- <input type="text" name="crop_subtype_id" id="crop_subtype_id" value="1 Null<?php //echo $this->session->userdata('sctype')['sc_id'];
                                                                                                                                                    ?>"> -->
                                                                <!--</div>
</div> -->
                                                                <!-- <div class="col-md-4">
<div class="form-group">
<label class="form-label">Select Land </label>
<select name="select_land" id="select_land" class="form-control form-txt-primary"> -->
                                                                <?php
                                                                // $land_i=1;$select_lan = 1; foreach($data['select_land'] as $b){
                                                                // echo "<option value='$b->id'>$b->select_land</option>";
                                                                // $select_lan = $land_i + 1;
                                                                // $land_i++;
                                                                // }
                                                                ?>

                                                                <!-- <input type="hidden" id="select_lan" value="<?php //echo $select_lan;
                                                                                                                    ?>">   
                                                                </select>  -->
                                                                <!-- <input type ="button" name="crop_subtype" value="Add more">
                                                                    <form action="" method="post">
                                                                        <input type="text" id="lands">
                                                                        <button type="button" id="land_sub" onclick="land_submit()">Add</button>
                                                                        <input type="submit"  name="submit"class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit">     
                                                                        <input type="button"  id="land_sub" onclick="land_submit()" name="submit"class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit"> 
                                                                     </form> -->


                                                                <!-- <script>
                                                            $("#land_sub").click(function() {
                                                                var lands = $("#lands").val();
                                                                var select_lan = $('#select_lan').val();
                                                                $("#select_land").append("<option selected value="+select_lan+">" + lands + "</option>");
                                                                $("#lands").val("");
                                                                });
                                                                function land_submit() {
                                                                var lands = $('#lands').val();
                                                                // alert(lands);
                                                                $.ajax ({
                                                                    url : "<?php // echo base_url('Crud/select_land')
                                                                            ?>",
                                                                    data : {'lands':lands},
                                                                    type : 'POST',
                                                                    dataType : 'json',
                                                                    success: function(response){
                                                                    console.log(response);
                                                                    // alert('Complain Inserted Sucefully');
                                                                    }
                                                                
                                                                });
                                                            }
                                                                
                                                                </script> -->






                                                                <!--------------- Crop type ----------------->

                                                                <?php
                                                                $data['crop_type'] = $this->db->query('select * from crop_type')->result();  ?>
                                                                <!-- $data['kisan_crop']=$this->Main_model->getAll('kisan_crop','kisan_enquiry_id','desc'); ?> -->
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Crop Types </label>
                                                                        <select name="crop_type" id="crop_type" class="form-control form-txt-primary">
                                                                            <?php
                                                                            $crop_i = 1;
                                                                            $select_crop = 1;
                                                                            foreach ($data['crop_type'] as $b) {
                                                                                echo "<option value='$b->id'>$b->crop_type</option>";
                                                                                $select_crop = $crop_i + 1;
                                                                                $crop_i++;
                                                                            }
                                                                            ?>

                                                                            <input type="hidden" id="select_crop" value="<?php echo $select_crop; ?>">
                                                                        </select>
                                                                        <input type="text" id="crops">
                                                                        <button type="button" id="crop_sub" onclick="crop_submit()">Add</button>



                                                                    </div>
                                                                </div>

                                                                <script>
                                                                    $("#crop_sub").click(function() {
                                                                        var select_crop = $('#select_crop').val();
                                                                        var crops = $("#crops").val();

                                                                        $("#crop_type").append("<option selected value=" + select_crop + ">" + crops + "</option>");
                                                                        $("#crops").val("");
                                                                    });

                                                                    function crop_submit() {
                                                                        var crops = $('#crops').val();

                                                                        $.ajax({
                                                                            url: "<?php //echo base_url('Crud/crop_type') ?>",
                                                                            data: {
                                                                                'crops': crops
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


                                                                <!--................................................crop details type ........................-->











                                                                <!---------------------sub_Crop_Sub type------------------ - - -  - -->
                                                                <?php
                                                                $data['crop_subtype'] = $this->db->query('select * from crop_subtype')->result();   ?>
                                                                <!-- $data['kisan_crop']=$this->Main_model->getAll('kisan_crop','kisan_enquiry_id','desc'); ?> -->
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Select Sub_Crops Types</label>
                                                                        <select name="crop_subtype" id="crop_subtype" class="form-control form-txt-primary">


                                                                            <?php
                                                                            $subcrop_i = 1;
                                                                            $subcrop_tp = 1;
                                                                            foreach ($data['crop_subtype'] as $b) {
                                                                                echo "<option value='$b->id'>$b->crop_subtype</option>";
                                                                                $subcrop_tp = $subcrop_i + 1;
                                                                                $subcrop_i++;
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                        <!-- <input type="hidden" id="subcrop_tp" value="<?php //echo $subcrop_tp;
                                                                                                                            ?>">   
                                                                 <input type ="button" name="crop_subtype" value="Add more">  -->

                                                                        <input type="text" id="subcrops">
                                                                        <button type="button" id="subcrop_sub" onclick="subcrop_submit()">Add</button>



                                                                    </div>
                                                                </div>

                                                                <script>
                                                                    $("#subcrop_sub").click(function() {
                                                                        var subcrops = $("#subcrops").val();
                                                                        var subcrop_tp = $('#subcrop_tp').val();
                                                                        $("#crop_subtype").append("<option selected value=" + subcrop_tp + ">" + subcrops + "</option>");
                                                                        $("#subcrops").val("");
                                                                    });

                                                                    function subcrop_submit() {
                                                                        var subcrops = $('#subcrops').val();
                                                                        // alert(lands);
                                                                        $.ajax({
                                                                            url: "<?php echo base_url('Crud/crop_subtype') ?>",
                                                                            data: {
                                                                                'subcrops': subcrops
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
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-30">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!--......................sub_crop type  details ending.................................................................-->



                                                    <!-------------------------------------Seed Details Start------------------------------->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!------------------------------------- Seed Details Ending--------------------------------->


                                                   <!-- <div class="tab-pane active" id="Time_seeds" role="tabpanel" aria-expanded="false">  
                                                        <h4 class="sub-title">A - Seeds Details</h4>
                                                       <?php //if(!empty($userid)) { ?>
                                                        <form method="post" action="<?php //echo base_url(); ?>Crud/seeds">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Land Used for Sowing(Total Land or from Section III)</label>
                                                                    <input type="text" name="land_used_sowing" class="form-control form-txt-primary" placeholder="">
                                                                </div>
                                                            </div>
                                                            <?php
                                                            //   $this->load->model("Main_model");
                                                            //  $dataks=$this->Main_model->getAll('kisan_seeds','kisan_enquiry_id','desc');
                                                            //     $dataks =$this->db->query('select * from kisan_seeds')->result();
                                                            ?>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Seed Crop Type used </label>
                                                                    <select name="seed_crop_used" class="form-control form-txt-primary">
                                                                   <?php
                                                                    //         foreach($dataks as $b){
                                                                    //   echo "<option value='$b->seeds_id'>$b->seed_crop_used</option>";
                                                                    //       } 
                                                                    ?> 
                                                                  <option value="Add more">Add more</option>
                                                                     <input type ="text" name="seed_crop_used" value="Add more">  
                                                                    </select>
                                                                </div>        
                                                            </div>
                                                            <?php
                                                            //$data['kisan_seeds'] =$this->db->query('select * from kisan_seeds')->result();
                                                            //  $data['kisan_seeds']=$this->Main_model->getAll('kisan_seeds','kisan_enquiry_id','desc'); 
                                                            ?>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select Crops Sub Types  </label>
                                                                    <select name="select_subtype" class="form-control form-txt-primary">
                                                                         <?php
                                                                            //              foreach($data['kisan_seeds'] as $b){
                                                                            //  echo "<option value='$b->kisan_enquiry_id'>$b->select_subtype</option>";
                                                                            //      } 
                                                                            ?>
                                                               
                                                                     <input type ="text" name="select_subtype" value="Add more">
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
                                                                    <input type="text" name="purchased_from" class="form-control form-txt-primary" placeholder="">
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
                                                                    <input type="hidden" name="userid" value="<?php //echo $userid;
                                                                                                                ?>">
                                                                    <input type="text" name="purchased" class="form-control form-txt-primary" placeholder=""> 
                                                                    <input type="submit" name="submit"class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit">
                                                                </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php //}
                                                        //else{
                                                        // echo 'Plase user persnal Details';}
                                                        ?>
                                                    </div> 
                                                

<!-visit..............................................................................................................-->

<!--div class="tab-pane" id="visits" role="tabpanel" aria-expanded="false">
                                                <h4 class="sub-title text-center"> Visit </h4>
                                                <h4 class="sub-title">Agri Input Used (Fertilizer, Pesticide etc)</h4>
                                                <form method="post" action="<?php //echo base_url(); ?>Crud/savedata" >
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
                                                        </div>
                                                    </div>                                            
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h4 class="sub-title"> Issues with the crop</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Diseases</label>
                                                            <input type="text" name="diseases" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <?php
                                                    // $data['kisan_seeds'] = $this->db->query('select * from kisan_visit')->result();
                                                    //  $data['kisan_visit']=$this->Main_model->getAll('kisan_visit','kisan_enquiry_id','desc');
                                                    ?>
                                                  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"> Type  </label>
                                                            <select name="select" name="type" class="form-control form-txt-primary">
                                                            <?php
                                                            // foreach($data['kisan_visit'] as $b){
                                                            //   echo "<option value='$b->kisan_enquiry_id'>$b->type</option>";
                                                            //       } 
                                                            ?>
                                                                  <option value="Add more">Add more</option>
                                                                     <input type ="text" name="type" value="Add more">
                                                            </select>
                                                        </div>        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Insects</label>
                                                            <input type="text" name="insect" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <?php

                                                    //$data['kisan_visit']=$this->Main_model->getAll('kisan_visit','kisan_enquiry_id','desc'); 
                                                    //$data['kisan_visit'] = $this->db->query('select * from kisan_visit')->result();
                                                    ?>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"> Type  </label>
                                                            <select name="type" class="form-control form-txt-primary">
                                                            
                                                                <?php
                                                                //     foreach($data['kisan_visit'] as $b){
                                                                //   echo "<option value='$b->kisan_enquiry_id'>$b->type</option>";
                                                                //      } 
                                                                ?>
                                                                  <option value="Add more">Add more</option>
                                                                     <input type ="text" name="type" value="Add more">

                                                            </select>
                                                        </div>        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Deficiencies</label>
                                                            <input type="text" name="deficiences" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <?php
                                                    // $data['kisan_visit']=$this->Main_model->getAll('kisan_visit','kisan_enquiry_id','desc'); 
                                                    // $data['kisan_visit'] = $this->db->query('select * from kisan_visit')->result();
                                                    ?>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"> Type  </label>
                                                            <select name="type" class="form-control form-txt-primary">
                                                            <?php
                                                            // foreach($data['kisan_visit'] as $b){
                                                            //  echo "<option value='$b->kisan_enquiry_id'>$b->type</option>";
                                                            //       } 
                                                            ?>
                                                                  <option value="Add more">Add more</option>
                                                                     <input type ="text" name="type" value="Add more">
                                                            </select>
                                                        </div>        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Deficiencies</label>
                                                            <input type="text" name="deficiences" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <?php
                                                    // $data['kisan_visit']=$this->Main_model->getAll('kisan_visit','kisan_enquiry_id','desc');
                                                    //$data['kisan_visit'] = $this->db->query('select * from kisan_visit')->result();
                                                    ?>
                                                     
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"> Type  </label>
                                                            <select name="type" class="form-control form-txt-primary">
                                                            <?php
                                                            // foreach($data['kisan_visit'] as $b){
                                                            //  echo "<option value='$b->kisan_enquiry_id'>$b->type</option>";
                                                            // }
                                                            //   echo "<option value='Add more'>
                                                            //   <input type='text' class='form-control' placeholder='Your Email' id='mail' name='email'>
                                                            //    </option>";

                                                            ?>                                                       
                                                            </select>
                                                        </div></div>
                                                          <div class="col-sm-9">
 <button class="add_field_button btn btn-info">Add </button>
    <div class="input_wrap">
        <div>
             <input type="text" name="text[]" class="form-control"> -->
                                                    <!--</div><br>-->
                                                    <!--<button>submit </button>-->
                                                    <script>
                                                        var wrapper = $(".input_wrap>div");
                                                        var add_button = $(".add_field_button");
                                                        var counter = 1;
                                                        $(add_button).click(function(e) {
                                                            e.preventDefault();

                                                            var newAdd = '<div id=div-' + counter + '><input type="text" name="type" class="form-control"><a href="#" class="remove_field" onclick="removeElem(' + counter + ')">Remove</a></div>';


                                                            var el = $('.input_wrap div:last');
                                                            $(el).after(newAdd);


                                                            counter++;
                                                        });
                                                        $(document).on('change', '.test_cls', function(event) {
                                                            if ($(this).val() == 'test1') {
                                                                $('.test_cls1').show();
                                                                $('.test_cls2').hide();
                                                            }
                                                            if ($(this).val() == 'test2') {
                                                                $('.test_cls2').show();
                                                                $('.test_cls1').hide();
                                                            }


                                                        });

                                                        function removeElem(divID) {
                                                            $('#div-' + divID).remove();
                                                        }
                                                    </script>
                                                    <!-- </div>
</div>-->
                                                    <!-- </div>        
                                                    </div>
                                                </div> -->

                                                    <?php
                                                    //$data['kisan_visit']=$this->Main_model->getAll('kisan_visit','kisan_enquiry_id','desc');
                                                    //$data['kisan_visit'] = $this->db->query('select * from kisan_visit')->result();
                                                    ?>

                                                 <!--h4 class="sub-title">Crop impact %age</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Seed Crop Type </label>
                                                            <select name="seed_type" class="form-control form-txt-primary">

                                                            <?php
                                                            //foreach($data['kisan_visit'] as $b){
                                                            //echo "<option value='$b->kisan_enquiry_id'>$b->seed_type</option>";
                                                            //  } 
                                                            ?>
                                                                  <option value="Add more">Add more</option>
                                                                     <input type ="text" name="seed_type" value="Add more">
                                                                  
                                                            </select>
                                                        </div>        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Impact %age</label>
                                                            <input type="text" name="impact" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="sub-title">Labour Cost</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Labour on daily wages how many & their costs</label>
                                                            <input type="text" name="labour_wages" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Self Labour</label>
                                                            <input type="text" name="self_labour" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="sub-title">Equipment Used & Their Cost</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Pumps for irrigation (their electricity cost & their fuel costs)</label>
                                                            <input type="text" name="pump_irrigation" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Tractors & other vehicles (their fuel cost)   </label>
                                                            <input type="text" name="tractor_vehicle" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Any transportation cost for acquiring the required products</label>
                                                            <input type="text" name="transport" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Any other cost involved in crop production</label>
                                                            <input type="text" name="other_cost" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <!--Upload image input-->
                                                    <!--div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                                            <input id="upload" type="file" name="image" onchange="readURL(this);" class="form-control border-0">
                                                            <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                                            <div class="input-group-append">
                                                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                                            </div>
                                                        </div>

                                                        <!-Uploaded image area-->
                                                    <!--p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                                                        <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                                                    </div>
                                                  </div>
                                                <h4 class="sub-title">  Total Earning of the Farmer, Season WISE</h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Total Area</label>
                                                            <input type="text" name="total_area" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Impact %age</label>
                                                            <input type="text" name="impacts" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Total earnings</label>
                                                            <input type="number" name="total_earn" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Price at which the crop sold</label>
                                                            <input type="text" name="sold_price" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Transportation cost used for selling </label>
                                                            <input type="number" name="transport_cost" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Details of the place and person where the crop has been sold</label>
                                                        
                                                            <input type="text" name="place_details" class="form-control form-txt-primary" placeholder=""></div></div>
                                                            <input type="submit" name="submit"class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div-->
                                        <!--End -->
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

   


    <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function() {
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            } else {
                nav.removeClass('active');
            }
        });
    </script>
</body>

</html>

<!-- <script>
                                                                    $(document).ready(function() {
                                                                        $("body").on("click", ".Select_crops_sub_types_but", function() {
                                                                            var html = $(".Select_crops_sub_types_div").first().clone();
                                                                            $(html).find(".changemore").html("<label for=''>&nbsp;</label><br/><a style='border-radius: 100px;'class='btn btn-danger waves-effect text-center m-b-20 remove'>Remove</a>");
                                                                            $(".Select_crops_sub_types_div").last().after(html);

                                                                        });

                                                                        $("body").on("click", ".remove", function() {
                                                                            $(this).parents(".Select_crops_sub_types_div").remove();
                                                                        });
                                                                    });
                                                                </script> -->



                                                                <script>
                                                                    $(document).on('click', '.addService', function() {
                                                                        var html = `  
                                                                    <div class="row Select_crops_sub_types_divs">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <input type="text" name="selectcrops_sun[]" class="form-control form-txt-primary" placeholder="Select Crops Sub" style="margin-top: 12px;">
                                                                                </div>
                                                                            </div> 
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <a style='border-radius: 100px;margin-top: 12px;'class='btn btn-danger remove_sun'>Remove</a>
                                                                                </div>
                                                                            </div>
                                                                        </div> `;

                                                             $(this).parent().append(html);
                                                                    });
                                                                    $("body").on("click", ".remove_sun", function() {
                                                                        $(this).parents(".Select_crops_sub_types_divs").remove();
                                                                    });
                                                                </script>

                                                            <script  type="text/javascript">
                                                                //  function Geeks() {
                                                                    
                                                                // $('#selectcrops_sun_button').click(function(){
                                                                //     var items = [];
                                                                //     var sun_sub_type = $('#sun_is_crop_type').val();
                                                                //     var items = $('#selectcrops_sun').val();
                                                                //     // var select_subcrop = $(document.getElementsById('.selectcrops_sun')).val();
                                                                //     // var $select_subcrop = $('selectcrops_sun[]').text();
                                                                //     // items.push(select_subcrop); 
                                                                //     alert(items);
                                                                // })
                                                                // $("#subseed_sub").click(function() {
                                                                //     var subseed = $("#subseed").val();
                                                                //     var subseed_tp = $('#subseed_tp').val();
                                                                //     $("#seed_subtype").append("<option selected value=" + subseed + ">" + subseed_tp + "</option>");
                                                                //     $("#subseed").val("");
                                                                // });

                                                                // function subseed_submit() {
                                                                //     var subseed = $('#subseed').val();
                                                                //     // alert(lands);
                                                                //     $.ajax({
                                                                //         url: "<?php //echo base_url('Crud/subseeds_for') ?>",
                                                                //         data: {
                                                                //             'subseed': subseed
                                                                //         },
                                                                //         type: 'POST',
                                                                //         dataType: 'json',
                                                                //         success: function(response) {
                                                                //             console.log(response);
                                                                //             //alert('Complain Inserted Sucefully');
                                                                //         }

                                                                //     });
                                                                // }
                                                                $(function(){
                                                                    $('#seed_type').change(function(){
                                                                        var sun_is_crop_typ =$('#seed_type option:selected').val();
                                                                        $('#sun_is_crop_type').val(sun_is_crop_typ)
                                                                    })
                                                                })
                                                            </script>

                                                         


<script>
                                                                        function seedsSun() {
                                                                            var sun_of_seed = $('#seed_type').val();
                                                                            // alert(sun_of_seed);
                                                                            $.ajax({
                                                                                url: '<?php echo base_url() ?>Crud/sun_of_seed',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    'sun_of_seed': sun_of_seed
                                                                                },
                                                                                dataType: 'html',
                                                                                success: function(sun_seeds) {
                                                                                    // alert(sun_seeds);
                                                                                    $('#seed_subtype').html(sun_seeds)
                                                                                }
                                                                            });
                                                                        }
                                                                        $("#butn").click(function() {
                                                                            var seedopt = $("#seedopt").val();
                                                                            var select_seed = $('#select_seed').val();
                                                                            $("#seed_type").append("<option selected value=" + select_seed + ">" + seedopt + "</option>");
                                                                            $("#seedopt").val("");
                                                                        });

                                                                        function submitDatas() {
                                                                            var seedopt = $('#seedopt').val();
                                                                            // alert(seedopt);
                                                                            $.ajax({
                                                                                url: "<?php echo base_url('Crud/seed_type') ?>",
                                                                                data: { 'seedopt': seedopt },
                                                                                type: 'POST',
                                                                                dataType: 'json',
                                                                                success: function(response) {

                                                                                    console.log(response);
                                                                                    //alert('Complain Inserted Sucefully');
                                                                                }
                                                                            });
                                                                        }
                                                                    </script>




    <!-- Required Jquery -->
<!-- <script type="text/javascript" src="../application/views/kisan/js/jquery/jquery.min.js"></script> -->
<script type="text/javascript" src="../application/views/kisan/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../application/views/kisan/js/popper.js/popper.min.js"></script>
<!-- <script type="text/javascript" src="../application/views/kisan/js/bootstrap/js/bootstrap.min.js"></script> -->

<!-- <script type="text/javascript" src="<?php //echo base_url('application/views/kisan/js/bootstrap/bootstrap.bundle.min.js')?>;"></script> -->
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../application/views/kisan/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="../application/views/kisan/js/modernizr/modernizr.js"></script>
<!-- notification js -->
<script type="text/javascript" src="../application/views/kisan/js/bootstrap-growl.min.js"></script>
<script type="text/javascript" src="../application/views/kisan/pages/notification/notification.js"></script>
<!-- am chart -->
<script src="../application/views/kisan/pages/widget/amchart/amcharts.min.js"></script>
<script src="../application/views/kisan/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="../application/views/kisan/pages/todo/todo.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="../application/views/kisan/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="../application/views/kisan/js/script.js"></script>
<script type="text/javascript " src="../application/views/kisan/js/SmoothScroll.js"></script>
<script src="../application/views/kisan/js/pcoded.min.js"></script>
<script src="../application/views/kisan/js/demo-12.js"></script>
<script src="../application/views/kisan/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../application/views/kisan/js/dataTables.bootstrap4.min.js"></script>
<script src="../application/views/kisan/js/datatables-demo.js"></script>
<script src="../application/views/kisan/js/jquery.dataTables.min.js"></script>