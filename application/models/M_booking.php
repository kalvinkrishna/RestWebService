<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_booking extends CI_Model {

    public function getBookingList()
    {
      $query = "SELECT * FROM t_car_booking_info tcb INNER JOIN t_personal_booking_info tpb ON tcb.blicense = tpb.blicense INNER JOIN m_car mc ON tcb.icar = mc.id_car INNER JOIN m_package mp ON tcb.ipackage = mp.id_package WHERE tcb.book_status='Queue' ORDER BY dates DESC";
      $result = $this->db->query($query);
      if ($result)
          return $result->result_array();
      else
          return false;
    }

    public function getBookingHistory(){
      $query = "SELECT * FROM t_car_booking_info tcb INNER JOIN t_personal_booking_info tpb ON tcb.blicense = tpb.blicense INNER JOIN m_car mc ON tcb.icar = mc.id_car INNER JOIN m_package mp ON tcb.ipackage = mp.id_package INNER JOIN m_car_detail mcd ON tcb.id_car_number=mcd.id_car_detail WHERE tcb.book_status<>'Queue' ORDER BY dates DESC";
      $result = $this->db->query($query);
      if ($result)
          return $result->result_array();
      else
          return false;
    }

    public function getBookingId($id){
      $query = "SELECT * FROM t_car_booking_info tcb INNER JOIN m_car mc ON tcb.icar = mc.id_car INNER JOIN m_package mp ON tcb.ipackage = mp.id_package INNER JOIN t_personal_booking_info tpb ON tcb.blicense = tpb.blicense WHERE id_book = $id";
      $result = $this->db->query($query);
      if ($result)
          return $result->row_array();
      else
          return false;
    }

     public function gethistoryBookingId($id){
      $query = "SELECT * FROM t_car_booking_info tcb INNER JOIN m_car mc ON tcb.icar = mc.id_car INNER JOIN m_package mp ON tcb.ipackage = mp.id_package INNER JOIN t_personal_booking_info tpb ON tcb.blicense = tpb.blicense  INNER JOIN m_car_detail mcd ON tcb.id_car_number=mcd.id_car_detail WHERE id_book = $id";
      $result = $this->db->query($query);
      if ($result)
          return $result->row_array();
      else
          return false;
    }

    public function getPackageCarPrice($id_car, $id_package){
      $query = "SELECT * FROM m_car_package WHERE id_package= $id_package AND id_car = $id_car";
      $result = $this->db->query($query);
      if ($result)
          return $result->row_array();
      else
          return false;
    }

    public function updateBooking($data, $id){
      $result = $this->db->where('id_car_booking', $id);
      $result = $this->db->update('t_car_booking', $data);
    }

}
