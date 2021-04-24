<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model {

  public function get_user_cuti_tahunan() {
    $nip = $this->session->userdata('nip');
    $this->db->select('*');
    $this->db->from('tbl_hak_cuti_tahunan');
    $this->db->join('tbl_user', 'tbl_user.id_user = tbl_hak_cuti_tahunan.user_id');
    $this->db->where('nip', $nip);
    return $this->db->get();
  }

  public function get_user_cuti_besar() {
    $nip = $this->session->userdata('nip');
    $this->db->select('*');
    $this->db->from('tbl_hak_cuti_besar');
    $this->db->join('tbl_user', 'tbl_user.id_user = tbl_hak_cuti_besar.user_id');
    $this->db->where('nip', $nip);
    return $this->db->get();
  }

  public function get_user_cuti_sakit() {
    $nip = $this->session->userdata('nip');
    $this->db->select('*');
    $this->db->from('tbl_hak_cuti_sakit');
    $this->db->join('tbl_user', 'tbl_user.id_user = tbl_hak_cuti_sakit.user_id');
    $this->db->where('nip', $nip);
    return $this->db->get();
  }
}
