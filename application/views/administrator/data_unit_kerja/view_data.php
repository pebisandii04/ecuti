<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> <i class="fas fa-university fa-fw"></i> Data Unit Kerja</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Unit Kerja</li>
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
                  <h3 class="card-title">Data Unit Kerja</h3>
                  <div class="float-right"><a href="<?php echo base_url().'data_unit_kerja/add_data'; ?>" class="btn btn-primary btn-sm"> <i class="fas fa-plus fa-fw"></i> Create Unit Kerja</a></div>
                </div>
                <div class="card-body">
                  <?php echo $this->session->flashdata('message'); ?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr  class="text-center">
                        <th width="8">#</th>
                        <th>Nama Unit Kerja</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no = 1;
                        foreach ($data_unit_kerja as $duk) {
                      ?>
                        <tr>
                          <td class="text-center"><?php echo $no++; ?></td>
                          <td><?php echo $duk['nama_unit_kerja']; ?></td>
                          <td class="text-center">
                              <a href="<?php echo base_url().'data_unit_kerja/edit_data/'. $duk['id_unit_kerja']; ?>" class="btn btn-warning btn-sm" title="Edit" > <i class="fas fa-edit fa-fw"></i> </a>
                              <a href="<?php echo base_url().'data_unit_kerja/delete_data/'. $duk['id_unit_kerja']; ?>" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete');"> <i class="fas fa-trash fa-fw"></i></a>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
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
