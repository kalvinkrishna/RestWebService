<?php
class m_product extends CI_Model{
	public function getCarDetail($id_car){
		$query = $this->db->query("SELECT *, mc.description AS car_desc FROM m_car mc, m_class mct WHERE mc.id_class = mct.id_class AND mc.id_car = '$id_car'");
		return $query->row_array();
	}

	public function getPackage(){
		$query = $this->db->query("SELECT * FROM m_package");
		return $query->result_array();
	}

	public function insertPackage($data){
		$query = $this->db->insert('m_package', $data);
	}

	public function updatePackage($id, $data){
		$result = $this->db->where('id_package', $id);
		$result = $this->db->update('m_package', $data);
	}

	public function deletePackage($id){
		$result = $this->db->where('id_package',$id);
		$result = $this->db->delete('m_package');
	}

	public function getPackages($idpackage,$idcar){
		$query = $this->db->query("SELECT * FROM m_car_package mcp, m_package mc WHERE mcp.id_package = mc.id_package AND mcp.id_car = $idcar AND mc.id_package = $idpackage");
		return $query->result_array();
	}

	public function getCarPackage($id){
		$query = $this->db->query("SELECT * FROM m_car_package mcp, m_package mc WHERE mcp.id_package = mc.id_package AND id_car = $id");
		return $query->result_array();
	}


	public function getCarClassbyId($id){
		$query = $this->db->query("SELECT mcl.name_class,mc.name FROM `m_car` mc RIGHT JOIN m_class mcl ON mc.id_class= mcl.id_class WHERE mc.id_car= $id");
		return $query->result_array();
	}


	public function insertCarPackage($data){
		$query = $this->db->insert('m_car_package', $data);
	}

	public function insertPersonalData($data){

		// $result = $this->db->where('blicense', $data['blicense']);
		// $result = $this->db->update('t_personal_booking_info', $data);
		$id=$data["blicense"];
		$query = $this->db->query("SELECT * FROM t_personal_booking_info WHERE blicense= '$id' ");

		if($this->db->affected_rows() > 0){
			 $result = $this->db->where('blicense', $data['blicense']);
			 $result = $this->db->update('t_personal_booking_info', $data);	
		}
		else{
			$this->db->insert('t_personal_booking_info', $data);
		}
		
	}

	public function insertCarBookData($data){
		$query = $this->db->insert('t_car_booking_info',$data);

	}

	public function updateCarPackage($id, $data){
		$result = $this->db->where('id_car_package', $id);
		$result = $this->db->update('m_car_package', $data);
	}

	public function deleteCarPackage($id){
		$result = $this->db->where('id_car_package',$id);
		$result = $this->db->delete('m_car_package');
	}

	public function getCarClass(){
		$query = $this->db->query("SELECT * FROM m_class");
		return $query->result_array();
	}

	public function insertCarClass($data){
		$query = $this->db->insert('m_class', $data);
	}

	public function deleteCarClass($id){
		$result = $this->db->where('id_class',$id);
		$result = $this->db->delete('m_class');
	}

	public function insertCarImage($data){
		$query = $this->db->insert('m_car_picture',$data);
	}

	//ambil semua gambar dengan idmobil pada gambar sama dengan idmobil yang dipilih untuk
	//menampilkan detail
	
	public function getAllImage($id){
		$query = $this->db->query("SELECT * FROM m_car_picture WHERE id_car= '$id'");
		return $query->result_array();
	}
	public function getcarImage($id){
		$query = $this->db->query("SELECT * FROM m_car_picture WHERE id_car_picture= '$id'");
		return $query->result_array();
	}
	public function deleteCarImage($idCarImage){
		$result = $this->db->where('id_car_picture',$idCarImage);
		$result = $this->db->delete('m_car_picture');
	}


	public function getCarDetail2($id){
		$query = $this->db->query("SELECT * FROM m_car_detail WHERE id_car= '$id'");
		return $query->result_array();
	}

	public function getCarDetailById($id){
		$query = $this->db->query("SELECT * FROM m_car_detail WHERE id_car_detail= '$id'");
		return $query->row_array();
	}

	public function insertCarDetail($data){
		$query = $this->db->insert('m_car_detail', $data);
	}

	public function updateCarDetail($id, $data){
		$result = $this->db->where('id_car_detail', $id);
		$result = $this->db->update('m_car_detail', $data);
	}

	public function deleteCarDetail($id){
		$result = $this->db->where('id_car_detail',$id);
		$result = $this->db->delete('m_car_detail');
	}

	//ambil semua data dari mobil yang memiliki nama sama dengan inputan 
	public function getCarbyName($name){
		$query = $this->db->query("SELECT id_car as id , name as nama_mobil,start_price as price FROM m_car WHERE name LIKE '%$name%' ");
		return $query->result_array();
	}

}
?>