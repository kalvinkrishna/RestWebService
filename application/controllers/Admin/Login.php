<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	private $sessiondata ;
	public function __construct() {
		parent::__construct();
		// Load form helper library
		$this->load->helper('form');
		// Load form validation library
		$this->load->library('form_validation');
		// Load session library
		$this->load->library('session');
		// Load database
		$this->load->model('m_history');
		$this->load->model('m_user');

		$this->load->library('encryption');

	}

	public function index()
	{
		 
		
		//$this->load->view('login/login_view');
       // if($users > 0){
        //	$this->load->view('login/login_view');
        	//redirect('Admin','refresh');
        //}
		// if($this->input->post("user_name") && $this->input->post("password")){
			
		// }
        	$this->doLogin();	
	}


	public function doLogin(){
		
		//$this->load->view('admin/base/header');


		$username = $this->input->post("email");

		$password = $this->input->post("password");

		$this->form_validation->set_rules('email', 'email', 'trim|required|min_length[5]|max_length[46]');
		
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]');

		if ($this->form_validation->run() == FALSE)
        {
        	redirect("Admin/Booking");
        }

        else{

        	if($this->input->post('btn_login')){
        		$users = $this->m_user->login($username,$password);
        		//session_start();
        	
        		// if($users < 0){
        			 $sessiondata = array(
                              'username' => "kalvin",
                              'loginuser' => TRUE
                     );
                     
                     $this->session->set_userdata($sessiondata);
                         redirect("Admin/Booking");
        		// }
        		// else{
        		// 	redirect('Admin','refresh');
        		// }


        	}
        }


	}

}
?>
