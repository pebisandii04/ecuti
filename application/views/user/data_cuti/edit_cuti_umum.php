<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
         <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> <i class="fas fa-file-signature fa-fw"></i> Form Edit Pengajuan Cuti Umum</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() . ''; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Form Edit Pengajuan Cuti</li>
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
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Pengajuan Cuti</h3>
                        <div class="card-tools">
                            <a href="<?php echo base_url() ?>" class="btn btn-tool"><i class="fas fa-times"></i></a></div>
                    </div>
                    <form class="" action="<?php echo base_url() ?>data_cuti_umum/edit_cuti_umum" method="POST" enctype="multipart/form-data">
                        <!--/.card-header -->
                        <div class="card-body">
                                    <div class="row">
                                        <div class="col-5 offset-1">
                                            <!-- FORM TAMBAH DATA PEGAWAI -->
                                            <input name="id_cuti_umum" type="hidden" value="<?= $data_cuti->id_cuti_umum ?>">
                                            <label for="alasan">Alasan</label>
                                            <input class="form-control mb-1" type="text" name="alasan" value="<?php echo $data_cuti->alasan; ?>">
                                            <?php echo form_error('alasan', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                            <br>
                                            <label for="nama_jenis_cuti">Jenis Cuti</label>
                                            <select name="id_jenis_cuti" id="" class="form-control">
                                            <option value="<?php echo $data_cuti->jenis_cuti_id; ?>"><?php echo $data_cuti->nama_jenis_cuti; ?></option>
                                            <?php foreach ($jenis_cuti as $row): ?>
                                                    <option value="<?= $row->id_jenis_cuti; ?>"><?= $row->nama_jenis_cuti; ?></option>
                                                    <?php endforeach; ?>
                                            </select>
                                            <?php echo form_error('id_jenis_cuti', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                            <br>
                                            <label for="tgl_pengajuan">Tanggal Pengajuan</label>
                                            
                                            <input class="form-control" type="date" name="tgl_pengajuan" placeholder="" value="<?php echo $data_cuti->tgl_pengajuan; ?>">
                                            <?php echo form_error('tgl_pengajuan', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                            <br>
                                            <label for="">Priode Cuti</label><br>
                                            <div class="form-row">
                                                <div class="col-6">
                                                <small>Mulai</small>
                                                <input class="form-control mb-1" type="date" name="tgl_mulai" value="<?php echo $data_cuti->tgl_mulai; ?>">
                                                <?php echo form_error('tgl_mulai', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                                </div>

                                                <div class="col-6">
                                                <small>Selesai</small>
                                                    <input class="form-control mb-1" type="date" name="tgl_selesai" value="<?php echo $data_cuti->tgl_selesai; ?>">
                                                    <?php echo form_error('tgl_selesai', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>

                                                </div>
                                            </div>
                                                <label for="jml_hari">Jumlah Hari</label><br>
                                                <input class="form-control mb-1" type="text" name="jml_hari" value="<?php echo $data_cuti->jml_hari; ?>">
                                                <?php echo form_error('jml_hari', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                        </div>
                                        <div class="col-5">
                                            <label for="alamat">Alamat</label><br>
                                            <textarea name="alamat" value="" id="" cols="9" rows="5" class="form-control mb-2"><?php echo $data_cuti->alamat; ?></textarea>
                                            <?php echo form_error('alamat', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                            
                                            <label for="no_tlp">No Telp</label>
                                            <input type="text" value="<?php echo $data_cuti->no_telp; ?>" name="no_telp" class="form-control mb-1">
                                            <?php echo form_error('no_telp', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                            <br>
                                            <label for="id_atasan">Atasan Langsung</label><br>
                                            <select value="" name="id_atasan" id="" class="form-control mb-1">
                                                <option value="<?php echo $data_cuti->atasan_id; ?>"><?php echo $data_cuti->nama_lengkap; ?></option>
                                            <?php foreach ($option2 as $row): ?>
                                                    <option value="<?= $row->id_atasan; ?>"><?= $row->nama_lengkap; ?></option>
                                                    <?php endforeach; ?>
                                            </select>
                                            <?php echo form_error('id_atasan', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                            <br>
                                            <label for="file_up">File Bukti</label>
                                            <input name="file" type="file" class="form-control">
                                            <?php echo form_error('file', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="">
                              <a href="<?php echo base_url() . 'Data_cuti_umum'; ?>" class="btn btn-default"><i class="fas fa-arrow-left fa-fw"></i> Back</a>
                              <input type="submit" value="Proses" onclick="return confirm('Are you sure you want to save it');" class="btn btn-primary float-right">
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
<!-- /.content-wrapper -->
