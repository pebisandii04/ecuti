<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unitkerja_model extends CI_Model {

  public function get() {
    $this->db->select('*');
    $this->db->from('tbl_unit_kerja');
    return $this->db->get();
  }

  public function edit($where,$table) {
      $this->db->where($where);
      return $this->db->get_where($table);
  }

  public function update($where,$data,$table) {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  public function delete($where,$table) {
    $this->db->where($where);
    $this->db->delete($table);
  }

}
