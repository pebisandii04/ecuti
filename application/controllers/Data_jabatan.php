<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_jabatan extends CI_Controller {

  public function __construct() {
    parent::__construct();
		is_logged_in();
		if ($this->session->userdata('nip') == '' || $this->session->userdata('role_id') != '1') {
	      redirect('blocked');
	  }
    $this->load->library('form_validation');
  }

	public function index()	{
		$data['title']        = "E-Cuti | Data Jabatan";
		$data['user']         = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
    $data['data_jabatan'] = $this->jabatan_model->get()->result_array();
		$this->template->load('templates/template','administrator/data_jabatan/view_data', $data);
	}

  public function add_data() {
    $this->form_validation->set_rules('nama_jabatan', 'Nama Jabatan', 'required|trim|is_unique[tbl_jabatan.nama_jabatan]', ['is_unique' => 'This Data Jabatan is already registered!']);
    $data['title']     = "E-Cuti | Add Data Jabatan";
    $data['user']      = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
    if ($this->form_validation->run() == false) {
      $this->template->load('templates/template','administrator/data_jabatan/add_data', $data);
    }else {
      $data = [
          'nama_jabatan'    => htmlspecialchars($this->input->post('nama_jabatan', true)),
        ];
      $this->db->insert('tbl_jabatan', $data);
      $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
          <i class="fas fa-check-circle fa-fw"></i> Congrats! job data has been added successfully!
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>');
      redirect('data_jabatan');
    }
  }

  public function edit_data() {
    $id = $this->uri->segment(3);
    $where = array('id_jabatan' => $id);
    $this->form_validation->set_rules('nama_jabatan', 'Nama Jabatan', 'required|trim');
    if ($this->form_validation->run() == false) {
      $data['title']        = "E-Cuti | Edit Data Jabatan";
  		$data['user']         = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
      $data['data_jabatan'] = $this->jabatan_model->edit($where,'tbl_jabatan')->row_array();
  		$this->template->load('templates/template','administrator/data_jabatan/edit_data', $data);
    } else {
      $id_jabatan   = $this->input->post('id_jabatan');
      $nama_jabatan = $this->input->post('nama_jabatan');
      $data = [
        'nama_jabatan' => $nama_jabatan,
      ];
      $where = array('id_jabatan' => $id_jabatan );
      $this->jabatan_model->update($where,$data, 'tbl_jabatan');
      $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
          <i class="fas fa-check-circle fa-fw"></i> Congrats! job data has been successfully updated!
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>');
      redirect('data_jabatan');
    }
  }

  public function delete_data() {
    $id = $this->uri->segment(3);
    $where = array('id_jabatan' => $id);
  	$this->jabatan_model->delete($where,'tbl_jabatan');
    $this->session->set_flashdata('message', '
      <div class="alert alert-success" role="alert">
        <i class="fas fa-check-circle fa-fw"></i> Congrats! position data has been successfully deleted!
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>');
  	redirect('data_jabatan');
  }

}
