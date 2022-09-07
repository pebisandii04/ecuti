<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> <i class="fas fa-file-signature fa-fw"></i> Kelola Pejabat Berwenang</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Kelola Pejabat Berwenang</li>
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
                        <h3 class="card-title">Kelola Pejabat Berwenang</h3>
                        <div class="float-right"><a href="<?php echo base_url() . 'Manajemen_pimpinan/add_data_pejabat'; ?>" class="btn btn-primary btn-sm"> <i class="fas fa-plus fa-fw"></i> Create Pejabat Berwenang</a></div>
                    </div>
                    <!--/.card-header -->
                    <div class="card-body">
                         <?php echo $this->session->flashdata('message'); ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th width="8">#</th>
                                    <th>NIP</th>
                                    <th>Nama Pejabat</th>
                                    <th>Jabatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $key => $row) { ?>
                                  <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td class="text-center"><?php echo $row['nip']; ?></td>
                                        <td><?php echo $row['nama_lengkap']; ?></td>
                                        <td><?php echo $row['nama_jabatan']; ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url() . 'Manajemen_pimpinan/delete_pejabat/' . $row['id_pejabat']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah data ini akan di hapus ?')">
                                                <i class="fas fa-trash"></i>
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
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->