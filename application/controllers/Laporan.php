<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct() {
    parent::__construct();
		$this->load->helper('tgl_indo');
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
        $data['title'] = "E-Cuti | Data Laporan Cuti Tahunan ";
        $data['user']   = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
		$nip = $this->session->userdata('nip');
		$id_user = $this->session->userdata('id_user');
		$role_id = $this->session->userdata('role_id');
		if ($id_user == 1 && $role_id == 2) {
			$data['listdata'] = $this->Model_laporan->get_ct_all($nip)->result();
		}
		else if($role_id == 2 OR $id_user =!1){
			$data['listdata'] = $this->Model_laporan->get_ct_pejabat($nip)->result();
		}
		else {
			$data['listdata'] = $this->Model_laporan->get_ct_peruser($nip)->result();
		}
		$this->template->load('templates/template','Laporan/Laporan_ct_apv', $data);
    }

	public function All_pending_ct(){
		$data['title'] = "E-Cuti | Data Laporan Cuti Tahunan Pending";
        $data['user']   = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
		$nip = $this->session->userdata('nip');
		$id_user = $this->session->userdata('id_user');
		if ($id_user == 1) {
			$data['listdata'] = $this->Model_laporan->get_all_pending($nip)->result();
		}
		else {
			$data['listdata'] = $this->Model_laporan->get_ct_pending_peruser($nip)->result();
		}
		$this->template->load('templates/template','Laporan/Laporan_ct_pending', $data);
	}

	public function All_cu_apv(){
        $data['title'] = "E-Cuti | Data Laporan Cuti Umum Apv ";
        $data['user']   = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
		$nip = $this->session->userdata('nip');
		$role_id = $this->session->userdata('role_id');
		$id_user = $this->session->userdata('id_user');
		if ($id_user == 1 || $role_id == 2) {
			$data['listdata'] = $this->Model_laporan->get_cu_apv($nip)->result();
		}
		else if($role_id == 2 OR $id_user =!1){
			$data['listdata'] = $this->Model_laporan->get_cu_pejabat($nip)->result();
		}
		else {
			$data['listdata'] = $this->Model_laporan->get_cu_peruser($nip)->result();
		}
		$this->template->load('templates/template','Laporan/Laporan_cu_apv', $data);
    }

	public function All_pending_cu(){
		$data['title'] = "E-Cuti | Data Laporan Cuti Umum Pending";
        $data['user']   = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
		$nip = $this->session->userdata('nip');
		$id_user = $this->session->userdata('id_user');
		if ($id_user == 1) {
			$data['listdata'] = $this->Model_laporan->get_cu_all_pending($nip)->result();
		}
		else {
			$data['listdata'] = $this->Model_laporan->get_cu_pending_peruser($nip)->result();
		}
		$this->template->load('templates/template','Laporan/Laporan_cu_pending', $data);
	}

	public function Cetak_surat(){
		$nip = $this->session->userdata('nip');
		$data['data'] = $this->Model_laporan->select_data_cetak_ct($nip)->row();
		//$this->load->view('Laporan/Cetak_surat',$data);
		$this->load->library('pdf');
		$this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->filename = "laporan-petanikode.pdf";
		$this->pdf->load_view('laporan/cetak_surat', $data);
	}

	public function Cetak_lampiran(){
		$nip = $this->uri->segment(3);
		$data['datauser'] = $this->Model_laporan->select_data_cetak_ct($nip)->row();
		$data['hak'] = $this->Model_laporan->get_hak_ct($nip)->row();
		$data['datauser2'] = $this->Model_laporan->get_data_atasan_ct($nip)->row();
		$data['list'] = $this->Model_laporan->get_jenis_cuti()->result_array();
		$this->load->library('pdf');
		$this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->filename = "laporan-petanikode.pdf";
		$this->pdf->load_view('laporan/cetak_lampiran', $data);
	}

	public function Cetak_lampiran_cu(){
		$nip = $this->uri->segment(3);
		$data['datauser'] = $this->Model_laporan->select_data_cetak_cu($nip)->row();
		$data['hak'] = $this->Model_laporan->get_hak_ct($nip)->row();
		$data['datauser2'] = $this->Model_laporan->get_data_atasan_cu($nip)->row();
		$data['list'] = $this->Model_laporan->get_jenis_cuti()->result_array();
		$this->load->library('pdf');
		$this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->filename = "laporan-petanikode.pdf";
		$this->pdf->load_view('laporan/cetak_lampiran', $data);
	}
}
