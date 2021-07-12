<!--Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Master</h1>
            </div>
            <!--/.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Data Atasan</li>
                </ol>
            </div>
            <!--/.col -->
        </div>
        <!--/.row -->
    </div>
    <!--/.container-fluid -->
</div>
<!--/.content-header -->
<!--Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Data Pegawai</h3>
                        <div class="card-tools">
                            <a href="<?php echo base_url() ?>data_mahasiswa" class="btn btn-tool"><i class="fas fa-times"></i></a></div>
                    </div>
                    <form class="form-horiontal" action="<?php echo base_url('C_kel_atasan/proses_update') ?>" method="POST">
                        <!--/.card-header -->
                        <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                        <!-- FORM TAMBAH DATA KELOLA ATASAN -->
                                        <form>
                                            <div class="form-group">
                                            <input type="hidden" name="id" value="<?php echo $option2->id;?>">
                                                <label for="id_unit_kerja">Unit Kerja</label>
                                                <select id="id_unit_kerja" class="form-control" name="id_unit_kerja">
                                                    <option value="<?=$option2->id_unit_kerja;?>"><?=$option2->nama_unit_kerja;?></option>
                                                    <?php foreach ($option1 as $row): ?>
                                                    <option value="<?= $row->id_unit_kerja; ?>"><?= $row->nama_unit_kerja; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="atasan_langsung">Atasan Langsung</label>
                                                <select id="atasan_langsung" name="atasan_langsung" class="form-control">
                                                <option value="<?=$option2->atasan_langsung?>"><?=$option2->nama_lengkap?></option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="pejabat_berwenang">Pejabat Berwenang</label>
                                                <select class="form-control" name="pejabat_berwenang" placeholder="Masukan Nama Pejabat">
                                                <option value="<?= $option2->pejabat_berwenang; ?>"><?= $option2->nama_pejabat; ?></option>
                                                <?php foreach ($option3 as $r): ?>
                                                    <option value="<?= $r->id_user; ?>"><?= $r->nama_pejabat; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Edit Data</button>
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

<script>
$(document).ready(function () {
    $('#id_unit_kerja').change(function(){
        var id = $(this).val();
        $.ajax({
            type: "POST",
            url: "<?= base_url('C_kel_atasan/get_atasan')?>",
            data: {id:id},
            dataType: "json",
            success: function (response) {
                $('#atasan_langsung').html(response);
            }
        });
    });
});
</script>