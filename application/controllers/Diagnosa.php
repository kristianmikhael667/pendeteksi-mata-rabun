<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Diagnosa_model', 'DM');
    $this->load->model('Laporan_model', 'ML');
    $this->load->model('Gejala_model', 'GM');
    $this->load->model('Nilaicf_model', 'NCF');
  }

  public function hasil()
  {
    // CF
    $gejalacf = implode(",", $this->input->post('id_gejala_cf'));
    $data["listGejala"] = $this->GM->get_list_by_id($gejalacf);

    // Hitung
    $listpenyakit = $this->NCF->get_by_gejala($gejalacf);
    $penyakit = array();
    $i = 0;
    foreach ($listpenyakit->result() as $value) {

      $listGejala = $this->NCF->get_gejala_by_penyakit($value->penyakit_id, $gejalacf);
      $combineCFmb = 0;
      $combineCFmd = 0;
      $CFBefore = 0;
      $j = 0;
      foreach ($listGejala->result() as $value2) {

        $j++;

        if ($j == 3) {
          $combineCFmb = $value2->mb;
          $combineCFmd = $value2->md;
        } else {
          $combineCFmb = $combineCFmb + ($value2->mb * (1 - $combineCFmb));
          $combineCFmd = $combineCFmd + ($value2->md * (1 - $combineCFmd));
          $combinehasil = $combineCFmb - $combineCFmd;
        }
        if ($combinehasil) {
          $user = $this->db->get_where('tbl_user', [
            'username' => $this->session->userdata('username')
          ])->row_array();
          $penyakit[$i] = array(
            // 'name_user' => $user['nama_user'],
            'kode' => $value->kode_penyakit,
            'nama' => $value->nama_penyakit,
            'kepercayaan' => $combinehasil * 100,
            'keterangan' => $value->solusi
          );
          // $this->db->insert('hasil_kepercayaan', $penyakit[$i]);
          $i++;
        }
      }

      // insert ke tabel history
      $insert_data = array();
      $user = $this->db->get_where('tbl_user', [
        'username' => $this->session->userdata('username')
      ])->row_array();

      foreach ($this->input->post('id_gejala_cf') as $g) {
        $insert_data[] = array(
          'user_id' => $user['id_user'],
          'name' => $user['nama_user'],
          'gejala_id' => $g
        );
      }
      $this->db->insert_batch('history', $insert_data);

      usort($penyakit, function ($a, $b) {

        return ($a["kepercayaan"] > $b['kepercayaan']) ? -1 : 1;
      });
      // exc
    }
    $this->DM->kosongTmpGejala();
    $this->DM->kosongTmpFinal();
    $this->DM->insertTmpGejala();

    $tmpGejala = $this->DM->insertTmpFinal();
    $this->db->insert_batch('tmp_final', $tmpGejala);

    // Proses Perhitungan
    $probK1 = $this->DM->ProbK1();
    // echo 'Nilai Prob K1 =' . $probK1 . '<br>';
    $probK2 = $this->DM->ProbK2();
    // echo 'Nilai Prob K2 =' . $probK2 . '<br>';
    $probK3 = $this->DM->ProbK3();
    // echo 'Nilai Prob K3 =' . $probK3 . '<br>';
    $probK4 = $this->DM->ProbK4();
    // echo 'Nilai Prob K4 =' . $probK4 . '<br>';
    $probK5 = $this->DM->ProbK5();
    // echo 'Nilai Prob K5 =' . $probK5 . '<br><br>';
    // Testing Hasil Perhitungan Bayes Tiap Kerusakan
    $data = [
      'K1' => $probK1,
      'K2' => $probK2,
      'K3' => $probK3,
      'K4' => $probK4,
      'K5' => $probK5
    ];
    $jmlProb = array_sum($data);
    // echo 'Jumlah Probabilitas =' . $jmlProb . '<br><br>';

    $K1 = ($probK1 / $jmlProb) . '<br>';
    // echo 'Nilai Perhitungan Bayes K1 =' .  $K1 . '<br>';
    $K2 = ($probK2 / $jmlProb) . '<br>';
    // echo 'Nilai Perhitungan Bayes K2 =' . $K2 . '<br>';
    $K3 = ($probK3 / $jmlProb) . '<br>';
    // echo 'Nilai Perhitungan Bayes K3 =' . $K3 . '<br>';
    $K4 = ($probK4 / $jmlProb) . '<br>';
    // echo 'Nilai Perhitungan Bayes K4 =' . $K4 . '<br>';
    $K5 = ($probK5 / $jmlProb) . '<br>';
    // echo 'Nilai Perhitungan Bayes K5 =' . $K5 . '<br>';


    $this->DM->hasilProbK1($K1);
    $this->DM->hasilProbK2($K2);
    $this->DM->hasilProbK3($K3);
    $this->DM->hasilProbK4($K4);
    $this->DM->hasilProbK5($K5);

    //insert hasil dari diagnosa
    $this->DM->insertHasil();
    $data['judul'] = "Halaman Hasil Diagnosa";
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    // Hasil Diagnosa Akhir
    // Hasil 3 Kerusakan dengan prob tertinggi
    $data['diagnosa'] =  $this->DM->diagnosa();
    // Hasil Kerusakan dengan prob paling tinggi
    $data['tertinggi'] = $this->DM->tertinggi();
    // Detail Hasil Diagnosa
    $data['detail'] = $this->DM->detailDiagnosa();

    $data['kerusakan'] = $this->db->get('tbl_penyakit')->result_array();

    // Certainty factory
    $data['listPenyakit'] = $penyakit;
    die(var_dump($penyakit[0]));

    $user = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();
    $data_hasil = array(
      'name_user' => $user['nama_user'],
      'kode' => $penyakit[0]['kode'],
      'nama' => $penyakit[0]['nama'],
      'kepercayaan' => $penyakit[0]['kepercayaan'],
      'keterangan' => $penyakit[0]['keterangan']
    );
    $this->db->insert('hasil_kepercayaan', $data_hasil);


    $this->load->view('templates_hasil/Hasil_Header', $data);
    $this->load->view('member/hasil_diagnosa', $data);
    $this->load->view('templates_hasil/Hasil_Footer');

    // redirect('member/hasil_diagnosa');
  }

  public function hasilkepuasan()
  {
    $amount = $this->input->post('amount');
    $this->DM->insertKepuasanUser($amount);
  }
}
