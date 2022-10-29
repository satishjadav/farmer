<?php
/*
	Developer : Deepak Tailor
	Created Date : 25-02-2020
	Develop by : Deesoft Service
	Website : http://code.deesoftservice.co.in/
	Email : deesoftservice@gmail.com
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function insert_multiple_student()
	{
		$this->load->view('student_insert');
	}

	public function submit_data()
	{
//insert.php
$connect = mysqli_connect("localhost", "root", "", "students");
if(isset($_POST["item_name"]))
{
 $item_name = $this->input->post("item_name");
 $item_code = $this->input->post("item_relation");
 $query = '';
 for($count = 0; $count<count($item_name); $count++)
 {
  $item_name_clean = mysqli_real_escape_string($connect, $item_name[$count]);
  $item_code_clean = mysqli_real_escape_string($connect, $item_code[$count]);
  if($item_name_clean != '' && $item_code_clean != '')
  {
   $query .= '
   INSERT INTO st_users(student_name, subject) 
   VALUES("'.$item_name_clean.'", "'.$item_code_clean.'"); 
   ';
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($connect, $query))
  {
   echo 'Item Data Inserted';
  }
  else
  {
   echo 'Error';
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}



	}

	// public function insert_multiple_student_dynamics($number)
	// {
	// 	$this->load->view('student_insert_dynamic',['total_row'=>$number]);
	// }
}
