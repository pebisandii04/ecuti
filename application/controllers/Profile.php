<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()	{
		parent::__construct();
		is_logged_in();
		$this->load->library('form_validation');
	}

	public function index()	{
		$data['title'] = "E-Cuti | Profile";
		$data['user']   = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();
		$this->template->load('templates/template', 'profile/profile', $data);
	}

	public function edit_profile() {
		$data['title'] = "E-Cuti | Edit Profile";
		$data['user']   = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();

		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tanggal_lahir', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('jenis_pegawai_id', 'Jenis Pegawai', 'required|trim');
		$this->form_validation->set_rules('agama_id', 'Agama', 'required|trim');
		$this->form_validation->set_rules('jenis_kelamin_id', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('gol_ruang_id', 'Golongan Ruang', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'Phone Number', 'required|trim');
		$this->form_validation->set_rules('unit_kerja_id', 'Unit Kerja', 'required|trim');
		$this->form_validation->set_rules('jabatan_id', 'Jabatan', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['data_agama'] = $this->db->get('tbl_agama')->result_array();
			$data['data_golongan_ruang'] = $this->db->get('tbl_golongan_ruang')->result_array();
			$data['data_jabatan'] = $this->db->get('tbl_jabatan')->result_array();
			$data['data_unit_kerja'] = $this->db->get('tbl_unit_kerja')->result_array();
			$data['data_jenis_kelamin'] = $this->db->get('tbl_jenis_kelamin')->result_array();
			$data['data_jenis_pegawai'] = $this->db->get('tbl_jenis_pegawai')->result_array();
			$this->template->load('templates/template', 'profile/edit_profile', $data);
		} else {
			$nip              = $this->input->post('nip');
			$nama_lengkap     = $this->input->post('nama_lengkap');
			$tempat_lahir     = $this->input->post('tempat_lahir');
			$tanggal_lahir    = $this->input->post('tanggal_lahir');
			$jenis_pegawai_id = $this->input->post('jenis_pegawai_id');
			$agama_id         = $this->input->post('agama_id');
			$jenis_kelamin_id = $this->input->post('jenis_kelamin_id');
			$gol_ruang_id     = $this->input->post('gol_ruang_id');
			$no_telp          = $this->input->post('no_telp');
			$unit_kerja_id    = $this->input->post('unit_kerja_id');
			$jabatan_id       = $this->input->post('jabatan_id');
			$email            = $this->input->post('email');
			// cek jika ada gambar yang akan diupload
			$upload_image = $_FILES['photo']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|jepg|png';
				$config['max_size']      = '5048';
				$config['file_name']     = 'pnju-' . time();
				$config['upload_path']   = './uploads/profiles/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('photo')) {
					$old_image = $data['user']['photo'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'uploads/profiles/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('photo', $new_image);
				} else {
					echo $this->upload->dispay_errors();
				}
			}

			$this->db->set('nama_lengkap', $nama_lengkap);
			$this->db->set('tempat_lahir', $tempat_lahir);
			$this->db->set('tanggal_lahir', $tanggal_lahir);
			$this->db->set('jenis_pegawai_id', $jenis_pegawai_id);
			$this->db->set('agama_id', $agama_id);
			$this->db->set('jenis_kelamin_id', $jenis_kelamin_id);
			$this->db->set('gol_ruang_id', $gol_ruang_id);
			$this->db->set('no_telp', $no_telp);
			$this->db->set('unit_kerja_id', $unit_kerja_id);
			$this->db->set('jabatan_id', $jabatan_id);
			$this->db->set('email', $email);
			$this->db->where('nip', $nip);
			$this->db->update('tbl_user');
			$this->session->set_flashdata('message', '
				<div class="alert alert-success" role="alert">
				  <i class="fas fa-check-circle fa-fw"></i> Your profile has been updated!
					<button class="close" type="button" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>');
			redirect('profile');
		}
	}

	public function change_password()	{
		$data['title'] = "E-Cuti | Change Password";
		$data['user']   = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();
		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');
		if ($this->form_validation->run() == false) {
			$this->template->load('templates/template', 'profile/change_password', $data);
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password, $data['user']['password'])) {
				$this->session->set_flashdata('message', '
					<div class="alert alert-danger" role="alert">
						<i class="fas fa-exclamation-triangle fa-fw"></i> Wrong current password!
						<button class="close" type="button" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>');
				redirect('profile/change_password');
			} else {
				if ($current_password == $new_password) {
					$this->session->set_flashdata('message', '
						<div class="alert alert-danger" role="alert">
							<i class="fas fa-exclamation-triangle fa-fw"></i> New password cannot be the same as current password!
							<button class="close" type="button" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>');
					redirect('profile/change_password');
				} else {
					// password sudah ok
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);
					$this->db->set('password', $password_hash);
					$this->db->where('nip', $this->session->userdata('nip'));
					$this->db->update('tbl_user');

					$this->session->set_flashdata('message', '
						<div class="alert alert-success" role="alert">
							<i class="fas fa-check-circle fa-fw"></i> Password changed!
							<button class="close" type="button" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>');
					redirect('profile');
				}
			}
		}
	}

}
