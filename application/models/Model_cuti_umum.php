<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_cuti_umum extends CI_Model {
    private $table = 'tbl_cuti_umum';
    function select_by_nip($nip)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_umum.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_umum.nip');
        $this->db->where('tbl_cuti_umum.nip',$nip);
        return $this->db->get();
    }

    function get_option2(){
        $this->db->select('*');
        $this->db->from('tbl_kelola_atasan');
        $this->db->join('tbl_user','tbl_user.id_user = tbl_kelola_atasan.user_id_atasan');
        return $this->db->get();
    }

    function get_jenis_cuti(){
        $this->db->select('*');
        $this->db->from('tbl_jenis_cuti');
        return $this->db->get();
    }

    public function delete($where,$table) {
        $this->db->where($where);
        $this->db->delete($table);
      }

    public function edit($where,$table) {
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_umum.atasan_id');
        $this->db->join('tbl_user','tbl_user.id_user = tbl_kelola_atasan.user_id_atasan');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_umum.jenis_cuti_id');
        $this->db->where($where);
        return $this->db->get_where($table);
    }

    public function update($where,$data,$table) {
        $this->db->where($where);
        $this->db->update($table,$data);
      }

      public function getMax($table, $field, $kode = null) {
        $this->db->select_max($field);
        if ($kode != null) {
            $this->db->like($field, $kode, 'after');
        }
        return $this->db->get($table)->row_array()[$field];
        }

        public function select_data_all()
        {
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_umum.jenis_cuti_id');
            $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_umum.nip');
            $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_umum.atasan_id');
            //$this->db->join('tbl_kelola_jabatan','tbl_kelola_pejabat.user_id = tbl_cuti_tahunan');
            return $this->db->get();
        }

     //ambildata pengajuan cuti
     function select_data_pengajuan($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_umum.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_umum.nip');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_umum.atasan_id');
        $this->db->join('tbl_kelola_pejabat','tbl_kelola_pejabat.id_pejabat = tbl_kelola_atasan.pejabat_id');
        $this->db->where('tbl_kelola_pejabat.user_id_pejabat',$id);
        $this->db->where('tbl_cuti_umum.sts_apv_2',1);
        return $this->db->get();
    }

    function select_data_pengajuan_atsn($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_umum.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_umum.nip');
        $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.id_atasan = tbl_cuti_umum.atasan_id');
        $this->db->where('tbl_cuti_umum.sts_apv_1',1);
        $this->db->where('tbl_kelola_atasan.user_id_atasan',$id);
        return $this->db->get();
    }

    public function approve_pejabat(){
        $id = $this->uri->segment('3');
        $data = array(
            "sts_apv_2" => '0',
        );
        $this->db->where('id_cuti_umum', $id);
        $this->db->update($this->table, $data);

        //pesan berhasil
        $msg = "<script>alert('Pengajuan Sudah DiApprove')</script>";
        $this->session->set_flashdata("message", $msg);
        redirect(base_url() . 'Data_cuti_tahunan/Apv_ct_pejabat');
    }

    public function approve_atasan(){
        $id = $this->uri->segment('3');
        $data = array(
            "sts_apv_1" => '0',
        );
        $this->db->where('id_cuti_umum', $id);
        $this->db->update($this->table, $data);

        //pesan berhasil
        $msg = "<script>alert('Pengajuan Sudah DiApprove')</script>";
        $this->session->set_flashdata("message", $msg);
        redirect(base_url() . 'Data_cuti_umum/Apv_cu_atasan');
    }
}
