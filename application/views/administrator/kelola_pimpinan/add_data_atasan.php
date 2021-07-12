<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> <i class="fas fa-file-signature fa-fw"></i> Kelola Atasan Langsung</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Home</a></li>
                <li class="breadcrumb-item active">Kelola Atasan Langsung</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
    <!-- /.content-header -->
<!--Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Tambah Data Atasan Langsung</h3>
                        <div class="card-tools">
                            <a href="<?php echo base_url() ?>data_mahasiswa" class="btn btn-tool"><i class="fas fa-times"></i></a></div>
                    </div>
                    <form class="form-horiontal" action="<?php echo base_url() ?>Manajemen_pimpinan/proses_simpan_atasan" method="POST">
                        <!--/.card-header -->
                        <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <?php echo $this->session->flashdata('pesan'); ?>
                                        <!-- FORM TAMBAH DATA KELOLA ATASAN -->
                                        <form>
                                            <div class="form-group">
                                                <label for="id_unit_kerja">Unit Kerja</label>
                                                <select id="id_unit_kerja" class="form-control" name="id_unit_kerja">
                                                    <option value="">--Pilih--</option>
                                                    <?php foreach ($option1 as $row): ?>
                                                    <option value="<?= $row->id_unit_kerja; ?>"><?= $row->nama_unit_kerja; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="atasan_langsung">Atasan Langsung</label>
                                                <select id="atasan_langsung" name="atasan_langsung" class="form-control">
                                                    <option>--PILIH--</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="pejabat_berwenang">Pejabat Berwenang</label>
                                                <select class="form-control" name="pejabat_berwenang" placeholder="Masukan Nama Pejabat">
                                                <option value="">--Pilih--</option>
                                                <?php foreach ($option2 as $r): ?>
                                                    <option value="<?= $r->id_pejabat; ?>"><?= $r->nama_lengkap; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/.card -->
            </div>
        </div>
        <!--/.row -->
    </div>
    <!--/.container-fluid -->
</div>
<!--/.content -->
</div>

<script>
$(document).ready(function () {
    $('#id_unit_kerja').change(function(){
        var id = $(this).val();
        $.ajax({
            type: "POST",
            url: "<?= base_url('Manajemen_pimpinan/get_atasan')?>",
            data: {id:id},
            dataType: "json",
            success: function (response) {
                $('#atasan_langsung').html(response);
            }
        });
    });
});
</script>