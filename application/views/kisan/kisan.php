<?php  $mrsperson = $this->session->userdata['adminperson'];
if(empty($mrsperson)){
    redirect(base_url() .'Crud/login');
}
// print_r($mrsperson);die();
if($mrsperson['role'] == '4'){
    $querys = array('kisan_un_id'=>$mrsperson['username']);
    $allgetmr = $this->Main_model->getAllWheresun('kisan_info',$querys);
}

else{
redirect(base_url() .'Crud/home');
}
// echo'<pre>';

// print_r($allgetmr);die;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="../application/views/kisan/images/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Kisan Information</h5>
                                            </div>
                                            <div class="card-block">
                                            <!-- Body Content-->
                                            <ul class="nav nav-tabs nav-tabs-warning md-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#Personal" role="tab" aria-expanded="false">Personal Information</a>
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
                                                        <a class="nav-link" data-toggle="tab" href="#Time_seeds" role="tab" aria-expanded="true">AT THE TIME OF SOWING</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content card-block">                                                    
                                                 <?php foreach($allgetmr as $allget){
                                                    $all_us_id = $allget->kisan_id; }
                                                    ?>
                                                    <div class="tab-pane active" id="Personal" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Personal Information</h4>                                                
                                                        <div class="row">

                                                <div class="table-responsive px-3">
                                                <table class="table" id="dataTable">
                                                    <thead>
                                                        <tr><th>Kisan Full Name</th>                                                        											
	                                                <?php  foreach ($allgetmr as $vals)  {  ?>
                                                      <td><?php echo $vals->kisan_full_name;?></td>
                                                     <?php }   ?> </tr>
                                                     
                                                     <tr><th>Mobile Number</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php echo $vals->mobile_no;?></td>
                                                     <?php }   ?> </tr>

                                                     <tr><th>Age</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php echo $vals->age;?></td>
                                                     <?php }   ?> </tr>

                                                     <tr><th>Education</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php echo $vals->education;?></td>
                                                     <?php }   ?> </tr>

                                                     <tr><th>District Name</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php echo $vals->district_name;?></td>
                                                     <?php }   ?> </tr>

                                                     <tr><th>Tehsil Name</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php echo $vals->tehsil_name;?></td>
                                                     <?php }   ?> </tr>

                                                     <tr><th>Full Address</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php echo $vals->full_address;?></td>
                                                     <?php }   ?> </tr>

                                                     <tr><th>Gender</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php echo $vals->gender;?></td>
                                                     <?php }   ?> </tr>

                                                    </thead></table>
                                                    <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Family Member Details</label>
                                                                    </div>
                                                                </div>
                                                    <table class="table" id="dataTable">
                                                    <thead>
                                                    <tr><th>Childs</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php echo $vals->child_count;?></td>
                                                     <?php }   ?> </tr>

                                                     <tr><th>Father's Name</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php echo $vals->father_name;?></td>
                                                     <?php }   ?> </tr>


                                                     <tr><th>Mother's Name</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php echo $vals->mother_name;?></td>
                                                     <?php }   ?> </tr>

                                                     <tr><th>Husband / Wife Name</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php echo $vals->husband_name;?></td>
                                                     <?php }   ?> </tr>
                                                    
                                                     <tr><th>If any other profession in the family</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php echo $vals->other_profession;?></td>
                                                     <?php }   ?> </tr>
                                                    
                                                  
                                                    <tr><th>What is the profession</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php echo $vals->profession_name;?></td>
                                                     <?php }   ?> </tr>

                                                     <tr><th>By Whom</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php echo $vals->by_whom;?></td>
                                                     <?php }   ?> </tr>

                                                     <tr><th>Kisan Image</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><img src="../../<?php echo $vals->image;?>" alt="kisan Image" style="width:50px;"></td>
                                                     <?php }   ?> </tr>

                                                     <tr><th>Name and relation</th>                                                        											
	                                                <?php   foreach ($allgetmr as $vals) {  ?>
                                                      <td><?php $othname = json_decode($vals->othname);
                                                      foreach($othname as $valsothname){
                                                        echo "Name&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;$valsothname->othname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relation&nbsp;&nbsp;:&nbsp;&nbsp;$valsothname->relation;&nbsp;&nbsp;<br/>";
                                                        
                                                        } ?></td>
                                                     <?php }   ?> </tr>

                                                    </thead></table>
                                        </div>


                                                               
                                                    

                                                                

                                                                <!-- =================================================================== -->

                                                             
                                                                    
                                                                       
                                                                        
                                                                    
                                                                                                                    
                                                            </div>
                                                    </div>


                                                    <!--asset details starting here......................................................................................-->
                                                    <?php 
                                                        ;
                                                    $vihicle = array('kisan_id'=>$all_us_id);//$mrsperson['username']);
                                                    $vihecle_type = $this->Main_model->getAllWheresun('kisan_assets_vehicle',$vihicle);
                                                    $tools = array('kisan_id'=>$all_us_id);//$mrsperson['username']);
                                                    $tools_type = $this->Main_model->getAllWheresun('kisan_assets_tools',$tools);
                                                    ?>
                                                    <div class="tab-pane" id="Asset" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Asset Details</h4>
                                                            <div class="row">
                                                                <?php foreach($vihecle_type as $vihecles){ $countvihecle = $vihecles->vehicle_count;}?>
                                                            <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Total Vehicles Number </label><br/>
                                                                        <label class="form-label"><?php if(!empty($countvihecle)){ echo $countvihecle;}?></label>
                                                                        <!-- <input type="text" name="kisan_id" id="kisan_id" value="<?php //echo $all_us_id;?>"> -->
                                                                    </div>
                                                                </div>
                                                               
<!-- ========================================================================================================== -->
                                            <div class="table-responsive px-3">
                                                <table class="table" id="dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>S.NO.</th>
                                                           <th>Total Vehicles Number</th>
                                                            <th>Vehicle Type</th>
                                                            <th>Vehicle Name</th>
                                                            <th>Year/Model</th>
                                                            <th>Vehicle Company Name</th>
                                                           <th>Used For</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>													
	 <?php  
    $i=1;
         foreach ($vihecle_type as $val)  
         {  
           ?>
			<tr> 
            <td><?php echo $i;?></td>
            <td><?php echo $val->vehicle_count;?></td>
            <?php $vihicles = array('id'=>$val->vehicle_type_id);
                $vihecles_t = $this->Main_model->getAllWheresun('vehicle_type',$vihicles); ?>
            <td><?php foreach($vihecles_t as $vel){ echo $vel->Vehicle_Type; }?></td>  
            <td><?php echo $val->vehicle_name;?></td>  
            <td><?php echo $val->year_model;?></td>  
            <td><?php echo $val->vehicle_company;?></td> 
            <?php $uesd_ty = array('id'=>$val->used_type_id);
            $userd_t = $this->Main_model->getAllWheresun('user_for',$uesd_ty); ?>
            <td><?php foreach($userd_t as $vels){ echo $vels->user_for; }?></td> 
            <td>     
		</tr>  
         <?php $i++;
		}  
         ?> 
		 </tbody>
													
                                                </table>
                                        </div>
                                       
<!-- ============================================================================================================== -->

<div class="table-responsive px-3">
                                                <table class="table" id="dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>S.NO.</th>
                                                           <th>Tools Type</th>
                                                            <th>Year/Model</th>
                                                            <th>Company Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>													
	 <?php  
    $i=1;
    echo '<pre>';
    // print_r($tools_type);
         foreach ($tools_type as $vals)  
         { 
            // print_r($val1->tool_type);die;?>
			<tr> 
            <td><?php echo $i;?></td>
            <?php $vihicless = array('id'=>$vals->tool_type);           
                $vihecles_t = $this->Main_model->getAllWheresun('tools_type',$vihicless); ?>
            <td><?php foreach($vihecles_t as $vel){ echo $vel->tools_type; }?></td>  
            <td><?php echo $vals->tool_year_model;?></td>  
            <td><?php echo $vals->company_name;?></td>  
             
		</tr>  
         <?php $i++;
		}  
         ?> 
		 </tbody>
													
                                                </table>
                                        </div>
                                                            </div>
                                                      
                                                    </div>



                                                    <!--script tag starting.........................................................................-->
                                                    <!--asset detail ending.............................................................................................-->

                                                    <!--..............................land detail starting.............................................................-->
                                                    <div class="tab-pane" id="Land" role="tabpanel" aria-expanded="false">
                                                        <h4 class="sub-title">Land Details</h4>
                                                        <form method="post" action="<?php //echo base_url(); ?>Crud/agro">
                                                        <div class="row">
                                                        <div class="table-responsive px-3">
                                                <table class="table" id="dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>S.NO.</th>
                                                           <th>Village Panchayat Name</th>
                                                            <th>Village name</th>
                                                            <th>khesra Number</th>
                                                            <th>Land Details</th>
                                                            <th>Area A Lot Name</th>
                                                           <th>Soil Type</th>
                                                           <th>Land Size</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>													
	 <?php  
      $kisan_lan = array('land_kisan_id'=>$all_us_id);//$mrsperson['username']);
      $kisan_prop = $this->Main_model->getAllWheresun('kisan_land',$kisan_lan);
    $i=1;
    // print_r($kisan_prop);die();
         foreach ($kisan_prop as $kisa)  
         {  
           ?>
			<tr> 
            <td><?php echo $i;?></td>
            <td><?php echo $kisa->panchayat_name;?></td>
            <td><?php echo $kisa->village_name; ?></td>  
            <td><?php echo $kisa->khesra_no;?></td>  
            <td><?php echo $kisa->land_details;?></td>  
            <td><?php echo $kisa->area_alot_name;?></td> 
            <td><?php echo $kisa->land_size; ?></td> 
            <td><?php echo $kisa->soil_type; ?></td>    
		</tr>  
         <?php $i++;
		}  
         ?> 
		 </tbody>
													
                                                </table>
                                        </div>
                                              </div>
                                                        </form>
                                                       
                                                        
                                                    </div>


                                                    <!-------------------------------------Seed Details Start------------------------------->



                                                    <div class="tab-pane" id="Time_seeds" role="tabpanel" aria-expanded="false">
                                                        
                                                    <h4 class="sub-title">A - Seeds Details</h4>
                                                    <div class="row">
                                                        <!-- Seed Crop Type -->
                                                        <div class="table-responsive px-3">
                                                <table class="table" id="dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>S.NO.</th>
                                                           <th>Crops</th>
                                                            <th>Crops Sub Types</th>
                                                            <th>Crop Name</th>
                                                            <th>Land Used for Sowing<br/>(Total Land or from Section III)</th>
                                                            <th>Seed Brand/Company Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>													
	 <?php  
      $kisan_iid = array('kisan_id'=>$all_us_id);//$mrsperson['username']);
      $kisan_seed = $this->Main_model->getAllWheresun('kisan_seeds',$kisan_iid);
    $i=1;
    // print_r($kisan_prop);die();
         foreach ($kisan_seed as $kisan_un)  
         {  
           ?>
			<tr> 
            <td><?php echo $i;?></td>
            <td><?php echo $kisan_un->seed_crop_used;?></td>
            <td><?php echo $kisan_un->select_subtype; ?></td>  
            <td><?php echo $kisan_un->crop_name;?></td>  
            <td><?php echo $kisan_un->land_used_sowing;?></td>  
            <td><?php echo $kisan_un->seed_brand;?></td>   
		</tr>  
         <?php $i++;
		}  
         ?> 
		 </tbody>
													
                                                </table>
                                        </div>
         
                                                         <div class="col-md-12">
                                                                <div class="form-group">
                                                        <h4 class="sub-title">A - Seed Purchase Details</h4> </div></div>
                                                        <div class="table-responsive px-3">
                                                <table class="table" id="dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>S.NO.</th>
                                                           <th>Total Seeds used<br/>(in gms or KG)</th>
                                                            <th>Total Cost of the seeds</th>
                                                            <th>purchased From<br/> (Shop Details)</th>
                                                            <th>Bill Image</th>
                                                            <th>Purchase Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>													
	 <?php  
         foreach ($kisan_seed as $kisan_un)  
         {  
           ?>
			<tr> 
            <td><?php echo $i;?></td>
            <td><?php echo $kisan_un->total_seeds;?></td>
            <td><?php echo $kisan_un->total_cost_seeds; ?></td>  
            <td><?php echo $kisan_un->purchased_from;?></td>  
            <td><img src="../<?php echo $kisan_un->image1;?>" style="width:50px;" alt="Bill Image"></td>  
            <td><?php echo $kisan_un->date;?></td>   
		</tr>  
         <?php $i++;
		}  
         ?> 
		 </tbody>
													
                                                </table>
                                        </div><hr>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                        <h4 class="sub-title">B - Seed Treatment Details</h4>
                                                        <h4>Seed treatment product Used</h4>
                                                    </div></div>
                                                    <div class="table-responsive px-3">
                                                <table class="table" id="dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>S.NO.</th>
                                                           <th>Product Name</th>
                                                            <th>Brand</th>
                                                            <th>Cost of the Product</th>
                                                            <th>Dose used of the Product<br/>(Acre/Beegha/Kg)</th>
                                                            <th>Purchased From<br/> (Shop Details)</th>
                                                            <th>Seed Treatment Bill Image</th>
                                                            <th>Seed Treatment Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>													
	 <?php  
         foreach ($kisan_seed as $kisan_un)  
         {  
           ?>
			<tr> 
            <td><?php echo $i;?></td>
            <td><?php echo $kisan_un->product_name;?></td>
            <td><?php echo $kisan_un->brand; ?></td>  
            <td><?php echo $kisan_un->cost_of_product;?></td>   
            <td><?php echo $kisan_un->dose_used;?></td>   
            <td><?php echo $kisan_un->purchased;?></td>
            <td><img src="../<?php echo $kisan_un->treimage;?>" style="width:50px;" alt="Seed Treatment Bill Image"></td>
		</tr>  
         <?php $i++;
		}  
         ?> 
		 </tbody>
													
                                                </table>
                                        </div>        
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <h4 class="sub-title"><hr><br/>C - Showing Land Prepration cost</h4>
                                                        <h4>Labour and Fertication cost</h4>
                                                        </div></div>
                                                        <div class="table-responsive px-3">
                                                <table class="table" id="dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>S.NO.</th>
                                                           <th>Labour</th>
                                                            <th>Labour Cost</th>
                                                            <th>Fertication</th>
                                                            <th>Fertication Cost</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>													
	 <?php  
         foreach ($kisan_seed as $kisan_un)  
         {  
           ?>
			<tr> 
            <td><?php echo $i;?></td>
            <td><?php echo $kisan_un->labour;?></td>
            <td><?php echo $kisan_un->labour_cost; ?></td>  
            <td><?php echo $kisan_un->fertication;?></td>    
            <td><?php echo $kisan_un->fertication_cost;?></td>   
		</tr>  
         <?php $i++;
		}  
         ?> 
		 </tbody>
													
                                                </table>
                                        </div>



                                                            
                                                                 </div>  
                                                                
                                                    </div>
                                                                </div>
                                                           

                                                



<!-- =======================================================End all=================================================== -->

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