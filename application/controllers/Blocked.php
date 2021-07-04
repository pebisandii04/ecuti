<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blocked extends CI_Controller {

	public function index()	{
    $role = $this->public_model->session( ['nip' => $this->session->userdata('nip')])->row_array();
    if ($role) {
      if ($role['role_id'] == 1) {
          redirect('administrator');
      }
      if ($role['role_id'] == 2) {
          redirect('');
      } else {
        redirect('user');
      }
    }else {
    	redirect('authentication');
    }
	}

}
