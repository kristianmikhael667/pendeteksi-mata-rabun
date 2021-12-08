<?php

class Kerusakan_model extends CI_model
{
  public function KodeKerusakan()
  {
    // Membuat kode gejala menjadi generate AI (Auto Increment)
    $query = $this->db->query("select max(kode_penyakit) as max_id from tbl_penyakit");
    $rows = $query->row();
    $kode = $rows->max_id;
    $noUrut = (int) substr($kode, 1, 2);
    $noUrut++;
    $char = "K";
    $kode = $char . sprintf("%02s", $noUrut);
    return $kode;
  }

  // CRUD KERUSAKAN
  // menampilkan seluruh data kerusakan yang ada di tabel kerusakan.
  public function getAllKerusakan()
  {
    return $this->db->get('tbl_penyakit')->result_array();
  }

  // Tambah data Kerusakan
  public function tambahKerusakan()
  {
    $data = [
      // Data yang ada di modal
      'kode_penyakit' => $this->KodeKerusakan(),
      'nama_penyakit' => $this->input->post('nama', true),
      'probabilitas' => $this->input->post('probabilitas', true),
      'solusi' => $this->input->post('solusi', true)
    ];
    $this->db->insert('tbl_penyakit', $data);
  }

  // Ubah Data Kerusakan
  public function ubahkerusakan()
  {
    $id = $this->input->post('id');
    // Mengubah data gejala
    $data = [
      "kode_penyakit" => $this->input->post('kode', true),
      "nama_penyakit" => $this->input->post('nama', true),
      "probabilitas" => $this->input->post('probabilitas', true),
      "solusi" => $this->input->post('solusi', true)
    ];
    $this->db->where('id_penyakit', $id);
    $this->db->update('tbl_penyakit', $data);
  }

  // Hapus Data Kerusakan
  public function hapusKerusakan($id)
  {
    $this->db->delete('tbl_penyakit', ['id_penyakit' => $id]);
  }
  // END CRUD KERUSAKAN
}
