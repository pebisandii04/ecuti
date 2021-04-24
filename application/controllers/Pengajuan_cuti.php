<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_cuti extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('nip') == '' || $this->session->userdata('role_id') != '3') {
            redirect('blocked');
        }
        $this->load->library('form_validation');
    }

    public function index() {
        $data['title']       = "SIAPEM BASA | Form Pengajuan Cuti";
        $data['user']        = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();
        $this->template->load('templates/template', 'user/pengajuan_cuti/view_data', $data);
    }

    public function add_data() {
        $data['title']       = "SIAPEM BASA | Form Pengajuan Cuti";
        $data['user']        = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();
        $this->template->load('templates/template', 'user/pengajuan_cuti/add_data', $data);
    }
}
