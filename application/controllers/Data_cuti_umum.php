<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_cuti_umum extends CI_Controller {
    public function __construct() {
        parent::__construct();
            is_logged_in();
            if ($this->session->userdata('nip') == '' && $this->session->userdata('role_id') != '3' && $this->session->userdata('role_id') != '2' && $this->session->userdata('role_id') != '4' ) {
              redirect('blocked');
          }
        $this->load->library('form_validation');
      }

    // function Cuti umum menampilkan list data cuti umum
    public function index()	{
        $nip = $this->session->userdata('nip');
        $data['title']      = "E-Cuti | Data Cuti Umum";
        $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
        $data['data_cuti']  = $this->Model_cuti_umum->select_by_nip($nip)->result();
        $this->template->load('templates/template','user/data_cuti/view_cuti_umum', $data);
	}

  public function Rekap_data_cu(){
    $nip = $this->session->userdata('nip');
    $data['title']      = "E-Cuti | Rekap Data Cuti Umum";
    $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
    $data['data_cuti'] = $this->Model_cuti_umum->select_data_all()->result();
    $this->template->load('templates/template','administrator/data_cuti/view_data_cu', $data);
}

  // function untuk menampilkan form tambah data cuti umum
  public function tambah_cuti_umum()
  {
      //untuk membuat id secara automatis
      $kode = 'T-CU-' . date('ymd').'-';
      $kode_terakhir = $this->Model_cuti_umum->getMax('tbl_cuti_umum', 'id_cuti_umum', $kode);
      $kode_tambah = substr($kode_terakhir, -5, 5);
      $kode_tambah++;
      $number = str_pad($kode_tambah, 5, '0', STR_PAD_LEFT);
      $data['id_cuti_umum'] = $kode . $number;
        // form validation
      $this->form_validation->set_rules('alasan', 'Alasan', 'required|trim');
      $this->form_validation->set_rules('tgl_pengajuan', 'tgl_pengajuan', 'required|trim');
      $this->form_validation->set_rules('tgl_mulai', 'tgl_mulai', 'required|trim');
      $this->form_validation->set_rules('tgl_selesai', 'tgl_selesai', 'required|trim');
      $this->form_validation->set_rules('jml_hari', 'jml_hari', 'required|trim');
      $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
      $this->form_validation->set_rules('no_telp', 'no_telp', 'required|trim');
      $this->form_validation->set_rules('id_jenis_cuti', 'id_jenis_cuti', 'required|trim');
      $this->form_validation->set_rules('id_atasan', 'id_atasan', 'required|trim');
      
      $data['title']      = "E-Cuti | Tambah Data Cuti Umum";
      $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
      $data['jenis_cuti'] = $this->Model_cuti_umum->get_jenis_cuti()->result();
      $data['option2'] = $this->Model_cuti_tahunan->get_option2()->result();
      $isvalidasi = $this->form_validation->run() == FALSE;
      if ($isvalidasi) {
          $this->template->load('templates/template','user/data_cuti/tambah_cuti_umum', $data);
      }else {
         // cek jika ada gambar yang akan diupload
         $upload_image = $_FILES['file']['name'];
         if ($upload_image) {
           $config['allowed_types'] = 'gif|jpg|jepg|png|pdf';
           $config['max_size']      = '5048';
           $config['file_name']     = 'bukti-' . time();
           $config['upload_path']   = './uploads/buktifile/';

           $this->load->library('upload', $config);

           if ($this->upload->do_upload('file')) {
             $old_file = $data['user']['file'];
             if ($old_file != 'default.pdf') {
               unlink(FCPATH . 'uploads/profiles/' . $old_file);
             }
             $new_file = $this->upload->data('file_name');
             $this->db->set('upload_file', $new_file);
           } else {
             echo $this->upload->display_errors();
           }
         }

        $data = [
          'id_cuti_umum' => htmlspecialchars($this->input->post('id_cuti_umum',true)),
          'nip' => htmlspecialchars($this->session->userdata('nip',true)),
          'jenis_cuti_id' => htmlspecialchars($this->input->post('id_jenis_cuti',true)),
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
          $this->db->insert('tbl_cuti_umum', $data);
          //pesan berhasil
          $this->session->set_flashdata('message', '
          <div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle fa-fw"></i> Congratulations! Your account has been created!
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>');
        redirect('data_cuti_umum');
      }
  }

  public function edit_cuti_umum()
  {
      // ambil data id dari uri segement 3
      $id = $this->uri->segment(3);
      $where = array('id_cuti_umum' => $id);
        // form validation
      $this->form_validation->set_rules('alasan', 'Alasan', 'required|trim');
      $this->form_validation->set_rules('tgl_pengajuan', 'tgl_pengajuan', 'required|trim');
      $this->form_validation->set_rules('tgl_mulai', 'tgl_mulai', 'required|trim');
      $this->form_validation->set_rules('tgl_selesai', 'tgl_selesai', 'required|trim');
      $this->form_validation->set_rules('jml_hari', 'jml_hari', 'required|trim');
      $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
      $this->form_validation->set_rules('no_telp', 'no_telp', 'required|trim');
      $this->form_validation->set_rules('id_jenis_cuti', 'id_jenis_cuti', 'required|trim');
      $this->form_validation->set_rules('id_atasan', 'id_atasan', 'required|trim');
      
      $data['title']      = "E-Cuti | Edit Data Cuti Tahunan";
      $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
      $data['jenis_cuti'] = $this->Model_cuti_umum->get_jenis_cuti()->result();
      $data['option2'] = $this->Model_cuti_umum->get_option2()->result();
      $data['data_cuti'] = $this->Model_cuti_umum->edit($where,'tbl_cuti_umum')->row();
      $isvalidasi = $this->form_validation->run() == FALSE;
      if ($isvalidasi) {
          $this->template->load('templates/template','user/data_cuti/edit_cuti_umum', $data);
      }else {
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['file']['name'];
        if ($upload_image) {
          $config['allowed_types'] = 'gif|jpg|jepg|png|pdf';
          $config['max_size']      = '5048';
          $config['file_name']     = 'bukti-' . time();
          $config['upload_path']   = './uploads/buktifile/';

          $this->load->library('upload', $config);

          if ($this->upload->do_upload('file')) {
            $old_file = $data['user']['file'];
            if ($old_file != 'default.pdf') {
              unlink(FCPATH . 'uploads/profiles/' . $old_file);
            }
            $new_file = $this->upload->data('file_name');
            $this->db->set('upload_file', $new_file);
          } else {
            echo $this->upload->dispay_errors();
          }
        }
        $id_cuti = $this->input->post('id_cuti_umum');
        $data = [
          'jenis_cuti_id' => htmlspecialchars($this->input->post('id_jenis_cuti',true)),
          'alasan' => htmlspecialchars($this->input->post('alasan',true)),
          'tgl_pengajuan' => htmlspecialchars($this->input->post('tgl_pengajuan',true)),
          'tgl_mulai' => htmlspecialchars($this->input->post('tgl_mulai',true)),
          'tgl_selesai' => htmlspecialchars($this->input->post('tgl_selesai',true)),
          'jml_hari' => htmlspecialchars($this->input->post('jml_hari',true)),
          'alamat' => htmlspecialchars($this->input->post('alamat',true)),
          'no_telp' => htmlspecialchars($this->input->post('no_telp',true)),
          'atasan_id' => htmlspecialchars($this->input->post('id_atasan',true)),
        ];
            //proses query
          $where = array('id_cuti_umum' => $id_cuti);
          $this->Model_cuti_umum->update($where,$data,'tbl_cuti_umum');
          //pesan berhasil
          $this->session->set_flashdata('message', '
          <div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle fa-fw"></i> Congratulations! Your account has been created!
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>');
        redirect('Data_cuti_umum');
      }
  } 

  public function delete_data() {
    $id = $this->uri->segment(3);
    $where = array('id_cuti_umum' => $id);
    $this->Model_cuti_tahunan->delete($where,'tbl_cuti_umum');
    $this->session->set_flashdata('message', '
      <div class="alert alert-success" role="alert">
        <i class="fas fa-check-circle fa-fw"></i> Congratulations! Data User has been deleted
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>');
    redirect('data_cuti_umum');
  }

  public function Apv_cu_pejabat(){
    $id = $this->session->userdata('id_user');
    $nip = $this->session->userdata('nip');
    $data['title']      = "E-Cuti | Approval Cuti Umum";
    $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
    $data['list_data']  = $this->Model_cuti_umum->select_data_pengajuan($id)->result();
    $this->template->load('templates/template','user/approval_cuti/apv_cu_pejabat', $data);
  }
  public function approve_pejabat(){
    $this->Model_cuti_umum->approve_pejabat();
  }


  public function Apv_cu_atasan(){
    $id = $this->session->userdata('id_user');
    $nip = $this->session->userdata('nip');
    $data['title']      = "E-Cuti | Approval Cuti Umum";
    $data['user']       = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
    $data['list_data']  = $this->Model_cuti_umum->select_data_pengajuan_atsn($id)->result();
    $this->template->load('templates/template','user/approval_cuti/apv_cu_atasan', $data);
  }
    public function approve_atasan(){
      $this->Model_cuti_umum->approve_atasan();
    }

    public function tolak_cu_atasan(){
      $id_cu = $this->uri->segment(3);
      $this->Model_cuti_umum->tolak_cu_atasan($id_cu);
      if($this->db->affected_rows()>0){
        $msg = "<script>alert('Pengajuan Sudah DiTolak')</script>";
        $this->session->set_flashdata('message', $msg);
      }
      redirect('Data_cuti_umum/Apv_cu_atasan','refresh');
    }

    public function tolak_cu_pejabat(){
      $id_cu = $this->uri->segment(3);
      $this->Model_cuti_umum->tolak_cu_atasan($id_cu);
      if($this->db->affected_rows()>0){
        $msg = "<script>alert('Pengajuan Sudah DiTolak')</script>";
        $this->session->set_flashdata('message', $msg);
      }
      redirect('Data_cuti_umum/Apv_cu_pejabat','refresh');
    }
}