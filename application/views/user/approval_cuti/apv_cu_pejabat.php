<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> <i class="fas fa-building fa-fw"></i> Approval Cuti Umum</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Home</a></li>
                <li class="breadcrumb-item active">Approval Cuti Umum</li>
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
                        <h3 class="card-title">Approval Pengajuan Cuti Pejabat Berwenang</h3>
                    </div>
                    <!--/.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Cuti</th>
                                    <th>Tgl Pengajuan</th>
                                    <th>Priode Cuti</th>
                                    <th>Alasan</th>
                                    <th>Approve</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($list_data as $row) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?php echo $row->nama_lengkap; ?></td>
                                        <td> <?php echo $row->nama_jenis_cuti; ?></td>
                                        <td> <?php echo $row->tgl_pengajuan; ?></td>
                                        <td> <?php echo $row->tgl_mulai; ?><b>s/d</b><?php echo $row->tgl_selesai; ?></td>
                                        <td> <?php echo $row->alasan; ?></td>
                                        <td>
                                            <a href="<?php echo base_url() . 'Data_cuti_umum/approve_pejabat/' . $row->id_cuti_umum; ?>" class="btn btn-sm btn-secondary">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="<?php echo base_url() . 'Data_cuti_umum/tolak_pengajuan/' . $row->id_cuti_umum; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin!! Menolak Pengajuan Ini?')">
                                                <i class="fas fa-times-circle"></i>
                                            </a>
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
<!--/.content -->
</div>
<!-- /.content-wrapper -->
