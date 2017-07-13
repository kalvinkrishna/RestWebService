<?php
class m_history extends CI_Model{
	public function getHistoryPersonDay($userid, $date){
		$query = $this->db->query("SELECT * FROM history WHERE id_user = '$userid' AND (waktu BETWEEN '$date 00:00:00' AND '$date 23:59:59')");
		return $query->result_array();
	}

	public function getHistoryPersonMonth($userid, $start, $end){
		$query = $this->db->query("SELECT * FROM history WHERE id_user = '$userid' AND (waktu BETWEEN '$start' AND '$end')");
		return $query->result_array();
	}

}
?>