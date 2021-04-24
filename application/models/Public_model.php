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
}
