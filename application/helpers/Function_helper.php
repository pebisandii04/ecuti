<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  function is_logged_in() {
      $ci = get_instance();
      $action = $ci->public_model->session( ['nip' => $ci->session->userdata('nip')])->row_array();
      if (!$action) {
          $ci->session->set_flashdata('message', '
             <div class="alert alert-danger" role="alert">
              <i class="fas fa-exclamation-triangle fa-fw"></i> Please Login
              <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
             </div>');
          redirect('authentication');
      }
  }
