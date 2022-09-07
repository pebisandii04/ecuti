<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct() {
    parent::__construct();
		is_logged_in();
		if ($this->session->userdata('nip') == '' || $this->session->userdata('role_id') != '1') {
	      redirect('blocked');
	  }
    $this->load->library('form_validation');
  }

	public function index()	{
			$data['title'] = "E-Cuti | Dashboard";
			$data['user']   = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
			$data['jml_ct'] = $this->public_model->get_jml_ct()->num_rows();
			$data['jml_cu'] = $this->public_model->get_jml_cu()->num_rows();
			$data['jml_user'] = $this->public_model->get_jml_usr()->num_rows();
			$data['jml_cu_besar'] = $this->public_model->get_jml($where = 2)->num_rows();
			$data['jml_cu_sakit'] = $this->public_model->get_jml($where = 3)->num_rows();
			$data['jml_cu_melahirkan'] = $this->public_model->get_jml($where = 4)->num_rows();
			$data['jml_cu_urgent'] = $this->public_model->get_jml($where = 5)->num_rows();
			$data['jml_cu_dtn'] = $this->public_model->get_jml($where = 6)->num_rows();
			$this->template->load('templates/template','administrator/index', $data);
	}
	
}
