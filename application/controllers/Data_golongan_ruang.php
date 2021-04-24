<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_golongan_ruang extends CI_Controller {

  public function __construct() {
    parent::__construct();
		is_logged_in();
		if ($this->session->userdata('nip') == '' || $this->session->userdata('role_id') != '1') {
	      redirect('blocked');
	  }
    $this->load->library('form_validation');
  }

	public function index()	{
		$data['title']               = "E-Cuti | Data Golongan Ruang";
		$data['user']                = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
    $data['data_golongan_ruang'] = $this->golruang_model->get()->result_array();
		$this->template->load('templates/template','administrator/data_golongan_ruang/view_data', $data);
	}

  public function add_data() {
    $this->form_validation->set_rules('nama_golongan', 'Nama Golongan Ruang', 'required|trim|is_unique[tbl_golongan_ruang.nama_golongan]', ['is_unique' => 'This space class data is already registered!']);
    $data['title']  = "E-Cuti | Add Data Golongan Ruang";
    $data['user']   = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
    if ($this->form_validation->run() == false) {
      $this->template->load('templates/template','administrator/data_golongan_ruang/add_data', $data);
    }else {
      $data = [
          'nama_golongan'    => htmlspecialchars($this->input->post('nama_golongan', true)),
      ];
      $this->db->insert('tbl_golongan_ruang', $data);
      $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
          <i class="fas fa-check-circle fa-fw"></i> Congrats! added space class data!
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>');
      redirect('data_golongan_ruang');
    }
  }

  public function edit_data() {
    $id = $this->uri->segment(3);
    $where = array('id_gol_ruang' => $id);
    $this->form_validation->set_rules('nama_golongan', 'Nama Golongan', 'required|trim');
    if ($this->form_validation->run() == false) {
      $data['title']               = "E-Cuti | Edit Data Golongan Ruang";
  		$data['user']                = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
      $data['data_golongan_ruang'] = $this->golruang_model->edit($where,'tbl_golongan_ruang')->row_array();
  		$this->template->load('templates/template','administrator/data_golongan_ruang/edit_data', $data);
    } else {
      $id_gol_ruang  = $this->input->post('id_gol_ruang');
      $nama_golongan = $this->input->post('nama_golongan');
      $data = [
        'nama_golongan' => $nama_golongan,
      ];
      $where = array('id_gol_ruang' => $id_gol_ruang );
      $this->golruang_model->update($where,$data, 'tbl_golongan_ruang');
      $this->session->set_flashdata('message','
        <div class="alert alert-success" role="alert">
          <i class="fas fa-check-circle fa-fw"></i> Congrats! the room class data was successfully updated!
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>');
      redirect('data_golongan_ruang');
    }
  }

  public function delete_data() {
    $id = $this->uri->segment(3);
    $where = array('id_gol_ruang' => $id);
  	$this->golruang_model->delete($where,'tbl_golongan_ruang');
    $this->session->set_flashdata('message', '
      <div class="alert alert-success" role="alert">
        <i class="fas fa-check-circle fa-fw"></i> Congrats! room class data has been successfully deleted!
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>');
  	redirect('data_golongan_ruang');
  }

}
