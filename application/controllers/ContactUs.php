<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

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
		$this->load->model('M_global');

		$this->load->library('encryption');

	}

	public function index()
	{
		$data['telephone'] = $this->M_global->getGlobalData('telephone');
		$data['email'] = $this->M_global->getGlobalData('email');
		$data['address'] = $this->M_global->getGlobalData('address');
		$data['contact_desc'] = $this->M_global->getGlobalData('contact_desc');
		$this->load->view('base/header');
		$this->load->view('contactus', $data);
		$this->load->view('base/footer');
	}
}
?>
