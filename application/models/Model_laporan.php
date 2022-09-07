<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_laporan extends CI_Model {
    function get_ct_peruser(){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tbl_cuti_tahunan');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_tahunan.atasan_id');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_tahunan.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_tahunan.nip');
        $this->db->where('tbl_kelola_atasan.user_id_atasan',$id_user);
        // $this->db->where('tbl_cuti_tahunan.sts_apv_1',0);
        // $this->db->where('tbl_cuti_tahunan.sts_apv_2',0);
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

    function get_ct_pejabat(){
        $sts = 0;
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tbl_cuti_tahunan');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_tahunan.atasan_id');
        $this->db->join('tbl_kelola_pejabat','tbl_kelola_pejabat.id_pejabat = tbl_kelola_atasan.pejabat_id');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_tahunan.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_tahunan.nip');
        $this->db->where('tbl_cuti_tahunan.sts_apv_1',0);
        $this->db->where('tbl_kelola_atasan.user_id_atasan',$id_user);
        $this->db->or_where('tbl_kelola_pejabat.user_id_pejabat',$id_user);
        $this->db->where('tbl_cuti_tahunan.sts_apv_1',0);
        return $this->db->get();
    }

    function get_all_pending(){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tbl_cuti_tahunan');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_tahunan.atasan_id');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_tahunan.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_tahunan.nip');
        //$this->db->where('tbl_kelola_atasan.user_id',$id_user);
        $this->db->where('tbl_cuti_tahunan.sts_apv_1',1);
        $this->db->or_where('tbl_cuti_tahunan.sts_apv_2',1);
        return $this->db->get();
    }

    function get_ct_pending_peruser(){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tbl_cuti_tahunan');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_tahunan.atasan_id');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_tahunan.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_tahunan.nip');
        $this->db->where('tbl_kelola_atasan.user_id_atasan',$id_user);
        $this->db->where('tbl_cuti_tahunan.sts_apv_1',1);
        $this->db->where('tbl_cuti_tahunan.sts_apv_2',1);
        return $this->db->get();
    }
    //kode untuk laporan approve cuti umum
    function get_cu_apv($nip){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tbl_cuti_umum');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_umum.atasan_id');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_umum.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_umum.nip');
        //$this->db->where('tbl_kelola_atasan.user_id',$id_user);
        // $this->db->where('tbl_cuti_umum.sts_apv_1',0);
        // $this->db->where('tbl_cuti_umum.sts_apv_2',0);
        return $this->db->get();
    }

    function get_cu_pejabat(){
        $sts = 0;
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tbl_cuti_umum');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_umum.atasan_id');
        $this->db->join('tbl_kelola_pejabat','tbl_kelola_pejabat.id_pejabat = tbl_kelola_atasan.pejabat_id');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_umum.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_umum.nip');
        $this->db->where('tbl_cuti_umum.sts_apv_1',0);
        $this->db->where('tbl_kelola_atasan.user_id_atasan',$id_user);
        $this->db->or_where('tbl_kelola_pejabat.user_id_pejabat',$id_user);
        $this->db->where('tbl_cuti_umum.sts_apv_1',0);
        return $this->db->get();
    }

    //kode umtuk ambil data cuti per user atau berbeda user
    function get_cu_peruser(){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tbl_cuti_umum');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_umum.atasan_id');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_umum.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_umum.nip');
        $this->db->join('tbl_kelola_pejabat','tbl_kelola_pejabat.id_pejabat = tbl_kelola_atasan.pejabat_id');
        $this->db->where('tbl_kelola_atasan.user_id_atasan',$id_user);
        $this->db->or_where('tbl_kelola_pejabat.user_id_pejabat',$id_user);
        // $this->db->where('tbl_cuti_umum.sts_apv_1',0);
        // $this->db->where('tbl_cuti_umum.sts_apv_2',0);
        return $this->db->get();
    }

    function get_cu_all_pending(){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tbl_cuti_umum');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_umum.atasan_id');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_umum.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_umum.nip');
        $this->db->where('tbl_cuti_umum.sts_apv_1',1);
        $this->db->or_where('tbl_cuti_umum.sts_apv_2',1);
        return $this->db->get();
    }

    function get_cu_pending_peruser(){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tbl_cuti_umum');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_umum.atasan_id');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_umum.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_umum.nip');
        $this->db->join('tbl_kelola_pejabat','tbl_kelola_pejabat.id_pejabat = tbl_kelola_atasan.pejabat_id');
        $this->db->where('tbl_kelola_atasan.user_id_atasan',$id_user);
        $this->db->or_where('tbl_kelola_pejabat.user_id_pejabat',$id_user);
        $this->db->where('tbl_cuti_umum.sts_apv_1',1);
        $this->db->where('tbl_cuti_umum.sts_apv_2',1);
        return $this->db->get();
    }

    function select_data_cetak_ct($nip)
    {
        $this->db->select('*');
        $this->db->from('tbl_cuti_tahunan');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_tahunan.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_tahunan.nip');
        $this->db->join('tbl_user_role','tbl_user_role.id_role = tbl_user.role_id');
        $this->db->join('tbl_jabatan','tbl_jabatan.id_jabatan = tbl_user.jabatan_id');
        $this->db->join('tbl_golongan_ruang','tbl_golongan_ruang.id_gol_ruang = tbl_user.gol_ruang_id');
        $this->db->join('tbl_unit_kerja','tbl_unit_kerja.id_unit_kerja = tbl_user.unit_kerja_id');
        $this->db->where('tbl_cuti_tahunan.nip',$nip);
        return $this->db->get();
    }
    function select_data_cetak_cu($nip)
    {
        $this->db->select('*');
        $this->db->from('tbl_cuti_umum');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_umum.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_umum.nip');
        $this->db->join('tbl_user_role','tbl_user_role.id_role = tbl_user.role_id');
        $this->db->join('tbl_jabatan','tbl_jabatan.id_jabatan = tbl_user.jabatan_id');
        $this->db->join('tbl_golongan_ruang','tbl_golongan_ruang.id_gol_ruang = tbl_user.gol_ruang_id');
        $this->db->join('tbl_unit_kerja','tbl_unit_kerja.id_unit_kerja = tbl_user.unit_kerja_id');
        $this->db->where('tbl_cuti_umum.nip',$nip);
        return $this->db->get();
    }

    function get_hak_ct(){
        $id = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tbl_hak_cuti_tahunan');
        $this->db->where('user_id', $id);
        return $this->db->get();
    }
    function get_hak_ct_adm($id_user){
        $this->db->select('*');
        $this->db->from('tbl_hak_cuti_tahunan');
        $this->db->where('user_id', $id_user);
        return $this->db->get();
    }

    function get_data_atasan_ct($nip){
        $this->db->select('*');
        $this->db->from('tbl_cuti_tahunan');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_tahunan.atasan_id');
        $this->db->join('tbl_Kelola_pejabat','tbl_kelola_pejabat.user_id_pejabat = tbl_kelola_atasan.pejabat_id');
        $this->db->join('tbl_user','tbl_user.id_user = tbl_kelola_atasan.user_id_atasan');
        $this->db->join('tbl_jabatan','tbl_jabatan.id_jabatan = tbl_user.jabatan_id');
        $this->db->where('tbl_cuti_tahunan.nip',$nip);
        return $this->db->get();
    }
    function get_data_atasan($id){
        $this->db->select('*');
        $this->db->from('tbl_kelola_atasan');
        $this->db->join('tbl_kelola_pejabat','tbl_kelola_pejabat.user_id_pejabat = tbl_kelola_atasan.user_id_atasan');
        $this->db->join('tbl_user','tbl_user.id_user = tbl_kelola_atasan.user_id_atasan');
        $this->db->join('tbl_jabatan','tbl_jabatan.id_jabatan = tbl_user.jabatan_id');
        $this->db->where('tbl_kelola_pejabat.id_pejabat',$id);
        return $this->db->get();

    }

    function get_data_atasan_cu($nip){
        $this->db->select('*');
        $this->db->from('tbl_cuti_umum');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_umum.atasan_id');
        $this->db->join('tbl_Kelola_pejabat','tbl_kelola_pejabat.user_id_pejabat = tbl_kelola_atasan.pejabat_id');
        $this->db->join('tbl_user','tbl_user.id_user = tbl_kelola_atasan.user_id_atasan');
        $this->db->join('tbl_jabatan','tbl_jabatan.id_jabatan = tbl_user.jabatan_id');
        $this->db->where('tbl_cuti_umum.nip',$nip);
        return $this->db->get();
    }

    function get_jenis_cuti(){
        $this->db->select('*');
        $this->db->from('tbl_jenis_cuti');
        $this->db->order_by('id_jenis_cuti', 'ASC');
        return $this->db->get();
    }
}
