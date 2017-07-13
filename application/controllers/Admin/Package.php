<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

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
		if(isset($this->session->userdata['username'])){
			$this->load->view('admin/base/header');
			$data['type'] = $this->m_product->getPackage();
			$this->load->view('admin/package',$data,FALSE);
			$this->load->view('admin/base/footer');
		}
		else{
			$this->load->view('admin/login');
		}
	}

	public function submit(){
		if($this->input->post("submitpackage")){
		 	$data = array(
				'name_package'=> $this->input->post('name'),
				'description' => $this->input->post('package_desc')
			);
		 	$this->m_product->insertPackage($data);
		 	redirect('Admin/Package','refresh');	
		}
		else{
			redirect('Admin/Package','refresh');
		}
	}

	public function update(){
		$id = $this->input->post('id');
		$data = array(
			'name_package'=> $this->input->post('name'),
			'description' => $this->input->post('package_desc')
		);
	 	$this->m_product->updatePackage($id, $data);
	}

	public function delete($id){
		$this->m_product->deletePackage($id);
		redirect('Admin/Package','refresh');
	}

}

/* End of file CarType.php */
/* Location: ./application/controllers/Admin/CarType.php */