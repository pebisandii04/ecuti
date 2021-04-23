<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class C_Cuti extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_cuti');
    }
    function _template($data)
    {
        $this->load->view('template/main', $data);
    }
    public function index()
    {
        $nip = $this->session->userdata('nip');
        $data['list_data'] = $this->M_cuti->select_by_nip($nip)->result();
        $data['konten'] = 'kelola_cuti/list_data';
        $this->_template($data);
    }

    public function Pengajuan_cuti()
    {
        $id_unit = $this->session->userdata('id_unit_kerja');
        $data['option1'] = $this->M_cuti->get_option()->result();
        $data['option2'] = $this->M_cuti->get_option2($id_unit)->result();
        $data['konten'] = 'kelola_cuti/tambah_data';
        $this->_template($data);
    }

    public function approve_cuti_ketua(){
            $this->M_cuti->approve();
    }

    public function approve_cuti_atasan(){
        $this->M_cuti->approve_atasan();
}

    public function proses_simpan()
    {
        $this->M_cuti->insert();
    }

    public function Approval_cuti_ketua(){
        $id = $this->session->userdata('id_user');
        $data['list_data'] = $this->M_cuti->select_data_pengajuan($id)->result();
        $data['konten'] = 'kelola_cuti/list_data_approv_pejabat';
        $this->_template($data);
    }

    public function Approval_cuti_atasan(){
        $id = $this->session->userdata('id_user');
        $data['list_data'] = $this->M_cuti->select_data_pengajuan_atsn($id)->result();
        $data['konten'] = 'kelola_cuti/list_data_approv_atasan';
        $this->_template($data);
    }

    public function tolak_pengajuan()
    {
        $this->M_cuti->tolak_apv();
    }

    public function delete($id)
    {
        $this->M_cuti->delete($id);
        //pesan berhasil
        $msg = "<script>alert('Berhasil di delete')</script>";
        $this->session->set_flashdata("pesan", $msg);
        redirect(base_url() . 'C_cuti');
    }
}