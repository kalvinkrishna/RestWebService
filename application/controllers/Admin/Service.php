<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	public function index()
	{
		 $error = array('error' => "Asu Koe"); 
           	
         echo json_encode($error);	
	}

}

/* End of file Service.php */
/* Location: ./application/controllers/Admin/Service.php */