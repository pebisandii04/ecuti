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

    public function rekap_hak_cuti() {
        $nip = $this->session->userdata('nip');
        $data['title']      = "E-Cuti | Data Cuti Tahunan";
        $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
        $data['data_hak_ct'] = $this->Datahakcuti_model->select_all_data()->result();
        $this->template->load('templates/template','administrator/data_cuti/view_data_hak_ct', $data);
    }

    public function kelola_hak_cuti() {
        $nip = $this->session->userdata('nip');
        $data['title']      = "E-Cuti | Data Cuti Tahunan";
        $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
        $data['data_hak_ct'] = $this->Datahakcuti_model->select_all_data()->result();
        $this->template->load('templates/template','administrator/data_hak_cuti/kelola_hak_cuti', $data);
    }
    public function add_data_hak(){
        $this->form_validation->set_rules('user_id', 'User id', 'required|trim|is_unique[tbl_hak_cuti_tahunan.user_id]', ['is_unique' => 'This Hak CUTI Data is already registered!']);
        $this->form_validation->set_rules('n', 'n', 'required|trim');
        $this->form_validation->set_rules('n_1', 'n_1', 'required|trim');
        $this->form_validation->set_rules('n_2', 'n_2', 'required|trim');
        $data['title'] = "E-Cuti | Tambah Data Hak Cuti Tahunan";
        $data['user']   = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
        if ($this->form_validation->run() == false) {
        $this->template->load('templates/template','administrator/data_hak_cuti/add_data', $data);
        }else {
        $data = [
            'user_id'    => htmlspecialchars($this->input->post('user_id', true)),
            'n'    => htmlspecialchars($this->input->post('n', true)),
            'n_1'    => htmlspecialchars($this->input->post('n_1', true)),
            'n_2'    => htmlspecialchars($this->input->post('n_2', true)),
          ];
        $this->db->insert('tbl_hak_cuti_tahunan', $data);
        $this->session->set_flashdata('message', '
          <div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle fa-fw"></i> Congrats! Hak Cuti data added successfully!
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>');
        redirect('Data_hak_cuti/kelola_hak_cuti');
      }
    }

    public function delete_data() {
        $id = $this->uri->segment(3);
        $where = array('id_hak_cuti_tahunan' => $id);
          $this->Datahakcuti_model->delete($where,'tbl_hak_cuti_tahunan');
        $this->session->set_flashdata('message','
          <div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle fa-fw"></i> Congrats! Hak Cuti data has been successfully deleted!
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>');
          redirect('data_hak_cuti/kelola_hak_cuti');
      }

      public function edit_data() {
        $id = $this->uri->segment(3);
        $where = array('id_hak_cuti_tahunan' => $id);
        $this->form_validation->set_rules('n', 'n', 'required|trim');
        $this->form_validation->set_rules('n_1', 'n_1', 'required|trim');
        $this->form_validation->set_rules('n_2', 'n_2', 'required|trim');
        if ($this->form_validation->run() == false) {
        $data['title']      = "E-Cuti | Edit Data Hak Cuti";
        $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
        $data['data'] = $this->Datahakcuti_model->edit($where,'tbl_hak_cuti_tahunan')->row_array();
        $this->template->load('templates/template','administrator/data_hak_cuti/edit_data', $data);
        } else {
            $id_hak = $this->input->post('id_hak_cuti_tahunan');
            $data = [
                'n'    => htmlspecialchars($this->input->post('n', true)),
                'n_1'    => htmlspecialchars($this->input->post('n_1', true)),
                'n_2'    => htmlspecialchars($this->input->post('n_2', true)),
            ];
            $where = array('id_hak_cuti_tahunan' => $id_hak);
            $this->Datahakcuti_model->update($where,$data,'tbl_hak_cuti_tahunan');
            $this->session->set_flashdata('message','
              <div class="alert alert-success" role="alert">
                <i class="fas fa-check-circle fa-fw"></i> Congrats! Hak Cuti data updated successfully!
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>');
            redirect('data_hak_cuti/kelola_hak_cuti');
            }
      }
}
