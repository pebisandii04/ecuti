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

}