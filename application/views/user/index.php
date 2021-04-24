<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
         <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> <i class="fas fa-bookmark fa-fw"></i> Hak Cuti</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() . ''; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Hak Cuti</li>
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
                <!-- left column -->
                <div class="col-md-3">
                </div>
                  <!-- left column -->
                  <div class="col-md-6">
                      <!-- jquery validation -->
                      <div class="card card-default">
                          <div class="card-header">
                              <h3 class="card-title"> Cuti Tahunan</h3>
                              <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                  </button>
                              </div>
                          </div>
                          <div class="card-body">
                              <table>
                                  <tr>
                                      <td>N </td>
                                      <td>:</td>
                                      <td>Cuti Tahun Berjalan</td>
                                  </tr>
                                  <tr>
                                      <td>N-1</td>
                                      <td>:</td>
                                      <td>Sisa Cuti 1 Tahun Sebelumnya</td>
                                  </tr>
                                  <tr>
                                      <td>N-2 </td>
                                      <td>:</td>
                                      <td>Sisa Cuti Tahunnan Sebelumnya</td>
                                  </tr>
                              </table>
                              <br>
                              <table>
                                  <?php foreach ($data_hak_cuti_tahunan as $hak_cuti_tahunan) { ?>
                                      <tr>
                                          <td>N </td>
                                          <td>:</td>
                                          <td><?php echo $hak_cuti_tahunan['n']; ?> Hari</td>
                                      </tr>
                                      <tr>
                                          <td>N-1</td>
                                          <td>:</td>
                                          <td><?php echo $hak_cuti_tahunan['n_1']; ?> Hari</td>
                                      </tr>
                                      <tr>
                                          <td>N-2 </td>
                                          <td>:</td>
                                          <td><?php echo $hak_cuti_tahunan['n_2']; ?> Hari</td>
                                      </tr>
                                  <?php } ?>
                              </table>
                          </div>
                          <div class="card-footer">
                            <p>Dirancang untuk mempermudah proses pengajuan cuti pegawai melalui online dengan mudah, cepat, dan waktu sebenarnya. manfaat tanpa kertas</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
