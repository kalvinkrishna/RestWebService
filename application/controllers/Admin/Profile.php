<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
			$data['facebook'] = $this->m_global->getGlobalData('facebook');
			$data['twitter'] = $this->m_global->getGlobalData('twitter');
			$data['website'] = $this->m_global->getGlobalData('website');
			$data['picture'] = $this->m_global->getGlobalData('profile_pict');
			$data['content'] = $this->m_global->getPageContent('aboutus');
			$this->load->view('admin/base/header');
			$this->load->view('admin/profile', $data);
			$this->load->view('admin/base/footer');
		}
		else{
			$this->load->view('admin/login');
		}
	}

	public function updateProfile(){
		//update global data
		$this->m_global->updateGlobal("facebook",$this->input->post('facebook'));//(isset($this->input->post('facebook')) ? $this->input->post('facebook') : " ");
		$this->m_global->updateGlobal("twitter",$this->input->post('twitter'));//(isset($this->input->post('twitter')) ? $this->input->post('twitter') : " ");
		$this->m_global->updateGlobal("website",$this->input->post('website'));//(isset($this->input->post('website')) ? $this->input->post('website') : " "));

		//upload photo
		$this->m_global->updateGlobal("profile_pict",$this->input->post('picture'));//(isset($this->input->post('picture')) ? $this->input->post('picture') : " "));

		//update page content

		//update content page = aboutus
		$data = array(
			'content_main' => $this->input->post('profile')
		);

		$this->m_global->updatePageContent('aboutus', $data);

		redirect('Admin/Profile','refresh');
	}

	public function uploadPictureProfile(){
		
	}
}