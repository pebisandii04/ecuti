<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct() {
    parent::__construct();
		is_logged_in();
		if ($this->session->userdata('nip') == '' || $this->session->userdata('role_id') != '3' && $this->session->userdata('role_id') != '2' && $this->session->userdata('role_id') != '4') {
	      redirect('blocked');
	  }
    $this->load->library('form_validation');
  }

	public function All_ct(){
			$data['title'] = "E-Cuti | Laporan All Data Cuti";
			$data['user']   = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
			$this->template->load('templates/template','Laporan/Laporan_ct_apv', $data);
	}

    public function All_ct_apv(){
        $data['title'] = "E-Cuti | Laporan Cuti ";
        $data['user']   = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
		$nip = $this->session->userdata('nip');
		$id_user = $this->session->userdata('id_user');
		if ($id_user == 1) {
			$data['listdata'] = $this->Model_laporan->get_ct_all($nip)->result();
		}
		else {
			$data['listdata'] = $this->Model_laporan->get_ct_avp($nip)->result();
		}
		$this->template->load('templates/template','Laporan/Laporan_ct_apv', $data); 
    }
	
	public function Cetak_lampiran(){
		$this->load->view('Laporan/Cetak_surat');
	}
}
