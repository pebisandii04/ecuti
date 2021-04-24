<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function __construct()	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()	{
		$role = $this->public_model->session(['nip' => $this->session->userdata('nip')])->row_array();
		if ($role) {
			if ($role['role_id'] == 1) {
				redirect('administrator');
			}
			if ($role['role_id'] == 2) {
				redirect('monitoring');
			} else {
				redirect('user');
			}
		}

		$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = "E-Cuti | Login";
			$this->template->load('templates/template_authentication', 'authentication/login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()	{
		$nip = $this->input->post('nip');
		$password = $this->input->post('password');
		$user = $this->db->get_where('tbl_user', ['nip' => $nip])->row_array();
		// jika usernya ada
		if ($user) {
			// jika usernya aktif
			if ($user['status_id'] == 1) {
				// cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'nip' => $user['nip'],
						'id_user' => $user['id_user'],
						'role_id' => $user['role_id'],
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('administrator');
					}
					if ($user['role_id'] == 2) {
						redirect('monitoring');
					} else {
						redirect('user');
					}
				} else {
					$this->session->set_flashdata('message', '
										<div class="alert alert-danger" role="alert">
											<i class="fas fa-exclamation-triangle fa-fw"></i> Wrong password!
											<button class="close" type="button" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button></div>');
					redirect('authentication');
				}
			} else {
				$this->session->set_flashdata('message', '
								<div class="alert alert-danger" role="alert">
									<i class="fas fa-exclamation-triangle fa-fw"></i> This NIP has not been activated!
									<button class="close" type="button" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>');
				redirect('authentication');
			}
		} else {
			$this->session->set_flashdata('message', '
						<div class="alert alert-danger" role="alert">
	      			<i class="fas fa-exclamation-triangle fa-fw"></i> NIP is not registered!
							<button class="close" type="button" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>');
			redirect('authentication');
		}
	}

	private function _sendEmail($token, $type) {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'anjayy631@gmail.com',
            'smtp_pass' => '$2y$10$0Pj',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('anjayy631@gmail.com', 'E-Cuti | Pengadilan Negeri Jakarta Utara Kelas I A Khusus');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('Click this link to verify you account : <a href="' . base_url() . 'authentication/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'authentication/reset_password?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
  }

	public function verify(){
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('tbl_user_token', ['token' => $token])->row_array();

            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('status_id', 1);
                    $this->db->where('email', $email);
                    $this->db->update('tbl_user');

                    $this->db->delete('tbl_user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '
													<div class="alert alert-success" role="alert">' . $email . '
														<i class="fas fa-check-circle fa-fw"></i> Has been activated! Please login.
														<button class="close" type="button" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
													</div>');
                    redirect('authentication');
                } else {
                    $this->db->delete('tbl_user', ['email' => $email]);
                    $this->db->delete('tbl_user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '
													<div class="alert alert-danger" role="alert">
														<i class="fas fa-exclamation-triangle fa-fw"></i> Account activation failed! Token expired.
														<button class="close" type="button" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
													</div>');
                    redirect('authentication');
                }
            } else {
                $this->session->set_flashdata('message', '
													<div class="alert alert-danger" role="alert">
														<i class="fas fa-exclamation-triangle fa-fw"></i> Account activation failed! Wrong token.
														<button class="close" type="button" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
													</div>');
                redirect('authentication');
            }
        } else {
            $this->session->set_flashdata('message', '
												<div class="alert alert-danger" role="alert">
														<i class="fas fa-exclamation-triangle fa-fw"></i> Account activation failed! Wrong email.
														<button class="close" type="button" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
												</div>');
            redirect('authentication');
        }
  }

	public function forgot_password()	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() == false) {
			$data['title'] = "E-Cuti | Forgot Password";
			$this->template->load('templates/template_authentication', 'authentication/forgot_password', $data);
		}else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('tbl_user', ['email' => $email, 'status_id' => 1])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
					'date_created' => time()
                ];

                $this->db->insert('tbl_user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                $this->session->set_flashdata('message', '
												<div class="alert alert-success" role="alert">
													<i class="fas fa-check-circle fa-fw"></i> Please check your email to reset your password!
													<button class="close" type="button" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>');
                redirect('authentication/forgot_password');
            } else {
                $this->session->set_flashdata('message', '
												<div class="alert alert-danger" role="alert">
													<i class="fas fa-exclamation-triangle fa-fw"></i> Email is not registered or activated!
													<button class="close" type="button" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>');
                redirect('authentication/forgot_password');
            }
        }
	}

  public function reset_password() {
    $email = $this->input->get('email');
    $token = $this->input->get('token');

    $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

    if ($user) {
        $user_token = $this->db->get_where('tbl_user_token', ['token' => $token])->row_array();

        if ($user_token) {
            $this->session->set_userdata('reset_email', $email);
            $this->change_password();
        } else {
		            $this->session->set_flashdata('message', '
												<div class="alert alert-danger" role="alert">
													<i class="fas fa-exclamation-triangle fa-fw"></i> Reset password failed! Wrong token.
													<button class="close" type="button" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>');
		            redirect('authentication');
		    }
		    } else {
		        $this->session->set_flashdata('message', '
											<div class="alert alert-danger" role="alert">
												<i class="fas fa-exclamation-triangle fa-fw"></i> Reset password failed! Wrong email.
												<button class="close" type="button" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
												</button>
											</div>');
		        redirect('authentication');
		    }
	}

  public function change_password() {
    if (!$this->session->userdata('reset_email')) {
        redirect('authentication');
    }

    $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
    $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');

    if ($this->form_validation->run() == false) {
        $data['title'] = "E-Cuti | Change Password";
				$this->template->load('templates/template_authentication', 'authentication/change_password', $data);
    } else {
        $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
        $email = $this->session->userdata('reset_email');

        $this->db->set('password', $password);
        $this->db->where('email', $email);
        $this->db->update('tbl_user');

        $this->session->unset_userdata('reset_email');

        $this->db->delete('tbl_user_token', ['email' => $email]);

        $this->session->set_flashdata('message', '
									<div class="alert alert-success" role="alert">
										<i class="fas fa-exclamation-triangle fa-fw"></i> Password has been changed! Please login.
										<button class="close" type="button" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>');
        redirect('authentication');
    }
	}

	public function blocked() {
		$data['title'] = "E-Cuti | Blocked";
		$this->template->load('templates/template_authentication', 'authentication/blocked', $data);
	}

	public function logout() {
		$this->session->unset_userdata('nip');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '
			<div class="alert alert-success" role="alert">
				<i class="fas fa-check-circle fa-fw"></i> You have been logged out!
				<button class="close" type="button" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>');
		redirect('authentication');
	}
	
}
