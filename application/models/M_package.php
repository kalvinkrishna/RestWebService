<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_package extends CI_Model {

    public function getAllPackages($value='')
    {
      $query = "SELECT * FROM `m_car_package` a INNER JOIN m_car b on a.id_car = b.id_car INNER JOIN m_package c on c.id_package = a.id_package";
      $result = $this->db->query($query);
      if ($result){
          return $result->result_array();
      }else {
          return false;
      }
    }

}

/* End of file M_package.php */
/* Location: ./application/models/M_package.php */
