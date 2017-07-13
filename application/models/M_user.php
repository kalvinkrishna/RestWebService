<?php
class m_user extends CI_Model{
	public function login($username, $password){
		//$password=sha1($password);
		
		$query = $this->db->query("SELECT id_user, username, fullname,telephone,last_login FROM m_user WHERE username = '$username' AND password = SHA1('$password')");
		
		// $query = $this->db->query("SELECT id_user, id_user_upper, username, name, address, phone, privilege, status FROM user WHERE username = '$username' AND password = SHA1('$password')");
		return $query->row_array();
	}	

	public function getUser($id){
		$query = $this->db->query("SELECT * FROM m_user WHERE id_user='$id' ");
		$result = $query->result_array();
		return $result;
	}
	public function getAlluser(){
		$query = $this->db->query("SELECT id_user, username,fullname,telephone,last_login FROM m_user");
		$result = $query->result_array();
		return $result;
	}
	
	public function register($data){
		$result = $this->db->insert('m_user', $data);
		return $result;
	}

	public function generateToken($data){
		//cek token kalo ada update
		$result = $this->getToken($data['id_user']);
		if(!empty($result)){
			$this->db->where('id_user', $data['id_user']);
			$this->db->update('token', $data); 	
		}else{
			$insert = $this->db->insert('token', $data);
			$result = $this->getToken($data['id_user']);
		}

		return $result;
	}

	public function getToken($id_user){
		$query = $this->db->query("SELECT * FROM token where id_user = '$id_user' LIMIT 1");
		return $query->row_array();
	}

	public function checkToken($id_user, $token){
		$query = $this->db->query("SELECT * FROM token where id_user = '$id_user' AND token = '$token' LIMIT 1");
		return !empty($query->row_array());
	}

	public function getposition($id_user){
		$query = $this->db->query("SELECT * FROM location WHERE id_user = '$id_user' LIMIT 1");
		return $query->row_array();
	}

	public function insertposition($data){
		$result = $this->db->insert('location', $data);
		return $result;
	}

	public function updateposition($id, $data){
		$this->db->where('id_location', $id);
		$result = $this->db->update('location', $data); 
		return $result;
	}

	public function updateUserdata($data,$id){
		$this->db->where('id_user', $id);
		$this->db->update('m_user', $data);
	}

	public function getlastiduser($pri){
		$query = $this->db->query("SELECT SUBSTR(id_user, 4,6) as lastid FROM `user` WHERE privilege = $pri ORDER BY id_user DESC LIMIT 1");
		$result = $query->row_array();
		$id = intval($result['lastid']);
		$id++;

		if($id<10)
			return $pri.'00'.$id;
		else if($id<100){
			return $pri.'0'.$id;
		}else{
			return $pri.''.$id;
		}
	}

}
?>