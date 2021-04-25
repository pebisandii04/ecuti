<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_cuti extends CI_Controller {

  public function __construct() {
    parent::__construct();
		is_logged_in();
		if ($this->session->userdata('nip') == '' || $this->session->userdata('role_id') != '3') {
	      redirect('blocked');
	  }
    $this->load->library('form_validation');
  }
    // function index menampilkan list data cuti tahunan
	public function index()	{
        $nip = $this->session->userdata('nip');
        $data['title']      = "E-Cuti | Data Cuti Tahunan";
        $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
        $data['data_cuti'] = $this->Model_cuti_tahunan->select_by_nip($nip)->result();
        $this->template->load('templates/template','administrator/data_cuti/view_data', $data);
	}

    // function Cuti umum menampilkan list data cuti umum
    public function Cuti_umum()	{
        $nip = $this->session->userdata('nip');
        $data['title']      = "E-Cuti | Data Cuti Umum";
        $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
        $data['data_cuti'] = $this->Model_cuti_umum->select_by_nip($nip)->result();
        $this->template->load('templates/template','administrator/data_cuti/view_data', $data);
	}

    public function Tambah_cuti_tahunan()
    {
        $id_unit = $this->session->userdata('id_unit_kerja');
        $data['option1'] = $this->M_cuti->get_option()->result();
        $data['option2'] = $this->M_cuti->get_option2($id_unit)->result();
        $this->template->load('templates/template','administrator/data_cuti/view_data', $data);
    }
}