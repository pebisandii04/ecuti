<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenispegawai_model extends CI_Model
{

    public function get() {
        $this->db->select('*');
        $this->db->from('tbl_jenis_pegawai');
        return $this->db->get();
    }

    public function edit($where, $table) {
        $this->db->where($where);
        return $this->db->get_where($table);
    }

    public function update($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
