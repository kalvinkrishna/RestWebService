<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
		$this->load->model('m_merk');
		$this->load->model('m_global');

		$this->load->library('encryption');

	}

	public function index()
	{	 
		if(isset($this->session->userdata['username'])){
			$data['telephone'] = $this->m_global->getGlobalData('telephone');
			$data['email'] = $this->m_global->getGlobalData('email');
			$data['address'] = $this->m_global->getGlobalData('address');
			$data['contact_desc'] = $this->m_global->getGlobalData('contact_desc');
			$this->load->view('admin/base/header');
			$this->load->view('admin/contact', $data);
			$this->load->view('admin/base/footer');
		}
		else{
			$this->load->view('admin/login');
		}
	}

	public function updateContact(){
		//update global data
		$this->m_global->updateGlobal("telephone",$this->input->post('telephone'));
		$this->m_global->updateGlobal("email",$this->input->post('email'));
		$this->m_global->updateGlobal("address",$this->input->post('address'));
		$this->m_global->updateGlobal("contact_desc",$this->input->post('contact_desc'));


		redirect('Admin/Contact','refresh');
	}
}