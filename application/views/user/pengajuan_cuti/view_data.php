<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
       <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1> <i class="fas fa-file-signature fa-fw"></i> Data Pengajuan Cuti</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?php echo base_url() . ''; ?>">Home</a></li>
                          <li class="breadcrumb-item active">Data Pengajuan Cuti</li>
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
                            <h3 class="card-title">Data Pengajuan Cuti</h3>
                            <div class="float-right"><a href="<?php echo base_url() . 'pengajuan_cuti/add_data'; ?>" class="btn btn-primary btn-sm"> <i class="fas fa-plus fa-fw"></i> Ajukan Cuti</a></div>
                        </div>
                        <div class="card-body">
                            <?php echo $this->session->flashdata('message'); ?>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="8" class="text-center">#</th>
                                        <th>Jenis Cuti</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Periode Cuti</th>
                                        <th>Alasan Cuti</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th width="8" class="text-center">#</th>
                                        <th>Jenis Cuti</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Periode Cuti</th>
                                        <th>Alasan Cuti</th>
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
