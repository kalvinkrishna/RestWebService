<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Userbookdata extends REST_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function userbook_get(){
		//return something
		//$this->response(REST_Controller::HTTP_BAD_REQUEST);
		//$this->response(REST_Controller::HTTP_OK);
		$id = $this->get('bencong');
		//echo $id;
	}	
	public function userbook_post(){
		//type here for post
		$this->response(REST_Controller::HTTP_CREATE);
	}
	public function userbook_delete(){
		//
		$this->response(REST_Controller::HTTP_OK);
	}

	public function lastbook_get(){
		$index = $this->get('id');
		//echo "nomor yang diambil: ".$this->get('id')."\n";

		$lastbookservice = array(
			"0" =>array(
						'idbook' => "A590202021", 
						'pelanggan' => "Andi",
						'alamat' => "jalan kapten pattimurah no 50"
				  ),
			"1" => array(
				'idbook' => "A590202022", 
				'pelanggan' => "Budi",
				'alamat' => "jalan kapten pattimurah no 50"
			),
			"2" => array(
				'idbook' => "A590202023", 
				'pelanggan' => "Joko",
				'alamat' => "jalan kapten pattimurah no 50"
			),
			"3" => array(
				'idbook' => "A590202024", 
				'pelanggan' => "Kezia",
				'alamat' => "jalan kapten pattimurah no 50"
			),
			"4" => array(
				'idbook' => "A590202025", 
				'pelanggan' => "Anwar",
				'alamat' => "jalan kapten pattimurah no 50"
			),
			"5" => array(
				'idbook' => "A590202026", 
				'pelanggan' => "Kalvin",
				'alamat' => "jalan kapten pattimurah no 50"
			),
			"6" => array(
				'idbook' => "A590202027", 
				'pelanggan' => "Yudis",
				'alamat' => "jalan kapten pattimurah no 50"
			)
		);
		$totalarray = count($lastbookservice);

		if($index < $totalarray){
			$this->response(array_slice($lastbookservice,-($index)),REST_Controller::HTTP_OK); //get last index berdasarkan input user
		}
		
		$this->response($lastbookservice);
	}

	public function lastbook_post(){
		$this->response(REST_Controller::HTTP_CREATE);	
	}
}

/* End of file Userbookdata.php */
/* Location: ./application/controllers/apiservice/Userbookdata.php */