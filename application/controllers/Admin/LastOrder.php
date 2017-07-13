<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LastOrder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		// Load form validation library
		$this->load->library('form_validation');
		// Load session library
		$this->load->library('session');
		// Load database
		$this->load->model('m_history');
		$this->load->model('m_user');
		$this->load->model('m_merk');
		$this->load->model('m_product');
		$this->load->library('encryption');
	}
	public function index()
	{
		$this->load->view('admin/base/header');
		$this->load->view('admin/lastorder');
		$this->load->view('admin/base/footer');
	}

}

/* End of file LastOrder.php */
/* Location: ./application/controllers/Admin/LastOrder.php */