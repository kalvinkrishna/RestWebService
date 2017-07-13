<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		 /*$sessiondata = array(
                              'username' => "kalvin",
                              'loginuser' => TRUE
                     );
		 $this->session->set_userdata($sessiondata);*/
		 
		if(isset($this->session->userdata['username'])){
			redirect('Admin/Booking','refresh');
		}
		else{
			$this->load->view('admin/login');
		}
	}
}
?>
