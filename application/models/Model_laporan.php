<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_laporan extends CI_Model {
    function get_ct_avp(){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tbl_cuti_tahunan');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_tahunan.atasan_id');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_tahunan.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_tahunan.nip');
        $this->db->where('tbl_kelola_atasan.user_id',$id_user);
        // $this->db->where('tbl_cuti_tahunan.sts_apv_1',0);
        // $this->db->where('tbl_cuti_tahunan.sts_apv_2',0);
        return $this->db->get();
    }
    function get_cu_avp(){
        $this->db->select('*');
        $this->db->from('tbl_cuti_umum');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_umum.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_umum.nip');
        $this->db->where('tbl_cuti_umum.nip',$nip);
        return $this->db->get();
    }

    function get_ct_all(){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tbl_cuti_tahunan');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_tahunan.atasan_id');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_tahunan.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_tahunan.nip');
        //$this->db->where('tbl_kelola_atasan.user_id',$id_user);
        // $this->db->where('tbl_cuti_tahunan.sts_apv_1',0);
        // $this->db->where('tbl_cuti_tahunan.sts_apv_2',0);
        return $this->db->get();
    }
}