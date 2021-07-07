<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_cuti_tahunan extends CI_Controller {
  public $table = 'tbl_cuti_tahunan';
  public function __construct() {
    parent::__construct();
		is_logged_in();
		if ($this->session->userdata('nip') == '' && $this->session->userdata('role_id') != '3' && $this->session->userdata('role_id') != '2' && $this->session->userdata('role_id') != '4' ) {
	      redirect('blocked');
	  }
    $this->load->library('form_validation');
  }
    // function index menampilkan list data cuti tahunan
	public function index()	{
        $nip = $this->session->userdata('nip');
        $data['title']      = "E-Cuti | Data Cuti Tahunan";
        $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
        $data['data_cuti'] = $this->Model_cuti_tahunan->select_by_nip($nip)->result();
        $this->template->load('templates/template','user/data_cuti/view_data', $data);
	}

    // function untuk menampilkan form tambah data cuti
    public function tambah_cuti_tahunan()
    {
          //untuk membuat id secara automatis
        $kode = 'T-CT-' . date('ymd').'-';
        $kode_terakhir = $this->Model_cuti_tahunan->getMax('tbl_cuti_tahunan', 'id_cuti_tahunan', $kode);
        $kode_tambah = substr($kode_terakhir, -5, 5);
        $kode_tambah++;
        $number = str_pad($kode_tambah, 5, '0', STR_PAD_LEFT);
        $data['id_cuti_tahunan'] = $kode . $number;
          // form validation
        $this->form_validation->set_rules('alasan', 'Alasan', 'required|trim');
        $this->form_validation->set_rules('tgl_pengajuan', 'tgl_pengajuan', 'required|trim');
        $this->form_validation->set_rules('tgl_mulai', 'tgl_mulai', 'required|trim');
        $this->form_validation->set_rules('tgl_selesai', 'tgl_selesai', 'required|trim');
        $this->form_validation->set_rules('jml_hari', 'jml_hari', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'no_telp', 'required|trim');
        $this->form_validation->set_rules('id_atasan', 'id_atasan', 'required|trim');
        
        $data['title']      = "E-Cuti | Tambah Data Cuti Tahunan";
        $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
        $data['option2'] = $this->Model_cuti_tahunan->get_option2()->result();
			  $data['hak_cuti'] = $this->public_model->sisa_hak_cuti()->row();
        $isvalidasi = $this->form_validation->run() == FALSE;
        if ($isvalidasi) {
            $this->template->load('templates/template','user/data_cuti/tambah_cuti_tahunan', $data);
        }else {
          //untuk membuat id
          $cekid = $this->Model_cuti_tahunan->cekidbarang();
          
          $data = [
            'id_cuti_tahunan' => htmlspecialchars($this->input->post('id_cuti_tahunan',true)),
            'nip' => htmlspecialchars($this->session->userdata('nip',true)),
            'jenis_cuti_id' => htmlspecialchars('1'),
            'alasan' => htmlspecialchars($this->input->post('alasan',true)),
            'tgl_pengajuan' => htmlspecialchars($this->input->post('tgl_pengajuan',true)),
            'tgl_mulai' => htmlspecialchars($this->input->post('tgl_mulai',true)),
            'tgl_selesai' => htmlspecialchars($this->input->post('tgl_selesai',true)),
            'jml_hari' => htmlspecialchars($this->input->post('jml_hari',true)),
            'alamat' => htmlspecialchars($this->input->post('alamat',true)),
            'no_telp' => htmlspecialchars($this->input->post('no_telp',true)),
            'atasan_id' => htmlspecialchars($this->input->post('id_atasan',true)),
            'sts_apv_1' => htmlspecialchars('1'),
            'sts_apv_2' => htmlspecialchars('1'),
          ];

              //proses query
            $this->db->insert('tbl_cuti_tahunan', $data);

            //update data hak cuti
            $id_user = $this->session->userdata('id_user');
            $hak_cuti = $this->input->post('jml_hak');

            $data1 = [
              'n' => htmlspecialchars($this->input->post('hasil',true)),
            ];
            $where = array('user_id' => $id_user);
            $this->public_model->update($where,$data1,'tbl_hak_cuti_tahunan');
            //pesan berhasil
            $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">
              <i class="fas fa-check-circle fa-fw"></i> Congratulations! Your account has been created!
              <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>');
          redirect('Data_cuti_tahunan');
        }
    }

    public function edit_cuti_tahunan()
    {
        // ambil data id dari uri segement 3
        $id = $this->uri->segment(3);
        $where = array('id_cuti_tahunan' => $id);
          // form validation
        $this->form_validation->set_rules('alasan', 'Alasan', 'required|trim');
        $this->form_validation->set_rules('tgl_pengajuan', 'tgl_pengajuan', 'required|trim');
        $this->form_validation->set_rules('tgl_mulai', 'tgl_mulai', 'required|trim');
        $this->form_validation->set_rules('tgl_selesai', 'tgl_selesai', 'required|trim');
        $this->form_validation->set_rules('jml_hari', 'jml_hari', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'no_telp', 'required|trim');
        $this->form_validation->set_rules('id_atasan', 'id_atasan', 'required|trim');
        
        $data['title']      = "E-Cuti | Edit Data Cuti Tahunan";
        $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
        $data['option2'] = $this->Model_cuti_tahunan->get_option2()->result();
        $data['data_cuti'] = $this->Model_cuti_tahunan->edit($where,'tbl_cuti_tahunan')->row_array();
        $isvalidasi = $this->form_validation->run() == FALSE;
        if ($isvalidasi) {
            $this->template->load('templates/template','user/data_cuti/edit_cuti_tahunan', $data);
        }else {
          $id_cuti_tahunan = $this->input->post('id_cuti_tahunan');
          $data = [
            'nip' => htmlspecialchars($this->session->userdata('nip',true)),
            'jenis_cuti_id' => htmlspecialchars('1'),
            'alasan' => htmlspecialchars($this->input->post('alasan',true)),
            'tgl_pengajuan' => htmlspecialchars($this->input->post('tgl_pengajuan',true)),
            'tgl_mulai' => htmlspecialchars($this->input->post('tgl_mulai',true)),
            'tgl_selesai' => htmlspecialchars($this->input->post('tgl_selesai',true)),
            'jml_hari' => htmlspecialchars($this->input->post('jml_hari',true)),
            'alamat' => htmlspecialchars($this->input->post('alamat',true)),
            'no_telp' => htmlspecialchars($this->input->post('no_telp',true)),
            'atasan_id' => htmlspecialchars($this->input->post('id_atasan',true)),
            'sts_apv_1' => htmlspecialchars('1'),
            'sts_apv_2' => htmlspecialchars('1'),
          ];
              //proses query
            $where = array('id_cuti_tahunan' => $id_cuti_tahunan);
            $this->Model_cuti_tahunan->update($where,$data,'tbl_cuti_tahunan');
            //pesan berhasil
            $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">
              <i class="fas fa-check-circle fa-fw"></i> Congratulations! Your account has been created!
              <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>');
          redirect('Data_cuti_tahunan');
        }
    }

    public function Rekap_data_ct(){
        $nip = $this->session->userdata('nip');
        $data['title']      = "E-Cuti | Rekap Data Cuti Tahunan";
        $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
        $data['data_cuti'] = $this->Model_cuti_tahunan->select_data_all()->result();
        $this->template->load('templates/template','administrator/data_cuti/view_data_ct', $data);
    }

    public function Apv_ct_pejabat(){
      $id = $this->session->userdata('id_user');
      $nip = $this->session->userdata('nip');
      $data['title']      = "E-Cuti | Approval Cuti Tahunan";
      $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
      $data['list_data'] = $this->Model_cuti_tahunan->select_data_pengajuan($id)->result();
      $this->template->load('templates/template','user/approval_cuti/apv_ct_pejabat', $data);
    }
      public function approve_pejabat(){
        $this->Model_cuti_tahunan->approve_pejabat();
      }


      public function Apv_ct_atasan(){
        $id = $this->session->userdata('id_user');
        $nip = $this->session->userdata('nip');
        $data['title']      = "E-Cuti | Approval Cuti Tahunan";
        $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
        $data['list_data'] = $this->Model_cuti_tahunan->select_data_pengajuan_atsn($id)->result();
        $this->template->load('templates/template','user/approval_cuti/apv_ct_atasan', $data);
      }
      public function approve_atasan(){
        $this->Model_cuti_tahunan->approve_atasan();
      }

    public function delete_data() {
      $id = $this->uri->segment(3);
      $where = array('id_cuti_tahunan' => $id);
      $this->Model_cuti_tahunan->delete($where,'tbl_cuti_tahunan');
      $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
          <i class="fas fa-check-circle fa-fw"></i> Congratulations! Data User has been deleted
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>');
      redirect('data_cuti_tahunan');
    }
}