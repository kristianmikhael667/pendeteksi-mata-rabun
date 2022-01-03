<?php
class Laporan_model extends CI_model
{

  public function getAllLaporan()
  {
    return $this->db->get('tbl_hasil_diagnosa')->result_array();
  }

  public function getAllFeed()
  {
    return $this->db->get('tbl_kepuasan')->result_array();
  }
}
