<?php

use LDAP\Result;

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
// print_r($marketing_man);die;




// echo '<pre>';
// print_r($token_data);
// $yesterdaydate = date('Y-m-d', strtotime(''));
// echo $yesterdaydate;die;
// formatted_date >='$yesterdaydate 00:00:00'
$current_date = date('Y-m-d');
$date_login =array();
for($i=0;$i<count($token_data);$i++){
//     $token = $this->uri->segment(3);
//    $jwt = new jwt();
//     $datasv = $jwt->decode($token, 'SawariyaFarmer','HS256');
//     print_r($datasv);die;

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
    <link rel="icon" href="../application/views/kisan/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  

    <link rel="stylesheet" type="text/css" href="../application/views/kisan/css/bootstrap/css/bootstrap.min.css">

    <link href="../application/views/kisan/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/icon/icofont/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/css/style.css">
    <link rel="stylesheet" type="text/css" href="../application/views/kisan/css/jquery.mCustomScrollbar.css">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script> -->
  
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
                     
                    <?php echo include('leftheader.php');?>
                    
                    <!-- End -->          
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <!-- Body Content-->
                                            
                                        <div class="row">
                                            <!-- card1 start -->
                                            <?php //if(!empty($center)){?>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                <!-- <a href='<?php //echo base_url('Crud/home?center=').count($center)?>'>  -->
                                                <div class="card-block-small">
                                                        <i class="icofont icofont-file-text bg-c-blue card1-icon"></i>
                                                        <span class="text-c-blue f-w-600">Totals Center</span>
                                                        <h4><?php echo count($center);?></h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class=" icofont icofont-warning m-r-10">Total Center</i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                <!-- </a> -->
                                                </div>
                                            </div>
                                            <?php //}?>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-business-man bg-c-pink card1-icon" style="margin-left: -12px;"></i>
                                                        <span class="text-c-pink f-w-600">Marketing  Boys</span>
                                                        <h4><?php if($datas['role'] == 1){ echo (count($marketing_man)-1); }else{
                                                            echo count($marketing_man);
                                                        } ?></h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted" style="margin-right: -10px;">
                                                                <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Total Marketing man
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-login bg-c-green card1-icon"></i>
                                                        <span class="text-c-green f-w-600">Today Login</span>
                                                        <h4><?php echo count($date_login);?></h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Total Login Views 
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-worker bg-c-yellow card1-icon"></i>
                                                        <span class="text-c-yellow f-w-600">Total Kisan</span>
                                                        <h4><?php echo count($kisan_info);?></h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Total Kisan List 
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/> -->
<?php
//$center = $this->db->query('select * from center')->result();
?>
<!-- <div class="col-md-4">
    <select class="w-100 selectpicker" data-live-search="true" id="centerunname">
    <option>--- Select center ---</option>
    <?php //foreach($center as $valcenter){ ?>
        <option value="<?php //echo $valcenter->un_center_id;?>"><?php //echo $valcenter->centername;?></option> 
        <?php //}?>
</select>
</div>
<div class="col-md-4"> -->
<!-- style="width:100%;height:30px;" -->
<!-- <select class="w-100" data-live-search="true" id="mrpersons">
</select>
</div>
<div class="col-md-4">jkh</div> --> 


<!-- <div class="col-md-4"><form method="post"><input type="hidden" id="centeridde" name="centeridde"><input type="submit" id="centerdetil" name="centeridun" value="Details" style="color: wheat;background-color: green;border-radius: 12px;width: 40%;height: 36px;border: 1px solid aquamarine;"/></form>
<?php //if(!empty($this->input->post('centeridde')) && !empty($this->input->post('centeridun'))){
//     $centeruns = $this->input->post('centeridde');
//     $cen_data = $this->db->query("select * from center where un_center_id = '$centeruns'")->result();
// foreach($cen_data as $cen_val){
   // echo'<pre>';
    // print_r($cen_val);
    ?>
    <label class="form-label">Center name &nbsp;&nbsp;:&nbsp;&nbsp;<?php //echo $cen_val->centername;?></label>
    <label class="form-label">Center manager &nbsp;&nbsp;:&nbsp;&nbsp;<?php //echo $cen_val->center_manager;?></label>
    <label class="form-label">Center Phone no. &nbsp;:&nbsp;&nbsp;<?php //echo $cen_val->phone;?></label>
    <label class="form-label">Center Address&nbsp;&nbsp;:&nbsp;&nbsp;<?php //echo $cen_val->address;?></label>
    <label class="form-label">Center E-mail &nbsp;&nbsp;:&nbsp;&nbsp;<?php //echo $cen_val->email;?></label>
    <label class="form-label">Center Place Add.&nbsp;:&nbsp;&nbsp;<?php //echo $cen_val->place_name;?></label>
    <?php
    //}}?>
    </div>
<div class="col-md-4">jkh</div>
<div class="col-md-4">jkh</div> -->
<?php if($datas['role'] == 1) { ?>
<div class="col-md-12">

<div class="card">
                                            <div class="card-header">
                                                <h5>Center List</h5>
                                                <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive px-3">
                                                    <table class="table" id="dataTable">
                                                        <thead>
                                                            <tr>
                                                            <th>Center ID</th>
                                                            <th>Center Name</th>
                                                            <th>Maneger Name</th>
                                                            <th>Center Mobile No.</th>
                                                            <th>Total Marketing Person</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $center_get = $this->Main_model->getAllWheresun('center',array('status'=>'active'));
                                                            foreach($center_get as $val){
                                                                 $mrget_where = array('center_id'=>$val->un_center_id);
                                                                 $mr_get_all = $this->Main_model->getAllWheresun('marketing_man',$mrget_where); ?>
                                                            <tr>
                                                            <td onclick="center_sendid(<?=$val->id?>)"><?php echo $val->un_center_id?></td>  
                                                            <td><?php echo ucfirst($val->centername);?></td>  
                                                            <td><?php echo ucfirst($val->center_manager);?></td>
                                                            <td><?php echo $val->phone;?></td>   
                                                                <td>
                                                                    
<a href="<?php echo base_url('Crud/Center_information?Centerid=').$val->un_center_id;?>" class="btn btn-warning btn-sm"><?php echo count($mr_get_all);?></a>
                                                                </td>
                                                                
                                                               
                                                            </tr>
                                                            <?php }?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>




</div>
<?php } ?>
<?php
if(($datas['role'] == 2) || ($datas['role'] == 1)){
?>
<div class="col-md-12">

<div class="card">
                                            <div class="card-header">
                                                <h5>Marketing Person List</h5>
                                                <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive px-3">
                                               <div id="dataTable_filter" class="dataTables_filter"> 
                                               </div>       
                                                    <table class="table" id="dataTable">
                                                       <thead>
                                                            <tr>
                                                            <th>MR ID</th>
                                                            <th>Center Name.</th>
                                                            <th>MR Name</th>
                                                            <th>MR Mobile No.</th>
                                                            
                                                            <th>Total Kisan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $center_where = array('center_id'=>$datas['username'],'status'=>'active');
                                                            $center_get = $this->Main_model->getAllWheresun('marketing_man',$center_where);
                                                            foreach($center_get as $val){
                                                                 $mrget_where = array('relation_creater'=>$val->mr_unid);
                                                                 $mr_get_all = $this->Main_model->getAllWheresun('kisan_info',$mrget_where); ?>
                                                            <tr>
                                                            <td onclick="showData(<?=$val->id?>)"><?=$val->mr_unid;?></td>  
                                                            <td><?php echo $val->center;?></td>  
                                                            <td><?php echo ucfirst($val->username);?></td>  
                                                            <td><?php echo ucfirst($val->mobile);?></td>
                                                             
                                                                <td>
                                                                    
<a href="<?php echo base_url('Crud/kisan_mr?Mrid=').$val->mr_unid;?>" class="btn btn-warning btn-sm"><?php echo count($mr_get_all);?></a>
                                                                </td>
                                                                
                                                               
                                                            </tr>
                                                            <?php }?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

</div>
<?php } ?>



<?php
if(($datas['role'] == 2) || $datas['role'] == 3){
?>
<div class="col-md-12">

<div class="card">
                                            <div class="card-header">
                                                <h5>Kisan list</h5>
                                                <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive px-3">
                                               <div id="dataTable_filter" class="dataTables_filter"> 
                                               </div>       
                                                    <table class="table" id="dataTable">
                                                       <thead>
                                                            <tr>
                                                            <th>Kisan Id</th>
                                                            <th>Kisan Name.</th>
                                                            <th>Kisan phone no.</th>
                                                            <th>city</th>
                                                            <th>option</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $center_where = array('relation_creater'=>$datas['username']);
                                                            $center_get = $this->Main_model->getAllWheresun('kisan_info',$center_where);
                                                            foreach($center_get as $val){
                                                                // print_r($val);
                                                                //  $mrget_where = array('relation_creater'=>$val->mr_unid);
                                                                //  $mr_get_all = $this->Main_model->getAllWheresun('kisan_info',$mrget_where); ?>
                                                            <tr>
                                                            <td onclick="showData(<?php $val->kisan_id?>)"><?=$val->kisan_un_id;?></td>  
                                                            <td><?php echo $val->kisan_full_name;?></td>  
                                                            <td><?php echo ucfirst($val->mobile_no);?></td>  
                                                            <td><?php echo ucfirst($val->tehsil_name);?></td>
                                                             
                                                                <td>
                                                                                    
<a href="<?php echo base_url('Crud/showKisanDetail/').$val->kisan_id;?>" class="btn btn-warning btn-sm">View</a>
                                                                </td>
                                                                
                                                               
                                                            </tr>
                                                            <?php }?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

</div>
<?php }?>

<!-- <div class="col-md-12">
<div class="card-block table-border-style">
                                            <div class="table-responsive px-3">
                                                <table class="table" id="dataTable">
                                                    <thead>
                                                        <tr><th>Center ID</th>
                                                            <th>Center Name</th>
                                                            <th>Center Mobile No.</th>
                                                            <th>Place Name</th>
                                                            <th>Total Marketing Person</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
													 -->
	 <?php  
    //  $mr_get_center = $this->Main_model->getAll('marketing_man');
    // $mr_get_alls = array();
    // $mr_infor =array();
    //      foreach ($mr_get_center as $val_getd)  
    //      {  
    //         $mrget_wheres = array('center_id'=>$val_getd->mr_unid);
    //         $mr_get_alls[] = $this->Main_model->getAllWheresun('marketing_man',$mrget_wheres);
    //      }
    //     //  echo'<pre>';print_r($mr_get_alls);die;
    //         foreach($mr_get_alls as $mr_admin_get){  if($mr_admin_get->center_id == '')
    //             {
    //                 unset($mr_admin_get);
    //             }$mr_infor[] = ['mr_unid'=>$mr_admin_get[4]->id]; //}            ?>
			<!-- <tr>  
            <td><?php //foreach($mr_infor as $countdata){ echo 
              //  echo'<pre>';print_r($mr_infor);?></td>  
            <td><?php //echo $val->centername;?></td>  
            <td><?php //echo $val->phone;?></td>  
            <td><?php //echo $val->place_name;?></td>  
            <td>
<a href="<?php //echo base_url('Crud/getData?Centerid=').$val->un_center_id;?>" class="btn btn-warning btn-sm"><?php //echo count($mr_get_all);?></a>
</td></tr>  
         <?php   //}       ?> 
		 </tbody>
		 </table>    </div> </div>


</div> -->


                                            <!-- Statestics Start -->
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Statestics</h5>
                                                        <div class="card-header-left ">
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="statestics-chart" style="height:517px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--- End -->
                                                
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-xl-8">
                                                <div class="card twitter-card">
                                                    <div class="card add-task-card">
                                                        <div class="card-header">
                                                            <div class="card-header-left">
                                                                <h5>To do list</h5>
                                                            </div>
                                                            <div class="card-header-right">
                                                                <button class="btn btn-card btn-primary" data-toggle="modal" data-target="#AddTask">Add task </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-block">
                                                            <div class="to-do-list">
                                                                <div class="checkbox-fade fade-in-primary d-block">
                                                                    <label class="check-task d-block">
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                        </span>
                                                                        <span><h6>Schedule Meeting with Compnes <span class="label bg-c-green m-l-10 f-10">2 week</span></h6></span>
                                                                        <div class="task-card-img m-l-40">
                                                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40"></a>
                                                                            <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40 m-l-10"></a>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="to-do-list">
                                                                <div class="checkbox-fade fade-in-primary d-block">
                                                                    <label class="check-task d-block">
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                        </span>
                                                                        <span><h6>Meeting With HOD's and borad</h6><p class="text-muted m-l-40">23 january 2003</p></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="to-do-list">
                                                                <div class="checkbox-fade fade-in-primary d-block">
                                                                    <label class="check-task d-block">
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                        </span>
                                                                        <span><h6>Create template, admin with responsive<span class="label bg-c-pink m-l-10">2 week</span></h6></span>
                                                                        <div class="task-card-img m-l-40">
                                                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40"></a>
                                                                            <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Suzen" alt="" class="img-40 m-l-10"></a>
                                                                            <a href="#!"><img src="assets/images/avatar-4.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40 m-l-10"></a>
                                                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt="" class="img-40 m-l-10"></a>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="to-do-list">
                                                                <div class="checkbox-fade fade-in-primary d-block">
                                                                    <label class="check-task d-block">
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                        </span>
                                                                        <span><h6>Meeting With HOD's and borad</h6>
                                                                            <p class="text-muted m-l-40">23 january 2003</p></span>
                                                                            <div class="task-card-img m-l-40">
                                                                                <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40"></a>
                                                                                <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40 m-l-10"></a>
                                                                                <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt="" class="img-40 m-l-10"></a>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-4">
                                                
                                                <div class="card fb-card">
                                                    <div class="card-header">
                                                        <i class="icofont icofont-users-alt-6"></i>
                                                        <div class="d-inline-block">
                                                            <h5>Marketing Person</h5>
                                                            <span>Login Status</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h2>23</h2>
                                                                <p class="text-muted">Active</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h2>23</h2>
                                                                <p class="text-muted">UnActive</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card dribble-card">
                                                    <div class="card-header">
                                                        <i class="icofont icofont-ui-text-chat"></i>
                                                        <div class="d-inline-block">
                                                            <h5>Kisan Query's</h5>
                                                            <span>Status</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h2>23</h2>
                                                                <p class="text-muted">Solved</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h2>23</h2>
                                                                <p class="text-muted">Process</p>
                                                                <button type="button" data-target="#mr_unid_dialog" data-toggle="modal">jkejk</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <!-- Task Form Popup-->
                                        <!-- Modal -->
                                        <div class="modal fade" id="AddTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Task Assign </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <form>
                                                    <div class="form-group">
                                                        <label for="">Select Salesman</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                          </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Task Title</label>
                                                        <input type="text" class="form-control" id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Task Message</label>
                                                        <textarea class="form-control" id="" placeholder="Type Here" rows="3"></textarea>
                                                      </div>
                                                  </form>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                  
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



<div id="mr_unid_dialog" role="dialog" class="modal fade">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    
      <div class="modal-header" style="background-color: darkseagreen;color: aliceblue;">
        <h4 class="modal-title">Marketing person Details</h4>
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
                                                                <th>Markeing person Name</th>  
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



<div id="center_id_dialog" role="dialog" class="modal fade">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    
      <div class="modal-header" style="background: lightcyan;color: green;font-family: math;">
        <h4 class="modal-title"><img src="" id="image" style="width:15%;height:15%;border-radius:50%;"/>&nbsp;&nbsp;Center <span id="centername"style="text-decoration: underline;text-decoration-color:red;"></span> Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
        <div class="card-block table-border-style">
                                                <div class="table-responsive px-3">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>

                                                                <th>Center Manager</th>  
                                                                <td id="center_manager"></td>  
                                                            </tr>
                                                            <tr>
                                                                <th>user name</th>  
                                                                <td id="user_name"></td>  
                                                            </tr>
                                                            <tr>
                                                                <th>E-mail</th>  
                                                                <td id="emails"></td>  
                                                            </tr>
                                                            <tr>
                                                                <th>Phone</th>  
                                                                <td id="phone"></td>  
                                                            </tr>
                                                            <tr>
                                                                <th>Place name</th>  
                                                                <td id="place_name"></td>  
                                                            </tr>
                                                            <tr>
                                                                <th>Full Address</th>  
                                                                <td id="addressc"></td>  
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
<script type="text/javascript" src="../application/views/kisan/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../application/views/kisan/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="../application/views/kisan/js/modernizr/modernizr.js"></script>
<!-- notification js -->
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
<!-- <script src="../application/views/kisan/js/dataTables.bootstrap4.min.js"></script> -->
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
//    $(document).click(function(){
//     $('mr_unidshow').click(function(){
//        var showid = $('#DemoID').val();
//        alert(showid);
//     });
// });

function showData(mr_unid){
    // alert(mr_unid);
    $.ajax({
      url:"<?php echo base_url('Crud/mr_getdatas');?>",
      method:"POST",
      data:{mr_unids:mr_unid},
      dataType:"html",
      success:function(opt)
      { 
        // alert(opt);
        value =  JSON.parse(opt);
        $('#center').text(value[0].center);
        $('#username').text(value[0].username);
        $('#email').text(value[0].email);
        $('#mobile').text(value[0].mobile);
        $('#city').text(value[0].city);
        $('#address').text(value[0].address);  
         $('#mr_unid_dialog').modal('show');  
      }
    });
}
function center_sendid(centerid){
    // alert(centerid);
    $.ajax({
      url:"<?php echo base_url('Crud/center_getdatas');?>",
      method:"POST",
      data:{center_unids:centerid},
      dataType:"html",
      success:function(opt)
      { 
        // alert(opt);
        value = JSON.parse(opt);
        $('#centername').text(value[0].centername);
        $('#center_manager').text(value[0].center_manager);
        $('#user_name').text(value[0].user_name);
        $('#phone').text(value[0].phone);
        $('#place_name').text(value[0].place_name);
        $('#addressc').text(value[0].address); 
        $('#emails').text(value[0].email); 
        $('#image').attr("src",`../${value[0].image}`); 
         $('#center_id_dialog').modal('show');  
      }
    });
}
</script>
