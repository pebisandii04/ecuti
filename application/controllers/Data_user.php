<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_user extends CI_Controller {

  public function __construct() {
    parent::__construct();
    is_logged_in();
    if ($this->session->userdata('nip') == '' || $this->session->userdata('role_id') != '1') {
      redirect('blocked');
    }
    $this->load->library('form_validation');
  }

  public function index() {
    $data['title']     = "E-Cuti | Data User";
    $data['user']      = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();
    $data['data_user'] = $this->datauser_model->get()->result_array();
    $this->template->load('templates/template', 'administrator/data_user/view_data', $data);
  }

  public function detail_data() {
    $id = $this->uri->segment(3);
    $data['title']     = "E-Cuti | Detail Data User";
    $data['user']      = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();
    $data['data_user'] = $this->datauser_model->detail($id)->result_array();
    $this->template->load('templates/template', 'administrator/data_user/detail_data', $data);
  }

  public function add_data() {
    $data['title']     = "E-Cuti | Add Data User";
    $data['user']      = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();
    $data['data_user'] = $this->datauser_model->get()->result_array();

    $this->form_validation->set_rules('nip', 'NIP', 'required|trim|is_unique[tbl_user.nip]', ['is_unique' => 'This NIP has already registered!']);
    $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
    $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
    $this->form_validation->set_rules('tanggal_lahir', 'Tempat Lahir', 'required|trim');
    $this->form_validation->set_rules('jenis_pegawai_id', 'Jenis Pegawai', 'required|trim');
    $this->form_validation->set_rules('agama_id', 'Agama', 'required|trim');
    $this->form_validation->set_rules('jenis_kelamin_id', 'Jenis Kelamin', 'required|trim');
    $this->form_validation->set_rules('gol_ruang_id', 'Golongan Ruang', 'required|trim');
    $this->form_validation->set_rules('no_telp', 'Phone Number', 'required|trim|is_unique[tbl_user.no_telp]', ['is_unique' => 'This Phone Number has already registered!']);
    $this->form_validation->set_rules('unit_kerja_id', 'Unit Kerja', 'required|trim');
    $this->form_validation->set_rules('jabatan_id', 'Jabatan', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[tbl_user.email]', ['is_unique' => 'This Email has already registered!']);
    $this->form_validation->set_rules('role_id', 'Role Access', 'required|trim');
    $this->form_validation->set_rules('status_id', 'Status', 'required|trim');

    $config['upload_path'] = './uploads/profiles/';
    $config['allowed_types'] = 'gif|jpg|jepg|png';
    $config['max_size']      = '5048';
    $config['file_name'] = 'pnju-' . time();
    $this->load->library('upload', $config);

    if ($this->form_validation->run() == false) {
      $data['data_agama']          = $this->db->get('tbl_agama')->result_array();
      $data['data_golongan_ruang'] = $this->db->get('tbl_golongan_ruang')->result_array();
      $data['data_jabatan']        = $this->db->get('tbl_jabatan')->result_array();
      $data['data_unit_kerja']     = $this->db->get('tbl_unit_kerja')->result_array();
      $data['data_jenis_kelamin']  = $this->db->get('tbl_jenis_kelamin')->result_array();
      $data['data_jenis_pegawai']  = $this->db->get('tbl_jenis_pegawai')->result_array();
      $data['data_role']           = $this->db->get('tbl_user_role')->result_array();
      $data['data_status']         = $this->db->get('tbl_status')->result_array();
      $this->template->load('templates/template', 'administrator/data_user/add_data', $data);
    } else {
      $password = 12345;
      $email = $this->input->post('email', true);
      $no_telp = $this->input->post('no_telp', true);
      if ($this->upload->do_upload('photo')) {
        $image = $this->upload->data();
        $photo_profile = $image['file_name'];
      } else {
        $photo_profile = '';
      }
      $data = [
        'nip'          => htmlspecialchars($this->input->post('nip', true)),
        'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
        'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
        'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
        'jenis_pegawai_id' => htmlspecialchars($this->input->post('jenis_pegawai_id', true)),
        'agama_id' => htmlspecialchars($this->input->post('agama_id', true)),
        'jenis_kelamin_id' => htmlspecialchars($this->input->post('jenis_kelamin_id', true)),
        'gol_ruang_id' => htmlspecialchars($this->input->post('gol_ruang_id', true)),
        'no_telp' => htmlspecialchars($no_telp),
        'unit_kerja_id' => htmlspecialchars($this->input->post('unit_kerja_id', true)),
        'jabatan_id' => htmlspecialchars($this->input->post('jabatan_id', true)),
        'photo' => $photo_profile,
        'email' => htmlspecialchars($email),
        'password' => password_hash(($password), PASSWORD_DEFAULT),
        'role_id' => htmlspecialchars($this->input->post('role_id', true)),
        'status_id' => htmlspecialchars($this->input->post('status_id', true)),
      ];

      $this->db->insert('tbl_user', $data);
      $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
          <i class="fas fa-check-circle fa-fw"></i> Congratulations! Your account has been created!
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">×</span>
    			</button>
  			</div>');
      redirect('data_user');
    }
  }

  public function edit_data() {
    $id = $this->uri->segment(3);
    $where = array('id_user' => $id);
    $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
    $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
    $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
    $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
    $this->form_validation->set_rules('jenis_pegawai_id', 'Jenis Pegawai', 'required|trim');
    $this->form_validation->set_rules('agama_id', 'Nama Agama', 'required|trim');
    $this->form_validation->set_rules('gol_ruang_id', 'Golongan Ruang', 'required|trim');
    $this->form_validation->set_rules('jenis_kelamin_id', 'Jenis Kelamin', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim');
    $this->form_validation->set_rules('no_telp', 'No Telp', 'required|trim');
    $this->form_validation->set_rules('unit_kerja_id', 'Unit Kerja', 'required|trim');
    $this->form_validation->set_rules('jabatan_id', 'Jabatan', 'required|trim');
    $this->form_validation->set_rules('role_id', 'Role', 'required|trim');
    $this->form_validation->set_rules('status_id', 'Status', 'required|trim');
    $config['upload_path'] = './uploads/profiles/';
    $config['allowed_types'] = 'gif|jpg|jepg|png';
    $config['max_size']      = '5048';
    $config['file_name'] = 'pnju-' . time();
    $this->load->library('upload', $config);
    if ($this->form_validation->run() == false) {
      $data['title']               = "E-Cuti | Edit Data User";
      $data['user']                = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();
      $data['data_user']           = $this->datauser_model->edit($where, 'tbl_user')->row_array();
      $data['data_agama']          = $this->db->get('tbl_agama')->result_array();
      $data['data_golongan_ruang'] = $this->db->get('tbl_golongan_ruang')->result_array();
      $data['data_jabatan']        = $this->db->get('tbl_jabatan')->result_array();
      $data['data_unit_kerja']     = $this->db->get('tbl_unit_kerja')->result_array();
      $data['data_jenis_kelamin']  = $this->db->get('tbl_jenis_kelamin')->result_array();
      $data['data_jenis_pegawai']  = $this->db->get('tbl_jenis_pegawai')->result_array();
      $data['data_role']           = $this->db->get('tbl_user_role')->result_array();
      $data['data_status']         = $this->db->get('tbl_status')->result_array();
      $this->template->load('templates/template', 'administrator/data_user/edit_data', $data);
    } else {
      if ($this->upload->do_upload('photo')) {
        $image = $this->upload->data();
        unlink(FCPATH . 'uploads/profiles/' . $this->input->post('photo_lama', TRUE));
        $photo = $image['file_name'];
      } else {
        $photo = $this->input->post('photo_lama', TRUE);
      }
      $data = [
        'nip' => $this->input->post('nip', true),
        'nama_lengkap' => $this->input->post('nama_lengkap', true),
        'tempat_lahir' => $this->input->post('tempat_lahir', true),
        'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
        'jenis_pegawai_id' => $this->input->post('jenis_pegawai_id', true),
        'agama_id' => $this->input->post('agama_id', true),
        'gol_ruang_id' => $this->input->post('gol_ruang_id', true),
        'jenis_kelamin_id' => $this->input->post('jenis_kelamin_id', true),
        'email' => $this->input->post('email', true),
        'no_telp' => $this->input->post('no_telp', true),
        'unit_kerja_id' => $this->input->post('unit_kerja_id', true),
        'jabatan_id' => $this->input->post('jabatan_id', true),
        'role_id' => $this->input->post('role_id', true),
        'status_id' => $this->input->post('status_id', true),
        'photo' => $photo
      ];
      $where = array('id_user' => $id);
      $this->datauser_model->update($where, $data, 'tbl_user');
      $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
          <i class="fas fa-check-circle fa-fw"></i> Data user has been updated!
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>');
      redirect('data_user');
    }
  }

  public function delete_data() {
    $id = $this->uri->segment(3);
    $where = array('id_user' => $id);
    $data = $this->datauser_model->get_data($where, 'tbl_user')->row();
    if (file_exists("uploads/profiles/$data->photo")) {
      unlink(FCPATH . "uploads/profiles/$data->photo");
    }
    $this->datauser_model->delete($where, 'tbl_user');
    $this->session->set_flashdata('message', '
      <div class="alert alert-success" role="alert">
        <i class="fas fa-check-circle fa-fw"></i> Congratulations! Data User has been deleted
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>');
    redirect('data_user');
  }
}
