<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> <i class="fas fa-file-signature fa-fw"></i> Data Pengajuan Cuti Tahunan</h1>
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
                        <h3 class="card-title">Data Pengajuan Cuti Tahunan</h3>
                        <div class="card-tools"><a href="<?php echo base_url() ?>Data_cuti_tahunan/tambah_cuti_tahunan" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus">
                                </i> Create Pengajuan Cuti Tahunan</a>
                        </div>
                    </div>
                    <!--/.card-header -->
                    <div class="card-body">
                         <?php echo $this->session->flashdata('message'); ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th width="8">#</th>
                                    <th>Jenis Cuti</th>
                                    <th>Tgl Pengajuan</th>
                                    <th>Priode Cuti</th>
                                    <th>Alasan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data_cuti as $row) { ?>
                                    <tr>
                                        <td  class="text-center"><?= $no++ ?></td>
                                        <td class="text-center"> <?php echo $row->nama_jenis_cuti; ?></td>
                                        <td  class="text-center"> <?php echo $row->tgl_pengajuan; ?></td>
                                        <td  class="text-center"> <?php echo $row->tgl_mulai; ?> <b>s/d</b> <?php echo $row->tgl_selesai; ?></td>
                                        <td> <?php echo $row->alasan; ?></td>
                                        <td  class="text-center">
                                        <?php
                                            if ($row->sts_apv_1 == 0 && $row->sts_apv_2 == 1) {
                                                echo '<span class="badge badge-danger">Menunggu Apv Pejabat</span>';
                                            }
                                            if ($row->sts_apv_1 == 1 && $row->sts_apv_2 == 1) {
                                                echo '<span class="badge badge-danger">Menunggu Apvrove</span>';
                                            }
                                            if ($row->sts_apv_1 == 0 && $row->sts_apv_2 == 0) {
                                                echo '<span class="badge badge-success">Sudah Approve</span>';
                                            } 
                                            if ($row->sts_apv_2 == 3) {
                                                echo '<span class="badge badge-danger">Ditolak</span>';
                                            }
                                            ?>         
                                        </td>
                                        <td  class="text-center">
                                        <?php if ($row->sts_apv_2 == 1) { ?>
                                                <a href="<?php echo base_url() . 'Data_cuti_tahunan/edit_cuti_tahunan/' . $row->id_cuti_tahunan; ?>" class="btn btn-sm btn-secondary">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="<?php echo base_url() . 'Data_cuti_tahunan/delete_data/' . $row->id_cuti_tahunan; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah data ini akan di hapus ?')">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            <?php } ?>
                                                <?php if ($row->sts_apv_2 == 1) { ?>
                                                    <a href="<?php echo base_url() . 'C_cetak/cetak_lampiran/' . $row->nip; ?>" class="btn btn-sm btn-warning disabled">
                                                        <i class="fas fa-print"></i>
                                                    </a>
                                                <?php } ?>
                                            <?php if ($row->sts_apv_2 == 0) { ?>
                                            <a href="<?php echo base_url() . 'Laporan/cetak_lampiran/'.$row->nip.'/' . $row->pejabat_id; ?>" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Cetak Lampiran" target="_blank">
                                                <i class="fas fa-print"></i>
                                            </a>
                                            <?php } ?>

                                            <?php if ($row->sts_apv_2 == 1) { ?>
                                                    <a href="<?php echo base_url() . 'Laporan/cetak_surat/' . $row->nip; ?>" class="btn btn-sm btn-primary disabled">
                                                        <i class="fas fa-print"></i>
                                                    </a>
                                                <?php } ?>
                                            <?php if ($row->sts_apv_2 == 0) { ?>
                                            <a href="<?php echo base_url() . 'Laporan/cetak_surat/'. $row->nip; ?>" class="btn btn-sm btn-primary" target="_blank" data-toggle="tooltip" data-placement="top" title="Cetak Surat">
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