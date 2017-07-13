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
		$this->load->view('index');
		$this->load->view('base/footer');
	}

	public function search($value='')
	{
		$this->load->view('base/header');
		$this->load->view('searchresult');
		$this->load->view('base/footer');
	}

}
?>
