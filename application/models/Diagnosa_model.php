<?php
class Diagnosa_model extends CI_model
{
  // Mengosongkan tabel tmp_gejala sebelum digunakan
  public function kosongTmpGejala()
  {
    return $this->db->truncate('tmp_gejala');
  }

  // mengosongkan tabel tmp_final sebelum digunakan
  public function kosongTmpFinal()
  {
    return  $this->db->truncate('tmp_final');
  }

  // memasukkan gejala terpilih ke tabel tmp_gejala
  public function insertTmpGejala()
  {
    $gejala = $this->input->post('id_gejala');
    $membernya = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();
    $member = $membernya['id_user'];

    foreach ($gejala as $g) {
      $data = [
        'id_user' => $member,
        'id_gejala' => $g
      ];
      $this->db->insert('tmp_gejala', $data);
    }
  }

  // memasukkan ke tmp_final
  public function insertTmpFinal()
  {
    $query = "SELECT `tmp_gejala`.`id_gejala`,`tbl_pengetahuan`.`id_penyakit`,`tbl_pengetahuan`.`probabilitas`
    FROM `tbl_pengetahuan` JOIN `tmp_gejala` 
    ON `tmp_gejala`.`id_gejala` = `tbl_pengetahuan`.`id_gejala`";
    return $this->db->query($query)->result_array();
  }

  // Perhitungan tiap kerusakan
  // Perhitungan kerusakan 1
  // Perhitungan Probabilitas tiap kerusakan yang ada di tmp_final
  public function ProbK1()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_penyakit', 39);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
      // var_dump('Jumlah 1 : ', $jumlah);
    }
    // Perhitungan hasil bayes kerusakan 1
    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_penyakit');
    $this->db->where('id_penyakit', 39);
    $data = $this->db->get()->result();

    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
      // var_dump('Hasil Bayes : ', $hasilBayes);
    }
    return $hasilBayes;
  }

  // Perhitungan kerusakan 2
  // Perhitungan Probabilitas tiap kerusakan yang ada di tmp_final
  public function ProbK2()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_penyakit', 40);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
      // var_dump('Jumlah 2 : ', $jumlah);
    }
    // Perhitungan hasil bayes kerusakan 2
    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_penyakit');
    $this->db->where('id_penyakit', 40);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
      // var_dump('Hasil Bayes 2 : ', $hasilBayes);
    }
    return $hasilBayes;
  }

  // Perhitungan kerusakan 3
  // Perhitungan Probabilitas tiap kerusakan yang ada di tmp_final
  public function ProbK3()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_penyakit', 41);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
      // var_dump('Jumlah 3 : ', $jumlah);
    }
    // Perhitungan hasil bayes kerusakan 3
    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_penyakit');
    $this->db->where('id_penyakit', 41);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
      // var_dump('Hasil Bayes 3 : ', $hasilBayes);
    }
    return $hasilBayes;
  }

  // Perhitungan kerusakan 4
  // Perhitungan Probabilitas tiap kerusakan yang ada di tmp_final
  public function ProbK4()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_penyakit', 42);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
      // var_dump('Jumlah 4 : ', $jumlah);
    }
    // Perhitungan hasil bayes kerusakan 4
    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_penyakit');
    $this->db->where('id_penyakit', 42);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
      // var_dump('Hasil Bayes 4 : ', $hasilBayes);
    }
    return $hasilBayes;
  }

  // Perhitungan kerusakan 4
  // Perhitungan Probabilitas tiap kerusakan yang ada di tmp_final
  public function ProbK5()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_penyakit', 43);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
      // var_dump('Jumlah 5 : ', $jumlah);
    }
    // Perhitungan hasil bayes kerusakan 5
    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_penyakit');
    $this->db->where('id_penyakit', 43);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
      // var_dump('Hasil Bayes 5 : ', $hasilBayes);
    }
    return $hasilBayes;
  }
  // End Perhitungan tiap kerusakan


  // Update Hasil Probabilitas pada tmp_final
  public function hasilProbK1($K1)
  {
    $hasilK1 = ['hasil_probabilitas' => $K1];
    $this->db->where('id_penyakit', 39);
    $this->db->update('tmp_final', $hasilK1);
  }
  public function hasilProbK2($K2)
  {
    $hasilK2 = ['hasil_probabilitas' => $K2];
    $this->db->where('id_penyakit', 40);
    $this->db->update('tmp_final', $hasilK2);
  }
  public function hasilProbK3($K3)
  {
    $hasilK3 = ['hasil_probabilitas' => $K3];
    $this->db->where('id_penyakit', 41);
    $this->db->update('tmp_final', $hasilK3);
  }
  public function hasilProbK4($K4)
  {
    $hasilK4 = ['hasil_probabilitas' => $K4];
    $this->db->where('id_penyakit', 42);
    $this->db->update('tmp_final', $hasilK4);
  }
  public function hasilProbK5($K5)
  {
    $hasilK5 = ['hasil_probabilitas' => $K5];
    $this->db->where('id_penyakit', 43);
    $this->db->update('tmp_final', $hasilK5);
  }
  // End Update Hasil Probabilitas pada tmp_final


  // Menampilkan Hasil diagnosa 

  // (Mendapatkan 3 Kerusakan dengan probabilitas yang terbesar)
  public function diagnosa()
  {
    $query = "SELECT DISTINCT `id_penyakit`,`hasil_probabilitas` 
    FROM `tmp_final`
    ORDER BY `tmp_final`.`hasil_probabilitas` DESC LIMIT 5";
    return $this->db->query($query)->result_array();
  }

  // Mendapatkan 1 kerusakan dengan probabilitas terbesar
  public function tertinggi()
  {
    $query = "SELECT `id_penyakit`, MAX(`hasil_probabilitas`) FROM `tmp_final` GROUP BY `id_penyakit` ORDER BY `hasil_probabilitas` DESC LIMIT 1";
    return $this->db->query($query)->result_array();
  }

  // Menampilkan Detail Hasil Akhir Diagnosa
  public function detailDiagnosa()
  {
    $query = "SELECT `tmp_final`.`id_penyakit`, MAX(`hasil_probabilitas`) as `hasil_probabilitas`,`tbl_penyakit`.`nama_penyakit`, `tbl_penyakit`.`gambar`,`tbl_penyakit`.`solusi` FROM `tmp_final` JOIN `tbl_penyakit` ON `tmp_final`.`id_penyakit` = `tbl_penyakit`.`id_penyakit` GROUP BY `id_penyakit` ORDER BY `hasil_probabilitas` DESC LIMIT 1";
    return $this->db->query($query)->result_array();
  }
  // End Menampilkan Hasil diagnosa 

  // Memasukkan hasil diagnosa ke tbl_hasil_diagnosa
  public function insertKepuasanUser($amount)
  {
    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->where('username', $this->session->userdata('username'));
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $nama = $row->nama_user;
      $id = $row->id_user;
    }
    $data = [
      'id_user' => $id,
      'nama_user' => $nama,
      'hasil_kepuasan' => $amount,
      'waktu' => time()
    ];
    return $this->db->insert('tbl_kepuasan', $data);
  }

  public function insertHasil()
  {
    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->where('username', $this->session->userdata('username'));
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $nama = $row->nama_user;
    }
    $kerusakan = $this->detailDiagnosa();

    foreach ($kerusakan as $k) {
      $kerusakannya = $k['nama_penyakit'];
      $nilai = floor($k['hasil_probabilitas'] * 100);
      $solusi = $k['solusi'];
    }
    $data = [
      'hasil_probabilitas' => $nilai,
      'nama_kerusakan' => $kerusakannya,
      'nama_user' => $nama,
      'solusi' => $solusi,
      'waktu' => time()
    ];
    return $this->db->insert('tbl_hasil_diagnosa', $data);
  }
}
