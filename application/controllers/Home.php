<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Halaman Utama
class Home extends CI_Controller
{

  public function index()
  {
    // $curl = curl_init();

    // curl_setopt_array($curl, [
    //   CURLOPT_URL => "https://api.kawalcorona.com/indonesia",
    //   CURLOPT_RETURNTRANSFER => true,
    //   CURLOPT_FOLLOWLOCATION => true,
    //   CURLOPT_ENCODING => "",
    //   CURLOPT_MAXREDIRS => 10,
    //   CURLOPT_TIMEOUT => 30,
    //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //   CURLOPT_CUSTOMREQUEST => "GET",
    // ]);

    // $response = curl_exec($curl);
    // $err = curl_error($curl);

    // curl_close($curl);

    // $readAPI = file_get_contents('https://api.kawalcorona.com/indonesia');
    // $response = json_decode($readAPI, true);
    // var_dump($response);
    // die;

    // $data['corona'] = $response;
    $data['judul'] = "@DimensiCare";
    $this->load->view('templates_home/head', $data);
    $this->load->view('home/index');


    // $this->load->view('templates/Home_Footer');
  }

  // // Home Member
  // public function user()
  // {
  //   $this->load->view('templates/Home_Header');
  //   $this->load->view('home/user');
  //   $this->load->view('templates/Home_Footer');
  // }
}
