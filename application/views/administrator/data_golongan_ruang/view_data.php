<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> <i class="fas fa-building fa-fw"></i> Data Golongan Ruang</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Home</a></li>
                <li class="breadcrumb-item active">Data Golongan Ruang</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
    <!-- /.content-header -->

    <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Data Golongan Ruang</h3>
                    <div class="float-right"><a href="<?php echo base_url().'data_golongan_ruang/add_data'; ?>" class="btn btn-primary btn-sm"> <i class="fas fa-plus fa-fw"></i> Create Golongan Ruang</a></div>
                  </div>
                  <div class="card-body">
                    <?php echo $this->session->flashdata('message'); ?>
                    <table id="example2" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th width="8" class="text-center">#</th>
                          <th>Nama Golongan Ruang</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $no = 1;
                          foreach ($data_golongan_ruang as $dgr) {
                        ?>
                          <tr>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td><?php echo $dgr['nama_golongan']; ?></td>
                            <td class="text-center">
                                <a href="<?php echo base_url().'data_golongan_ruang/edit_data/'. $dgr['id_gol_ruang']; ?>" class="btn btn-warning btn-sm" title="Edit" > <i class="fas fa-edit fa-fw"></i> </a>
                                <a href="<?php echo base_url().'data_golongan_ruang/delete_data/'. $dgr['id_gol_ruang']; ?>" class="btn btn-danger btn-sm" title="Delete"> <i class="fas fa-trash fa-fw"></i></a>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th width="8" class="text-center">#</th>
                          <th>Nama Golongan Ruang</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
