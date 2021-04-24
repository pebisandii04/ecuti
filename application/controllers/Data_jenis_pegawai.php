<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_jenis_pegawai extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('nip') == '' || $this->session->userdata('role_id') != '1') {
            redirect('blocked');
        }
        $this->load->library('form_validation');
    }

    public function index() {
        $data['title']              = "E-Cuti | Data Jenis Pegawai";
        $data['user']               = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();
        $data['data_jenis_pegawai'] = $this->jenispegawai_model->get()->result_array();
        $this->template->load('templates/template', 'administrator/data_jenis_pegawai/view_data', $data);
    }

    public function add_data() {
        $this->form_validation->set_rules('nama_jenis_pegawai', 'Nama Jenis Pegawai', 'required|trim|is_unique[tbl_agama.nama_agama]', ['is_unique' => 'This Religious Data is already registered!']);
        $data['title']     = "E-Cuti | Add Data Jenis Pegawai";
        $data['user']      = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();
        if ($this->form_validation->run() == false) {
            $this->template->load('templates/template', 'administrator/data_jenis_pegawai/add_data', $data);
        } else {
            $data = [
                'nama_jenis_pegawai'    => htmlspecialchars($this->input->post('nama_jenis_pegawai', true)),
            ];
            $this->db->insert('tbl_jenis_pegawai', $data);
            $this->session->set_flashdata('message', '
              <div class="alert alert-success" role="alert">
                <i class="fas fa-check-circle fa-fw"></i> Congrats! religious data added successfully!
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
              </div>');
            redirect('data_jenis_pegawai');
        }
    }

    public function edit_data($id) {
        $where = array('id_jenis_pegawai' => $id);
        $this->form_validation->set_rules('nama_jenis_pegawai', 'Nama Jenis Pegawai', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title']     = "E-Cuti | Edit Data Jenis Pegawai";
            $data['user']      = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();
            $data['data_jenis_pegawai'] = $this->jenispegawai_model->edit($where, 'tbl_jenis_pegawai')->row_array();
            $this->template->load('templates/template', 'administrator/data_jenis_pegawai/edit_data', $data);
        } else {
            redirect('data_jenis_pegawai');
        }
    }

    public function update_data() {
      $id_jenis_pegawai   = $this->input->post('id_jenis_pegawai');
      $nama_jenis_pegawai = $this->input->post('nama_jenis_pegawai');
      $data = [
          'id_jenis_pegawai' => $id_jenis_pegawai,
          'nama_jenis_pegawai' => $nama_jenis_pegawai,
      ];
      $where = array('id_jenis_pegawai' => $id_jenis_pegawai);
      $this->jenispegawai_model->update($where, $data, 'tbl_jenis_pegawai');
      $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle fa-fw"></i> Congrats! Employee type data was successfully updated!
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>');
      redirect('data_jenis_pegawai');
    }

    public function delete_data($id) {
        $where = array('id_jenis_pegawai' => $id);
        $this->agama_model->delete($where, 'tbl_jenis_pegawai');
        $this->session->set_flashdata('message', '
          <div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle fa-fw"></i> Congrats! Employee type data has been successfully deleted!
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>');
        redirect('data_jenis_pegawai');
    }
}
