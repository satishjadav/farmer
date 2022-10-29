  <?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');
class Crud extends CI_controller
{
     public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('encryption');
        $this->load->library('session');
        $this->load->model('Main_model');
    }
public function student_inserts(){
    $this->load->view("kisan/satishkumar");
}
public function textsak(){    
    $img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error    = $_FILES['my_image']['error'];
    if ($error === 0) {
		if ($img_size > 1000000) {
			$em = "Sorry, your file is too large.";
            $error = array('error' => 1, 'em'=> $em);
            echo json_encode($error);
		    exit();
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png");
            if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = "uploads/kisan".$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                $this->db->query("insert into center(image) VALUES('$new_img_name')");
                $res = array('error' => 0, 'src'=> $new_img_name);
                echo json_encode($res);
			    exit();

			}else {
				$em = "You can't upload files of this type";
				$error = array('error' => 1, 'em'=> $em);
			    echo json_encode($error);
			    exit();
			}
		}
	}else {
		$em = "unknown error occurred!";
		$error = array('error' => 1, 'em'=> $em);
		echo json_encode($error);
	    exit();
	}
}

public function Marketing_Person_List(){
    $this->load->view("kisan/MarketingPersonList");
}

public function token(){
    $jwt = new JWT();
    $JwtSecretKey = "Mysecretwordshere";
    $data= array(
        'userId'=>145,
        'email'=>'satish@gmail.com',
        'userType'=>'admin',
    );
    $token = $jwt->encode($data,$JwtSecretKey,'HS256');
    echo $token;
}
public function kisan(){
    $this->load->view('kisan/kisan');
}

public function kisan_mr(){
    $this->load->view('kisan/kisan_marketing');
}
public function getcenterinfor(){
    $getmrid = $this->input->post('mr_getidshow');
    $singalmrget = $this->Main_model->getAllWheresun('marketing_man',array('id'=>$getmrid));
    foreach($singalmrget as $getvals){
        $val = ['center'=>$getvals->center,'username'=>$getvals->username,'email'=>$getvals->email,'phone'=>$getvals->mobile,'city'=>$getvals->city,'address'=>$getvals->address];
    echo json_encode($val);
    }
}
public function Center_information(){
    $this->load->view('kisan/Center_information');
}
public function mr_getdatas(){
    $mr_id = $this->input->post('mr_unids');
    $mr_where = array('id'=>$mr_id);
    $data = $this->Main_model->getAllWheresun('marketing_man',$mr_where);
    echo json_encode($data);
}

public function center_getdatas(){
    $center_id = $this->input->post('center_unids');
    $center_where = array('id'=>$center_id);
    $data = $this->Main_model->getAllWheresun('center',$center_where);
    echo json_encode($data);
}
public function upload_crop_image(){
    if($_POST['image']){

        $imgblob = $_POST['image'];   //$this->input->post('image');
        
        $remove_type = explode(';',$imgblob);
        
        $remove_base = explode(",",$remove_type[1]);
        $final_data = $remove_base[1];
        $final_data_de = base64_decode($final_data);
        $fn = time().'.jpg';
        file_put_contents('uploads/center/'.$fn,$final_data_de);
       $path = "uploads/center/$fn";
        $url = "<img src='../uploads/center/$fn' style='width:70%;margin-left: 32px;'>";
        $data= array('path'=>$path,'url'=>$url);
        echo json_encode($data);
}
}
public function center_in(){
  
    $centername = $this->input->post('centername');
    $relation = $this->input->post('relation');
    // $role = $this->input->post('role');
    $id_us = $this->input->post('id_u');
    $centermanager = $this->input->post('centermanager');
    $cemail = $this->input->post('cemail');
    $username = $this->input->post('username');
    $cpassword = $this->input->post('cpassword');
    $cphone = $this->input->post('cphone');
    $cplace = $this->input->post('cplace');
    $caddress = $this->input->post('caddress');
    $cotp = $this->input->post('cotp');
    $image = $this->input->post('my_image');
    // print_r($centermanager);die;

    // $img_name = $_FILES['my_image']['name'];
	// $img_size = $_FILES['my_image']['size'];
	// $tmp_name = $_FILES['my_image']['tmp_name'];
	// $error    = $_FILES['my_image']['error'];
    // if ($error === 0) {
	// 	if ($img_size > 1000000) {
	// 		$em = "Sorry, your file is too large.";
    //         $error = array('error' => 1, 'em'=> $em);
    //         echo json_encode($error);
	// 	    exit();
	// 	}else {
	// 		$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    //         $img_ex_lc = strtolower($img_ex);
    //         $allowed_exs = array("jpg", "jpeg", "png");
    //         if (in_array($img_ex_lc, $allowed_exs)) {
                if(!empty($cphone)){
                $un_id_date = date('Y');
                $un_id_infor = 'CENTERID0';
                $data = $this->db->query("select * from center where otp = $cotp AND id=$id_us")->result();
                $un_id_mrperson = "$un_id_date$un_id_infor$id_us";
                // $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                // print_r($image);die;
                if((count($data) == 1) && !empty($username) && !empty($relation) && !empty($centermanager) && !empty($cemail) && !empty($cpassword) && !empty($cplace) && !empty($centername) && !empty($caddress) && !empty($image)){
        
                // $img_upload_path = "uploads/center/".$new_img_name;
                // move_uploaded_file($tmp_name, $img_upload_path);

                $this->db->query("update center set un_center_id ='$un_id_mrperson',created_center_id='$relation' ,user_name ='$username',centername='$centername',password ='$cpassword',place_name='$cplace' ,email = '$cemail' ,image ='$image',center_manager='$centermanager',address='$caddress',status='active',role='2' where id='$id_us'");
                                
                $vdata = array('un_id'=>$un_id_mrperson,'role'=>'2','password'=>$cpassword,'relation_id'=>$id_us);
                $this->Main_model->saverecords('login_funcation',$vdata);
                echo 'Data is Insert';
			    exit();
                }else{
                    echo 'Otp Not Metch';                    
			    exit();
                    
                }}else{
                    echo 'Plase Phone';
                }
                

		// 	}else {
		// 		$em = "You can't upload files of this type";
		// 		$error = array('error' => 1, 'em'=> $em);
		// 	    echo json_encode($error);
		// 	    exit();
		// 	}
		// }}else {
        //     $em = "unknown error occurred!";
        //     $error = array('error' => 1, 'em'=> $em);
        //     echo json_encode($error);
        //     exit();
        // } 
 
    

   

    // $un_id_date = date('Y');
    // $un_id_infor = 'CENTERID0';
    

    // if(!empty($cphone)){
    //     $data = $this->db->query("select * from center where otp = $cotp AND id=$id_us")->result();
    //     $un_id_mrperson = "$un_id_date$un_id_infor$id_us";
    //     if((count($data) == 1) && !empty($username) && !empty($relation) && !empty($centermanager) && !empty($cemail) && !empty($cpassword) && !empty($cplace) && !empty($centername) && !empty($caddress)&& !empty($imagepath)){
    //        $this->db->query("update center set un_center_id ='$un_id_mrperson',created_center_id='$relation' ,user_name ='$username','centername'='$centername',password ='$cpassword',place_name='$cplace' ,email = '$cemail' ,image ='$imagepath',center_manager='$centermanager',address='$caddress',status='active',role='2' where id='$id_us'");
    //         $vdata = array('un_id'=>$un_id_mrperson,'role'=>'2','password'=>$cpassword,'relation_id'=>$id_us);
    //        $this->Main_model->saverecords('login_funcation',$vdata);
    //        echo'Data is Insert';
    //       }
    //     else{
    //         echo'Otp Not Metch';
    //     }
    // }

 
    // print_r($datacenter);die;
}

public function create_otp_mr(){
    if(!empty($this->input->post('cotp'))){
        $mrphones = $this->input->post('cotp');
        $otpmr = rand(00000,11111);
        $datasmr = array(
            'phone'=>$mrphones,
            'otp'=>$otpmr,
            'status'=>'deactive'
        );
        $this->db->insert('center',$datasmr);
$data=$this->db->insert_id();
print_r($data);
    }
    else{
        echo'No generate_otp';
    }
}

public function Add_Marketing_Person(){
    $data['mrcenter'] = $this->Main_model->getAll('center');
    $this->load->view("Kisan/AddMarketingPerson",$data);
}
public function generate_otp_mr(){
    if(!empty($this->input->post('mrotp'))){+
        $mrphones = $this->input->post('mrotp');
        $otpmr = rand(00000,11111);
        $datasmr = array(
            'password'=>$mrphones,
            'otp'=>$otpmr,
            'status'=>'deactive'
        );
        $this->db->insert('marketing_man',$datasmr);
$data=$this->db->insert_id();
print_r($data);
    }
    else{
        echo'No generate_otp';
    }
}

public function submit_add_mr(){
    $mrunid = $this->input->post('mrid');
    $relation = $this->input->post('relation');
    $mrname = $this->input->post('name');
    $password = $this->input->post('phone');
    $mremail = $this->input->post('email');
    $mrphoneotp = $this->input->post('otp');
    $mreducation = $this->input->post('education');
    $mraadhar = $this->input->post('aadhar');
    $center = $this->input->post('center');
    $mrcity = $this->input->post('city');
    $mraddress = $this->input->post('address');
    $role = $this->input->post('role');

    $un_id_date = date('Y');
    $un_id_infor = 'MRID0';
    

    if(!empty($mrphoneotp)){
        $data = $this->db->query("select * from marketing_man where otp = $mrphoneotp AND id=$mrunid");
        // print_r($data->conn_id->affected_rows);
       $un_id_mrperson = "$un_id_date$un_id_infor$mrunid";
        if(($data->conn_id->affected_rows == 1) && !empty($mrname) && !empty($mremail) && !empty($mreducation) && !empty($mraadhar) && !empty($mrcity) && !empty($center)){
           $this->db->query("update marketing_man set mr_unid ='$un_id_mrperson',center_id='$relation' ,username ='$mrname',password ='$password',mobile='$password' ,email = '$mremail' ,education ='$mreducation' ,aadhar = '$mraadhar',city='$mrcity',center='$center' ,address = '$mraddress',status='active',role='3' where id='$mrunid'");
            $vdata = array('un_id'=>$un_id_mrperson,'role'=>'3','password'=>$password,'relation_id'=>$mrunid);
           $this->Main_model->saverecords('login_funcation',$vdata);
           print_r('Data is Insert');
        }
        else{
            print_r('Otp Not Metch');
        }
    }
}

public function asset_tool_del($id){
        $tool_type = $_GET['assettools'];  
        $datas = array('id'=>$tool_type);
        $dataasset = $this->Main_model->deleteAll('kisan_assets_tools',$datas);
        if($dataasset>0){
        redirect(base_url('Crud/showKisanDetail/'.$id), 'refresh');
        }else{
            echo 'error';
        }
// echo $tool_type;die;
}

public function marketingAdd(){

}
public function Center(){
    $this->load->view('kisan/center');
}

public function load_data(){
// $connect = mysqli_connect("localhost","root","","toshiba");
$centerid = $this->input->post("centerid");
// if(!empty($this->input->post('centerid'))){
if(!empty($centerid))
{     
  $query = $this->db->query("select * from marketing_man WHERE center_id ='$centerid' ORDER BY id ASC")->result();
// $where = array('center_id'=>$centerid);
// $sun_load = $this->Main_model->getAllWhere('marketing_man','id',$where,'ASC');

 echo'<pre>';print_r($query);
// $opt = array();
$opt = '<option>--- Select Mr ---</option>';
// print_r($query[0]->username);
foreach($query as $row) {
    // echo'<pre>';print_r((['name'=>$row->username]));die;      
    // $opt[] =['id'=>$row->mr_unid,'name'=>$row->username];
    $opt .="<option value=$row->mr_unid>$row->username</option>";
        //    );
    // $opt .= $row->mr_unid;
    }
print_r($opt);  
 }
}


    public function home(){
        $this->load->view("Kisan/index");
    }
    public function login()
    {
        
        $this->load->view("Kisan/Login");
    }
   public function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username','required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if($this->form_validation->run())
        {
            //true
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //model function

           $this->load->model("Main_model");

           if($this->Main_model->can_login($username,$password))
           {    
                $center = $this->db->query("select * from login_funcation where un_id ='$username' && password = '$password' && role='2'")->result();
                $mrperson= $this->db->query("select * from login_funcation where un_id ='$username' && password = '$password' && role='3'")->result();
                $admin   = $this->db->query("select * from login_funcation where un_id ='$username' AND password = '$password' AND role='1'")->result();
                $kisan = $this->db->query("select * from login_funcation where un_id ='$username' AND password = '$password' AND role='4'")->result();
               echo '<pre>';
               if(!empty($center)){$tokens_creat = $center;}
               if(!empty($mrperson)){$tokens_creat = $mrperson;}
               if(!empty($admin)){$tokens_creat = $admin;}
               if(!empty($kisan)){$tokens_creat = $kisan;}
            //    $tokens_creat = "$kisan$admin$mrperson$center";
                        //    print_r($tokens_creat);die;
                if(count($tokens_creat)>=1){
                    for($i=0; $i<count($tokens_creat);$i++){
                    $jwt = new JWT();
                    $JwtSecretKey = "SawariyaFarmer";
                    date_default_timezone_set('Asia/Kolkata');
                    $data= array(
                        'Uname_id'=>$username,
                        'password'=>$password,
                        'Role'=>$tokens_creat[$i]->role,
                        'Data'=> date("l jS \of F Y h:i:s A"),
                    );
                    $token = $jwt->encode($data,$JwtSecretKey,'HS256');
                    $add_admin = array(
                        'token'=>$token,
                        'mr_id'=>$tokens_creat[$i]->un_id,
                    );
                    $this->Main_model->savedetails('login_mrperson_token',$add_admin);
                    // echo $token;
                $session_data['adminperson'] = array(
                                    'username'  =>  $username,
                                    'password'=>$password,
                                    'role'=>$tokens_creat[$i]->role,
                                    'id'=>$tokens_creat[$i]->relation_id
                );
            }
               $this->session->set_userdata($session_data);               
               redirect(base_url() .'Crud/home');
            }

            // ======================================================================
            // elseif(count($mrperson)>=1){
            //     for($i=0; $i<count($mrperson);$i++){
            //         $jwt = new JWT();
            //         $JwtSecretKey = "SawariyaFarmer";
            //         $data= array(
            //             'Uname'=>$username,
            //             'email'=>$mrperson[$i]->email,
            //             'Role'=>'mrperson',
            //             'Data'=> date("l jS \of F Y h:i:s A")
            //         );
            //         $token = $jwt->encode($data,$JwtSecretKey,'HS256');
            //         $add_mrperson = array(
            //             'token'=>$token,
            //             'mr_id'=>$mrperson[$i]->id
            //         );
            //         $this->Main_model->savedetails('login_mrperson_token',$add_mrperson);
            //     $session_data['mrpersons'] = array(
            //         'username'  =>  $username,
            //         'password'=>$password,
            //         'role'=>'2',
            //         'id'=>$mrperson[$i]->id
            //      );
            //     }
            //     $this->session->set_userdata($session_data);
               
            //     redirect(base_url() .'Crud/showdata'); 
            // }
            else{
                
               redirect(base_url() .'Crud/login');
            }
               //redirect(base_url() )
           
    
  }  
  else  
  {  
       $this->session->set_flashdata('error', 'Invalid username and Password');  
       redirect(base_url() . 'Crud/login');  
  }  
        }
        else
        {
            // flase
            $this->login();
        }
        }
public function single_land_selects(){
    if(!empty($this->input->post('single_land_select'))){
        $Kishan_lan =$this->input->post('single_land_select');
    $kishan_details['kishan_details'] = $this->db->query("select * from kisan_land where land_id = $Kishan_lan")->result() ;
    print_r($kishan_details);
    }
}

public function mrinfoupdate(){
    $umrname=$this->input->post('umrname');
    $mremail=$this->input->post('mremail');
    $mrmobile=$this->input->post('mrmobile');
    $mraddress=$this->input->post('mraddress');
    $mr_unid= $this->input->post('mr_unid');
    $where = array('id'=>$mr_unid);
    $datasmr = array('username'=>$umrname,'email'=>$mremail,'mobile'=>$mrmobile,'address'=>$mraddress);
    $this->Main_model->updateRecord('marketing_man',$datasmr,$where);

}
public function TodayLogin(){
    $data['allmrperson'] = $this->Main_model->getAll('login_mrperson_token');
    $this->load->view('kisan/TodayLogin',$data);
}

public function Marketing_Detail(){
    $this->load->view('kisan/MarketingDetail');
}
     public function enter(){
            if($this->session->userdata('username') !='')
            {
              echo "<h2>".$this->session->userdata('username')."</h2>";
              echo  "<label><a href='.base_url().Crud/logout'>LOGOUT</a></label>";
              }
              else
              {
                   redirect(base_url() . 'Crud/login');
              }
        }
        function logout()
        {
             $this->session->unset_userdata('username');
             redirect(base_url() . 'Crud/login');
        }


        public function dash()
        {
          $this->load->view("Kisan/Add_kisan_details.php");
        }
        
        public function visits(){
            $this->load->view("Kisan/visits");
        }
        
public function fetch()
{
 $output = '';
 $query = '';
 $this->load->model('Main_model');
 if($this->input->post('query'))
//   print_r($this->input->post('query'));die;
 {
  $query = $this->input->post('query');
 }
 $data = $this->Main_model->fetch_data($query);
 $output .= '
 <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <tr>
     <th>kisan_id</th> 
   <th>kisan_full_name</th>
   <th>Phone Number</th>
   <th>Center name</th>
   <th>Option</th>
   <th>Status</th>
      
      
     </tr>
 ';
 if($data->num_rows() > 0){
    $i=0;
  foreach($data->result() as $row){

    $center = $this->db->query("select * from center where un_center_id='$row->relation_creater'")->result();
    $mrperson = $this->db->query("select * from marketing_man where mr_unid='$row->relation_creater'")->result();
    $visitDataget = '';
    if(count($center) == 1){
        foreach($center as $valdata){
        $visitDataget = $valdata->centername;
        }
    }
    elseif(count($mrperson) == 1){
        foreach($mrperson as $getdata){
            $visitDataget = $getdata->center;
        }
    }

  $where_visit = array('kisan_id'=>$row->kisan_id);
  $data_visit = $this->Main_model->getAllWheresun('kisan_visit',$where_visit);  
  if(!empty($data_visit)){
  foreach($data_visit as $satish){
    $un_id_data = array('date'=>$satish->status_date);}
    // echo"<pre>";print_r();
 }else{
    $un_id_data = ' '; 
} 
 //echo"<pre>";print_r($un_id_data['date']);die;
//   $un_id_data = $data_visit[0]->status_date;
// $un_id_data=$un_id_data['date'];
$date =' ';
if(!empty($un_id_data['date'])){
//   $date = strtotime(date("d/m/Y", strtotime($data_visit[$i]->status_date))."-4 day");

$data_s =' ';$dates = ' ';$date11 =' ';$date12 = ' ';$date13 =' ';$date14=' ';$date2=' ';
$currentDate = date('d-m-Y');
$data_s = date(('d-m-Y'),strtotime($un_id_data['date']));  // if today :2013-05-23
$dates = date('d-m-Y',strtotime($data_s." +10 day"));
$date11 = date('d-m-Y',strtotime($data_s." +11 day"));
$date12 = date('d-m-Y',strtotime($data_s." +12 day"));
$date13 = date('d-m-Y',strtotime($data_s." +13 day"));
$date14 = date('d-m-Y',strtotime($data_s." +14 day"));
$date2 = date('d-m-Y',strtotime($data_s." +18 day"));
if(($data_s < $dates) && ($currentDate < $dates))    {
    $date = '<img src="https://c.tenor.com/0AVbKGY_MxMAAAAM/check-mark-verified.gif" alt="Icon" style="width:20%;border-radius: 50%;">';
}
elseif(($currentDate == $date11) || ($currentDate == $date12) || ($currentDate == $date13) || ($currentDate == $date14)){
    $date = '<img src="../application\views\kisan\icon\38318c879df54cd01b67abdda29ad363.gif" alt="Icon" style="width:20%;border-radius: 50%;">';
}
elseif($date14 < $date2){
    $date = '<img src="https://cdn.dribbble.com/users/422171/screenshots/4411237/media/e2a9d45bac5345328cc1312cb15cffa2.gif" alt="Icon" style="width:25%;border-radius: 50%;">';

}
}
else{ $date = '<img src="https://i.imgur.com/a1fyRka.gif" alt="Icon" style="width:20%;border-radius: 50%;">';  }

// $ts = '';
// if(!empty($data_visit[$i]->status_date)){ $ts = $data_visit[$i]->status_date;}else{$ts='';}

   $output .= '
     <tr>
     <td>'.$row->kisan_un_id.'</td>
   <td>'   .$row->kisan_full_name.' </td> 
   <td>'.$row->mobile_no.'</td>
   <td onClick="relationunid('.$row->kisan_id.')">'.$visitDataget.'</td>
   <td><a href="'.base_url('Crud/visits?id=').$row->kisan_id.'" style="background-color: mediumseagreen;padding: 12px;border-radius: 20%;color: white;">visit</a></td>
    <td style="text-align:center;width:20%;">'.$date.'</td>
     </tr>
   ';
  $i++;}
 }
 else
 {
  $output .= '<tr>
      <td colspan="5">No Data Found</td>
     </tr>';
 }
 $output .= '</table>';
 echo $output;
}

public function forggetpasswordone(){
   $phonenum = $this->input->post('cotp');
   $un_id = $this->input->post('relation');
   $otpon = rand(00000,11111);
   $center = $this->db->query("select * from center where created_center_id='$un_id' && phone='$phonenum'")->result();
   $kisan = $this->db->query("select * from kisan_info where kisan_un_id='$un_id' && mobile_no='$phonenum'")->result();
   $mrperson = $this->db->query("select * from marketing_man where mr_unid='$un_id' && mobile='$phonenum'")->result();
   if(count($center) == 1){
    $this->db->query("update center SET otp='$otpon' WHERE created_center_id='$un_id' && phone='$phonenum'");
    echo'send opt';
    exit();
   }
   elseif(count($kisan) == 1){
    $this->db->query("update kisan_info SET otp='$otpon' WHERE kisan_un_id='$un_id' && mobile_no='$phonenum'");
    echo'send opt';
    exit();
   }
   elseif(count($mrperson) == 1){
    $this->db->query("update marketing_man SET otp='$otpon' WHERE mr_unid='$un_id' && mobile='$phonenum'");
    echo'send opt';
    exit();
   }
   else{
    echo'plase Check';
   }
}

public function getvisitcenter(){
    $kisanid = $this->input->post('kisan_id');
    $where_id = array('kisan_id'=>$kisanid);
    $get = $this->Main_model->getAllWheresun('kisan_info',$where_id);
    foreach($get as $vals){
//    print_r($vals->relation_creater);
        $center = $this->db->query("select * from center where un_center_id='$vals->relation_creater'")->result();
        $mrperson = $this->db->query("select * from marketing_man where mr_unid='$vals->relation_creater'")->result();
        if(count($center) == 1){
            foreach($center as $valdatas){
                $valdata = ['center'=>$valdatas->centername,'username'=>$valdatas->center_manager,'centerid'=>$valdatas->un_center_id,'phone'=>$valdatas->phone,'city'=>$valdatas->place_name,'address'=>$valdatas->address];
           echo json_encode($valdata);
            }
        }
        elseif(count($mrperson) == 1){
            foreach($mrperson as $getdatas){
                $getdata = ['center'=>$getdatas->center,'username'=>$getdatas->username,'centerid'=>$getdatas->mr_unid,'email'=>$getdatas->email,'phone'=>$getdatas->mobile,'city'=>$getdatas->city,'address'=>$getdatas->address];
            echo json_encode($getdata);
            }
        }
}

}


public function newpassword_set(){
    $otp = $this->input->post('checkopt');
    $relations = $this->input->post('relations');
    $newpass = $this->input->post('newpass');
    $cpass = $this->input->post('cpass');
    if($newpass == $cpass){
    $center = $this->db->query("select * from center where created_center_id='$relations' && otp='$otp'")->result();
    $kisan = $this->db->query("select * from kisan_info where kisan_un_id='$relations' && otp='$otp'")->result();
    $mrperson = $this->db->query("select * from marketing_man where mr_unid='$relations' && otp='$otp'")->result();
    // print_r($mrperson);die;
   if(count($center) == 1){
    $this->db->query("update center SET `password`='$newpass' WHERE created_center_id='$relations' && otp='$otp'");
    $this->db->query("update login_funcation SET `password`='$newpass' WHERE un_id='$relations'");
    echo 'success';
    return exit();
   }
   elseif(count($kisan) == 1){
    $this->db->query("update kisan_info SET `password`='$newpass' WHERE kisan_un_id='$relations' && otp='$otp'");
    $this->db->query("update login_funcation SET `password`='$newpass' WHERE `un_id`='$relations'");
    echo 'success';
    return exit();
   }
   elseif(count($mrperson) == 1){
    $data = $this->db->query("update marketing_man SET `password`='$newpass' WHERE mr_unid='$relations' && otp='$otp'");
    $data = $this->db->query("update `login_funcation` SET `password`='$newpass' WHERE `un_id`='$relations'");
    // print_r($data);die;
    echo 'success';
    return exit();
   }
   else{
    echo 'Plase check Otp';
   }
  
    } else{
        echo 'Not metch password';
    }
}

/* Insert */
        public function savedata()
    {
        $this->load->view("Kisan/Add_kisan_details");
        if($this->input->post('submit'))
        {
            $kisan_id = $this->input->post('kisan_uid');
            $kisan_land_id =$this->input->post('land');
            $product_name = $this->input->post('product_name');
            $seed_type_crop =$this->input->post('seed_type_crop');
            $seed_subtype =$this->input->post('seed_subtype');
            $brand = $this->input->post('brand');
            $cost_of_product = $this->input->post('cost_of_product');
            $dose_used = $this->input->post('dose_used');
            $purchased = $this->input->post('purchased');
            $diseases = $this->input->post('diseases');
            $diseases_type = $this->input->post('diseases_type');
            $insect = $this->input->post('insect');
            $insect_type = $this->input->post('insect_type');
            $deficiences = $this->input->post('deficiences');
            $deficiences_type = $this->input->post('deficiences_type');
            // $type = $this->input->post('type');
            $seed_type = $this->input->post('seed_type');
            $impact = $this->input->post('impact');
            $labour_wages = $this->input->post('labour_wages');
            $self_labour = $this->input->post('self_labour');
            $Expense_name = $this->input->post('expense_name');
            $Expense_cost = $this->input->post('expense_cost');
            $pump_irrigation = $this->input->post('pump_irrigation');
            $tractor_vehicle = $this->input->post('tractor_vehicle');
            $transport = $this->input->post('transport');
            $other_cost = $this->input->post('other_cost');
            $image = $this->input->post('image');
            $total_area = $this->input->post('total_area');
            $impacts = $this->input->post('impacts');
            $total_earn = $this->input->post('total_earn');
            $sold_price = $this->input->post('sold_price');
            $transport_cost = $this->input->post('transport_cost');
            $place_details = $this->input->post('place_details');


            $data= array(
                        'kisan_id'=> $kisan_id,
                        'kisan_land_id'=>$kisan_land_id,
                        'seed_type_crop'=>$seed_type_crop,
                        'seed_subtype'=>$seed_subtype,
                        'product_name'=>$product_name,
                        'brand' =>$brand,
                      'cost_of_product' =>$cost_of_product,
                      'dose_used' =>$dose_used,
                     'purchased' =>$purchased,
                       'diseases' =>$diseases,
                       'diseases_type' =>$diseases_type,
                        'insect' =>$insect,
                        'insect_type' =>$insect_type,
                        'deficiences' =>$deficiences,
                        'deficiences_type'=>$deficiences_type,
                            //   'type' =>$type,
                              'seed_type' =>$seed_type,
                              'impact' =>$impact,
                              'labour_wages' =>$labour_wages,
                              'self_labour' =>$self_labour,
                              'expense_name'=>$Expense_name,
                              'expense_cost'=>$Expense_cost,
                          'pump_irrigation' =>$pump_irrigation,
                         'tractor_vehicle' =>$tractor_vehicle,
                               'transport' =>$transport,
                              'other_cost' =>$other_cost,
                                    'image'=>$image, 
                                    'impacts'=>$impacts,
                               'total_area'=>$total_area,
                              'total_earn' =>$total_earn,
                              'sold_price' =>$sold_price,
                              'transport_cost' =>$transport_cost,
                              'place_details' =>$place_details


     );
       
            $Data=$this->Main_model->saverecords('kisan_visit',$data);
             if($Data==true){
                echo "Records Saved Successfully";
        }
        else{
                echo "Insert error !";
        }
        
            // for($i=1;$i<=12;$i++){
            // $data[$j]=$this->input->post($j);
            
        
        }
        
    }

    
    public function index()
    {         
		//  $stu_photo=$_FILES['image']['name']; 
		//  $stu_photo_exp=explode('.',$stu_photo);
		//  $ext_type=$stu_photo_exp[count($stu_photo_exp)-1];
		//  $stu_photo=strtotime('now').'.'.$ext_type;
		//  $imagepath="uploads/kisan/".$stu_photo;
		//  move_uploaded_file($_FILES["image"]["tmp_name"],$imagepath);

            $name = $this->input->post('kisan_full_name');
            $mobile_no = $this->input->post('mobile_no');
            $relation_id = $this->input->post('relation_id');
            $age = $this->input->post('age');
            $education = $this->input->post('education');
            $district_name = $this->input->post('district_name');
            $tehsil_name = $this->input->post('tehsil_name');
            $full_address = $this->input->post('full_address');
            $gender = $this->input->post('gender');
            $child_count = $this->input->post('child_count');
            $father_name = $this->input->post('father_name');
            $mother_name = $this->input->post('mother_name');
            $husband_name = $this->input->post('husband_name');
            $other_profession = $this->input->post('other_profession');
            $profession_name = $this->input->post('profession_name');
            $by_whom = $this->input->post('by_whom');
            $imagepath = $this->input->post('image');
            $othname = $this->input->post('othname');
            $userrelation = $this->input->post('relation');

            // print_r($kisan_un);die;
        //    $unkisan_id = str_replace(" ","",$district_name);
        //    $unkisan = str_split($unkisan_id,"10");
        //    echo'<pre>';
        //    echo $unkisan_date,$unkisan_saw,$unkisan_ids;die;
        //    echo $unkisan_id;die;
// ============================================================================
        // print_r(count($othname));
        $datavs = array();
        for($i=0; $i<count($othname); $i++){
            $datavs[] = array('othname'=>$othname[$i],'relation'=>$userrelation[$i]);
        } 
        //print_r(json_encode($datavs));die;
// ==========================================================================
            // for($i=0; $i< count($othname); $i++){  
                // for($i=0; $i<count($relation); $i++) {
            $data = array(
            'kisan_full_name'=>$name,
            'mobile_no' =>$mobile_no,
            'relation_creater'=>$relation_id,
            'age' =>$age,
            'education' =>$education,
            'district_name'=>$district_name,
            'tehsil_name'=>$tehsil_name,
            'full_address' =>$full_address,
            'gender' =>$gender,
            'child_count' =>$child_count,
            'father_name' =>$father_name,
               'mother_name' =>$mother_name,
               'husband_name' =>$husband_name,
               'other_profession' =>$other_profession,
               'profession_name' =>$profession_name,
               'by_whom' =>$by_whom,
               'image' =>$imagepath,
               'othname'=>json_encode($datavs),
            //    'relation'=>$userrelation[$i],
            );
            // echo"<pre>"; 
        // }
            // print_r($data);die;

              $Data = $this->Main_model->savedetails('kisan_info',$data);
        //  }
          
        $unkisan_date = date('Y');//.getFullYear();
        $unkisan_saw = 'SAW0';
        $unkisan_ids = $Data;
        $kisan_un = "$unkisan_date$unkisan_saw$unkisan_ids";
            $login_funcation = array(
                'un_id'=>$kisan_un,
                'role'=>'4',
                'password'=>$mobile_no,
                'relation_id'=>$unkisan_ids
            );
            $this->Main_model->savedetails("login_funcation",$login_funcation);
            $this->db->query("update `kisan_info` SET kisan_un_id='$kisan_un' WHERE kisan_id='$Data'");
        // $Data = $this->db->insert_batch('kisan_info',$data);
      
            // echo $data;die;
            $newdata = array( 
                'k_id'  => $Data
             );  
             $this->session->sess_expiration = '14400';
             $this->session->set_userdata('kisan_data',$newdata);
            
             if($Data==true){
                print_r("Records Saved Successfully");
                redirect(base_url('Crud/dash'), 'refresh');
                
        }
        else{
                print_r("Insert error !");
        }
        
            
     } 
    







            public function assets()
            {
                if(empty($this->input->post('vehicle_name')))
                {
                $this->load->view("Kisan/Add_kisan_details");
                }
            $kisan_id = $this->input->post('kisan_id');
            $vehicle_count = $this->input->post('vehicle_count');  

            $vehicle_type_id = $this->input->post('vehicle_type');         
            $vehicle_name = $this->input->post('vehicle_name'); 
            $tool_type_id = $this->input->post('tool_year_model');              
            $vehicle_company = $this->input->post('vehicle_company'); 
            $used_type_id = $this->input->post('used_type');   


            $year_model = $this->input->post('year_model');          
            $tool_type = $this->input->post('tool_type');
            $company_name = $this->input->post('company_name');
           
            for($i=0; $i< count($used_type_id); $i++){  
                $data= array ('kisan_id'=>$kisan_id,                
                            'vehicle_count' =>$vehicle_count,
                            'vehicle_type_id' =>$vehicle_type_id[$i],
                            'used_type_id' =>$used_type_id[$i],
                            'year_model' =>$tool_type_id[$i],
                            'vehicle_name' =>$vehicle_name[$i],                            
                            'vehicle_company'=>$vehicle_company[$i],  
                             );  
$Data= $this->Main_model->savedetails('kisan_assets_vehicle',$data);
                        }

                        for($i=0; $i< count($company_name); $i++){  
                            $datas= array ('kisan_id'=>$kisan_id,          
                                'vehicle_count' =>$vehicle_count,
                                'tool_type'=>$tool_type[$i],                      
                                'tool_year_model' =>$year_model[$i],
                                'company_name' =>$company_name[$i],
                                
                        );
                        $Datas= $this->Main_model->savedetails('kisan_assets_tools',$datas);
                    }


if($Data==true && $Datas==true){
     echo "Records saved successfully";
     redirect(base_url('Crud/dash'), 'refresh');
}
else{
    echo "insert error !";
}


}

public function selectcrops_sun_button(){
    if(!empty($this->input->post('selectcrops_sun'))){
        $satish = $this->input->post('selectcrops_sun');
        $sa = $this->input->post('sun_is_crop_types');
        // print_r(count($satish));die;
        for($i=0; $i<count($satish); $i++)
        {
            $data = array(
                'seed_crop_type_id' =>$sa,
                'seed_subtype'=>$satish[$i]
            );
            
            $Data = $this->Main_model->savedetails('seed_subtype',$data);
        }
        if($Data==true){
            echo "Records saved successfully";
            redirect(base_url('Crud/dash'), 'refresh');
        }
        else{
            echo "insert error !";
        }
    }
    elseif(!empty($this->input->post('cost_of_product'))){

       
                    $stu_photo=$_FILES['image1']['name']; 
                    $stu_photo_exp=explode('.',$stu_photo);
                    $ext_type=$stu_photo_exp[count($stu_photo_exp)-1];
                    $stu_photo=strtotime('now').'.'.$ext_type;
                    $imagepath="uploads/kisan/seed/".$stu_photo;
                    move_uploaded_file($_FILES["image1"]["tmp_name"],$imagepath);
                    

                    $stu_photos=$_FILES['treimage']['name']; 
                    $stu_photo_exps=explode('.',$stu_photos);
                    $ext_types=$stu_photo_exps[count($stu_photo_exps)-1];
                    $stu_photos=strtotime('now').'.'.$ext_types;
                    $imagepaths="uploads/kisan/seed/".$stu_photos;
                    move_uploaded_file($_FILES["treimage"]["tmp_name"],$imagepaths);

            $seed_kisan_id = $this->input->post('seed_kisan_id');
            $land_id = $this->input->post('land_Time_seeds');
            $crop_name = $this->input->post('Crop_name');
            $seed_crop_used = $this->input->post('seed_type');

            $select_subtype = $this->input->post('seed_subtype');

            $land_used_sowing = $this->input->post('land_used_sowing');
            $seed_brand = $this->input->post('seed_brand');
            $total_seeds = $this->input->post('total_seeds');
            $total_cost_seeds = $this->input->post('total_cost_seeds');
            $purchased_from = $this->input->post('purchased_from');
            $product_name = $this->input->post('product_name');
            $brand = $this->input->post('brand');
            $cost_of_product = $this->input->post('cost_of_product');
            $dose_used = $this->input->post('dose_used');
            $purchased = $this->input->post('purchased');
            $date = $this->input->post('date');
            // $image1 = $this->input->post('image1');
            // $treimage = $this->input->post('treimage');
            $tredate = $this->input->post('tredate');
            $labour = $this->input->post('labour');
            $labour_cost = $this->input->post('labour_cost');
            $Expense_name = $this->input->post('Expense_name');
            $Expense_cost = $this->input->post('Expense_cost');
            $fertication = $this->input->post('fertication');
            $fertication_cost = $this->input->post('fertication_cost');

                         $data=array (
                            'kisan_id' =>$seed_kisan_id,
                            'land_id'=>$land_id,
                            'crop_name' =>$crop_name,
                            'land_used_sowing' =>$land_used_sowing,
                            'seed_crop_used' =>$seed_crop_used,
                            'select_subtype'=>$select_subtype,
                            'seed_brand'=>$seed_brand, 
                            'total_seeds'=> $total_seeds,
                            'total_cost_seeds'=> $total_cost_seeds,
                            'purchased_from'=> $purchased_from,
                            'product_name'=>$product_name,
                            'brand' =>$brand,
                            'cost_of_product' =>$cost_of_product,
                            'dose_used' =>$dose_used,
                            'purchased' =>$purchased,                            
                            'image1' =>$imagepath,
                            'date' =>$date,
                            'treimage' =>$imagepaths,
                            'tredate' =>$tredate,
                            'labour' =>$labour,
                            'labour_cost' =>$labour_cost,
                            'expense_name'=>$Expense_name,
                            'expense_cost'=>$Expense_cost,
                            'fertication' =>$fertication,
                            'fertication_cost' =>$fertication_cost,
                            'status'=>'active',



     );
    //  print_r($data);die;
       
            $Data=$this->Main_model->savedetails('kisan_seeds',$data);
             if($Data==true){
                echo "Records Saved Successfully";
                redirect(base_url('Crud/dash'), 'refresh');
        }
        else{
                echo "Insert error !";
        }

    }
    else{    
        $this->load->view("Kisan/Add_kisan_details");
    }
}
public function PendingKisan(){
    $this->load->view('Kisan/PendingKisan');
}

public function new_season_land(){
    $status = $this->input->post('status');
    $kisan_land_newseason = $this->input->post('kisan_land_newseason');
    $where_renewse = array('kisan_id'=>$kisan_land_newseason);
    $datawhere = array('status'=>$status);
    // $datas = $this->Main_model->getAllWheresun('kisan_seeds',$where_renewse);
    // foreach($datas as $val_season){
        $data = $this->Main_model->updateRecord('kisan_seeds',$datawhere,$where_renewse);
    // }
echo $kisan_land_newseason;
}
public function CompleteKisan(){
    $this->load->view('Kisan/CompleteKisan');
}
    
 public function sun_of_seed(){
    if(!empty($this->input->post('sun_of_seed'))){
        // $result =array();
    $sun_of_seed = $this->input->post('sun_of_seed');//$this->input->post('sun_of_seed');
    $where = array('seed_crop_type_id'=>$sun_of_seed);
    $this->load->model('Main_model');
    $sun_load = $this->Main_model->getAllWhere('seed_subtype','seed_crop_type_id',$where,'ASC');
    $opt = '<option value="">---- Select Seeds Crop ----</option>';
    foreach($sun_load as $row) {      
        $opt.='<option value="'.$row->id.'">'.$row->seed_subtype.'</option>';
        }
        print_r($opt);      
}
 }

               public function agro()
               {
                // print_r(count($land_size = $this->input->post('land_size')));die;
               $this->load->view("Kisan/Add_kisan_details");
              if( $this->input->post('submit'))
              {

            $land_kisan_id = $this->input->post('land_kisan_id');
            // $district_name = $this->input->post('district_name');
            // $tehsil_name = $this->input->post('tehsil_name');
            $panchayat_name = $this->input->post('panchayat_name');
            $village_name = $this->input->post('village_name');
            $khesra_no = $this->input->post('khesra_no');
            $land_details = $this->input->post('land_details');
            $area_alot_name = $this->input->post('area_alot_name');
            $land_size = $this->input->post('land_size');
            $soil_type = $this->input->post('soil_type');

            
            for($i=0; $i<count($land_size); $i++){
                         $data=array (
                              'land_kisan_id' =>$land_kisan_id,
                            //  'district_name' =>$district_name,
                            //   'tehsil_name' =>$tehsil_name,
                              'panchayat_name' =>$panchayat_name[$i],
                              'village_name' =>$village_name[$i],
                              'khesra_no' =>$khesra_no[$i],
                              'land_details' =>$land_details[$i],
                              'area_alot_name' =>$area_alot_name[$i],
                              'land_size' => $land_size[$i],
                              'soil_type' =>$soil_type[$i]

);
$Data= $this->Main_model->savedetails('kisan_land',$data);
             }
if($Data==true){
    echo "Records saved successfully";
    redirect(base_url('Crud/dash'), 'refresh');
}
else{
    echo "insert error !";
}
            }
        }

           public function crop()
           {
               $this->load->view("Kisan/Add_kisan_details");
              if($this->input->post('submit'))
              {

            $crop_kisan_id = $this->input->post('crop_kisan_id');
            $select_land_id = $this->input->post('select_land_id');
            $crop_type_id = $this->input->post('crop_type_id');
            $crop_subtype_id = $this->input->post('crop_subtype_id');
            $name = $this->input->post('name');
        
            $data=array('crop_kisan_id' =>$crop_kisan_id,
                            'select_land_id' =>$select_land_id,
                            'crop_type_id' =>$crop_type_id,
                            'crop_subtype_id' =>$crop_subtype_id,
                            'name' =>$name,
                             
                              

);
$Data= $this->Main_model->savedetails('kisan_crop',$data);
if($Data==true){
    echo "Records saved successfully";
}
else{
    echo "insert error !";
}
            }
            
        }
            

             public function seeds()
             {
                 $this->load->view("Kisan/Add_kisan_details");
               
                
                    $stu_photo=$_FILES['image1']['name']; 
                    $stu_photo_exp=explode('.',$stu_photo);
                    $ext_type=$stu_photo_exp[count($stu_photo_exp)-1];
                    $stu_photo=strtotime('now').'.'.$ext_type;
                    $imagepath="uploads/kisan/seed/".$stu_photo;
                    move_uploaded_file($_FILES["image1"]["tmp_name"],$imagepath);
                    
            $kisan_id = $this->input->post('kisan_id');
            $land_used_sowing = $this->input->post('land_used_sowing');
           //$seed_crop_used = $this->input->post('seed_crop_used');
        //$select_subtype = $this->input->post('select_subtype');
         $seed_brand = $this->input->post('seed_brand');
             $total_seeds = $this->input->post('total_seeds');
             $total_cost_seeds = $this->input->post('total_cost_seeds');
             $purchased_from = $this->input->post('purchased_from');
             $product_name = $this->input->post('product_name');
             $brand = $this->input->post('brand');
             $cost_of_product = $this->input->post('cost_of_product');
             $dose_used = $this->input->post('dose_used');
             $purchased = $this->input->post('purchased');
             $date = $this->input->post('date');
             $image1 = $this->input->post('image1');
        
            
   
                         $data=array ('kisan_id' =>$kisan_id,
                         'land_used_sowing' =>$land_used_sowing,
                              //'seed_crop_used' =>$seed_crop_used,
                              //'select_subtype'=>$select_subtype,
                              'seed_brand'=>$seed_brand, 
                              'total_seeds'=> $total_seeds,
                              'total_cost_seeds'=> $total_cost_seeds,
                              '	purchased_from'=> $purchased_from,
                              'product_name'=>$product_name,
                                'brand' =>$brand,
                              'cost_of_product' =>$cost_of_product,
                              'dose_used' =>$dose_used,
                             'purchased' =>$purchased,
                             //'image1' =>$image1,
                         'image1' =>$imagepath,
                             'date' =>$date
                            



     );
       
            $Data=$this->Main_model->savedetails('kisan_seeds',$data);
             if($Data==true){
                echo "Records Saved Successfully";
        }
        else{
                echo "Insert error !";
        }

        
   }
public function Today_Login_List(){
    $this->load->view('Kisan/Today_Login_List');
}

public function view()
{
	 $this->load->view("Kisan/View_kisan_profile.php");
}
// public function kisa()
// {
// 	 $this->load->view("Kisan/KisanAddListing.php");
// }
    public function showdata()
{
	//echo "hello i am  function";
	$this->load->model('Main_model');
	$data['images']=$this->Main_model->getAll('kisan_info','kisan_id','asc');
	
	 $this->load->view('Kisan/KisanAddListing.php',$data);
	
}

	public function showdata1()
{
	//echo "hello i am  function";
	$this->load->model('Main_model');
	$data['images']=$this->Main_model->getAll('kisan_info','kisan_id','asc');
	
	 $this->load->view('Kisan/View_kisan_profile.php',$data);
	
}

	public function showupdate($id)
{
	$this->load->model('Main_model');
    $id = array('kisan_id'=>$id);
    $data['kisandata'] = $this->db->query("select * from kisan_info where kisan_id = '1'")->result();
	//$data['kisandata']=$this->Main_model->getSingleRowByWhere('kisan_info','$id');
	$this->load->view('kisan/update1',$data['kisandata']);
	
}


//For show Edit  Page
public function update1($id){
    // print_r($_POST);die;
    //$this->load->model('Main_model');
    $data['editkisan'] =$this->Main_model->getAll('kisan_info','kisan_id ','asc');
    $where = array('kisan_id'=>$id);
    $data['editkisan1'] = $this->Main_model->getSingleRowByWhere('kisan_info',$where);
  
    $data['title'] = "update1";
    $this->load->view('kisan/update1',$data);
    

}


//For show Edit  Page
public function updateland($id){
    
    //$this->load->model('Main_model');
    $data['editland'] =$this->Main_model->getAll('kisan_land','land_id ','asc');
    
    $where = array('land_id'=>$id);
    $data['editlandform'] = $this->Main_model->getSingleRowByWhere('kisan_land',$where);
    //print_r($data['editlandform']);die;

    $data['title'] = "updateland";
    $this->load->view('kisan/updateland',$data);
    

}

public function add_mrassets(){
    // print_r($this->input->post('company_name'));die;
    $vehicle_count = $this->input->post('vehicle_count');
    $kisan_id = $this->input->post('kisan_id');
    $vehicle_type = $this->input->post('vehicle_type');
    $vehicle_name = $this->input->post('vehicle_name');
    $tool_year_model = $this->input->post('tool_year_model');
    $vehicle_company = $this->input->post('vehicle_company');
    $used_type = $this->input->post('used_type');

    $tool_type= $this->input->post('tool_type');
    $year_model = $this->input->post('year_model');
    $company_name = $this->input->post('company_name');

    if(!empty($tool_year_model)){
        for($i=0; $i< count($used_type); $i++){  
            $data= array ('kisan_id'=>$kisan_id,                
                        'vehicle_count' =>$vehicle_count,
                        'vehicle_type_id' =>$vehicle_type[$i],
                        'used_type_id' =>$used_type[$i],
                        'year_model' =>$tool_year_model[$i],
                        'vehicle_name' =>$vehicle_name[$i],                            
                        'vehicle_company'=>$vehicle_company[$i],  
                         );  
    $Data= $this->Main_model->savedetails('kisan_assets_vehicle',$data);
    $where_tools = array('kisan_id'=>$kisan_id);
    $datas2 = array('vehicle_count'=>$vehicle_count);
    $this->Main_model->updateRecord('kisan_assets_vehicle',$datas2,$where_tools);
                    }
    }

    if(!empty($company_name[0])){
        for($i=0; $i< count($company_name); $i++){  
            $datas= array ('kisan_id'=>$kisan_id,          
                'vehicle_count' =>$vehicle_count,
                'tool_type'=>$tool_type[$i],                      
                'tool_year_model' =>$year_model[$i],
                'company_name' =>$company_name[$i],
                
        );
        $where_tools = array('kisan_id'=>$kisan_id);
    $datas1 = array('vehicle_count'=>$vehicle_count);
    $this->Main_model->updateRecord('kisan_assets_tools',$datas1,$where_tools);
        $Datas= $this->Main_model->savedetails('kisan_assets_tools',$datas);
    }
    }
    if($Data==true || $Datas==true){
        // echo "Records saved successfully";
        redirect(base_url("Crud/showKisanDetail/$kisan_id"), 'refresh');
   }
   else{
       echo "insert error !";
       redirect(base_url("Crud/showKisanDetail/$kisan_id"), 'refresh');
   }


}

public function kisan_land_add(){
    $land_kisan_id = $this->input->post('land_kisan_id');
    $panchayat_name = $this->input->post('panchayat_name');
    $village_name = $this->input->post('village_name');
    $khesra_no = $this->input->post('khesra_no');
    $land_details = $this->input->post('land_details');
    $area_alot_name = $this->input->post('area_alot_name');
    $soil_type = $this->input->post('soil_type');
    $land_size = $this->input->post('land_size');
    for($i=0; $i<count($land_size); $i++){
        $data=array (
             'land_kisan_id' =>$land_kisan_id,
           //  'district_name' =>$district_name,
           //   'tehsil_name' =>$tehsil_name,
             'panchayat_name' =>$panchayat_name[$i],
             'village_name' =>$village_name[$i],
             'khesra_no' =>$khesra_no[$i],
             'land_details' =>$land_details[$i],
             'area_alot_name' =>$area_alot_name[$i],
             'land_size' => $land_size[$i],
             'soil_type' =>$soil_type[$i]

);
$Data= $this->Main_model->savedetails('kisan_land',$data);
}
if($Data==true ){
    // echo "Records saved successfully";
    redirect(base_url("Crud/showKisanDetail/$land_kisan_id"), 'refresh');
}
else{
   echo "insert error !";
   redirect(base_url("Crud/showKisanDetail/$land_kisan_id"), 'refresh');
}
}


//For show Edit  Page
public function showKisanDetail($id){
    $data['kisanid_un'] = $id;
    // print_r($_POST);die;
    //$this->load->model('Main_model');
    //$data['editkisan'] =$this->Main_model->getAll('kisan_info','kisan_id ','asc');
    $where = array('kisan_id'=>$id);
    $data['showKisanId'] = $this->Main_model->getSingleRowByWhere('kisan_info',$where);
     //land detail stating.............................................
     //$data['landdetail'] =$this->Main_model->getAll('kisan_land','land_id','asc');
   $landwhere = array('land_kisan_id'=>$id);
    $data['landshowdata'] = $this->Main_model->getSingleIdByWhereAll('kisan_land',$landwhere);
    // $data['assetdetailkisan'] =$this->Main_model->getAll('kisan_assets','kisan_asset_id','asc');
    $assetwhere = array('kisan_id'=>$id);
    
    $data['assetshowkisans'] = $this->Main_model->getSingleRowByWhere('kisan_assets_vehicle',$assetwhere);
    $data['assetshowkisan'] = $this->Main_model->getSingleIdByWhereAll('kisan_assets_vehicle',$assetwhere);    
    $data['kisan_assets_tools'] = $this->Main_model->getSingleIdByWhereAll('kisan_assets_tools',$assetwhere);
    $data['vechicletyp'] =$this->Main_model->getAll('vehicle_type','id','asc');
    //print_r  ($data['vechicletyp']);die;
    //Crop detail stating.............................................
   $data['cropdetaildata'] =$this->Main_model->getAll('kisan_crop','crop_id','asc');
   //print_r($data['cropdetaildata']);die;
   $cropwh = array('crop_kisan_id'=>$id);
   $data['cropshowdata'] = $this->Main_model->getSingleRowByWhere('kisan_crop',$cropwh);

   $visi_where = array('kisan_id'=>$id);
   $data['visitsget'] = $this->Main_model->getSingleIdByWhereAll('kisan_visit',$visi_where);
   
   $data['time_renewseason'] = $this->Main_model->getSingleIdByWhereAll('kisan_seeds',$visi_where);
//    if( $data['cropshowdata']){
//     echo "data";

//    }
// else{
//     echo "fail not data";
// }




//    echo "</pre>";
//    print_r($data['cropshowdata']);die;

    //  SELECT CustomerName, City, Country
    //  FROM Customers
    //  ORDER BY
    //  (CASE
    //  WHEN City IS NULL THEN Country
    //  ELSE City
    //  END);
$data['title'] = "update1";
    $this->load->view('kisan/View_kisan_profile',$data);
    

}




public function delet_land($id){
    $kisan_id = $_GET['kisan_id'];
    $id = array('land_id'=>$id);	
	$this->Main_model->deleteAll('kisan_land',$id);
    redirect('/Crud/showKisanDetail/'.$kisan_id, 'refresh');
}


public function deletedata($id)
{
	$id = array('kisan_id'=>$id);
	
	$data =$this->Main_model->deleteAll('kisan_info',$id);
	
		if($data > 0)
	{
		echo "delete data";
		redirect('/Crud/showdata', 'refresh');
		
		
	}
	    else
		
    {
		  echo "fail";
			
	}
	
}

//for edit (update)  function starting ..........................................................
	public function update($id) 
{            
   //$this->load->view('kisan/update1');
//image function start.........................................
	    //$stu_photo=$_FILES['image']['name']; 
		//$stu_photo_exp=explode('.',$stu_photo);
		//$ext_type=$stu_photo_exp[count($stu_photo_exp)-1];
		//$stu_photo=strtotime('now').'.'.$ext_type;
		//$imagepath="uploads/".$stu_photo;
		//move_uploaded_file($_FILES["image"]["tmp_name"],$imagepath);
	//image function end.............................................
		
			$name = $this->input->post('kisan_full_name');
			$mobile_no = $this->input->post('mobile_no');
			$age = $this->input->post('age');
			$education = $this->input->post('education');
			$full_address = $this->input->post('full_address');
			$gender = $this->input->post('gender');
			$child_count = $this->input->post('child_count');
			$father_name = $this->input->post('father_name');
			$mother_name = $this->input->post('mother_name');
			$husband_name = $this->input->post('husband_name');
			$other_profession = $this->input->post('other_profession');
			$profession_name = $this->input->post('profession_name');
			$by_whom = $this->input->post('by_whom');
			
			
			$data = array(
				
				'kisan_full_name'=>$name,
				'mobile_no'=>$mobile_no,
				'age'=>$age,
				'education'=>$education,
				'full_address'=>$full_address,
				'gender'=>$gender,
				'child_count'=>$child_count,
				'father_name'=>$father_name,
				'mother_name'=>$mother_name,
				'husband_name'=>$husband_name,
				'other_profession'=>$other_profession,
				'profession_name'=>$profession_name,
				'by_whom'=>$by_whom,
				//'image'=>$imagepath,
			);
			
			$where = array('kisan_id'=> $id);
		
			$Data = $this->Main_model->updateRecord('kisan_info',$data,$where);
			
			if($Data > 0)
		{
		    echo "update success";
			redirect('/Crud/showdata','refresh');
		
	    }
	        else
		
		{
		    echo "update fail";
			
		}
			
			
}





//  Contoller for seed_type

public function seed_type(){
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $seedopt = $this->input->post('seedopt');
        $insertdata = array(
            'seed_type' => $seedopt,
        );
        $data = $this->Main_model->saverecords('seed_type',$insertdata);
        echo json_encode($data);
    }
}

// Controller for Seed_Subtype
public function subseeds_for(){
    if($_SERVER['REQUEST_METHOD']=="POST") {
        $subseed = $this->input->post('subseed');
        $insertdata = array(
          'seed_subtype' => $subseed,
        );
        $data = $this->Main_model->saverecords('seed_subtype',$insertdata);
        echo json_encode($data);
  
      }
}











public function add_new_option(){
        if($_SERVER['REQUEST_METHOD']=="POST") {
            $newopt = $this->input->post('newopt');
            $insertdata = array(
              'Vehicle_Type' => $newopt,
            );
            $data = $this->Main_model->saverecords('vehicle_type',$insertdata);

            // $vehicle = array( 
            //     've_id'  => $data
               
            //  );  
            //  $this->session->sess_expiration = '14400';
            //  $this->session->set_userdata('vehicle',$vehicle);

            echo json_encode($data);
      
          }
        }

        public function user_for(){
            if($_SERVER['REQUEST_METHOD']=="POST") {
                $usedopt = $this->input->post('usedopt');
                $insertdata = array(
                  'user_for' => $usedopt,
                );
                $data = $this->Main_model->saverecords('user_for',$insertdata);
                $usedtype = array( 
                    'us_id'  => $data
                   
                 );  
                 $this->session->sess_expiration = '14400';
                 $this->session->set_userdata('usedtype',$usedtype);

                echo json_encode($data);
          
              }
        }
        public function tools_for(){
            if($_SERVER['REQUEST_METHOD']=="POST") {
                $tools_opt = $this->input->post('tools_opt');
                $insertdata = array(
                  'tools_type' => $tools_opt,
                );
                $data = $this->Main_model->saverecords('tools_type',$insertdata);
                $tootype = array( 
                    'to_id'  => $data
                   
                 );  
                 $this->session->sess_expiration = '14400';
                 $this->session->set_userdata('tootype',$tootype);
                echo json_encode($data);
          
              }
        }
        public function select_land(){
            if($_SERVER['REQUEST_METHOD']=="POST") {
                $lands = $this->input->post('lands');
                $insertdata = array(
                  'select_land' => $lands,
                );
                $data = $this->Main_model->saverecords('select_land',$insertdata);
                $landdata = array( 
                    'l_id'  => $data,
                    //'land_name'  => $data
                 );  
                 $this->session->sess_expiration = '14400';
                 $this->session->set_userdata('landdata',$landdata);
    
                echo json_encode($data);
          
              }
        }


        public function crop_type(){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $crops = $this->input->post('crops');
                $insertdata = array(
                    'crop_type' =>$crops,
                );
                $data = $this->Main_model->saverecords('crop_type',$insertdata);
                $croptype = array( 
                    'c_id'  => $data,
                   
                 );  
                 $this->session->sess_expiration = '14400';
                 $this->session->set_userdata('croptype',$croptype);
    
                echo json_encode($data);
            } 
        }


        public function crop_subtype(){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $subcrops = $this->input->post('subcrops');
                $insertdata = array(
                    'crop_subtype' =>$subcrops,
                );
                $data = $this->Main_model->saverecords('crop_subtype',$insertdata);
                $sctype = array( 
                    'sc_id'  => $data,
                   
                 );  
                 $this->session->sess_expiration = '14400';
                 $this->session->set_userdata('sctype',$sctype);
                echo json_encode($data);
            } 
        }



     

























function show_kisan_id() {
    $id = $this->uri->segment(3);
    $data['article'] = $this->Main_model->show_records();
    $data['single_data'] = $this->Main_model->show_kisan_id($id);
    $this->load->view('kisan/Add_kisan_update',$data);
    }
    function update_kisan_id1() {
    $id= $this->input->post('did');
    $data = array(
                 $kisan_id = $this->input->post('kisan_id'),
                $product_name = $this->input->post('product_name'),
                $brand = $this->input->post('brand'),
                $cost_of_product = $this->input->post('cost_of_product'),
                $dose_used = $this->input->post('dose_used'),
                $purchased = $this->input->post('purchased'),
                $diseases = $this->input->post('diseases'),
                $insect = $this->input->post('insect'),
                $deficiences = $this->input->post('deficiences'),
                $type = $this->input->post('type'),
                $seed_type = $this->input->post('seed_type'),
                $impact = $this->input->post('impact'),
                $labour_wages = $this->input->post('labour_wages'),
                $self_labour = $this->input->post('self_labour'),
                $pump_irrigation = $this->input->post('pump_irrigation'),
                $tractor_vehicle = $this->input->post('tractor_vehicle'),
                $transport = $this->input->post('transport'),
                $other_cost = $this->input->post('other_cost'),
                $total_area = $this->input->post('total_area'),
                $impacts = $this->input->post('impacts'),
                $total_earn = $this->input->post('total_earn'),
                $sold_price = $this->input->post('sold_price'),
                $transport_cost = $this->input->post('transport_cost'),
                $place_details = $this->input->post('place_details')
    );

    
    // $this->Main_model->update_kisan_id1($id,$data,$where);
    // $this->show_kisan_id1();
    }





    // public function delete_row($crop_id) {

    //     $this->load->model("Main_model");
    //     $this->Main_model->did_delete_row($crop_id);

    //     }

        public function delete_row($id)
        {
            $id = array('crop_id'=>$id);
            
            $data =$this->Main_model->deleteAll('kisan_crop',$id);
            
                if($data > 0)
            {
                echo "delete data";
                redirect('/Crud/showdata', 'refresh');
                
                
            }
                else
                
            {
                  echo "fail";
                    
            }
            
        }


        public function update_crop($id) 
        {            
          
                    $name = $this->input->post('name');
                   
                    
                    
                    $data = array(
                        
                        'name'=>$name,
                       
                    );
                    
                    $where = array('crop_id'=> $id);
                
                    $Data = $this->Main_model->updateRecord('kisan_crop',$data,$where);
                    
                    if($Data > 0)
                {
                    echo "update success";
                    redirect('/Crud/showdata','refresh');
                
                }
                    else
                
                {
                    echo "update fail";
                    
                }
                    
                    
        }

        public function asset_update($id){
            $asset_vehi_id = $this->input->post('asset_vehi_id');
            $vehicle_data = $this->input->post('vehicle_type_id');
            $used_data = $this->input->post('used_type_id');
            $vehicle_name = $this->input->post('vehicle_name');
            $year_model= $this->input->post('year_model');
            $vehi_company= $this->input->post('vehi_company');
            
            $dataup = array(
                'vehicle_type_id'=>$vehicle_data,
                'used_type_id'=>$used_data,
                'vehicle_name'=>$vehicle_name,
                'year_model'=>$year_model,
                'vehicle_company'=>$vehi_company
            );
            $where = array('kisan_asset_id'=> $asset_vehi_id);
            // print_r($data);die;
                $Data = $this->Main_model->updateRecord('kisan_assets_vehicle',$dataup,$where);
                if($Data > 0)
                {
                    echo "update success";
                    redirect('/Crud/showdata','refresh');
                
                }
                    else
                
                {
                    echo "update fail";
                    
                }
        }
        public function asset_vehi($id){
            $assetvehicle = $_GET['assetvehicle'];
            // echo $assetvehicle;die;
            $where = array('kisan_asset_id'=>$assetvehicle);
           $this->Main_model->deleteAll('kisan_assets_vehicle',$where);
           redirect('/Crud/showKisanDetail/'.$id,'refresh');
        }
        public function asset_tools($id){
                $asset_tools = $this->input->post('asset_un_id');
                $assets_tools= $this->input->post('assets_tools');
                $tool_year_model= $this->input->post('tool_year_model');
                $company_name= $this->input->post('company_name');

                $datatools = array(
                    'tool_type'=>$assets_tools,
                    'tool_year_model'=>$tool_year_model,
                    'company_name'=>$company_name
                );
                $where = array('id'=>$asset_tools);

               $Data= $this->Main_model->updateRecord('kisan_assets_tools',$datatools,$where);
                if($Data > 0)
                {
                    echo "update success";
                    redirect('/Crud/showdata','refresh');
                
                }
                    else
                
                {
                    echo "update fail";
                    
                }

        }
        public function update_land($id) 
        {            
                // $district_name = $this->input->post('district_name');
                $kisan_lan_id = $this->input->post('kisan_lan_id');
                $panchayat_name = $this->input->post('panchayat_name');
                $village_name = $this->input->post('village_name');
                $khesra_no = $this->input->post('khesra_no');
                $land_details = $this->input->post('land_details');
                $area_alot_name = $this->input->post('area_alot_name');
                $land_size = $this->input->post('land_size');
                $soil_type = $this->input->post('soil_type');

                $data = array(
                        // 'district_name'=>$district_name,
                        // 'tehsil_name'=>$tehsil_name,
                        'panchayat_name'=>$panchayat_name,
                        'village_name'=>$village_name,
                        'khesra_no'=>$khesra_no,
                        'land_details'=>$land_details,
                        'area_alot_name'=>$area_alot_name,
                        'land_size'=>$land_size,
                        'soil_type'=>$soil_type,
                        
                       
                    );
                    
                    $where = array('land_id'=> $kisan_lan_id);
                // print_r($data);die;
                    $Data = $this->Main_model->updateRecord('kisan_land',$data,$where);
                    
                    if($Data > 0)
                {
                    echo "update success";
                    redirect('/Crud/showdata','refresh');
                
                }
                    else
                
                {
                    echo "update fail";
                    
                }
                    
                    
        }






 }
  ?>
