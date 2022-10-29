<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller{
    //function
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
               $session_data = array(
                   'username'  =>  $username
               );
               $this->session->set_userdata($session_data);
               redirect(base_url() .'Main/dash');
               //redirect(base_url() )
           
    
  }  
  else  
  {  
       $this->session->set_flashdata('error', 'Invalid username and Password');  
       redirect(base_url() . 'Main/login');  
  }  
        }
        else
        {
            // flase
            $this->login();
        }
        }
     public function enter(){
            if($this->session->userdata('username') !='')
            {
              echo "<h2>".$this->session->userdata('username')."</h2>";
              echo  "<label><a href='.base_url().Main/logout'>LOGOUT</a></label>";
              }
              else
              {
                   redirect(base_url() . 'Main/login');
              }
        }
       public function logout()
        {
             $this->session->unset_userdata('username');
             redirect(base_url() . 'Main/login');
        }




        
        public function dash()
        {
          $this->load->view("Kisan/Add_kisan_details.php");
        }
        
     
	 
	 
	 

	 
	 
	 
	 
}
     ?>      

    

    

 