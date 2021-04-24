<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> <i class="fas fa-users fa-fw"></i> Data User</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Home</a></li>
                <li class="breadcrumb-item active">Data User</li>
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
                  <h3 class="card-title">Data User</h3>
                  <div class="float-right"><a href="<?php echo base_url().'data_user/add_data'; ?>" class="btn btn-primary btn-sm"> <i class="fas fa-user-plus fa-fw"></i> Create User</a></div>
                </div>
                <div class="card-body">
                  <?php echo $this->session->flashdata('message'); ?>
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th width="8" class="text-center">#</th>
                      <th>NIP</th>
                      <th>Nama Lengkap</th>
                      <th width="150px">Jabatan</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no = 1;
                        foreach ($data_user as $user) {
                      ?>
                        <tr>
                          <td class="text-center"><?php echo $no++; ?></td>
                          <td><?php echo $user['nip']; ?></td>
                          <td><?php echo $user['nama_lengkap']; ?></td>
                          <td><?php echo $user['nama_jabatan']; ?></td>
                          <td class="text-center">
                            <?php $active = $user['status_id']; ?>
                            <?php if ($active == 1){
                                echo '<span class="badge badge-pill badge-primary">Active</span>';
                              }if ($active == 2) {
                                echo '<span class="badge badge-pill badge-danger">Non Active</span>';
                              }if ($active == 3) {
                                echo '<span class="badge badge-pill badge-warning">Bloked</span>';
                              } ?>
                          </td>
                          <td class="text-center">
                              <a href="<?php echo base_url().'data_user/detail_data/'. $user['id_user']; ?>" class="btn btn-success btn-sm" title="Detail"> <i class="fas fa-eye fa-fw"></i> </a>
                              <a href="<?php echo base_url().'data_user/edit_data/'. $user['id_user']; ?>" class="btn btn-warning btn-sm" title="Edit" > <i class="fas fa-edit fa-fw"></i> </a>
                              <a href="<?php echo base_url().'data_user/delete_data/'. $user['id_user']; ?>" class="btn btn-danger btn-sm" title="Delete" > <i class="fas fa-trash fa-fw"></i></a>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th style="width:10;">#</th>
                      <th>NIP</th>
                      <th>Nama Lengkap</th>
                      <th>Jabatan</th>
                      <th>Status</th>
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
