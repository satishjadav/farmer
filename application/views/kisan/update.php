<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="images/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Google font-->
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

</h1>Update page.....................................</h1>

<?php
foreach($images as $val){
?>
<form method="post" action="<?=site_url('Crud/update/').$val->kisan_id;?>" enctype="multipart/form-data">

<!--<input type="file" class="form-control" name="image"  placeholder="image"/><img src="<?php //echo base_url($ids->image);?>">
-->
<table align="center">
<tr>
<td>Name</td>
<td><input type="text" class="form-control" value="<?php echo $val->kisan_full_name;?>"  name="kisan_full_name"/><br>
</td>
</tr>
<tr>
<td>Mobile </td>
<td>
<input type="text" class="form-control" value="<?php echo $val->mobile_no;?>"  name="mobile_no"/>
</td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" class="form-control" value="<?php echo $val->age;?>"  name="age"/></td>
</tr>
<tr>
<td>education</td>
<td><input type="text" class="form-control" value="<?php echo $val->education;?>"  name="education"/></td>
</tr>
<tr>
<td>full_address</td>
<td><input type="text" class="form-control" value="<?php echo $val->full_address;?>"  name="full_address"/></td>
</tr>
<tr>
<td>gender</td>
<td><input type="text" class="form-control" value="<?php echo $val->gender;?>"  name="gender"/></td>
</tr>
<tr>
<td>child_count</td>
<td><input type="text" class="form-control" value="<?php echo $val->child_count;?>"  name="child_count"/></td>
</tr>
<tr>
<td>father_name</td>
<td><input type="text" class="form-control" value="<?php echo $val->father_name;?>"  name="father_name"/></td>
</tr>

<tr>
<td>mother_name</td>
<td><input type="text" class="form-control" value="<?php echo $val->mother_name;?>"  name="mother_name"/></td>
</tr>

<tr>
<td>husband_name</td>
<td><input type="text" class="form-control" value="<?php echo $val->husband_name;?>"  name="husband_name"/></td>
</tr>

<tr>
<td>other_profession</td>
<td><input type="text" class="form-control" value="<?php echo $val->other_profession;?>"  name="other_profession"/></td>
</tr>

<tr>
<td>profession_name</td>
<td><input type="text" class="form-control" value="<?php echo $val->profession_name;?>"  name="profession_name"/></td>
</tr>

<tr>
<td>by_whom</td>
<td><input type="text" class="form-control" value="<?php echo $val->by_whom;?>"  name="by_whom"/></td>
</tr>
<tr>
<td>
<input type="submit" class="btn btn-success" name="submit" value="submit">
</td>
</tr>
<?php }?>
</form>


</body>
</html>