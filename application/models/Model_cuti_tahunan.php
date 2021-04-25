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

    public function Tambah_data()
    {
        $this->form_validation->set_rules('alasan', 'Alasan', 'required|trim');
        $this->form_validation->set_rules('tgl_pengajuan', 'tgl_pengajuan', 'required|trim');
        $this->form_validation->set_rules('tgl_mulai', 'tgl_mulai', 'required|trim');
        $this->form_validation->set_rules('tgl_selesai', 'tgl_selesai', 'required|trim');
        $this->form_validation->set_rules('jml_hari', 'jml_hari', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'no_telp', 'required|trim');
        $this->form_validation->set_rules('id_atasan', 'id_atasan', 'required|trim');
        //tangkap parameter
        $nip = htmlspecialchars($this->session->userdata('nip'));
        $alasan = htmlspecialchars($this->input->post('alasan'));
        $tgl_pengajuan = htmlspecialchars($this->input->post('tgl_pengajuan'));
        $tgl_mulai = htmlspecialchars($this->input->post('tgl_mulai'));
        $tgl_selesai = htmlspecialchars($this->input->post('tgl_selesai'));
        $jml_hari = htmlspecialchars($this->input->post('jml_hari'));
        $alamat = htmlspecialchars($this->input->post('alamat'));
        $no_telp = htmlspecialchars($this->input->post('no_tlp'));
        $id_atasan = htmlspecialchars($this->input->post('id_atasan'));

        $data = array(
            "nip" => $nip,
            "jenis_cuti_id" => 1,
            "alasan" => $alasan,
            "tgl_pengajuan" => $tgl_pengajuan,
            "tgl_mulai" => $tgl_mulai,
            "tgl_selesai" => $tgl_selesai,
            "jml_hari" => $jml_hari,
            "alamat" => $alamat,
            "no_telp" => $no_telp,
            "atasan_id" => $id_atasan,
            "sts_apv_1" => '1',
            "sts_apv_2" => '1',
        );
        //proses query
        $this->db->insert($this->table, $data);
        //pesan berhasil
        $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
          <i class="fas fa-check-circle fa-fw"></i> Congratulations! Your account has been created!
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">×</span>
    			</button>
  			</div>');
      redirect('data_cuti');
    }

}