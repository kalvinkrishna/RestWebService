
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

	public function index()
	{
		$this->load->model('catalog');
	}

	public function insert($mobil){
		$this->catalog->insertmobil($mobil);
	}

	public function delete($mobilindex){
		$this->catalog->deletemobil($mobilindex);
	}


}

/* End of file Content.php */
/* Location: ./application/controllers/Content/Content.php */
?>