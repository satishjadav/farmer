<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="<?php echo base_url(); ?>application/views/kisan/Images/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{title}}|<?php echo $title; ?></title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/kisan/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/kisan/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/kisan/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/kisan/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/kisan/css/jquery.mCustomScrollbar.css">
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

    <div class="body">        
        <div class="pcoded-overlay-box"></div>
         <!-- Body Content-->

            <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
                <!-- Container-fluid starts -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Authentication card start -->
                            <div class="login-card card-block auth-body mr-auto ml-auto">

                                <form method="post" action="<?php echo base_url(); ?>Crud/login_validation">
                                
                                    <div class="text-center col-md-12">
                                        <!-- <img src="application/views/kisan/s.jpg" alt="s.jpg" class="img-fluid" width="150"> 
                                        <link rel="logo" href="<?php echo base_url(); ?>application/views/kisan/s.jpg"> -->
                                        <img src="<?php echo base_url('application/views/kisan/s.jpg'); ?>" style="width: 30%;border-radius: 50%;"/>
                                        <!--<img src="images/gallery/image01.jpg">-->
                                    </div>
                                    <div class="auth-box">
                                        <div class="row m-b-20">
                                            <div class="col-md-12">
                                                <h3 class="text-left txt-primary">Sign In</h3>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="input-group">
                                            <input type="name" name="username" id="username" class="form-control" placeholder="Your username">
                                            <span class="md-line"></span>
                                        </div>
                                        <div class="input-group">
                                            <input type="password" name="password"class="form-control" placeholder="Password">
                                            
                                            <span class="md-line"></span>
                                        </div>
                                        
                                        <div class="row m-t-25 text-left">
                                            <div class="col-sm-7 col-xs-12">
                                                <div class="checkbox-fade fade-in-primary">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                        <span class="text-inverse">Remember me</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                                                <a id="forgotpassword" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>
                                                <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="padding: 3px;border-radius: 12%;margin-left: -73px;">Forgot Your Password</button> -->
                                            </div>
                                        </div>
                                        <div class="row m-t-30">
                                            <div class="col-md-12">
                                                <input type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="Sign in">
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <p class="text-inverse text-left m-b-0">Thank you.</p>
                                                <p class="text-inverse text-left"><b>Your Authentication Team</b></p>
                                            </div>
                                            <div class="col-md-2">
                                                <img src="<?php echo base_url('application/views/kisan/images/logo.png')?>" alt="small-logo.png" width="50">
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                <!-- end of form -->
                            </div>
                            <!-- Authentication card end -->
                        </div>
                        <!-- end of col-sm-12 -->
                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of container-fluid -->
            </section>
         <!-- End -->
    </div>

<div id="myModal" role="dialog" class="modal fade">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Send otp</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input id="relation" style="width: 60%;border-radius: 12px;padding: 5px;border: 1px solid darkgray;" readonly>
            </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Mobile Number</label>
                <input type="text" name="cphone" class="form-control form-txt-primary" style="width: 73%;border-radius: 12px;" id="userid_name">
                <button type="button" class="btn btn-sm btn-primary" style="position: absolute;right: 100px;top: 29px;border-radius: 12px;" id="sendoptuser">Send OTP</button>
                <span id="message" style="color:red;"></span>
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

<div id="otpmanmodel" role="dialog" class="modal fade">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: darkseagreen;color: antiquewhite;">
        <h4 class="modal-title">New Password</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input id="relations" style="width: 60%;border-radius: 12px;padding: 5px;border: 1px solid darkgray;" readonly>
            </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" name="checkopt" class="form-control form-txt-primary" style="width: 73%;border-radius: 12px;margin-top: 12px;" id="checkopt" placeholder="Enter otp">
                </div></div><div class="col-md-12">
            <div class="form-group">
                <span id="otpmgs" style="color:red;"></span></div></div>
            <div class="col-md-12">
            <div class="form-group">
                <input type="text" id="password" style="padding: 6px;border-radius: 12px;" placeholder="Enter Password"><input type="password" id="cpassword" style="padding: 6px;border-radius: 12px;margin-left: 21px;" placeholder="Enter Conform Password">
                 <!-- <button type="button" class="btn btn-sm btn-primary" style="position: absolute;right: 100px;top: 29px;border-radius: 12px;" id="sendoptuser">Send OTP</button> -->
                </div></div>
            <div class="col-md-12">
            <div class="form-group">
                <button type="button" class="btn btn-sm" id="newpasswordset" style="background-color:darkseagreen;color: white;border-radius: 12px;">Set New Password</button>
                
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
<script type="text/javascript" src="<?php echo base_url(); ?>application/views/kisan/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application/views/kisan/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application/views/kisan/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application/views/kisan/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo base_url(); ?>application/views/kisan/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo base_url(); ?>application/views/kisan/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="<?php echo base_url(); ?>application/views/kisan/pages/widget/amchart/amcharts.min.js"></script>
<script src="<?php echo base_url(); ?>application/views/kisan/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="<?php echo base_url(); ?>application/views/kisan/pages/todo/todo.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?php echo base_url(); ?>application/views/kisan/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application/views/kisan/js/script.js"></script>
<script type="text/javascript " src="<?php echo base_url(); ?>application/views/kisan/js/SmoothScroll.js"></script>
<script src="<?php echo base_url(); ?>application/views/kisan/js/pcoded.min.js"></script>
<script src="<?php echo base_url(); ?>application/views/kisan/js/demo-12.js"></script>
<script src="<?php echo base_url(); ?>application/views/kisan/js/jquery.mCustomScrollbar.concat.min.js"></script>
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

 $(document).ready(function(){
    $('#forgotpassword').click(function(){
        var username = $('#username').val();
        // alert(username);
        $('#relation').val(username);
        $('#myModal').modal('show');

    })
 })

 $(document).ready(function(){
    $('#sendoptuser').click(function(){
        var relation = $('#relation').val();   
        // alert(relation);
       var mrotp = $('#userid_name').val();
       $('#relations').val(relation); 
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
        $('#message').text('proceesing send otp');
        $("#message").fadeIn('slow').animate({opacity: 1.0}, 1500).effect("pulsate", { times: 2 }, 800).fadeOut('slow'); 
        // alert(mrotp);
    $.ajax({
            url: "<?php echo base_url('Crud/forggetpasswordone') ?>",
            data: { 'cotp': mrotp,'relation':relation },
            type: 'POST',
            dataType: 'html',
            success: function(satish) {  
                // alert(satish);  
                if(satish.trim() === "send opt"){
$('#message').html(satish);
$("#message").fadeIn('slow').animate({opacity: 1.0}, 1500).effect("pulsate", { times: 2 }, 800).fadeOut('slow');   

$('#otpmanmodel').modal('show');
}
if(satish.trim() === "plase Check"){
$('#message').html(satish);
$("#message").fadeIn('slow').animate({opacity: 1.0}, 1500).effect("pulsate", { times: 2 }, 800).fadeOut('slow');       
}          
            //     location.href=`Center?centerunid=${satish.trim()}`;
            // $("#mrunid").val(satish);
            }
        });}
    });

$('#newpasswordset').click(function(){
 var pass = $('#password').val();
 var cpass = $('#cpassword').val();

 var checkopt = $('#checkopt').val();
 var relations = $('#relations').val();
//   alert(checkopt);
//  if(empty(pass) != empty(cpass)){
//         $('#message').val('Not Match password');
//         $("#message").fadeIn('slow').animate({opacity: 1.0}, 1500).effect("pulsate", { times: 2 }, 800).fadeOut('slow'); 
//         return false;
// }else{
    $.ajax({
            url: "<?php echo base_url('Crud/newpassword_set') ?>",
            data: { 'checkopt': checkopt,'relations':relations,'newpass':pass,'cpass':cpass},
            type: 'POST',
            dataType: 'html',
            success: function(satish) {  
                // alert(satish);
                if(satish.trim() === "success"){
                    location.href="<?php base_url('Crud/login');?>";
                }
                if(satish.trim() === "Plase check Otp"){
                $("#otpmgs").html(satish);
                $("#otpmgs").fadeIn('slow').animate({opacity: 1.0}, 1500).effect("pulsate", { times: 2 }, 800).fadeOut('slow');  
            }
            if(satish.trim() === "Not metch password"){
                $('#otpmgs').html(satish);
                $("#otpmgs").fadeIn('slow').animate({opacity: 1.0}, 1500).effect("pulsate", { times: 2 }, 800).fadeOut('slow');  
            }
        }
        });
// }

})
})
</script>
</body>
</html>