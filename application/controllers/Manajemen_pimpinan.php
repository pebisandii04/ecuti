<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_pimpinan extends CI_Controller {

	public function __construct() {
    parent::__construct();
		is_logged_in();
    $this->load->library('form_validation');
  }

    // Code Untuk Modul Kelola Atasan Langsung
	public function Kelola_atasan_langsung()	{
			$data['title'] = "E-Cuti | Kelola Atasan Langsung";
			$data['user']   = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
			$data['data'] = $this->Model_manajemen_pimpinan->select_all_data()->result_array();
			$data['data2'] = $this->Model_manajemen_pimpinan->select_data_pejabat()->result_array();
			$this->template->load('templates/template','administrator/kelola_pimpinan/kelola_atasan_langsung', $data);
	}

    public function add_data_atasan(){
            $data['title'] = "E-Cuti | Tambah Data Atasan Langsung";
			$data['user']   = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
			//$data['data'] = $this->Model_manajemen_pimpinan->select_all_data()->result_array();
			//$data['data2'] = $this->Model_manajemen_pimpinan->select_data_pejabat()->result_array();
            $data['option1'] = $this->Model_manajemen_pimpinan->get_option_unker()->result();
            $data['option2'] = $this->Model_manajemen_pimpinan->select_all_pejabat()->result();
			$this->template->load('templates/template','administrator/kelola_pimpinan/add_data_atasan', $data);
    }

    function get_atasan(){
        $id = $this->input->post('id');
        $data = $this->Model_manajemen_pimpinan->select_data_atasan($id);
        $output = '<option value="">--Pilih Atasan--</option>';
        foreach($data as $row){
            $output .= '<option value="'.$row->id_user.'">'.$row->nama_lengkap.'</option>'; 
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function proses_simpan_atasan()
    {
        $this->Model_manajemen_pimpinan->insert_atasan();
    }

    public function edit_atasan()
    {
        $data['title'] = "E-Cuti | Edit Data Atasan Langsung";
		$data['user']   = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
        $data['option1'] = $this->Model_manajemen_pimpinan->get_option_unker()->result();
        $data['option2'] = $this->Model_manajemen_pimpinan->select_atasan_id()->row_array();
        $data['option3'] = $this->Model_manajemen_pimpinan->select_all_pejabat()->result();
        $data['option4'] = $this->Model_manajemen_pimpinan->select_data_pejabat()->row_array();
		$this->template->load('templates/template','administrator/kelola_pimpinan/edit_data_atasan', $data);
    }

    function proses_update_atasan(){
        $this->Model_manajemen_pimpinan->update();
    }

    public function delete_atasan($id)
    {
        $this->Model_manajemen_pimpinan->delete_atasan($id);
        //pesan berhasil
        $msg = "<script>alert('Berhasil di delete')</script>";
        $this->session->set_flashdata("pesan", $msg);
        redirect(base_url() . 'Manajemen_pimpinan/kelola_atasan_langsung');
    }
    // akhir dari code kelola atasan langsung
    
}