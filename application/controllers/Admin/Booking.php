<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

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
		$this->load->model('m_booking');

		$this->load->library('encryption');

	}

	public function index()
	{
		if(isset($this->session->userdata['username'])){
			$data['booking'] = $this->m_booking->getBookingList();
			$this->load->view('admin/base/header');
			$this->load->view('admin/booking/bookinglist', $data);
			$this->load->view('admin/base/footer');
		}else{
			$this->load->view('admin/login');
		}
	}

	public function history(){
		if(isset($this->session->userdata['username'])){
			$data['booking'] = $this->m_booking->getBookingHistory();
			$this->load->view('admin/base/header');
			$this->load->view('admin/booking/bookinghistory', $data);
			$this->load->view('admin/base/footer');
		}else{
			$this->load->view('admin/login');
		}
	}

	public function detail($id){
		if(isset($this->session->userdata['username'])){
			$data['booking'] = $this->m_booking->getBookingId($id);
			$data['car_package'] = $this->m_booking->getPackageCarPrice($data['booking']['id_car'],$data['booking']['id_package']);

			$start_date = new DateTime(date('Y-m-d H:i:s', strtotime($data['booking']['vstartrental'])));
			$end_date = new DateTime(date('Y-m-d H:i:s', strtotime($data['booking']['vreturnrental'])));

			$data['day'] = $start_date->diff($end_date);
			$data['total_price'] = intval($data['day']->d)*intval($data['car_package']['price']);
			$data['insufficient']= intval($data['booking']['charge'])-intval($data['booking']['payment']);
			$data['cardetail']= $this->m_product->getCarDetail2($data['booking']['id_car']);

			$this->load->view('admin/base/header');
			$this->load->view('admin/booking/bookingdetail', $data);
			$this->load->view('admin/base/footer');
		}
		else{
			$this->load->view('admin/login');
		}
	}

	public function detailhistory($id){
		if(isset($this->session->userdata['username'])){
			$data['booking'] = $this->m_booking->gethistoryBookingId($id);
			$data['car_package'] = $this->m_booking->getPackageCarPrice($data['booking']['id_car'],$data['booking']['id_package']);

			$start_date = new DateTime(date('Y-m-d H:i:s', strtotime($data['booking']['vstartrental'])));
			$end_date = new DateTime(date('Y-m-d H:i:s', strtotime($data['booking']['vreturnrental'])));
			$data['day'] = $start_date->diff($end_date);
			$data['total_price'] = intval($data['day']->d)*intval($data['car_package']['price']);
			$data['insufficient']= intval($data['booking']['charge'])-intval($data['booking']['payment']);
			$data['cardetail']= $this->m_product->getCarDetailById($data['booking']['icar']);

			$this->load->view('admin/base/header');
			$this->load->view('admin/booking/bookingdetailhistory', $data);
			$this->load->view('admin/base/footer');
		}
		else{
			$this->load->view('admin/login');
		}
	}

	public function submit(){

		if($this->input->post('submit')){
			$id = $this->input->post('id');
			$status = $this->input->post('status');
			$id_car_detail = $this->input->post('car_number');

			$data = array(
				'book_status' =>$status,
				'id_car_detail'=>$id_car_detail
			);

			$result = $this->m_booking->updateBooking($data,$id);

			///update car detail status to out
			$is_out = 1;
			$detail = array(
				'is_out' => $is_out
			);
			$result = $this->m_product->updateCarDetail($id_car_detail, $detail);

			redirect('Admin/Booking','refresh');
		}
	}

	public function complete(){
		if($this->input->post('submit')){
			$id = $this->input->post('id');
			$status = $this->input->post('status');
			$id_car_detail = $this->input->post('id_car_detail');

			$data = array(
				'book_status' =>$status
			);

			$result = $this->m_booking->updateBooking($data,$id);

			///update car detail status to out
			$is_out = 0;
			$detail = array(
				'is_out' => $is_out
			);

			echo $id_car_detail;
			$result = $this->m_product->updateCarDetail($id_car_detail, $detail);

			// redirect('Admin/Booking/history','refresh');
		}
	}
}
?>
