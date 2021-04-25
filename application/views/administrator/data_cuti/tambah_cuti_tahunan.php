<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> <i class="fas fa-building fa-fw"></i>Form Pengajuan Cuti</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Home</a></li>
                <li class="breadcrumb-item">Form Pengajuan Cuti</li>
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
                        <h3 class="card-title">Form Pengajuan Cuti</h3>
                        <div class="card-tools">
                            <a href="<?php echo base_url() ?>data_mahasiswa" class="btn btn-tool"><i class="fas fa-times"></i></a></div>
                    </div>
                    <form class="form-horiontal" action="<?php echo base_url() ?>Data_cuti/proses_simpan" method="POST">
                        <!--/.card-header -->
                        <div class="card-body">
                                    <div class="row">
                                        <div class="col-5 offset-1">
                                            <!-- FORM TAMBAH DATA PEGAWAI -->
                                            <label for="alasan">Alasan</label>
                                            <input class="form-control mb-4" type="text" name="alasan">

                                            <label for="tgl_pengajuan">Tanggal Pengajuan</label>
                                            <input class="form-control mb-4" type="date" name="tgl_pengajuan" placeholder="">

                                            <label for="">Priode Cuti</label><br>
                                            <div class="form-row">
                                                <div class="col-6">
                                                <small>Mulai</small>
                                                    <input class="form-control mb-4" type="date" name="tgl_mulai">
                                                </div>

                                                <div class="col-6">
                                                <small>Selesai</small>
                                                    <input class="form-control mb-4" type="date" name="tgl_selesai">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-5">
                                            <label for="jml_hari">Jumlah Hari</label>
                                            <input class="form-control mb-4" type="text" name="jml_hari">

                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" id="" cols="10" rows="4" class="form-control mb-3"></textarea>

                                            <label for="no_tlp">No Telp</label>
                                            <input type="text" name="no_tlp" class="form-control mb-3">
                                            
                                            <label for="id_atasan">Atasan Langsung</label>
                                            <select name="id_atasan" id="" class="form-control mb-3">
                                            <option value="">--Pilih--</option>
                                            <?php foreach ($option2 as $row): ?>
                                                    <option value="<?= $row->id_atasan; ?>"><?= $row->nama_lengkap; ?></option>
                                                    <?php endforeach; ?>
                                            </select>

                                            <input type="submit" value="Simpan" class="btn btn-primary">
                                            <a href="" class="btn btn-danger">Kembali</a>
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
<!-- /.content-wrapper -->
