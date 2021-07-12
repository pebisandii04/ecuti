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

    <!-- Main content -->
    <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Data</h3>
                        <div class="float-right"><a href="<?php echo base_url() . 'Manajemen_pimpinan/add_data_atasan'; ?>" class="btn btn-primary btn-sm"> <i class="fas fa-plus fa-fw"></i> Tambah Data</a></div>
                    </div>
                    <!--/.card-header -->
                    <div class="card-body">
                         <?php echo $this->session->flashdata('message'); ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Unit Kerja</th>
                                    <th>Atasan Langsung</th>
                                    <th>Pejabat Berwenang</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $key => $row) { ?>
                                  <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?php echo $row['nama_unit_kerja']; ?></td>
                                        <td><?php echo $row['nama_lengkap']; ?></td>
                                        <td><?php echo $data2[$key]['nama_lengkap']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url() . 'Manajemen_pimpinan/edit_atasan/' . $row['id_atasan']; ?>" class="btn btn-sm btn-secondary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="<?php echo base_url() . 'Manajemen_pimpinan/delete_atasan/' . $row['id_atasan']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah data ini akan di hapus ?')">
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