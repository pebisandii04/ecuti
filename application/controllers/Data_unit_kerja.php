<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_unit_kerja extends CI_Controller {

  public function __construct() {
    parent::__construct();
		is_logged_in();
		if ($this->session->userdata('nip') == '' || $this->session->userdata('role_id') != '1') {
	      redirect('blocked');
	  }
    $this->load->library('form_validation');
  }

	public function index()	{
		$data['title']           = "E-Cuti | Data Unit Kerja";
		$data['user']            = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
    $data['data_unit_kerja'] = $this->unitkerja_model->get()->result_array();
		$this->template->load('templates/template','administrator/data_unit_kerja/view_data', $data);
	}

  public function add_data() {
    $this->form_validation->set_rules('nama_unit_kerja', 'Nama Unit Kerja', 'required|trim|is_unique[tbl_unit_kerja.nama_unit_kerja]', ['is_unique' => 'This Data Unit Kerja is already registered!']);
    $data['title']     = "E-Cuti | Add Data Unit Kerja";
    $data['user']      = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
    if ($this->form_validation->run() == false) {
      $this->template->load('templates/template','administrator/data_unit_kerja/add_data', $data);
    }else {
      $data = [
          'nama_unit_kerja'    => htmlspecialchars($this->input->post('nama_unit_kerja', true)),
        ];
      $this->db->insert('tbl_unit_kerja', $data);
      $this->session->set_flashdata('message','
        <div class="alert alert-success" role="alert">
          <i class="fas fa-check-circle fa-fw"></i> Congrats! work unit data was added successfully!
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>');
      redirect('data_unit_kerja');
    }
  }

  public function edit_data($id) {
    $where = array('id_unit_kerja' => $id);
    $this->form_validation->set_rules('nama_unit_kerja', 'Nama Unit Kerja', 'required|trim');
    if ($this->form_validation->run() == false) {
      $data['title']           = "E-Cuti | Edit Data Unit Kerja";
      $data['user']            = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
      $data['data_unit_kerja'] = $this->unitkerja_model->edit($where,'tbl_unit_kerja')->row_array();
      $this->template->load('templates/template','administrator/data_unit_kerja/edit_data', $data);
    } else {
      redirect('data_unit_kerja');
    }
  }

  public function update_data() {
    $id_unit_kerja   = $this->input->post('id_unit_kerja');
    $nama_unit_kerja = $this->input->post('nama_unit_kerja');
    $data = [
      'nama_unit_kerja' => $nama_unit_kerja,
    ];
    $where = array('id_unit_kerja' => $id_unit_kerja );
    $this->unitkerja_model->update($where,$data, 'tbl_unit_kerja');
    $this->session->set_flashdata('message', '
      <div class="alert alert-success" role="alert">
        <i class="fas fa-check-circle fa-fw"></i> Congrats! work unit data has been successfully updated!
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>');
    redirect('data_unit_kerja');
  }

  public function delete_data($id) {
    $where = array('id_unit_kerja' => $id);
  	$this->unitkerja_model->delete($where,'tbl_unit_kerja');
    $this->session->set_flashdata('message', '
      <div class="alert alert-success" role="alert">
        <i class="fas fa-check-circle fa-fw"></i> Congrats! work unit data has been successfully deleted!
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>');
  	redirect('data_unit_kerja');
  }
}
