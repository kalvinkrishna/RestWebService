<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_merk extends CI_Model {

	private $serries;
	private $year;
	private $color = [];

	public function getMerk($brand){

		$query = "SELECT * FROM m_product,m_merk WHERE m_product LEFT JOIN m_merk ";
	}

	public function insertCar($car){
		$query = $this->db->insert('m_car', $car);
	}
	public function insertTipeCar($cartype){
		//cekdulu tipenya ada atau tidak
		if($this->cekTipe($cartype) == 0){
			$car_type = array(
				'name_type' => $cartype,
				'description'=> ''
			);
		$query = $this->db->insert('m_car_type',$car_type);
			//return $query;
		}
		else{
			//nothing to do.
		}
	}
	private function cekTipe($cartype){
		$cars = $cartype;
		$query = $this->db->query("SELECT name_type FROM m_car_type WHERE name_type= '$cars'");
		return $query->row_array();
	}

	public function type(){
		$query = $this->db->query("SELECT * FROM m_car_type");
		$result = $query->result_array();
		return $result;
	}

	public function product(){
		$query = $this->db->query("SELECT * FROM m_car mc LEFT JOIN m_class mct ON mc.id_class= mct.id_class ORDER BY name ASC");
		$result = $query->result_array();
		return $result;
	}

	public function productByClass($class,$order,$sort){
		$query = $this->db->query("SELECT * FROM m_car mc LEFT JOIN m_class mct ON mc.id_class= mct.id_class WHERE mct.id_class='$class' ORDER BY $order $sort");
		$result = $query->result_array();
		return $result;
	}
	public function getProduct($id){
		$query = $this->db->query("SELECT * FROM m_car WHERE id_car='$id'");
		$result = $query->result_array();
		return $result;
	}
	public function deletetipe($id){
		$this->db->where('id_car_type',$id);
		$this->db->delete('m_car_type');			
	}
	public function deleteproduct($id){
		$this->db->where('id_car',$id);
		$this->db->delete('m_car');
	}

	public function updatedataproduct($data,$id){
		$this->db->where('id_car', $id);
		$this->db->update('m_car', $data);
	}


	public function findMerkbyType($type){
		$query = $this->db->query("SELECT * FROM m_car mc LEFT JOIN m_class mct ON mc.id_class= mct.id_class WHERE mc.id_class='$type' ORDER BY name ASC");
		$result = $query->result_array();
		return $result;
	}
}

/* End of file M_merk.php */
/* Location: ./application/models/M_merk.php */