<?php class Model_manajemen_pimpinan extends CI_Model
{
        private $table = 'tbl_kelola_atasan';
            function __construct()
            {
                parent::__construct();
            }
        //code untuk model kelola atasan langsung
        function select_all_data(){
                $this->db->select('*');
                $this->db->from($this->table);
                $this->db->join('tbl_unit_kerja','tbl_unit_kerja.id_unit_kerja = tbl_kelola_atasan.unit_kerja_id');
                $this->db->join('tbl_user','tbl_user.id_user = tbl_kelola_atasan.user_id_atasan');
                $this->db->order_by('tbl_kelola_atasan.unit_kerja_id', 'ASC');
                return $this->db->get();
        }
        function select_data_pejabat(){
            $this->db->select('*');
            $this->db->from('tbl_kelola_pejabat');
            $this->db->join('tbl_user','tbl_user.id_user = tbl_kelola_pejabat.user_id_pejabat');
            $this->db->join('tbl_kelola_atasan','tbl_kelola_atasan.pejabat_id = tbl_kelola_pejabat.id_pejabat');
            return $this->db->get();
        }
        function select_all_pejabat(){
            $this->db->select('*');
            $this->db->from('tbl_kelola_pejabat');
            $this->db->join('tbl_user','tbl_user.id_user = tbl_kelola_pejabat.user_id_pejabat');
            return $this->db->get();
        }

        function get_option_unker(){
            $this->db->select('*');
            $this->db->from('tbl_unit_kerja');
            return $this->db->get();
        }

        function select_data_atasan($id){
            $this->db->select('*');
            $this->db->from('tbl_user');
            $this->db->where('tbl_user.unit_kerja_id',$id);
            $this->db->or_where('tbl_user.jabatan_id',$id);
            return $this->db->get()->result();
        }

        function select_atasan_id()
        {
            $id = $this->uri->segment('3');  
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->join('tbl_unit_kerja','tbl_unit_kerja.id_unit_kerja = tbl_kelola_atasan.unit_kerja_id');
            $this->db->join('tbl_user','tbl_user.id_user = tbl_kelola_atasan.user_id_atasan');
            $this->db->join('tbl_kelola_pejabat','tbl_kelola_pejabat.id_user_pejabat = tbl_kelola_atasan.id_pejabat');
            $this->db->where('tbl_kelola_atasan.id', $id);
            return $this->db->get();
        }

        function insert_atasan()
    {
        //tangkap parameter
        $id_unit_kerja = $this->input->post('id_unit_kerja');
        $atasan_langsung = $this->input->post('atasan_langsung');
        $pejabat_berwenang = $this->input->post('pejabat_berwenang');
        //cek redudan data
        $this->db->where("unit_kerja_id", $id_unit_kerja);
        $cek = $this->db->get($this->table)->num_rows();
        if ($cek == true) {
            //pesan gagal
            $msg = "<script>alert('Unit Kerja ini Sudah ada')</script>";
            $this->session->set_flashdata("pesan", $msg);
            redirect(base_url() . 'Manajemen_pimpinan/add_data_atasan');
            return false;
        }
        $data = array(
            "unit_kerja_id" => $id_unit_kerja,
            "user_id_atasan" => $atasan_langsung,
            "pejabat_id" => $pejabat_berwenang,
        );
        //proses query
        $this->db->insert($this->table, $data);
        //pesan berhasil
        $msg = '
        <div class="alert alert-success" role="alert">
          <i class="fas fa-check-circle fa-fw"></i> Congrats! Atasan Langsung data added successfully!
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        ';
        $this->session->set_flashdata("pesan", $msg);
        redirect(base_url() . 'Manajemen_pimpinan/add_data_atasan');
    }

    function delete_atasan($id)
    {
        $this->db->where('id_atasan', $id);
        $this->db->delete($this->table);
    }
    // akhir dari code kelola atasan

}