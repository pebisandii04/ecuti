<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> <i class="fas fa-building fa-fw"></i> Approval Cuti Tahunan</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Home</a></li>
                <li class="breadcrumb-item active">Approval Cuti Tahunan</li>
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
                        <h3 class="card-title">Approval Pengajuan Cuti Atasan Langsung</h3>
                    <?php echo $this->session->flashdata('message'); ?>
                    </div>
                    <!--/.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th width="8">#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Cuti</th>
                                    <th>Tgl Pengajuan</th>
                                    <th>Priode Cuti</th>
                                    <th>Alasan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($list_data as $row) { ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td class="text-center"><?php echo $row->nama_lengkap; ?></td>
                                        <td class="text-center"> <?php echo $row->nama_jenis_cuti; ?></td>
                                        <td class="text-center"> <?php echo $row->tgl_pengajuan; ?></td>
                                        <td class="text-center"> <?php echo $row->tgl_mulai; ?> <b>s/d</b> <?php echo $row->tgl_selesai; ?></td>
                                        <td> <?php echo $row->alasan; ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url() . 'Data_cuti_tahunan/approve_atasan/' . $row->id_cuti_tahunan; ?>" class="btn btn-sm btn-secondary" onclick="return confirm('Are you sure you want to agree ?')" >
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="<?php echo base_url() . 'Data_cuti_tahunan/tolak_ct_atasan/' .$row->id_user.'/'. $row->id_cuti_tahunan; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to reject it ?')">
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
