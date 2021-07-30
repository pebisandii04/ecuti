<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Public_model extends CI_Model {

  public function session() {
    $nip = $this->session->userdata('nip');
    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->join('tbl_agama', 'tbl_agama.id_agama = tbl_user.agama_id');
    $this->db->join('tbl_jenis_pegawai', 'tbl_jenis_pegawai.id_jenis_pegawai = tbl_user.jenis_pegawai_id');
    $this->db->join('tbl_jenis_kelamin', 'tbl_jenis_kelamin.id_jenis_kelamin = tbl_user.jenis_kelamin_id');
    $this->db->join('tbl_golongan_ruang', 'tbl_golongan_ruang.id_gol_ruang = tbl_user.gol_ruang_id');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit_kerja = tbl_user.unit_kerja_id');
    $this->db->join('tbl_jabatan', 'tbl_jabatan.id_jabatan = tbl_user.jabatan_id');
    $this->db->join('tbl_user_role', 'tbl_user_role.id_role = tbl_user.role_id');
    $this->db->join('tbl_status', 'tbl_status.id_status = tbl_user.status_id');
    $this->db->where('nip', $nip);
    return $this->db->get_where();
  }

  public function sisa_hak_cuti(){
      $nip = $this->session->userdata('nip');
      $this->db->select('*');
      $this->db->from('tbl_hak_cuti_tahunan');
      $this->db->join('tbl_user', 'tbl_user.id_user = tbl_hak_cuti_tahunan.user_id');
      $this->db->where('tbl_user.nip',$nip);
      return $this->db->get();
      }

  public function update($where,$data,$table) {
      $this->db->where($where);
      $this->db->update($table,$data);
  }

  public function get_ct_terakhir(){
    $nip = $this->session->userdata('nip');
    $this->db->select('*');
    $this->db->from('tbl_cuti_tahunan');
    $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_tahunan.jenis_cuti_id');
    $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_tahunan.nip');
    $this->db->where('tbl_user.nip',$nip);
    $this->db->order_by('tgl_pengajuan', 'DESC');
    $this->db->limit(3);
    return $this->db->get();
  }

  public function get_cu_terakhir(){
    $nip = $this->session->userdata('nip');
    $this->db->select('*');
    $this->db->from('tbl_cuti_umum');
    $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti_umum.jenis_cuti_id');
    $this->db->join('tbl_user','tbl_user.nip = tbl_cuti_umum.nip');
    $this->db->where('tbl_user.nip',$nip);
    $this->db->order_by('tgl_pengajuan', 'DESC');
    $this->db->limit(3);
    return $this->db->get();
  }
}