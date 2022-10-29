<!DOCTYPE html>
<html>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta charset="utf-8" />
    <link rel="icon" href="../application\views\kisan/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Google font-->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet"> -->
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../application\views\kisan/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../application\views\kisan/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../application\views\kisan/icon/icofont/css/icofont.css">
     <!-- Notification.css -->
     <link rel="stylesheet" type="text/css" href="../application\views\kisan/pages/notification/notification.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../application\views\kisan/css/style.css">
    <link rel="stylesheet" type="text/css" href="../application\views\kisan/css/jquery.mCustomScrollbar.css">
    <link href="../application\views\kisan/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    
    <?php //include("header.php");?>

</head>
<body>
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
                                            <a href="center">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add Center</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="Add_Marketing_Person">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Add Marketing Persons</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
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
            <!-- start -->
 <!-- <h4 class="sub-title text-center"> Visits </h4> -->
                                                <h4 class="sub-title">Agri Input Used (Fertilizer, Pesticide etc)</h4>                                                
                                                <?php if(empty($_GET['id'])){?>
                                                <div class="row">                                 
                                                        <div class="col-md-12">
                                                    <div class="form-group"> 
                                                 <label class="form-label">kisan</label>
                                                    </div></div>
                                                    <div class="col-md-12">                        
                                                    <div class="input-group"> 
                                                     <span class="input-group-addon">Search</span> 
     
                                                     <input type ="text" name="search_text" id="search_text" placeholder="Search by kisan Details" class="form-control form-txt-primary" />
    
   </div>
   </div>
   <br/>
   <div class="col-md-12" id="result"></div>
  <div style="clear:both"></div>
  <br />
  <br />
  <br />
  <br />



 <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url();?>Crud/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });


 
});
function relationunid(relation_creater){
    // alert(relation_creater);
    $.ajax({
   url:"<?php echo base_url();?>Crud/getvisitcenter",
   method:"POST",
   dataType:"html",
   data:{'kisan_id':relation_creater},
   success:function(opt){
    data = JSON.parse(opt);
    // alert(data.);
    $('#center').text(data.center);
    $('#username').text(data.username);
    $('#centerid').text(data.centerid);
    $('#email').text(data.email);
    $('#mobile').text(data.phone);
    $('#city').text(data.city);
    $('#address').text(data.address);
    $('#showcenterd').modal('show');
   }   
});
    }    //\""'.$row->relation_creater.'"\"


</script>
                                                       

                                                    
                                                </div>                                                  

 
                                                    
<?php }else{?>
    <ul class="nav nav-tabs nav-tabs-warning md-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Time_seeds" role="tab" aria-expanded="true">AT THE TIME OF SOWING</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#visits" role="tab" aria-expanded="true">Visit</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>
    <div class="tab-content card-block">
<div class="tab-pane active" id="visits" role="tabpanel" aria-expanded="false">
    <?php
                                             
                                                $Kishan_land = $this->db->query('select * from kisan_land where land_kisan_id="'.$_GET['id'].'"')->result();
                                                ?> 
                                                <form method="post" action="<?php echo base_url();?>Crud/savedata" >
                                                <div class = "row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="kisan_land" id="kisan_land" style="width:100%;border-radius: 15px;height:30px;">
                                                        <option value="" style="text-align:center;">---- Select Land ----</option>
                                                    <?php
                                                    foreach($Kishan_land as $Kishan_lan){
                                                        echo '<option value='.$Kishan_lan->land_id.'>'.$Kishan_lan->khesra_no.'&nbsp;&nbsp;/ &nbsp;&nbsp;'.$Kishan_lan->land_details.'</option>';
                                                    }
                                                    ?>
                                                    </select>
                                                    </div>
                                                </div><script>
                                                    $(document).ready(function() {
                                                        $('#kisan_land').change(function(){
                                                            var single_land_select=$('#kisan_land option:selected').val();
                                                            $('#kishan_details').val(single_land_select)
                                                            // alert(single_land_select);
                                                            // $.ajax({
                                                            //         url: '<?php //echo base_url() ?>Crud/single_land_selects',
                                                            //         type: 'POST',
                                                            //         data: {'single_land_select': single_land_select },
                                                            //         dataType: 'html',
                                                            //         success: function(kishan_details) {
                                                            //         alert(kishan_details);
                                                            //             $('#kishan_details').html(kishan_details)
                                                            //         }
                                                            //     });
                                                            // $('#disply_kisan_lands').val(disply_kisan_land);
                                                //             $details = $this->Main_model->getSingleRow('kisan_land',$Kishan_lan->land_id) ;
                                                //    echo $details;
                                                        });
                                                    });
                                                </script>
                                       <div class="col-md-4">
                                                    <div class="form-group"></div></div>             

                                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                            <input type="hidden" name="kisan_uid"readonly="readonly" value="<?php echo $_GET['id'];?>">
                                                            <label class="form-label">Land</label>
                                                            <input type="text" name="land" readonly="readonly" id="kishan_details" class="form-control form-txt-primary" placeholder="">
                                                            <!-- <input type="hidden" name="visit_kisan_id" id="visit_kisan_id"
                                                            value="<?php //echo $this->session->userdata('newdata')['k_id'];?>"> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Seed Crop Type used </label>
                                                                    <?php
                                                                    $data['seed_type'] = $this->db->query('select * from seed_type')->result(); ?>
                                                                    <select name="seed_type_crop" id="seed_type_crop" class="form-control form-txt-primary" onchange="seedsSun();" style="width: 100%;border-radius: 15px;padding: 10px;">
                                                                        <?php $seed_i = 1;
                                                                        $select_seed = 1;
                                                                        echo"<option value=''>---- Select Crop Type ----</option>";
                                                                        foreach ($data['seed_type'] as $b) {
                                                                            echo "<option value='$b->id'>$b->seed_type</option>";
                                                                            $select_seed = $seed_i + 1;
                                                                            $seed_i++;
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                 </div>
                                                                <!-- ========================================== Select_crops_sub_types =============================================== -->
                                                               
                                                            </div>
                                                            <script>
                                                                $(function(){
                                                                    $('#seed_type_crop').change(function(){
                                                                        var sun_is_crop_typ =$('#seed_type_crop option:selected').val();
                                                                        // alert(sun_is_crop_typ);
                                                                        // $('#sun_is_crop_type').val(sun_is_crop_typ);
                                                                        $.ajax({
                                                                                url: "<?php echo base_url('Crud/sun_of_seed') ?>",
                                                                                data: { 'sun_of_seed': sun_is_crop_typ },
                                                                                type: 'POST',
                                                                                dataType: 'html',
                                                                                success: function(seedopt) {

                                                                                    $('#seed_subtype').html(seedopt);
                                                                                    //alert('Complain Inserted Sucefully');
                                                                                }
                                                                            });
                                                   
                                                                    })
                                                                })
                                                                </script>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select Crops Sub Types </label>

                                                                    <select name="seed_subtype" id="seed_subtype"  style="width: 100%;border-radius: 15px;padding: 10px;" class="form-control form-txt-primary sun_seed_subtype">
                                                                        <option value="">---- Select Seeds Crop ----</option>
                                                                    </select>
                                                                    </div></div>
                                                     
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
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Purchased From (Shop Details)</label>
                                                            <input type="text" name="purchased" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                <h4 class="sub-title"> Issues with the crop</h4>
                                                        </div></div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Diseases</label>
                                                            <input type="text" name="diseases" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <?php
                                                //    $data['kisan_seeds'] = $this->db->query('select * from kisan_visit')->result();
                                                  $data['kisan_visit']=$this->Main_model->getAll('kisan_visit','visit_id ','desc');

                                                  $data_ins = array();        
                                                    foreach( $data['kisan_visit'] as $valses){
                                                                    $data_ins[] =$valses->diseases_type;
                                                                }
                                                                 $f_deficiences_t_rests = array_unique($data_ins);
                                                 ?>
                                                  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"> Type  </label>
                                                            <select name="select" name="diseases_type" class="form-control form-txt-primary">                                                                
                                                            <option value="">--- Plase Select Type ---</option>
                                                            <?php 
                                                             for($k=0;$k < count($data_ins);$k++){
                                                                if($f_deficiences_t_rests[$k] != ''){
                                                              echo "<option value='$f_deficiences_t_rests[$k]'>$f_deficiences_t_rests[$k]</option>";
                                                                   } }?>
                                                                     <input type ="text" name="diseases_type" placeholder="इसका उपयोग तब करें जब आपको विकल्प nhi . मिले" style="width:100%">
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

                                                  $data['kisan_visit']=$this->Main_model->getAll('kisan_visit','visit_id','desc'); 
                                                 $data['kisan_visit'] = $this->db->query('select * from kisan_visit')->result();
                                                 
                                                 $data_in = array();        
                                                    foreach( $data['kisan_visit'] as $valse){
                                                                    $data_in[] =$valse->insect_type;
                                                                }
                                                                 $f_deficiences_t_rest = array_unique($data_in); ?>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"> Type  </label>
                                                            <select name="insect_type" class="form-control form-txt-primary">                                                            
                                                            <option value="">--- Select Types ---</option>
                                                            <?php 
                                                             for($k=0;$k < count($data_in);$k++){
                                                                if($f_deficiences_t_rest[$k] != ''){
                                                              echo "<option value='$f_deficiences_t_rest[$k]'>$f_deficiences_t_rest[$k]</option>";
                                                                   } }?>
                                                                     <input type ="text" name="insect_type" placeholder="कीड़ों के प्रकार का विकल्प नहीं होने पर इस का उपयोग करें" style="width:100%">

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
                                                     $datas=$this->Main_model->getAll('kisan_visit','kisan_enquiry_id ','desc'); 
                                                    // $datas = $this->db->query('select * from kisan_visit')->result();
                                                    $data_vals = array();        
                                                    foreach($datas as $valse){
                                                                    $data_vals[] =$valse->deficiences_type;
                                                                }
                                                   $f_deficiences_t_res = array_unique($data_vals);
                                                //    print_r($f_deficiences_t_res);
                                                    ?>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"> Type  </label>
                                                            <select name="deficiences_type" class="form-control form-txt-primary">
                                                                
                                                            <option value="">--- Plase Select Type ---</option>
                                                            <?php 
                                                             for($k=0;$k < count($data_vals);$k++){
                                                                if($f_deficiences_t_res[$k] != ''){
                                                              echo "<option value='$f_deficiences_t_res[$k]'>$f_deficiences_t_res[$k]</option>";
                                                                   } }?>
                                               
                                                            </select>
                                                            <input type ="text" name="deficiences_type" placeholder="कमियों का विकल्प नहीं होने पर इसका उपयोग करें" style="width: 100%;">
                                                        </div>        
                                                    </div>
                                                    <!-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Deficiencies</label>
                                                            <input type="text" name="deficiences" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <?php
                                                    //  $data['kisan_visit']=$this->Main_model->getAll('kisan_visit','visit_id ','desc');
                                                    // $data['kisan_visit'] = $this->db->query('select * from kisan_visit')->result();?>
                                                     
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"> Type  </label>
                                                            <select name="type" class="form-control form-txt-primary">
                                                            <?php 
                                                            //  foreach($data['kisan_visit'] as $b){
                                                            //   echo "<option value='$b->visit_id '>$b->type</option>";
                                                            // }
                                                            //   echo "<option value='Add more'>
                                                            //    <input type='text' class='form-control' placeholder='Your Email' id='mail' name='email'>
                                                            //     </option>";
                                                                  
                                                                  ?>                                                       
                                                            </select>
                                                         
 </div>

                                                         </div>        
                                                    </div>-->
                                                

                                                 <?php
                                                 $data['kisan_visit']=$this->Main_model->getAll('kisan_visit','visit_id ','desc');
                                                $data['kisan_visit'] = $this->db->query('select * from kisan_visit')->result();
                                                $data_valst = array();        
                                                    foreach($datas as $valse){
                                                                    $data_valst[] =$valse->seed_type;
                                                                }
                                                   $f_seed_type_t_res = array_unique($data_valst);
                                                ?> 
<div class="col-md-12">
                                                        <div class="form-group">
                                                <h4 class="sub-title">Crop impact %age</h4>
                                                        </div></div>
                                                
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Seed Crop Type </label>
                                                            <select name="seed_type" class="form-control form-txt-primary">
                                                                  <option value="">---- Plase Select Seed Crop Type ----</option>
                                                                  <?php 
                                                             for($k=0;$k < count($data_valst);$k++){
                                                                if($f_seed_type_t_res[$k] != ''){
                                                              echo "<option value='$f_seed_type_t_res[$k]'>$f_seed_type_t_res[$k]</option>";
                                                                   } }?>
                                                                     <input type ="text" name="seed_type" placeholder="फसल प्रभाव विकल्प नहीं होने पर इस का उपयोग करें">
                                                                  
                                                            </select>
                                                        </div>        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Impact %age</label>
                                                            <input type="text" name="impact" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                 
                                                
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                <h4 class="sub-title">Labour Cost</h4></div></div>
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
                                                       
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Expense Name</label>
                                                            <input type="text" name="expense_name" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Cost</label>
                                                            <input type="text" name="expense_cost" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                <h4 class="sub-title">Equipment Used & Their Cost</h4></div></div>
                                                
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
                                                        <h5>Upload image input</h5>
                                                       <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                                            <input id="upload" type="file" name="image" onchange="readURL(this);" class="form-control border-0">
                                                            <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                                            <div class="input-group-append">
                                                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                                            </div>
                                                        </div>

                                                        <!-- <h3 >Uploaded image area </h3> -->
                                                        <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                                                        <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" style="width:20%"></div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                <h4 class="sub-title">  Total Earning of the Farmer, Season WISE</h4></div></div>
                                               
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
                                                            <input type="text" name="place_details" class="form-control form-txt-primary" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="submit" name="submit"class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit">
                                                        </div></div>
                                                    
                                                        
                                                    </div>
                                                    </form>    

</div>


                                                    <div class="tab-pane" id="Time_seeds" role="tabpanel" aria-expanded="false">
                                                        
                                                        <h4 class="sub-title">A - Seeds Details</h4>
                                                        <?php if(!empty($_GET['id'])){ 
                                                            $where_land_unop = array('land_kisan_id'=>$_GET['id']);
                                                           $get_landdatas =  $this->Main_model->getAllWheresun('kisan_land',$where_land_unop);
    
                                                           $where_land_getun = array('kisan_id'=>$_GET['id'],'status'=>'active');
                                                           $get_land_seedsid =  $this->Main_model->getAllWheresun('kisan_seeds',$where_land_getun);
                                                        //    print_r($get_land_seedsid);
                                                            ?>
                                                        <form action="<?php echo base_url()?>crud/selectcrops_sun_button" method="post" enctype="multipart/form-data">
                                                        <div class="row">
                                                        <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <select style="width: 50%;height: 36px;border-radius: 12px;border: 1px solid darkgreen;" name="land_Time_seeds" required>
                                                                    <option style="text-align:center;color:white;background-color:green" value="" disabled selected>----- Select Khasra Number -----</option>
                                                                    <?php foreach($get_landdatas as $val_land){
                                                                         if(!empty($get_land_seedsid)){
                                                                        for($k=0;$k<count($get_land_seedsid);$k++){
                                                                           if($val_land->land_id != $get_land_seedsid[$k]->land_id){
                                                                        ?>
                                                                    <option value="<?php echo $val_land->land_id; ?>"><?php echo "$val_land->khesra_no; / $val_land->land_details"?></option> <?php }}}else{ ?>
                                                                         <option value="<?php echo $val_land->land_id; ?>"><?php echo "$val_land->khesra_no; / $val_land->land_details"?></option><?php

                                                                    } }?></select><input type="hidden" id="kisan_land_newseason" value="<?php echo $_GET['id']?>"/><button id="status" value="deactive" type="button" style="margin-left: 32%; width: 129px;padding: 6px;background-color: darkgreen;color: wheat;border-radius: 12px;">Renew Season</button>
                                                                </div></div>
    
                                                            <!-- Seed Crop Type -->
                                                            <div class="col-md-6">
                                                                    <div class="form-group">
                                                                       <input type="hidden" name="seed_kisan_id" value="<?php echo $_GET['id']?>"> <label class="form-label">Seed Crop Type used </label>
                                                                        <?php
                                                                        $data['seed_type'] = $this->db->query('select * from seed_type')->result(); ?>
                                                                        <select name="seed_type" id="seed_type" class="form-control form-txt-primary" onchange="seedsSun();">
                                                                            <?php $seed_i = 1;
                                                                            $select_seed = 1;
                                                                            echo"<option value=''>---- Select Crop Type ----</option>";
                                                                            foreach ($data['seed_type'] as $b) {
                                                                                echo "<option value='$b->id'>$b->seed_type</option>";
                                                                                $select_seed = $seed_i + 1;
                                                                                $seed_i++;
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    <!-- </div>
                                                                    <div class="form-group"> -->
                                                                        <!-- <input type='text' id='seedopt' style="margin-top:12px;">
                                                                        <button id='butn' type='button' onclick="submitDatas()">Add</button> -->
                                                                     </div>
                                                                    <!-- ========================================== Select_crops_sub_types =============================================== -->
                                                                   
                                                                </div>
                                                                <!-- ================================================ end Select_crops_sub_types  ========================================================== -->
                                                                <!------------------- seed Crop Sub type ---------------   -->
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Select Crops Sub Types </label>
    
                                                                        <select name="seed_subtype" id="seed_subtype1" class="form-control form-txt-primary sun_seed_subtype">
                                                                            <option value="">---- Select Seeds Crop ----</option>
                                                                        </select>
                                                                        </div></div><div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <button type="button" id='addSubC' onclick=" document.getElementById('AddSubcrop').style.display = 'inline' " style="margin-top: 27px;border-radius: 15px;padding: 9px;background-color: blanchedalmond;border: 1px solid gray;">Add Crops</button>
                                                                        
                                                                        <input type="hidden" name="sun_is_crop_types" class="sun_is_crop_types" id="sun_is_crop_type">
                                                                    </div></div>
                                                                        <div class="col-md-12 " id="AddSubcrop" style="display:none;">
                                                                        <div class="form-group" style="text-align: center;">
                                                                        <button type="button" class="addService" style="border-radius: 100px;margin-top:12px;background-color:cadetblue;border:1px solid white;padding:12px;color:floralwhite;">Add Sub Crop</button>
                                                                        <input type="submit" id="selectcrops_sun_button" style="border-radius: 100px;margin-top:12px;background-color:green;border:1px solid white;padding:12px;color:white;" value="Sub Crop Submit">
                                                                    </div> </div>
                                                            <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Crop Name</label>
                                                                            <input type="text" name="Crop_name" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                </div>
                                                                <!-- <form method="post" action="<?php //echo base_url(); ?>Crud/seeds"> -->
                                                                <div class="col-md-6">
                                                                   
                                                                        <div class="form-group">
                                                                            <label class="form-label">Land Used for Sowing(Total Land or from Section III)</label>
                                                                            <input type="text" name="land_used_sowing" class="form-control form-txt-primary" placeholder="">
                                                                        </div>
                                                                </div>
    
    
    
    
    
    
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Seed Brand/Company Name</label>
                                                                        <input type="text" name="seed_brand" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                            <h4 class="sub-title">A - Seed Purchase Details</h4> </div></div>
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
                                                                        <label class="form-label">purchased From (Shop Details)</label>
                                                                        <input type="text" name="purchased_from" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
    
    
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Bill Image (optional)</label>
                                                                        <input type="file" name="image1" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
    
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Purchase Date</label>
                                                                        <input type="date" name="date" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
    
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                    </div></div>
                                                            <hr>
                                                            <div class="col-md-12">
                                                                    <div class="form-group">
                                                            <h4 class="sub-title">B - Seed Treatment Details</h4>
                                                            <h4>Seed treatment product Used</h4>
                                                        </div></div>
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
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Purchased From (Shop Details)</label>
    
                                                                        <input type="text" name="purchased" class="form-control form-txt-primary" placeholder="">
                                                                    </div></div>
                                                                    <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Seed Treatment Bill Image</label>
                                                            
    
                                                            <input type="file" name="treimage" class="form-control form-txt-primary" placeholder=""> 
                                                                    </div>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label class="form-label">Seed Treatment Date</label>
                                                            <input type="date" name="tredate" class="form-control form-txt-primary" placeholder=""> 
                                                            </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group"></div></div>
                                                            <div class="col-md-12">
                                                            <div class="form-group">
                                                            <h4 class="sub-title">C - Showing Land Prepration cost</h4>
                                                            <h4>cost</h4>
                                                            </div></div>
                                                            <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Labour</label>
                                                                        <input type="text" name="labour" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="abc"> -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label"> Labour Cost</label>
                                                                        <input type="text" name="labour_cost" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div><div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Expense Name</label>
                                                                        <input type="text" name="Expense_name" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <!-- </div> -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label"> Cost</label>
                                              <input type="text" name="Expense_cost" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                
    <hr>
    
    <h4>Fertication</h4></div></div>
    <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Fertication</label>
                                                                        <input type="text" name="fertication" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">  Cost</label>
                                              <input type="text" name="fertication_cost" class="form-control form-txt-primary" placeholder="">
                                                                    </div>
                                                                </div>
                                                                    <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <input type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="submit">
                                                                    </div></div>  </div>  
                                                                    </form>
                                                                    <?php }else{
                                                                        echo'Plase Kisan Add Personal Information';
                                                                        }?>
                                                        </div>
            
                                                        <?php } ?>
            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div></div></div></div></div></div></div>

                                        



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
                                                                <th>Center id</th>  
                                                                <td id="centerid"></td>  
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














<script type="text/javascript" src="../application\views\kisan/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../application\views\kisan/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../application\views\kisan/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="../application\views\kisan/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../application\views\kisan/js/bootstrap/bootstrap.bundle.min.js"></script>
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
<script type="text/javascript" src="../application\views\kisan/js/uploadimage.js"></script>
<script>
    $("#status").click(function(){
        let status = $('#status').val();
        let kisan_land_newseason = $('#kisan_land_newseason').val();
        alert("New Season Start");
        $.ajax({
                url: "<?php echo base_url('Crud/new_season_land') ?>",
                data: { 'status': status,'kisan_land_newseason':kisan_land_newseason },
                type: 'POST',
                dataType: 'json',
                success: function(response) {
                    location.href=`<?php echo base_url("Crud/visits?id=");?>${response}`;
                    // alert(response)
                    // alert("New Season Start");
            }
        });
    });

                                                                         function seedsSun() {
                                                                            var sun_of_seed = $('#seed_type').val();
                                                                            $.ajax({
                                                                                url: '<?php echo base_url() ?>Crud/sun_of_seed',
                                                                                type: 'POST',
                                                                                data: {'sun_of_seed': sun_of_seed  },
                                                                                dataType: 'html',
                                                                                success: function(sun_seeds) {
                                                                                    // alert(sun_seeds);
                                                                                    $('#seed_subtype1').html(sun_seeds)
                                                                                }
                                                                            });
                                                                        }
                                                                        $(function(){
                                                                    $('#seed_type_crop').change(function(){
                                                                        var sun_is_crop_typ =$('#seed_type_crop option:selected').val();
                                                                        // alert(sun_is_crop_typ);
                                                                        // $('#sun_is_crop_type').val(sun_is_crop_typ);
                                                                        $.ajax({
                                                                                url: "<?php echo base_url('Crud/sun_of_seed') ?>",
                                                                                data: { 'sun_of_seed': sun_is_crop_typ },
                                                                                type: 'POST',
                                                                                dataType: 'html',
                                                                                success: function(seedopt) {

                                                                                    $('#seed_subtype').html(seedopt);
                                                                                    //alert('Complain Inserted Sucefully');
                                                                                }
                                                                            });
                                                   
                                                                    })
                                                                })
                                                                        //   $("#butn").click(function() {
                                                                        //     var seedopt = $("#seedopt").val();
                                                                        //     var select_seed = $('#select_seed').val();
                                                                        //     $("#seed_type").append("<option selected value=" + select_seed + ">" + seedopt + "</option>");
                                                                        //     $("#seedopt").val("");
                                                                        // });
 </script>

</body>
</html>