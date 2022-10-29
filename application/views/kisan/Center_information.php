<?php
if(empty($this->session->userdata['adminperson'])){
    redirect(base_url() .'Crud/login');
}
$datas = $this->session->userdata['adminperson'];
// print_r($datas);die;
if($datas['role'] == '1' || $datas['role'] == '2' || $datas['role'] == '3'){
    if($datas['role'] == '1'){
        $this->db->order_by('centername','ASC');
        $center= $this->Main_model->getAll('center');       
        $token_data = $this->Main_model->getAll('login_mrperson_token');
        $marketing_man= $this->Main_model->getAll('marketing_man');
        $kisan_info = $this->Main_model->getAll('kisan_info');
    }
    elseif($datas['role'] == '2'){
        $this->db->order_by('centername','ASC');
        $id = array('id'=> $datas['id'],);
        $center= $this->Main_model->getAllWheresun('center',$id);
        $token_data = $this->Main_model->getAll('login_mrperson_token');
        $mrdata = array('center_id'=>$datas['username']);
        $marketing_man = $this->Main_model->getAllWheresun('marketing_man',$mrdata);
        $allmr = array();
        foreach($marketing_man as $marketingper){
        $mrdatapre = array('relation_creater'=>$marketingper->mr_unid);
        $allmr[] = $this->Main_model->getAllWheresun('kisan_info',$mrdatapre);  
        }
        $creterdata = array('relation_creater'=>$datas['username']);
        $kisan_infor = $this->Main_model->getAllWheresun('kisan_info',$creterdata);
        $mrpersonus = array();
    foreach($allmr as $mrloops){
        foreach($mrloops as $loops){
        $mrpersonus[] = $loops;
        }
    }
    foreach($kisan_infor as $loopinfo){
        $mrpersonus[] = $loopinfo;
        }

        $kisan_info = $mrpersonus;
        // echo'<pre>';
        // print_r($kisan_info);die;
    }
    else{
        $center = array();
        $token_data = $this->Main_model->getAll('login_mrperson_token');
        $sdata = array('mr_unid'=>$datas['username'],);
        $marketing_man = $this->Main_model->getAllWheresun('marketing_man',$sdata);
        $creterdata = array('relation_creater'=>$datas['username']);
        $kisan_info = $this->Main_model->getAllWheresun('kisan_info',$creterdata);
    }
}
else{
    redirect(base_url() .'Crud/kisan');
}
$current_date = date('Y-m-d');
$date_login =array();
for($i=0;$i<count($token_data);$i++){
$mr_date = date('Y-m-d',strtotime($token_data[$i]->date));
        if($current_date == $mr_date){
            $date_login[] = $token_data[$i]->token;
        }

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="../application/views/kisan/images/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing</title>
   <?php include('header.php');?>
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
                                            <a href="Today_Login_List">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Today's Login</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="Center">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Center</span>
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
                    <!-- End -->          
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <!-- Body Content-->
                                            
                                        <div class="row">
                                           <div class="col-md-12">
                                            
        

        
<div class="card">
                                            <div class="card-header">
                                                <?php
                                                $getunid = array('un_center_id'=> $_GET['Centerid']);
                                                 $un_id = $this->Main_model->getSingleRowByWhere('center',$getunid);?>
                                                <h5>Marketing person And Center Name : <?php echo ucfirst($un_id->centername);?></h5>
                                                <div class="card-header-right"><ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive px-3">
                                                    <table class="table" id="dataTable">
                                                        <thead>
                                                            <tr>
                                                            <th>MR ID</th>
                                                            <th>MR Name</th>
                                                            <th>MR Mobile No.</th>
                                                            <!-- <th>Place Name</th> -->
                                                            <th>Center Name</th>
                                                            <th>Total Kisan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $centerid = $_GET['Centerid'];
                                                            $arraymr = array();
                                                            $getcenterid = array('center_id'=>$centerid);
                                                            $center_get = $this->Main_model->getAllWheresun('marketing_man',$getcenterid);
                                                                foreach ($center_get as $val) {  ?>
                                                            <tr>
                                                            <td onclick="mr_showinfor(<?=$val->id?>)"><?php echo $val->mr_unid?></td>  
                                                            <td><?php echo ucfirst($val->username);?></td>  
                                                            <td><?php echo $val->mobile;?></td>  
                                                            <td><?php echo ucfirst($val->center);?></td> 
                                                                <td>
                                                                    <?php $getkisanid = array('relation_creater'=>$val->mr_unid);
                                                                     $kisan_get = $this->Main_model->getAllWheresun('kisan_info',$getkisanid);?>
                                                                    
<a href="<?php echo base_url('Crud/kisan_mr?Mrid=').$val->mr_unid;?>" class="btn btn-warning btn-sm"><?php echo count($kisan_get);?></a>
                                                                </td>
                                                                
                                                               
                                                            </tr>
                                                            <?php }?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

        
        
        </div>


        <div class="col-md-12">
                                            
        

        
<div class="card">
                                            <div class="card-header">
                                                <?php
                                                $getunid = array('un_center_id'=> $_GET['Centerid']);
                                                 $un_id = $this->Main_model->getSingleRowByWhere('center',$getunid);?>
                                                <h5>Center Name : <?php echo ucfirst($un_id->centername);?> and Kisan List</h5>
                                                <div class="card-header-right"><ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive px-3">
                                                    <table class="table" id="dataTable">
                                                        <thead>
                                                            <tr>
                                                            <th>Kisan ID</th>
                                                            <th>Kisan Name</th>
                                                            <th>Kisan Mobile No.</th>
                                                            <th>city</th>
                                                            <th>Marketing person Name</th>
                                                            <th>view</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $centerid = $_GET['Centerid'];
                                                            $arraymr = array();
                                                            $getcenterid = array('relation_creater'=>$centerid);
                                                            $center_get = $this->Main_model->getAllWheresun('kisan_info',$getcenterid);
                                                                foreach ($center_get as $val) {  ?>
                                                            <tr>
                                                            <td><?php echo $val->kisan_un_id?></td>  
                                                            <td><?php echo ucfirst($val->kisan_full_name);?></td>  
                                                            <td><?php echo $val->mobile_no;?></td>  
                                                            <td><?php echo ucfirst($val->tehsil_name);?></td> 
                                                                <td><?php echo ucfirst($un_id->center_manager);?> </td>
                                                            <td>
                                                                  
                                                                    
<a href="<?php echo base_url('Crud/showKisanDetail/').$val->kisan_id;?>" class="btn btn-warning btn-sm">view</a>
                                                                </td>
                                                                
                                                               
                                                            </tr>
                                                            <?php }?>
                                                        </tbody>
                                                    </table>
                                                </div>
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


    <div id="showcenterd" role="dialog" class="modal fade">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    
      <div class="modal-header" style="background-color: darkseagreen;color: aliceblue;">
        <h4 class="modal-title">Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
        <div class="card-block table-border-style">
                                                <div class="table-responsive px-3">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th>Center Name</th>  
                                                                <td id="center"></td>  
                                                            </tr>
                                                            <tr>
                                                                <th>user Name</th>  
                                                                <td id="username"></td>  
                                                            </tr>
                                                            
                                                            <tr>
                                                                <th>E-mail</th>  
                                                                <td id="email"></td>  
                                                            </tr>
                                                            <tr>
                                                                <th>Phone</th>  
                                                                <td id="mobile"></td>  
                                                            </tr>
                                                            <tr>
                                                                <th>City</th>  
                                                                <td id="city"></td>  
                                                            </tr>
                                                            <tr>
                                                                <th>Full Address</th>  
                                                                <td id="address"></td>  
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
<!-- am chart -->
<script src="../application/views/kisan/pages/widget/amchart/amcharts.min.js"></script>
<script src="../application/views/kisan/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="../application/views/kisan/text/javascript " src="pages/todo/todo.js"></script>
<!-- Custom js -->
<script type="../application/views/kisan/text/javascript" src="pages/dashboard/custom-dashboard.js"></script>
<script type="../application/views/kisan/text/javascript" src="js/script.js"></script>
<script type="../application/views/kisan/text/javascript " src="js/SmoothScroll.js"></script>
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

<script>
$(document).change(function(){
var center = $('#centerunname').val();
$('#centeridde').val(center);
// alert(center);
    $.ajax({
      url:"<?php echo base_url('Crud/load_data');?>",
      method:"POST",
      data:{centerid:center},
      dataType:"html",
      success:function(opt)
      { 
    //     var html = $.parseHTML(opt);
    // var itemCount = $(html).find("0").length;
    // alert(opt);
        
    //     // alert(opt.length);
    //     var html = '';
    //     for(var count = 0; count < opt.length; count++)
    //     {
    //         alert(opt.id);
    //       html += '<option value="'+opt[count].id+'">'+opt[count].name+'</option>';
    //     }
        
          $('#mrpersons').html(opt);
          $('#mrpersons').selectpicker('refresh');
        //   $(".mrpersons").selectpicker('refresh').empty().append(opt).selectpicker('refresh').trigger('change');
        
      }
    })
  

//   $(document).on('change', '#category_item', function(){
//     var category_id = $('#category_item').val();
//     load_data('sub_category_data', category_id);
//   });
  
});
function mr_showinfor(getdata){
// alert(getdata);
$.ajax({
   url:"<?php echo base_url();?>Crud/getcenterinfor",
   method:"POST",
   dataType:"html",
   data:{'mr_getidshow':getdata},
   success:function(opt){
    data = JSON.parse(opt);
    // alert(opt);
    $('#center').text(data.center);
    $('#username').text(data.username);
    $('#email').text(data.email);
    $('#mobile').text(data.phone);
    $('#city').text(data.city);
    $('#address').text(data.address);
    $('#showcenterd').modal('show');
   }   
});
}
</script>