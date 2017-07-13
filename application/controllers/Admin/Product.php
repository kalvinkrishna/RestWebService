<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
			$data['product'] = $this->m_merk->product();
			$data['class'] = $this->m_product->getCarClass();
			
			$this->load->view('admin/product/product',$data,FALSE);
			$this->load->view('admin/base/footer');
		}
		else{
			$this->load->view('admin/login');
		}
	}

	public function cartype(){
		if(isset($this->session->userdata['username'])){
				$this->load->view('admin/base/header');
				$data['type'] = $this->m_merk->type();
				$this->load->view('admin/product/cartype',$data,FALSE);
				$this->load->view('admin/base/footer');
		}
		else{
				$this->load->view('admin/login');
		}
	}

	public function cartypeinsert(){
		if($this->input->post("submitcar")){
		 $car_type = $this->input->post("car_type");
		 $this->m_merk->insertTipeCar($car_type);
		 redirect('Admin/Product/cartype','refresh');	
		}
		else{
			redirect('Admin','refresh');
		}
	}

	public function carclass(){
		if(isset($this->session->userdata['username'])){
				$this->load->view('admin/base/header');
				$data['class'] = $this->m_product->getCarClass();
				$this->load->view('admin/product/carclass',$data,FALSE);
				$this->load->view('admin/base/footer');
		}
		else{
				$this->load->view('admin/login');
		}
	}
	public function insertCarClass(){
		if($this->input->post("submitclass")){
			$car_class = array(
				'name_class'=> $this->input->post("car_class")
			);
			$this->m_product->insertCarClass($car_class);
			redirect('Admin/Product/carclass','refresh');	
		}
		else{
			redirect('Admin/Product/carclass','refresh');
		}
	}
	public function deleteCarClass($id){
		$this->m_product->deleteCarClass($id);
		redirect('Admin/Product/carclass','refresh');
	}


	public function detail($id){
		if(isset($this->session->userdata['username'])){
			$this->load->view('admin/base/header');
			$data['cardata'] = $this->m_product->getCarDetail($id);
			$data['class'] = $this->m_product->getCarClass();
			$data['package'] = $this->m_product->getPackage();
			$data['carpackage'] = $this->m_product->getCarPackage($id);
			$data['cardetail'] = $this->m_product->getCarDetail2($id);
			$data['carImage'] = $this->m_product->getAllImage($id);

			$data['id_car'] = $id;
			$this->load->view('admin/product/cardetail', $data);
			$this->load->view('admin/base/footer');
		}else{
			$this->load->view('admin/login');
		}
	}
	public function submit(){
		//Get All Input From Product
		if($this->input->post('submit_product')){

			// $uploadFile = $this->input->post('uploadfile');
			$title  = $this->input->post('car_name');
			$class = $this->input->post('car_class');
			$description = $this->input->post('description');
			$seat = $this->input->post('car_seat');
			$tank_capacity = $this->input->post('car_tank');
			$tank_fuel= $this->input->post('car_fuel');
			$facility1 = $this->input->post('fac1');
			$facility2 = $this->input->post('fac2');
			$facility3 = $this->input->post('fac3');
			$facility4 = $this->input->post('fac4');
			$facility5 = $this->input->post('fac5');
			$start_price = $this->input->post('start_price');

			// $car_type = array(
			// 	'name_type' => 'Toyota',
			// 	'description'=> 'toyota'
			// );
			$car = array(
				'name'=> $title,
				'id_class' =>$class,
				'seat_capacity'=>$seat,
				'tank_capacity'=>$tank_capacity,
				'description'=>$description,
				'fuel'=>$tank_fuel,
				'facility_1'=>$facility1,
				'facility_2'=>$facility2,
				'facility_3'=>$facility3,
				'facility_4'=>$facility4,
				'facility_5'=>$facility5,
				'start_price'=>$start_price
			);
			
			// $this->m_merk->insertTipeCar($car_type);
			$this->m_merk->insertCar($car);

			//upload All Picture
			
			// $car_picture = array(
			// 	'id_car' => $this->m_merk->getCar($title),
			// 	'src' => $uploadfile
			// );
			redirect('Admin/Product','refresh');
		}

	}

	public function delete($delete = null,$id,$press= null){

		if($delete == "cartype"){
			$this->m_merk->deletetipe($id);
			redirect('Admin/Product/cartype','refresh');
		}
		else if($delete == "product"){
			$this->m_merk->deleteproduct($id);
			redirect('Admin/Product','refresh');
		}
		else if($delete=="carpicture"){
			$data['deleteitem']= $this->m_product->getcarImage($id);

			//print_r($data['deleteitem'][0]['src']);

			$this->m_product->deleteCarImage($id);	
			$filename = $data['deleteitem'][0]['src'];

			$path = "./assets/images/cars/".$filename;
			
			if(file_exists($path))
				unlink($path); //deletefile
			
			redirect('Admin/Product/detail/'.$press,'refresh');
		}
	}

	public function update(){
		//Get All Input From Product
		if($this->input->post('submit_product')){

			$id = $this->input->post('id');
			$title  = $this->input->post('car_name');
			$class = $this->input->post('car_class');
			$description = $this->input->post('description');
			$seat = $this->input->post('car_seat');
			$tank_capacity = $this->input->post('car_tank');
			$tank_fuel= $this->input->post('car_fuel');
			$facility1 = $this->input->post('fac1');
			$facility2 = $this->input->post('fac2');
			$facility3 = $this->input->post('fac3');
			$facility4 = $this->input->post('fac4');
			$facility5 = $this->input->post('fac5');
			$start_price = $this->input->post('start_price');

			// $car_type = array(
			// 	'name_type' => 'Toyota',
			// 	'description'=> 'toyota'
			// );
			$data = array(
				'name'=> $title,
				'id_class' =>$class,
				'seat_capacity'=>$seat,
				'tank_capacity'=>$tank_capacity,
				'description'=>$description,
				'fuel'=>$tank_fuel,
				'facility_1'=>$facility1,
				'facility_2'=>$facility2,
				'facility_3'=>$facility3,
				'facility_4'=>$facility4,
				'facility_5'=>$facility5,
				'start_price'=>$start_price
			);
			
			$data['product'] = $this->m_merk->updatedataproduct($data,$id);

			redirect('Admin/Product/detail/'.$id,'refresh');
		}

	}

	public function uploadCarImage(){
		$filepath='./assets/images/cars';
		 //buat folder baru jika belum ada foldernya
		 if(!is_dir($filepath)){
		 	print_r("sedang dibuat");
		 	mkdir('./assets/images/cars');
		 }

		 //lakukan konfigurasi file upload
		 $config['upload_path']   = $filepath; 
         $config['allowed_types'] = 'gif|jpg|png|PNG'; 
         $config['max_size']      = 1000; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
		 $this->upload->initialize($config);

		
		 //cek upload berhasil atau tidak,
		 //jika tidak berhasil print eror
		 //jika berhasil lakukan else

		 $fileexist = $filepath."/".$_FILES['image']['name'];
		// echo $fileexist;

		 if(file_exists($fileexist)){
		 	
		 	$temp = explode(".", $_FILES["image"]["name"]);
			$newfilename = round(microtime(true)) . '.' . end($temp);
		 	$_FILES['image']['name']=$newfilename;
		 }

         if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors()); 
           	
           	echo json_encode($error);
            //print_r($error);
         }
         else { 
         	$idcar = $_POST['ID'];
            $data = array(
            	'id_car' =>$idcar,
            	'src' => $_FILES['image']['name']
            );
            $this->m_product->insertCarImage($data);
            $success = array('success' => $data);
            echo json_encode($success);

            //redirect('Admin/Product/detail/'.$idcar,'refresh');
         }

	}

	public function insertCarPackage(){
		if($this->input->post("insertCarPackage")){
		 	$data = array(
				'id_car'=> $this->input->post('id_car'),
				'id_package'=> $this->input->post('id_package'),
				'price'=> $this->input->post('price'),
				'price_per'=> $this->input->post('price_per'),
				'discount' => $this->input->post('discount')
			);
		 	$this->m_product->insertCarPackage($data);
		 	redirect('Admin/Product/detail/'.$this->input->post('id_car'),'refresh');
		}
		else{
			redirect('Admin/Product/detail/'.$this->input->post('id_car'),'refresh');
		}
	}

	public function deleteCarPackage($id_car, $id){
		$this->m_product->deleteCarPackage($id);
		redirect('Admin/Product/detail/'.$id_car,'refresh');
	}

	public function submitCarDetail(){
		//Get All Input From Product
		if($this->input->post('submit_detail')){

			// $uploadFile = $this->input->post('uploadfile');
			$car_id  = $this->input->post('id');
			$carnumber  = $this->input->post('carnumber');
			$caryear = $this->input->post('caryear');
			$isout = $this->input->post('isout');
			$desc = $this->input->post('description');

			// $car_type = array(
			// 	'name_type' => 'Toyota',
			// 	'description'=> 'toyota'
			// );
			$car = array(
				'id_car'=> $car_id,
				'description' =>$desc,
				'car_number'=>$carnumber,
				'car_year'=>$caryear,
				'is_out'=>$isout
			);
			
			// $this->m_merk->insertTipeCar($car_type);
			$this->m_product->insertCarDetail($car);

			//upload All Picture
			
			// $car_picture = array(
			// 	'id_car' => $this->m_merk->getCar($title),
			// 	'src' => $uploadfile
			// );
			redirect('Admin/Product/detail/'.$car_id,'refresh');
		}

	}

	public function deleteCarDetail($id_car, $id){
		$this->m_product->deleteCarDetail($id);
		redirect('Admin/Product/detail/'.$id_car,'refresh');
	}

	public function book(){
		$this->load->view('admin/base/header');
		$this->load->view('admin/product/booking');
		$this->load->view('admin/base/footer');
	}
	public function check(){
		$this->load->view('admin/base/header');
		$this->load->view('admin/product/check');
		$this->load->view('admin/base/footer');
	}

	public function bookingConfirm($bookid){
		$this->m_product->bookingUpdate($bookingid);
	}
}
?>
