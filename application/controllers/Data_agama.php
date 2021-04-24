<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_agama extends CI_Controller {

  public function __construct() {
    parent::__construct();
		is_logged_in();
		if ($this->session->userdata('nip') == '' || $this->session->userdata('role_id') != '1') {
	      redirect('blocked');
	  }
    $this->load->library('form_validation');
  }

	public function index()	{
    $data['title']      = "E-Cuti | Data Agama";
		$data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
    $data['data_agama'] = $this->agama_model->get()->result_array();
		$this->template->load('templates/template','administrator/data_agama/view_data', $data);
	}

  public function add_data() {
    $this->form_validation->set_rules('nama_agama', 'Nama Agama', 'required|trim|is_unique[tbl_agama.nama_agama]', ['is_unique' => 'This Religious Data is already registered!']);
    $data['title']     = "E-Cuti | Add Data Agama";
    $data['user']      = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
    if ($this->form_validation->run() == false) {
      $this->template->load('templates/template','administrator/data_agama/add_data', $data);
    }else {
      $data = [
          'nama_agama'    => htmlspecialchars($this->input->post('nama_agama', true)),
        ];
      $this->db->insert('tbl_agama', $data);
      $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
          <i class="fas fa-check-circle fa-fw"></i> Congrats! religious data added successfully!
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>');
      redirect('data_agama');
    }
  }

  public function edit_data() {
    $id = $this->uri->segment(3);
    $where = array('id_agama' => $id);
    $this->form_validation->set_rules('nama_agama', 'Nama Agama', 'required|trim');
    if ($this->form_validation->run() == false) {
      $data['title']      = "E-Cuti | Edit Data Agama";
  		$data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
      $data['data_agama'] = $this->agama_model->edit($where,'tbl_agama')->row_array();
  		$this->template->load('templates/template','administrator/data_agama/edit_data', $data);
    } else {
        $id_agama   = $this->input->post('id_agama');
        $nama_agama = $this->input->post('nama_agama');
        $data = [
          'nama_agama' => $nama_agama
        ];
        $where = array('id_agama' => $id_agama);
        $this->agama_model->update($where,$data,'tbl_agama');
        $this->session->set_flashdata('message','
          <div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle fa-fw"></i> Congrats! religious data updated successfully!
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>');
        redirect('data_agama');
        }
  }

  public function delete_data() {
    $id = $this->uri->segment(3);
    $where = array('id_agama' => $id);
  	$this->agama_model->delete($where,'tbl_agama');
    $this->session->set_flashdata('message','
      <div class="alert alert-success" role="alert">
        <i class="fas fa-check-circle fa-fw"></i> Congrats! religious data has been successfully deleted!
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>');
  	redirect('data_agama');
  }

}
