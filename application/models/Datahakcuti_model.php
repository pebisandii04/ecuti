<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datahakcuti_model extends CI_Model {

    public function select_all_data() {
        $this->db->select('*');
        $this->db->from('tbl_hak_cuti_tahunan');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_hak_cuti_tahunan.user_id');
        return $this->db->get();
    }
}
