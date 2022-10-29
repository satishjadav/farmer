<?php
class Main_model extends CI_Model
{
    function can_login($username,$password)
    {
        $this->load->database();
        $this->db->where('un_id', $username);
        $this->db->where('password', $password);
       $query = $this->db->get('login_funcation');
    
       if($query->num_rows() >0)
       {
           return true;
       }  
       else
       {
         return false;  
       }      
    }
    // get all records from single table.
    function fetch_data($query)
    {
      $this->db->select("*");
     $this->db->from("kisan_info");
    if($query != '')
     {    
      //  $this->db->like('mobile_no', $query);
     $this->db->like('kisan_full_name',$query);
    // $this->db->or_like('mobile_no', '%' . $query . '%');
      // $this->db->query('select * from kisan_info where kisan_full_name like %'.$query);
      //  $this->db->query("select * FROM kisan_info  WHERE kisan_full_name LIKE %$query || mobile_no LIKE %$query");
     }
     $satish = $this->db->order_by('kisan_id','kisan_full_name', 'DESC');

     return $this->db->get();
    
    }
  public function getAll($table)
  {
   // $this->db->order_by($id,$order);
    $qry= $this->db->get($table);
    return $qry->result();
  }
    
	 public function getone($table,$id)
  {
    //$this->db->select('*');
    $qry =$this->db->get_where('kisan_info',array('kisan_id '=>$id));
	 //$this->db->where('kisan_full_name',$id);
	//$qry = $this->db->get();
    return $qry->result();
  }

  public function getSingleRow($table,$id){
    $this->db->select('*');
     $this->db->where($table,$id);
	  $qry = $this->db->get();
    return $qry->result();
  }
	
	public function show_news($id)
{
	$this->db->where('kisan_id',$id);
	$query=$this->db->get('kisan_info');
	return $query->row();
}
	
	
	function saverecords($table,$data)
    {
        $this->db->insert($table,$data);
        $data['id']= $this->db->insert_id();
        return $data;
    }
    function savedetails($table,$data)
    {
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }

	
	
	// delete record function starting.......................................................
public function deleteAll($table,$id)
	{
		$this->db->where($id);
		$q = $this->db->delete($table);
		return $q;
	}
	
	// get all records which have similar id
	public function getAllWhere($table,$id,$where,$order)
	{
		$this->db->order_by($id,$order);
		$qry = $this->db->where($where);
		$qry= $this->db->get($table);
		return $qry->result();
	}
    public function getAllWheresun($table,$seed_crop_type_id)
	{
		$qry = $this->db->where($seed_crop_type_id);
		$qry= $this->db->get($table);
		return $qry->result();
	}
	 // get single record from table.
    public function getSingleRowByWhere($table,$where)
    {        
        $this->db->where($where);
        $qry= $this->db->get($table);
        //echo $this->db->last_query();die;
        return $qry->row();
    }
    public function getSingleIdByWhereAll($table,$where)
    {        
        $this->db->where($where);
        $qry= $this->db->get($table);
        //echo $this->db->last_query();die;
        return $qry->result();
    }
	
	

 function updateRecord($table,$data,$where)
 {
    $this->db->where($where);
    $qry= $this->db->update($table,$data);
    $this->db->last_query();
    $this->db->insert_id(); 
    return $qry;
 }

function show_records(){
    $query = $this->db->get('kisan_visit');
    $query_result = $query->result();
    return $query_result;
    }
    // Function To Fetch Selected Student Record
    function show_kisan_id($data){
    $this->db->select('*');
    $this->db->from('kisan_visit');
    $this->db->where('kisan_enquiry_id ', $data);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
    }
    // Update Query For Selected Student
    function update_kisan_id1($id,$data,$where){
    $this->db->where('kisan_enquiry_id', $id);
    $this->db->update('kisan_visit', $data);
    }
	
	  public function get_show()
{
   $query=$this->db->get('kisan_info');
   return $query->result();
}


public function did_delete_row($crop_id){ 

  $query = $this->db->get_where('kisan_crop',array('crop_id' => $crop_id));
  
      if ($query->num_rows() == 1) {
  
      if ($this->db->delete('kisan_crop',array('crop_id','crop_kisan_id','select_land_id','name'))) 
  
          {return true;}
  
          else
  
          {return false;}
      } else {return false;}
  
                  }



















}
?>

    








