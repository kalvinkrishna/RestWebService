<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// Load form helper library
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
				
	}
	public function booking($data1='',$data2=''){
		$this->load->view('admin/product/modalbooking');
	}

}

/* End of file Order.php */
/* Location: ./application/controllers/System/Order.php */