<?php
if(!empty($_GET['mrviewkisan'])){
$mrpersonfull =  $_GET['mrviewkisan'];
$where = array('id'=>$mrpersonfull);
$manmrinformation = $this->Main_model->getAllWheresun('marketing_man',$where);
// print_r($manmrinformation); die;
$wheres = array('relation_creater'=>"2022MRID0$mrpersonfull");
$mansmrinfor = $this->Main_model->getAllWheresun('kisan_info',$wheres);
}
else{
    redirect(base_url() . 'Crud/login');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="../application/views/kisan/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/icon/icofont/css/icofont.css">
     <!-- Notification.css -->
     <link rel="stylesheet" type="text/css" href="../application/views/kisan/pages/notification/notification.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/css/style.css">
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/css/jquery.mCustomScrollbar.css">
    <link href="../application/views/kisan/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <?php //include('header.php');?>
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
                                            <a href="TodayLogin">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Today's Login</span>
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
                                    <a href="showdata">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Total Kisan List</span>
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
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column align-items-center text-center">
                                                            <?php foreach($manmrinformation as $perinfor){?>
                                                            <img src="<?php echo base_url('application\views\kisan\images\avatar-2.jpg')?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                                            <div class="mt-3">
                                                                <h4><?php echo ucfirst($perinfor->username);?></h4>
                                                                <p class="text-secondary mb-1">क्षेत्र सर्वेक्षक</p>
                                                                <p class="text-muted font-size-sm">Bay Area,<?php echo $perinfor->city?></p>
                                                                <?php }?>
                                                                <a style="background-color:antiquewhite;padding: 12px;border-radius: 12px">
                                                                    Total Kisan <span class="badge badge-light"><?php echo count($mansmrinfor);?></span>
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                    <?php foreach($manmrinformation as $perinfor){ ?>
                                                        <div class="row mb-3">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Full Name</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="text" class="form-control" id="umrname" value="<?php echo $perinfor->username; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Email</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="text" class="form-control" id="mremail" value="<?php echo $perinfor->email; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Phone</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                
                                                                <input type="text" class="form-control" id="mrmobile" value="<?php echo $perinfor->mobile; ?>">
                                                            </div>
                                                        </div>
                                                     
                                                                
                                                                <input type="hidden" id="unidinfor" name="mrunid" value="<?php echo $_GET['mrviewkisan'];?>">
                                                            
                                                        <!-- <div class="row mb-3">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Mobile</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="text" class="form-control" value="(320) 380-4539">
                                                            </div>
                                                        </div> -->
                                                        <div class="row mb-3">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Address</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="text" class="form-control" id="mraddress" value="<?php echo $perinfor->address; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-3"></div>
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="button" class="btn btn-primary px-4" value="Save Changes" onclick="mrupdate()">
                                                            </div>
                                                        </div>
<?php }?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

<script>
// $(document).click(function(){
    function mrupdate(){
        umrname = $('#umrname').val();
        mremail = $('#mremail').val();
        mrmobile = $('#mrmobile').val();
        mraddress = $('#mraddress').val();
        unidinfor = $('#unidinfor').val();
        // alert(unidinfor);
        $.ajax({
                url: "<?php echo base_url('Crud/mrinfoupdate') ?>",
                data: { 'mr_unid':unidinfor,'umrname': umrname,'mremail':mremail,'mrmobile':mrmobile,'mraddress':mraddress },
                type: 'POST',
                dataType: 'html',
                success: function(response) {
                console.log(response);
    }})
    }
// })
    </script>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Kisan Add List</h5>
                                                <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive px-3">
                                                    <table class="table" id="dataTable">
                                                        <thead>
                                                            <tr>
                                                                <th>S.N</th>
                                                                <th>Date</th>
                                                                <th>Kisan Name</th>
                                                                <th>Kisan Mobile No.</th>
                                                                <th>Tehsil</th>
                                                                <th>View</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                           
                                                            // count($mansmrinfor);
                                                            $i=1;
                                                            foreach($mansmrinfor as $valmr){
                                                            ?>
                                                            <tr>
                                                                <th><?php echo $i;?></th>
                                                                <td><?php echo $valmr->created_at;?></td>
                                                                <td><?php echo $valmr->kisan_full_name;?></td>
                                                                <td><?php echo $valmr->mobile_no;?></td>
                                                                <td><?php echo $valmr->tehsil_name;?></td>
                                                                <td>
                                                                    <a href="<?php echo base_url("crud/showKisanDetail/$valmr->kisan_id");?>" class="btn btn-warning btn-sm">
                                                                        View Details
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <button class="btn btn-primary btn-sm">
                                                                        <a href="<?php echo base_url("crud/update1/$valmr->kisan_id");?>" style="color:white;">Edit</a>
                                                                    </button>
                                                                    <button class="btn btn-danger btn-sm">
                                                                       <a href="<?php echo base_url("crud/deletedata/$valmr->kisan_id");?>"style="color:white;"> Delete</a>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <?php $i++;}?>
                                                        </tbody>
                                                    </table>
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
<script type="text/javascript" src="../application/views/kisan/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../application/views/kisan/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../application/views/kisan/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="../application/views/kisan/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../application/views/kisan/js/bootstrap/js/bootstrap.bundle.min.js"></script>
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
</body>
</html>