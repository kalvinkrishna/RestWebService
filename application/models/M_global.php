<?php
class m_global extends CI_Model{

	public function updateGlobal($name, $value){
		$data = array(
			'value' => $value
		);
		$result = $this->db->where('name', $name);
		$result = $this->db->update('m_global',$data);
		return $result;
	}

	public function updatePageContent($page, $data){
		$result = $this->db->where('page', $page);
		$result = $this->db->update('m_content',$data);
		return $result;
	}

	public function createPageContent($data){
		$result = $this->db->insert('m_content',$data);
		return $result;
	}

	public function getGlobalData($name){
		$query = $this->db->query("SELECT * FROM m_global WHERE name = '$name'");
		return $query->row_array();
	}

	public function getPageContent($page){
		$query = $this->db->query("SELECT * FROM m_content WHERE page = '$page'");
		return $query->row_array();
	}
}
?>