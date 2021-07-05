<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
    parent::__construct();
		is_logged_in();
    $this->load->library('form_validation');
  }

	public function index()	{
			$data['title'] = "E-Cuti | Dashboard";
			$data['user']   = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
			$data['hak_cuti'] = $this->public_model->sisa_hak_cuti()->row();
			$this->template->load('templates/template','Dashboard/index', $data);
	}

	public function user(){
		$data['title'] = "E-Cuti | Dashboard User";
			$data['user']   = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
			$this->template->load('templates/template','Dashboard/index', $data);
	}
	
}
