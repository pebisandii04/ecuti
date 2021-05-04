<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_cuti_tahunan extends CI_Model {
    private $table = 'tbl_cuti_tahunan';


    function select_by_nip($nip)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_tahunan.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_tahunan.nip');
        $this->db->where('tbl_cuti_tahunan.nip',$nip);
        return $this->db->get();
    }

    function get_option2(){
        $this->db->select('*');
        $this->db->from('tbl_kelola_atasan');
        $this->db->join('tbl_user','tbl_user.id_user = tbl_kelola_atasan.user_id');
        return $this->db->get();
    }

    public function delete($where,$table) {
        $this->db->where($where);
        $this->db->delete($table);
      }

    public function edit($where,$table) {
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_tahunan.atasan_id');
        $this->db->join('tbl_user','tbl_user.id_user = tbl_kelola_atasan.user_id');
        $this->db->where($where);
        return $this->db->get_where($table);
    }

    public function update($where,$data,$table) {
        $this->db->where($where);
        $this->db->update($table,$data);
      }
}