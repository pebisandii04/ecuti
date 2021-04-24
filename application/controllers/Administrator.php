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
			$this->template->load('templates/template','administrator/index', $data);
	}
	
}
