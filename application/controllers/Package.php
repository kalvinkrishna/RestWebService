<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// Load form helper library
		$this->load->helper('form');
		// Load form validation library
		$this->load->library('form_validation');
		// Load session library
		$this->load->library('session');
		// Load database
		$this->load->model('m_product');
		$this->load->model('m_user');
		$this->load->model('m_merk');
		$this->load->model('m_global');
		$this->load->model('m_package');

		$this->load->library('encryption');

	}

	public function index()
	{
		$data['package'] = $this->m_product->getPackage();
		$this->load->view('base/header');
		$this->load->view('package', $data);
		$this->load->view('base/footer');
	}

	public function search($value='')
	{
		$packages = $this->m_package->getAllPackages();

		if ($packages){
			$data['packages'] = $packages;
		} else {
			$data['packages'] = array();
		}

		$this->load->view('base/header');
		$this->load->view('searchresult', $data);
		$this->load->view('base/footer');
	}
}
?>
