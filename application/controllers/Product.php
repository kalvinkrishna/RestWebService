<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
		$this->load->model('m_product');
		$this->load->library('encryption');

		$this->load->library('encryption');

	}

	public function index()
	{
		$data['class'] = $this->m_product->getCarClass();
		$data['package'] = $this->m_product->getPackage();
		$data['product'] = $this->m_merk->product();
		$x=0;
		foreach ($data['product'] as $key => $value) {
			# code...
			//print_r($value);
			$data['image'][$x] = $this->m_product->getAllImage($value['id_car']);
			//print_r($data['image']);
			$x++;
		}

		//ambil gambar pertama pada setiap item dengan cara ini print_r($data['image'][0][0]['src']);

		$data['typecar'] = 'all';
		
		$this->load->view('base/header');
		$this->load->view('product', $data);
		$this->load->view('base/footer');
	}

	public function type($type='',$sort=''){
		if($this->uri->segment(3)!='' && is_numeric($this->uri->segment(3))){
			$sorttype='';
			$by ='';
			//sorting
			switch ($this->uri->segment(4)) {
				case 'nasc':
					# code...
				$sorttype='name';
				$by = 'ASC';
					break;
				case 'ndsc':
					# code...
				$sorttype='name';
				$by = 'DESC';
					break;
				case 'pasc':
					# code...
				$sorttype='price';
				$by = 'ASC';
				break;
				case 'pdsc':
					# code...
				$sorttype='price';
				$by = 'DESC';
				break;
				default:
					# code...
				$sorttype='name';
				$by = 'ASC';
					break;
			}
		
			$data['class'] = $this->m_product->getCarClass();
			$data['package'] = $this->m_product->getPackage();
			$data['product'] = $this->m_merk->productByClass($this->uri->segment(3),$sorttype,$by);
			$t=0;
			//untuk mendapatkan image mobil
			foreach ($data['product'] as $key => $value) {
				# code...
				//print_r($value);
				$data['image'][$t] = $this->m_product->getAllImage($value['id_car']);
				//print_r($data['image']);
				$t++;
			}
			//jika data mobil tidak ditemukan liat view product object $not_found
			if($t<=0)
				$data['not_found']='not found';
			
			$data['typecar'] = $this->uri->segment(3);
			
			$this->load->view('base/header');
			$this->load->view('product', $data);
			$this->load->view('base/footer');
		}
		else{
			redirect('product','refresh');
		}
	}

	public function detail($value='')
	{	
		$data['productimages'] = $this->m_product->getAllImage($value);
		$data['productdetail'] = $this->m_merk->getProduct($value);
		$data['package'] = $this->m_product->getCarPackage($value);
		$this->load->view('base/header');
		$this->load->view('productdetail',$data);
		$this->load->view('base/footer');
	}

	public function personalinfo()
	{	
		// echo $this->input->post('ipackage');
		// echo $this->input->post('icar');
		$car = array(
			'icar' => $this->input->post('icar'),
			'ipackage' => $this->input->post('ipackage')
		);
		//print_r($car);
		if($car['icar']!=''){
			$data['productdetail'] = $this->m_merk->getProduct($car['icar']);
			$data['productimages'] = $this->m_product->getAllImage($car['icar']);
			$data['package'] = $this->m_product->getPackages($car['ipackage'],$car['icar']);
			
			//print_r($data['productimages']);
			$car['price'] = $data['package'][0]['price'];
			$car['price_per']= $data['package'][0]['price_per'];
			$this->session->set_userdata('car',$car);

			$this->load->view('base/header');
			$this->load->view('booking/personalinfo',$data);
			$this->load->view('base/footer');
		}
		else{
			redirect('product','refresh');
		}
		
	}

	public function findMerk($type){
		$data['productc'] = $this->m_merk->findMerkbyType($type);
		echo json_encode($data);
	}

	public function vehicle()
	{		
		$personalinform = array(
			'blicense'=> $this->input->post('blicense'),
			'bname' => $this->input->post('bname'),
			'bphone' => $this->input->post('bphone'),
			'bemail' => $this->input->post('bemail'),
			'bresidence'=> $this->input->post('bresidance'),
			'bcity'=> $this->input->post('bcity'),
			'bcountry'=> $this->input->post('bcountry'),
			'bcompany'=> $this->input->post('bcompany'),
			'baddress'=> $this->input->post('baddress'),
			'bpassport'=> $this->input->post('bpassport'),
			'bnation'=> $this->input->post('bnation')
		);

		// print_r($personalinform);


		$this->session->set_userdata('bpersonalinfo',$personalinform);

		$data['productdetail'] = $this->m_merk->getProduct($this->session->userdata('car')['icar']);
		//print_r($data['productdetail']);
		$data['productimages'] = $this->m_product->getAllImage($this->session->userdata('car')['icar']);

		// $data['productc'] = $this->m_merk->findMerkbyType(3);
		$data['productc'] = $this->m_merk->product();
		//print_r($data['productc']);

		$data['package'] = $this->m_product->getPackages($this->session->userdata('car')['ipackage'],$this->session->userdata('car')['icar']);

//		print_r($this->session->userdata('car'));

		$data['class'] = $this->m_product->getCarClass();

		$this->load->view('base/header');
		$this->load->view('booking/vehicle',$data);
		$this->load->view('base/footer');
	}

	public function bookingconfirmation()
	{	
		if($this->input->post('vmerk')=='')
			redirect('product','refresh');

		
		$findcar= $this->m_product->getCarClassbyId($this->input->post('vmerk'));
		$merk = $findcar[0]['name'];
		$type = $findcar[0]['name_class'];
		// $this->input->post('vtype')
		// $this->input->post('vmerk')
		$vehicleinformation = array(
			'idcar' => $this->input->post('vmerk'),
			'namacar'=> "".$type."-".$merk,
			'vdelivery'=>"".$this->input->post('vdelivery'),
			'vquantity'=>''.$this->input->post('vquantity'),
			'vdriver'=>''.$this->input->post('vdriver'),
			'vinsurance'=>''.$this->input->post('vinsurance'),
			'vstartrental'=>''.$this->input->post('vdateRentalstart'),
			'vreturnrental'=>''.$this->input->post('vdateRentalReturn'),
			'vdeliveryaddress'=>''.$this->input->post('vaddressdelivery'),
			'vspesialrequest'=>''.$this->input->post('vspesicialrequest'),
		);
		$this->session->set_userdata('bvehicle',$vehicleinformation);

		$data['carpoint'] = $this->session->userdata('car');
		$data['personinfo'] = $this->session->userdata('bpersonalinfo');
		$data['vehicleinformation'] = $this->session->userdata('bvehicle');

		// echo "car data";
		// print_r($data['carpoint']);
		// echo "<br><br>";

		// echo "person data";
		// print_r($data['personinfo']);
		// echo "<br><br>";

		// echo "vehicle data";
		// print_r($data['vehicleinformation']);
		// echo "<br><br>";

		$this->load->view('base/header');
		$this->load->view('booking/bookingconfirmation',$data);
		$this->load->view('base/footer');
	}

	public function bookingaccept(){
		$this->load->view('base/header');
		$data['success']= "Konfirmasi Booking Telah dikirimkan ke email anda";
		$this->load->view('konfirmasi',$data);
		$this->load->view('base/footer');
	//	print_r($this->session->userdata('car'));
		// echo "<br>";
		// echo "<br>";
		// print_r($this->session->userdata('bpersonalinfo'));
		// echo "<br>";
		// echo "<br>";
		// print_r($this->session->userdata('bvehicle'));

		// echo "<br>";
		// echo "<br>";

		// echo "start date:".$this->session->userdata('bvehicle')['vstartrental'];
		// echo "<br>";
		// echo "end date:".$this->session->userdata('bvehicle')['vreturnrental'];
		// echo "<br>";	
		// echo "selisih: ";	

		// echo "".date('Y-d-m', strtotime($this->session->userdata('bvehicle')['vstartrental']));
		$start_date = new DateTime(date('Y-m-d', strtotime($this->session->userdata('bvehicle')['vstartrental'])));
		$end_date = new DateTime(date('Y-m-d', strtotime($this->session->userdata('bvehicle')['vreturnrental'])));
		// echo "<br>";
		// print_r($start_date->format('Y-m-d'));

		$interval = $start_date->diff($end_date);
		
		$price = $this->session->userdata('car')['price'];

		//ifpriceper==day
		// echo "<br>";
		// echo $interval->days;
		// echo $this->session->userdata('car')['price_per'];
		switch($this->session->userdata('car')['price_per']){
              
            case "Day":{
               $totalprice = $price * $interval->days;
               break;
            }
            default:
               $totalprice = $price;
        }

		// echo $totalprice;

		//echo date('Y-m-d H:i:s');

		$cardata = array(
			'blicense' => $this->session->userdata('bpersonalinfo')['blicense'],
			'dates' => date('Y-m-d H:i:s'),
			'ipackage' => $this->session->userdata('car')['ipackage'],
			'icar' => $this->session->userdata('bvehicle')['idcar'],
			'vdelivery'=> $this->session->userdata('bvehicle')['vdelivery'],
			'vquantity' =>  $this->session->userdata('bvehicle')['vquantity'],
			'vdriver' =>  $this->session->userdata('bvehicle')['vdriver'],
			'vinsurance' => $this->session->userdata('bvehicle')['vinsurance'],
			'vstartrental'=>  $start_date->format('Y-m-d'),
			'vreturnrental'=> $end_date->format('Y-m-d'),
			'vdeliveryaddress'=> $this->session->userdata('bvehicle')['vdeliveryaddress'],
			'vspesialrequest' => $this->session->userdata('bvehicle')['vspesialrequest'],
			'payment' => 0,//default
			'payment_status'=> "Belum Lunas",
			'charge' => $totalprice,
			'book_status'=> 'Queue'

		);

		$this->m_product->insertPersonalData($this->session->userdata('bpersonalinfo'));
		$this->m_product->insertCarBookData($cardata);

		$this->sendEmail($this->session->userdata('bpersonalinfo')['bemail']);

		// $this->session->sess_destroy();
		//echo "";
	}

	public function sendEmail($emails){

		$config = Array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://srv18.niagahoster.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'adminone@baliradianceinternational.com', 
			  'smtp_pass' => 'kolok123123', 
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
		);
		$config['_encoding'] = 'base64';

		$this->load->library('email', $config);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from('adminone@baliradianceinternational.com');
		$this->email->to($emails);
		$this->email->subject('Invoice Confirmation Bali Radiance');

		$data['bookcode'] = array(
			'code'=>'INPUT CODE DISINI'
		);

		$attched_file= $_SERVER["DOCUMENT_ROOT"]."/bali-radiance-car/assets/"."BAB 1.docx";
		
	//	echo $attched_file;

		$emailtemplate = $this->load->view('email_template',$data,TRUE);
		$this->email->message($emailtemplate);
	
		if($this->email->attach($attched_file, 'attachment', 'invoice.docx')){
			//	echo "<br>found";
		}
		else{
		//	echo "<br>not found";
		}


		if($this->email->send())
		{
		     // 	echo '<br>Email send.';

				// $this->m_donate->insertData($donate);
				//redirect('Donate/donasi/'.$donate['id_project_yg_dipilih'],'refresh');
		}
		else
		{
		    	// $data["sessionID"] =$this->session->userdata['donateItem'];
		    	// $this->load->view('eror_email',$data);
			show_error($this->email->print_debugger());
		}

		$this->email->clear($attched_file);
	}


	//find all product by input merk User
	//jika data ada return json
	public function findProduct(){
		
		$datas['cars'] = $this->m_product->getCarbyName($_POST['typingdata']);
		$x=0;
		foreach ($datas['cars'] as $key => $value) {
			# code...
			//print_r($value);
			$datas['image'][$x] = $this->m_product->getAllImage($value['id']);
			//print_r($data['image']);
			$x++;
		}
		// $data = array(
		// 	'13'=> array(
		// 		'nama_mobil'=>'BWM' ,
		// 		'price' => 'Rp. 16M'
		// 	),
		// 	'14'=> array(
		// 		'nama_mobil' => 'Kijang' ,
		// 		'price' => 'Rp. 15M'
		// 	)
		// );
		echo json_encode($datas);
	}
}
?>
