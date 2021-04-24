<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('nip') == '' || $this->session->userdata('role_id') != '3') {
            redirect('blocked');
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title']       = "E-Cuti | User";
        $data['user']        = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();
        $data['data_hak_cuti_tahunan'] = $this->user_model->get_user_cuti_tahunan()->result_array();
        // $data['data_hak_cuti_besar']   = $this->user_model->get_user_cuti_besar()->result_array();
        // $data['data_hak_cuti_sakit']   = $this->user_model->get_user_cuti_sakit()->result_array();
        $this->template->load('templates/template', 'user/index', $data);
    }

    public function contact()
    {
        $data['title']     = "E-Cuti | Data User";
        $data['user']      = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();
        $this->template->load('templates/template', 'user/contact_us', $data);
    }
}
