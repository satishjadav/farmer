<?php $adminperson = $this->session->userdata['adminperson'];
// print_r($adminperson);
if(empty($this->session->userdata['adminperson'])){
    redirect(base_url() .'Crud/login');
}

if($adminperson['role'] == '1' || $adminperson['role'] == '2'){
        if($adminperson['role'] == '1'){
            $deta = array('mr_unid' => $adminperson['username']);
            $fullinfor = $this->Main_model->getAllWheresun('marketing_man',$deta); 
            // print_r($fullinfor);die;
            foreach($fullinfor as $fulldata){
            $value = $fulldata->mr_unid;
            $role = $fulldata->role;
            }
        }
        else{
            $deta = array('un_center_id' => $adminperson['username']);
            $fullinfor = $this->Main_model->getAllWheresun('center',$deta); 
            foreach($fullinfor as $fulldata){
            $value = $fulldata->un_center_id;
            $role = $fulldata->role;
            }
        }
}
else{
    redirect(base_url() .'Crud/showdata');
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="../application\views\kisan/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../application\views\kisan/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../application\views\kisan/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../application\views\kisan/icon/icofont/css/icofont.css">
     <!-- Notification.css -->
     <link rel="stylesheet" type="text/css" href="pages/notification/notification.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../application\views\kisan/css/style.css">
    <link rel="stylesheet" type="text/css" href="../application\views\kisan/css/jquery.mCustomScrollbar.css">
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" />
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
                                            <a href="Add_Marketing_Person">
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
                    <?php if(!empty($_GET['mrunid'])){
                        $mrunids = array('id'=>$_GET['mrunid']);
                       $user_mrdata = $this->Main_model->getSingleRowByWhere('marketing_man',$mrunids);
                    }?>
                    <!-- End -->          
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <!-- Body Content-->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Marketing Person Information</h5>
                                            </div>
                                            <div class="card-block">
                                                <h4 class="sub-title">Personal Information</h4>
                                                <label id="successMsg" style="color: green; width: 100%;border-radius: 12px;padding: 12px;"></label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Full Name</label>
                                                            <input type="text" name="mrname" id="mrname" class="form-control form-txt-primary" placeholder="">
                                                            <input type="hidden" name="role" id="role" value="3">
                                                            <input type="hidden" name="relation" id="relation" value="<?php echo $adminperson['username'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Email ID</label>
                                                            <input type="email" name="mremail" id="mremail" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Mobile Number</label>
                                                            <input type="tel" name="mrphone" class="form-control form-txt-primary" value="<?php if(!empty($user_mrdata)){ echo $user_mrdata->password; }?>" id="mrpersanal_name" placeholder="">
                                                            <button type="button" class="btn btn-sm btn-primary btn-otp" id="sendoptmr">Send OTP</button>
                                                       <span id="message" style="color:red;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Enter OTP</label>
                                                            <label id="otpMsg" style="color:red;"></label>
                                                            <input type="number" name="mrphoneotp" id="mrphoneotp" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Education</label>
                                                            <input type="text" name="mreducation"id="mreducation" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Aadhar Card Number</label>
                                                            <input type="text" name="mraadhar" id="mraadhar" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">MR Center</label>
                                                            <?php $unikdata=array(); foreach($mrcenter as $mrpersons){ 
                                                                    $unikdata[] = $mrpersons->centername;}
                                                                    // echo'<pre>';print_r(preg_grep('/^$/',array_unique($unikdata),PREG_GREP_INVERT));die;?>
                                                            <select name="center" id="center" class="form-control form-txt-primary">
                                                               <?php
                                                                    foreach(preg_grep('/^$/',array_unique($unikdata),PREG_GREP_INVERT) as $mrperson){
                                                                    ?>
                                                                <option value="<?php echo $mrperson;?>"><?php echo $mrperson?></option>
                                                            <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">City Name</label>
                                                            <input type="text" name="mraadhar" id="mrcity" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                   
                                                    <!-- mrcenter -->
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="hidden" readonly id="mrunid" value="<?php if(!empty($_GET['mrunid'])){ echo $_GET['mrunid'];}?>">
                                                            <label class="form-label">Full Address</label>
                                                            <textarea rows="3" name="mraddress" id="mraddress" cols="5" class="form-control form-txt-primary" placeholder="Plase Full Address"></textarea>
                                                        </div>
                                                    </div>  
                                                    
                                                    <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <!-- <ul class="notifications">
                                                            <li> -->
                                                                <button class="btn btn-success waves-effect" type="button" data-type="success" data-from="top" data-align="right" id='mralldatasubmit'>success</button>
                                                            <!-- </li>
                                                        </ul> -->
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#sendoptmr').click(function(){
       var mrotp = $('#mrpersanal_name').val();
       if(isNaN(mrotp)){
        $('#message').text('Enter only Number value');
        // $("#message").show("slow").delay(5000).hide("slow");
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
            url: "<?php echo base_url('Crud/generate_otp_mr') ?>",
            data: { 'mrotp': mrotp },
            type: 'POST',
            dataType: 'html',
            success: function(satish) {               
                location.href=`Add_Marketing_Person?mrunid=${satish.trim()}`;
                // location.reload("<?php //echo base_url()?>Crud/Add_Marketing_Person?mrunid="satish);
            //     var xhr = new XMLHttpRequest();
            // xhr.open("POST", "database/update.html", true);
            $("#mrunid").val(satish);// console.log(response); // alert(satish);
            }
        });}
    })
})

$(document).ready(function(){
    $('#mralldatasubmit').click(function(){
        var mrunid = $('#mrunid').val();
        var relation = $('#relation').val();
        var role = $('#role').val();
        var password = $('#mrpersanal_name').val();
        var mrname = $('#mrname').val();
        var mremail = $('#mremail').val();
        var mrphoneotp = $('#mrphoneotp').val();
        var mreducation = $('#mreducation').val();
        var mraadhar = $('#mraadhar').val();
        var center = $('#center').val();
        var mrcity = $('#mrcity').val();
        var mraddress = $('#mraddress').val();
    //    alert(relation);
    $.ajax({
            url: "<?php echo base_url('Crud/submit_add_mr'); ?>",
            data: { mrid:mrunid,relation:relation,role:role,phone:password,name:mrname,email:mremail,otp:mrphoneotp,education:mreducation,aadhar:mraadhar,center:center,city:mrcity,address:mraddress },
            type: 'POST',
            dataType: 'html',
            success: function(insert) { 
// alert(insert);
if(insert.trim() === "Data is Insert"){
document.getElementById('successMsg').innerHTML = insert ;
location.href=`Add_Marketing_Person`;
}
if(insert.trim() === "Otp Not Metch"){
document.getElementById('otpMsg').innerHTML = insert ;
$("#otpMsg").fadeIn('slow').animate({opacity: 1.0}, 1500).effect("pulsate", { times: 2 }, 800).fadeOut('slow'); 
}
            }
        })

    })
})
</script>
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
<script type="text/javascript" src="../application\views\kisan/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../application\views\kisan/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../application\views\kisan/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="../application\views\kisan/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../application\views\kisan/js/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../application\views\kisan/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="../application\views\kisan/js/modernizr/modernizr.js"></script>
<!-- notification js -->
<script type="text/javascript" src="../application\views\kisan/js/bootstrap-growl.min.js"></script>
<script type="text/javascript" src="../application\views\kisan/pages/notification/notification.js"></script>
<!-- am chart -->
<script src="../application\views\kisan/pages/widget/amchart/amcharts.min.js"></script>
<script src="../application\views\kisan/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="../application\views\kisan/pages/todo/todo.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="../application\views\kisan/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="../application\views\kisan/js/script.js"></script>
<script type="text/javascript " src="../application\views\kisan/js/SmoothScroll.js"></script>
<script src="../application\views\kisan/js/pcoded.min.js"></script>
<script src="../application\views\kisan/js/demo-12.js"></script>
<script src="../application\views\kisan/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../application\views\kisan/js/dataTables.bootstrap4.min.js"></script>
<script src="../application\views\kisan/js/datatables-demo.js"></script>
<script src="../application\views\kisan/js/jquery.dataTables.min.js"></script>

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