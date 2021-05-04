<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> <i class="fas fa-building fa-fw"></i> Data Pengajuan Cuti Tahunan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Home</a></li>
                <li class="breadcrumb-item active">Data Pengajuan Cuti Tahunan</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Data</h3>
                        <div class="card-tools"><a href="<?php echo base_url() ?>Data_cuti/tambah_cuti_tahunan" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus">
                                </i> Tambah data</a>
                        </div>
                    </div>
                    <!--/.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Cuti</th>
                                    <th>Tgl Pengajuan</th>
                                    <th>Priode Cuti</th>
                                    <th>Alasan</th>
                                    <th>Status</th>
                                    <th>Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data_cuti as $row) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td> <?php echo $row->nama_jenis_cuti; ?></td>
                                        <td> <?php echo $row->tgl_pengajuan; ?></td>
                                        <td> <?php echo $row->tgl_mulai; ?><b>s/d</b><?php echo $row->tgl_selesai; ?></td>
                                        <td> <?php echo $row->alasan; ?></td>
                                        <td>
                                            <?php if ($row->sts_apv_1 OR $row->sts_apv_2 == 1) {
                                                echo '<span class="badge badge-danger">Menunggu Approve</span>';
                                            } elseif ($row->sts_apv_2 == 3) {
                                                echo '<span class="badge badge-danger">Ditolak</span>';
                                            } else {
                                                echo '<span class="badge badge-success">Sudah Approve</span>';
                                            } ?>          
                                        </td>
                                        <td>
                                        <?php if ($row->sts_apv_2 == 1) { ?>
                                            <a href="<?php echo base_url() . 'Data_cuti/edit_cuti_tahunan/' . $row->id_cuti; ?>" class="btn btn-sm btn-secondary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="<?php echo base_url() . 'Data_cuti/delete_data/' . $row->id_cuti; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah data ini akan di hapus ?')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <?php } ?>
                                            <?php if ($row->sts_apv_2 == 1) { ?>
                                            <a href="<?php echo base_url() . 'C_cetak/cetak_lampiran/' . $row->nip; ?>" class="btn btn-sm btn-warning disabled">
                                                <i class="fas fa-print"></i>
                                            </a>
                                            <?php } ?>
                                            <?php if ($row->sts_apv_2 == 0) { ?>
                                            <a href="<?php echo base_url() . 'C_cetak/cetak_lampiran/' . $row->nip; ?>" class="btn btn-sm btn-warning">
                                                <i class="fas fa-print"></i>
                                            </a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
        </div>
        <!--/.row -->
    </div>
    <!--/.container-fluid -->
</div>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
