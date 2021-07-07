<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_hak_cuti extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_logged_in();
    		if ($this->session->userdata('nip') == '' || $this->session->userdata('role_id') != '1') {
    	      redirect('blocked');
    	  }
        $this->load->library('form_validation');
    }

    public function index() {
        $nip = $this->session->userdata('nip');
        $data['title']      = "E-Cuti | Data Cuti Tahunan";
        $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
        $data['data_hak_ct'] = $this->Datahakcuti_model->select_all_data()->result();
        $this->template->load('templates/template','administrator/data_cuti/view_data_hak_ct', $data);
    }
}
