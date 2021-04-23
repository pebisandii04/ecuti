<?php class M_Cuti extends CI_Model
{
    private $table = 'tbl_cuti';
    function __construct()
    {
        parent::__construct();
    }

    function select_by_nip($nip)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti.nip');
        $this->db->where('tbl_cuti.nip',$nip);
        return $this->db->get();
    }

    function select_data_pengajuan($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti.nip');
        $this->db->join('tbl_kel_atasan','tbl_kel_atasan.id = tbl_cuti.id_atasan');
        $this->db->where('tbl_kel_atasan.pejabat_berwenang',$id);
        $this->db->where('tbl_cuti.sts_apv_2',1);
        return $this->db->get();
    }

    function select_data_pengajuan_atsn($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti.nip');
        $this->db->join('tbl_kel_atasan','tbl_kel_atasan.id = tbl_cuti.id_atasan');
        $this->db->where('tbl_cuti.sts_apv_1',1);
        $this->db->where('tbl_kel_atasan.atasan_langsung',$id);
        return $this->db->get();
    }

    function insert()
    {
        //tangkap parameter
        $nip = $this->session->userdata('nip');
        $jenis_cuti_id = $this->input->post('jenis_cuti_id');
        $alasan = $this->input->post('alasan');
        $tgl_pengajuan = $this->input->post('tgl_pengajuan');
        $tgl_mulai = $this->input->post('tgl_mulai');
        $tgl_selesai = $this->input->post('tgl_selesai');
        $jml_hari = $this->input->post('jml_hari');
        $alamat = $this->input->post('alamat');
        $no_tlp = $this->input->post('no_tlp');
        $id_atasan = $this->input->post('id_atasan');

        $data = array(
            "nip" => $nip,
            "jenis_cuti_id" => $jenis_cuti_id,
            "alasan" => $alasan,
            "tgl_pengajuan" => $tgl_pengajuan,
            "tgl_mulai" => $tgl_mulai,
            "tgl_selesai" => $tgl_selesai,
            "jml_hari" => $jml_hari,
            "alamat" => $alamat,
            "no_tlp" => $no_tlp,
            "id_atasan" => $id_atasan,
            "sts_apv_1" => '1',
            "sts_apv_2" => '1',
        );
        //proses query
        $this->db->insert($this->table, $data);
        //pesan berhasil
        $msg = "<script>alert('Berhasil disimpan')</script>";
        $this->session->set_flashdata("pesan", $msg);
        redirect(base_url() . 'C_cuti');
    }

    public function approve(){
        $id = $this->uri->segment('3');
        $data = array(
            "sts_apv_2" => '0',
        );
        $this->db->where('id_cuti', $id);
        $this->db->update($this->table, $data);

        //pesan berhasil
        $msg = "<script>alert('Pengajuan Sudah DiApprove')</script>";
        $this->session->set_flashdata("pesan", $msg);
        redirect(base_url() . 'C_cuti/Approval_cuti_ketua');
    }

    public function approve_atasan(){
        $id = $this->uri->segment('3');
        $data = array(
            "sts_apv_1" => '0',
        );
        $this->db->where('id_cuti', $id);
        $this->db->update($this->table, $data);

        //pesan berhasil
        $msg = "<script>alert('Pengajuan Sudah DiApprove')</script>";
        $this->session->set_flashdata("pesan", $msg);
        redirect(base_url() . 'C_cuti/Approval_cuti_atasan');
    }

    function get_option(){
        $this->db->select('*');
        $this->db->from('tbl_jenis_cuti');
        return $this->db->get();
    }

    function get_option2(){
        $this->db->select('*');
        $this->db->from('tbl_kel_atasan');
        $this->db->join('tbl_user','tbl_user.id_user = tbl_kel_atasan.atasan_langsung');
        return $this->db->get();
    }

    function get_jenis_cuti(){
        $this->db->select('*');
        $this->db->from('tbl_jenis_cuti');
        $this->db->order_by('id_jenis_cuti', 'ASC');
        return $this->db->get();
    }

    function get_hak_cuti($nip){
        $this->db->select('*');
        $this->db->from('tbl_hak_cuti');
        $this->db->where('nip', $nip);
        return $this->db->get();
    }

    function delete($id)
    {
        $this->db->where('id_cuti', $id);
        $this->db->delete($this->table);
    }

    function select_data_cetak($nip)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti.nip');
        $this->db->join('tbl_user_role','tbl_user_role.id_role = tbl_user.role_id');
        $this->db->join('tbl_jabatan','tbl_jabatan.id_jabatan = tbl_user.jabatan_id');
        $this->db->join('tbl_golongan_ruang','tbl_golongan_ruang.id_gol_ruang = tbl_user.gol_ruang_id');
        $this->db->join('tbl_unit_kerja','tbl_unit_kerja.id_unit_kerja = tbl_user.unit_kerja_id');
        $this->db->where('tbl_cuti.nip',$nip);
        return $this->db->get();
    }

    function get_data_atasan($nip){
        $this->db->select('*');
        $this->db->from('tbl_cuti');
        $this->db->join('tbl_kel_atasan','tbl_kel_atasan.id = tbl_cuti.id_atasan');
        $this->db->join('tbl_pejabat_berwenang','tbl_pejabat_berwenang.id_user = tbl_kel_atasan.pejabat_berwenang');
        $this->db->join('tbl_user','tbl_user.id_user = tbl_kel_atasan.atasan_langsung');
        $this->db->where('tbl_cuti.nip',$nip);
        return $this->db->get();
    }

    function get_data_cuti_apv(){
        $this->db->select('*');
        $this->db->from('tbl_cuti');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti.nip');
        $this->db->where('tbl_cuti.sts_apv_2',0);
        return $this->db->get();
    }

    function get_data_cuti_all(){
        $this->db->select('*');
        $this->db->from('tbl_cuti');
        $this->db->join('tbl_jenis_cuti','tbl_jenis_cuti.id_jenis_cuti = tbl_cuti.jenis_cuti_id');
        $this->db->join('tbl_user','tbl_user.nip = tbl_cuti.nip');
        return $this->db->get();
    }

    function tolak_apv(){
        $id = $this->uri->segment('3');
        $data = array(
            "sts_apv_2" => '3',
        );
        $this->db->where('id_cuti', $id);
        $this->db->update($this->table, $data);

        //pesan berhasil
        $msg = "<script>alert('Pengajuan Ditolak')</script>";
        $this->session->set_flashdata("pesan", $msg);
        redirect(base_url() . 'C_cuti/Approval_cuti_atasan');
    }
}