<!DOCTYPE html>
<?php $adminperson = $this->session->userdata['adminperson'];
if(empty($adminperson)){
    redirect(base_url() .'Crud/login');
}
if($adminperson['role'] == 1 || $adminperson['role'] == '2'){
$user = $adminperson['username'];
$role = $adminperson['role'];
$id = $adminperson['id'];
}else{
    redirect(base_url() .'Crud/home');
}
?>
 <?php if(!empty($_GET['centerunid'])){
                        $mrunids = array('id'=>$_GET['centerunid']);
                       $user_mrdata = $this->Main_model->getSingleRowByWhere('center',$mrunids);
                       $cunid = $user_mrdata->id;
                    }?>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="../application/views/kisan/images/favicon.ico">
    <link type="text/css" href="<?php echo base_url('application\views\kisan\js\cropper.css');?>">
    <!-- <link type="text/css" href="<?php //echo base_url('application\views\kisan\css\main.css');?>"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    
    <!-- <link rel="stylesheet" type="text/css" href="../application/views/kisan/css/bootstrap/css/bootstrap.min.css"> -->
   
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/icon/themify-icons/themify-icons.css">
   
    <!-- <link rel="stylesheet" type="text/css" href="../application/views/kisan/icon/icofont/css/icofont.css"> -->
     
     <!-- <link rel="stylesheet" type="text/css" href="../application/views/kisan/pages/notification/notification.css"> -->
    
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/css/style.css">
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/css/jquery.mCustomScrollbar.css">
    <!-- <link rel="stylesheet" href="../application/views/kisan/css/dataTables.bootstrap4.min.css" /> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<!-- ================================== -->
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
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.3/croppie.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.3/croppie.min.css"></link>

<!-- ============================================================ -->

    <style>
		#errorMs { color: #a00; }
		.gallery img{  width: 300px; }
	</style>
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
                            <img class="img-fluid" src="../application/views/kisan/images/logo.png" alt="Theme-Logo" />
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
                                            <img class="d-flex align-self-center img-radius" src="../application/views/kisan/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="../application/views/kisan/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="../application/views/kisan/images/avatar-4.jpg" alt="Generic placeholder image">
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
                                    <img src="../application/views/kisan/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
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
                                        <a href="../auth-normal-sign-in.html">
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
                                    <img class="img-40 img-radius" src="../application/views/kisan/images/avatar-4.jpg" alt="User-Profile-Image">
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
                                            <a href="../auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
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
                                    <a href="home">
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
                                            <a href="Today_Login_List">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Today's Login</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="Center">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add Center</span>
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
                                        
                                        <li class=" ">
                                            <a href="add_Marketing_Person">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Add Marketing Persons</span>
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
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Visits</span>
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
                                                <h5>Center/Branch Information</h5>
                                            </div>
                                            <div class="card-block">
                                                <h4 class="sub-title">Center </h4>
                                                <label id="successMsg" style="color: green; width: 100%;border-radius: 12px;padding: 12px;"></label>
                                                <form action="<?php //echo base_url('Crud/center_in');?>"  method="POST" enctype="multipart/form-data">
                                                    
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Center Name</label>
                                                            <input type="text" name="centername" id="centername" class="form-control form-txt-primary" placeholder="">
                                                            <input type="hidden" name="relation" id="relation" value="<?php echo $user;?>">
                                                            <input type="hidden" name="role" id="role" value="<?php echo $role;?>">
                                                            <input type="hidden" name="id_u" id="id_u" value="<?php if(!empty($cunid)){ echo $cunid;}?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Center Manager</label>
                                                            <input type="text" name="centermanager" id="centermanager" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Center Email</label>
                                                            <input type="text" name="cemail" id="cemail" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">User name</label>
                                                            <input type="tel" name="username" class="form-control form-txt-primary" value="" id="username" placeholder="">
                                                            <!-- <button type="button" class="btn btn-sm btn-primary btn-otp" id="sendoptmr">Send OTP</button> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Password</label>
                                                            <input type="text" name="cpassword" id="cpassword" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Mobile Number</label>
                                                            <input type="tel" name="cphone" class="form-control form-txt-primary" value="<?php if(!empty($user_mrdata)){ echo $user_mrdata->phone; }?>" id="mrpersanal_name" placeholder="">
                                                            <button type="button" class="btn btn-sm btn-primary btn-otp" id="sendoptmr">Send OTP</button>
                                                       <span id="message" style="color:red;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Enter OTP</label>
                                                            <label id="otpMsg" style="color:red;"></label>
                                                            <input type="number" name="cotp" id="cotp" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">places Center Name </label>
                                                            <input type="text" name="cplace" id="cplace" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                   <div class="col-md-4">
                                                        <div class="row form-group">
                                                      
                                                             <input type="hidden" name="myImage" id="myImages" class="form-control form-txt-primary" placeholder=""> 
                                                            <div class="col-md-6">
                                                            <label>
                                                            <input type="file" name="upload_image" id="upload_image">
                                                            <span id="uploaded_image"><img src="<?php echo base_url('application/views/kisan/icon/upload_icon.jpg');?>" class="img-responsive profile-photo" style="width:70%;margin-left: 32px;"/></span>
                                                            </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <span id="errorMs"></span>
                                                            <label class="form-label" style="margin-top:20%">Select Center Image </label>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                  
                                                    <!-- mrcenter -->
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Crop Image</button> -->

                                                            <label class="form-label">Full Address</label>
                                                            <textarea rows="3" name="caddress" id="caddress" cols="5" class="form-control form-txt-primary" placeholder="Plase Full Address"></textarea>
                                                        </div>
                                                    </div>  
                                                   
                                                    <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <!-- <ul class="notifications">
                                                            <li> -->
                                                                <button class="btn btn-success waves-effect" type="button" data-type="success" data-from="top" data-align="right" id='calldatasubmit'>success</button>
                                                            <!-- </li>
                                                        </ul> -->
                                                    </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>



                                        </div>
<script type="text/javascript" src="<?php echo base_url('application/views/kisan/js/cropper.js')?>"></script>
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

<script name="text/javascript">
$(document).ready(function(){
    $('#sendoptmr').click(function(){
       var mrotp = $('#mrpersanal_name').val();
       if(isNaN(mrotp)){
        $('#message').text('Enter only Number value');  // $("#message").show("slow").delay(5000).hide("slow");
        $("#message").fadeIn('slow').animate({opacity: 1.0}, 1500).effect("pulsate", { times: 2 }, 800).fadeOut('slow'); 
        return false;
       }
        else if(mrotp.length<10){
        $('#message').text('Mobile Number Must be 10 digit');
        $("#message").fadeIn('slow').animate({opacity: 1.0}, 1500).effect("pulsate", { times: 2 }, 800).fadeOut('slow'); 
        return false;
       }
       else if(mrotp.length>10){
        $('#message').text('Mobile Number Must be 10 digit');
        $("#message").fadeIn('slow').animate({opacity: 1.0}, 1500).effect("pulsate", { times: 2 }, 800).fadeOut('slow'); 
        return false;
       }
       else if(mrotp.length == 10){
        $('#message').text('send OTP');
        $("#message").fadeIn('slow').animate({opacity: 1.0}, 1500).effect("pulsate", { times: 2 }, 800).fadeOut('slow'); 
        // alert(mrotp);
    $.ajax({
            url: "<?php echo base_url('Crud/create_otp_mr') ?>",
            data: { 'cotp': mrotp },
            type: 'POST',
            dataType: 'html',
            success: function(satish) {               
                location.href=`Center?centerunid=${satish.trim()}`;
            $("#mrunid").val(satish);
            }
        });}
    })
})



$(document).ready(function(){
    // $('#calldatasubmit').click(function(e){
      	// e.preventDefault();
          $('#calldatasubmit').click(function(){
        //   var form_data = new FormData();
      	// var img = $("#myImage")[0].files;
        var img = $("#myImages").val();
        // alert(img);
        var centername = $('#centername').val();
        var relation = $('#relation').val();
        var role = $('#role').val();
        var id_u = $('#id_u').val();
        var centermanager = $('#centermanager').val();
        var cemail = $('#cemail').val();
        var username = $('#username').val();
        var cpassword = $('#cpassword').val();
        var cphone = $('#mrpersanal_name').val();
        var cotp = $('#cotp').val();
        var cplace = $('#cplace').val();
        // var images = $('#image').val();
        // var image = images.split('fakepath\\');
        var caddress = $('#caddress').val();
    //    alert(image[1]);
 
    //     if(img.length > 0){
    //    form_data.append('my_image', img[0]);  
    //    form_data.append('centername', centername);  
    //    form_data.append('id_u', id_u); 
    //    form_data.append('relation',relation); 
    //    form_data.append('role', role); 
    //    form_data.append('centermanager', centermanager); 
    //    form_data.append('cemail', cemail); 
    //    form_data.append('username', username); 
    //    form_data.append('cpassword', cpassword); 
    //    form_data.append('cphone', cphone); 
    //    form_data.append('cotp', cotp); 
    //    form_data.append('cplace', cplace);
    //    form_data.append('caddress', caddress); 
        // alert(form_data);     
        
    $.ajax({
            url: "<?php echo base_url('Crud/center_in'); ?>",
            data: {'my_image':img,'centername':centername,'id_u': id_u,'relation':relation,'role': role,'centermanager':centermanager,'cemail':cemail,'username':username,'cpassword':cpassword,'cphone':cphone,'cotp': cotp,'cplace': cplace,'caddress':caddress } ,                 
            type: 'POST',
            // contentType: false,
            // processData: false,
            dataType: 'html',
            success: function(insert)  { 
                // const data = JSON.parse(insert);
// alert(insert);

                    // if (data.error != 1) {
                    //    let path = "uploads/"+data.src;
                    //    $("#preImg").attr("src", path);
                    //    $("#preImg").fadeOut(1).fadeIn(1000);
                    //    $("#myImage").val('');

                    //    if(data.src.trim() === "Data is Insert"){
                        if(insert.trim() === "Data is Insert"){
$('#otpMsg').html(insert);
$("#otpMsg").fadeIn('slow').animate({opacity: 1.0}, 1500).effect("pulsate", { times: 2 }, 800).fadeOut('slow');       
location.href=`center`;
}
if(insert.trim() === "Otp Not Metch"){
$('#otpMsg').html(insert);
$("#otpMsg").fadeIn('slow').animate({opacity: 1.0}, 1500).effect("pulsate", { times: 2 }, 800).fadeOut('slow');       
}

                	// }else {
                	// 	$("#errorMs").text(data.em);
                	// }

    //         }
    //     })
    //  } else {
    //        $("#errorMs").text("Please select an image.");
        }

    })
})
})
</script>

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


</body>
</html>