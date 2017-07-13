<?php

	/**
	* 
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Logout extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->library('session');
			$this->session->sess_destroy();
			redirect('Admin','refresh');
		}

		public function index(){

		}

	}

?>