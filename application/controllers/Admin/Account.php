<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->helper('form');
		// Load form validation library
		$this->load->library('form_validation');
		// Load session library
		$this->load->library('session');
		// Load database
		$this->load->model('m_history');
		$this->load->model('m_user');
	}
	public function index()
	{	
		$data['user'] = $this->m_user->getAlluser();
		$this->load->view('admin/base/header');
		$this->load->view('admin/account',$data, FALSE);		
		$this->load->view('admin/base/footer');
	}

	public function AccountRegister(){

		$username = $this->input->post("email");
		$password = $this->input->post("password");
		$repassword = $this->input->post("repassword");
		$fullname = $this->input->post("fullname");
		$telephone = $this->input->post("telephone");

		$this->form_validation->set_rules('email', 'email', 'trim|required|min_length[5]|max_length[46]');
		
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]');

		$user = array(
			'username' => $username,
			'password' => sha1($password),
			'fullname' => $fullname,
			'telephone' => $telephone,
			'last_login' => date('Y-m-d H:i:s')
		);
		$this->m_user->register($user);

		redirect('Admin/Account','refresh');
	}

	public function detail($id){
		$data['detail_user'] = $this->m_user->getUser($id);
		$this->load->view('admin/base/header');
		$this->load->view('admin/accountdetail',$data, FALSE);		
		$this->load->view('admin/base/footer');
	}
	public function update($id){

		$username = $this->input->post("email");
		$password = $this->input->post("password");
		$repassword = $this->input->post("repassword");
		$fullname = $this->input->post("fullname");
		$telephone = $this->input->post("telephone");

		$this->form_validation->set_rules('email', 'email', 'trim|required|min_length[5]|max_length[46]');
		
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]');

		$user = array(
			'username' => $username,
			'password' => sha1($password),
			'fullname' => $fullname,
			'telephone' => $telephone,
			'last_login' => date('Y-m-d H:i:s')
		);
		$this->m_user->updateUserData($user,$id);
		redirect('Admin/Account','refresh');
	}

}

/* End of file Account.php */
/* Location: ./application/controllers/Admin/Account.php */