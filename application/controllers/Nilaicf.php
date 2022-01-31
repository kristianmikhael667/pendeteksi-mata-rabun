<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilaicf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Nilaicf_model');
    }

    public function index()
    {
        $q = null;
        $start = intval($this->input->get('start'));
        $config['base_url'] = base_url() . 'index.php/nilai_cf';
        $config['first_url'] = base_url() . 'index.php/nilai_cf';
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Nilaicf_model->total_rows($q);
        $this->pagination->initialize($config);
        $data['content'] = 'admin/nilai_cf/list';
        $data['pagination'] = $this->pagination->create_links();
        $data['start'] = $start;
        $data['judul'] = 'Halaman Nilai CF';
        $data['tabel'] = 'Data Nilai CF';

        $data['user'] = $this->db->get_where('tbl_user', [
            'username' => $this->session->userdata('username')
        ])->row_array();
        $data['kelompok_data'] = $this->Nilaicf_model->daftarNilaicf($config['per_page'], $start, $q);
        $this->load->view('templates/Admin_header', $data);
        $this->load->view('templates/Admin_sidebar', $data);
        $this->load->view('templates/Admin_topbar');
        $this->load->view('admin/nilaicf/index', $data);
        $this->load->view('templates/Admin_footer');
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $this->Nilaicf_model->insert();
            redirect('nilaicf/index');
        }
        $data['judul'] = 'Halaman Create Nilai CF';

        $data['user'] = $this->db->get_where('tbl_user', [
            'username' => $this->session->userdata('username')
        ])->row_array();
        $this->load->view('templates/Admin_header', $data);
        $this->load->view('templates/Admin_sidebar', $data);
        $this->load->view('templates/Admin_topbar');
        $this->load->view('admin/nilaicf/create', $data);
        $this->load->view('templates/Admin_footer');
    }

    public function edit()
    {
        if (isset($_POST['submit'])) {
            $this->Nilaicf_model->edit();
            redirect('nilaicf/index');
        }

        $id = $this->uri->segment(3);
        $data['penyakit'] = $this->db->query("SELECT * FROM tbl_penyakit order by id_penyakit")->result();
        $data['gejala'] = $this->db->query("SELECT * FROM tbl_gejala order by id_gejala")->result();
        $data['nilaicf'] = $this->Nilaicf_model->getById($id);
        $data['judul'] = 'Halaman Edit Nilai CF';

        $data['user'] = $this->db->get_where('tbl_user', [
            'username' => $this->session->userdata('username')
        ])->row_array();
        $this->load->view('templates/Admin_header', $data);
        $this->load->view('templates/Admin_sidebar', $data);
        $this->load->view('templates/Admin_topbar');
        $this->load->view('admin/nilaicf/edit', $data);
        $this->load->view('templates/Admin_footer');
    }

    public function hapus()
    {
        $id = $this->uri->segment(3);
        $this->Nilaicf_model->hapus($id);
        redirect('nilaicf/index');
    }
}
