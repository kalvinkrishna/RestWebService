<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

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
		$this->load->view('template');
	}
}
?>
