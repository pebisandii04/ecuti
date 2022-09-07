<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
         <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> <i class="fas fa-file-signature fa-fw"></i> Form Add Pengajuan Cuti Tahunan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() . ''; ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url() . ''; ?>">Data Pengajuan Cuti Tahunan</a></li>
                            <li class="breadcrumb-item active">Add Pengajuan Cuti Tahunan</li>
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
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Add Pengajuan Cuti Tahunan</h3>
                    </div>
                    <form class="" action="<?php echo base_url() ?>data_cuti_tahunan/tambah_cuti_tahunan" method="POST">
                        <!--/.card-header -->
                        <div class="card-body">
                                    <div class="row">
                                        <div class="col-5 offset-1">
                                            <!-- FORM TAMBAH DATA PEGAWAI -->

                                            <input class="form-control" readonly type="hidden" name="id_cuti_tahunan" value="<?php echo $id_cuti_tahunan; ?>" />
                                            <?php echo form_error('id_cuti_tahunan', '<small class="text-danger pl-3">', '</small>'); ?> 

                                            <label for="alasan">Alasan</label>
                                            <input class="form-control mb-1" type="text" name="alasan" value="<?php echo set_value('alasan'); ?>">
                                            <?php echo form_error('alasan', '<small class="text-danger mb-2 pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                            <br><label for="tgl_pengajuan">Tanggal Pengajuan</label>
                                            <input class="form-control mb-1" type="date" name="tgl_pengajuan" placeholder="" value="<?php echo set_value('tgl_pengajuan'); ?>">
                                            <?php echo form_error('tgl_pengajuan', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                            <br>
                                            <label class="mb-1" for="">Priode Cuti</label>
                                            <div class="form-row">
                                                <div class="col-6">
                                                <small>Mulai</small>
                                                    <input class="form-control mb-1" type="date" name="tgl_mulai" value="<?php echo set_value('tgl_mulai'); ?>">
                                                <?php echo form_error('tgl_mulai', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                                </div>

                                                <div class="col-6">
                                                <small>Selesai</small>
                                                    <input class="form-control mb-1" type="date" name="tgl_selesai" value="<?php echo set_value('tgl_selesai'); ?>">
                                                    <?php echo form_error('tgl_selesai', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>

                                                </div>
                                            </div>
                                                <div class="row mt-3">
                                                    <div class="col-3">
                                                        <label for="">Hak Cuti</label>
                                                        <select name="jml_hak" onclick="sum()" class="form-control" id="jml_hak">
                                                            <option value="<?= $hak_cuti->n; ?>">N = <?= $hak_cuti->n; ?></option>
                                                            <option value="<?= $hak_cuti->n_1; ?>">N-1 = <?= $hak_cuti->n_1; ?></option>
                                                            <option value="<?= $hak_cuti->n_2; ?>">N-2 = <?= $hak_cuti->n_2; ?></option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6">
                                                    <label for="jml_hari">Jumlah Hari</label><br>
                                                        <input class="form-control mb-1" onkeyup="sum()" type="text" id="jml_hari" name="jml_hari" value="">
                                                        <?php echo form_error('jml_hari', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                                    </div>
                                                    <div class="col-3">
                                                    <label for="jml_hari">Sisa Hari</label><br>
                                                        <?php echo form_error('hasil', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                                        <input class="form-control mb-4" type="text" id="hasil" name="hasil" value="" readonly>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-5">
                                            <label for="alamat">Alamat</label><br>
                                            <textarea name="alamat" value="<?php echo set_value('alamat'); ?>" id="" cols="8" rows="5" class="form-control mb-3"></textarea>
                                            <?php echo form_error('alamat', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                            <br class="mt-1">
                                            <label for="no_tlp">No Telp</label>
                                            <input type="text" value="<?php echo set_value('no_telp'); ?>" name="no_telp" class="form-control mb-0">
                                            <?php echo form_error('no_telp', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                            <br>
                                            <label for="id_atasan">Atasan Langsung</label><br>
                                            <select value="" name="id_atasan" id="" class="form-control mb-1">
                                            <option value="">--Pilih--</option>
                                            <option value="<?php echo set_value('id_atasan'); ?>"><?php echo set_value('id_atasan'); ?></option>
                                            <?php foreach ($option2 as $row): ?>
                                                    <option value="<?= $row->id_atasan; ?>"><?= $row->nama_lengkap; ?></option>
                                                    <?php endforeach; ?>
                                            </select>
                                            <?php echo form_error('id_atasan', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="card-footer">
                        <a href="<?php echo base_url().'data_cuti_tahunan'; ?>"  class="btn btn-default"><i class="fas fa-times fa-fw"></i>Cancel</a>
                        <button type="submit" class="btn btn-primary float-right" onclick="return confirm('Are you sure you want to save it');"><i class="fas fa-save fa-fw"></i> Save</button>
                        </form>
                        </div>
                            </div>
                        </div>
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
<!-- /.content-wrapper -->

<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('jml_hak').value;
      var txtSecondNumberValue = document.getElementById('jml_hari').value;
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('hasil').value = result;
      }
}
</script>
