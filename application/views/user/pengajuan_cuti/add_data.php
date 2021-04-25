<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
         <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> <i class="fas fa-file-signature fa-fw"></i> Form Pengajuan Cuti</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() . ''; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Form Pengajuan Cuti</li>
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
                  <div class="col-md-1">
                  </div>
                  <!-- left column -->
                  <div class="col-md-10">
                      <!-- jquery validation -->
                      <div class="card card-default">
                          <div class="card-header">
                              <h3 class="card-title"> Form Pengajuan Cuti</h3>
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
                              <form>
                                  <div class="form-row">
                                      <div class="form-group col-md-6">
                                          <label class="small mb-1">Jenis Cuti</label>
                                          <input class="form-control" type="text" value="" />
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="small mb-1">Jumlah Hari</label>
                                          <input class="form-control" type="text" value="" />
                                      </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="form-group col-md-6">
                                          <label class="small mb-1">Alasan Cuti</label>
                                          <input class="form-control" type="text" value="" />
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="small mb-1">Alamat</label>
                                          <textarea name="alamat" rows="3" class="form-control"></textarea>
                                      </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="form-group col-md-6">
                                          <label class="small mb-1">Tanggal Pengajuan</label>
                                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="tanggal_lahir">
                                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                              </div>
                                          </div>
                                          <?php echo form_error('tanggal_lahir', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="small mb-1">Phone Number</label>
                                          <input class="form-control" name="no_telp" type="text" />
                                          <?php echo form_error('no_telp', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                      </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="form-group col-md-3">
                                          <label class="small mb-1">Mulai</label>
                                          <div class="input-group date" id="mulai" data-target-input="nearest">
                                              <input type="text" class="form-control datetimepicker-input" data-target="#mulai" name="tanggal_lahir">
                                              <div class="input-group-append" data-target="#mulai" data-toggle="datetimepicker">
                                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                              </div>
                                          </div>
                                          <?php echo form_error('tanggal_lahir', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                      </div>
                                      <div class="form-group col-md-3">
                                          <label class="small mb-1">Selesai</label>
                                          <div class="input-group date" id="selesai" data-target-input="nearest">
                                              <input type="text" class="form-control datetimepicker-input" data-target="#selesai" name="tanggal_lahir">
                                              <div class="input-group-append" data-target="#selesai" data-toggle="datetimepicker">
                                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                              </div>
                                          </div>
                                          <?php echo form_error('tanggal_lahir', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="small mb-1">Atasan Langsung</label>
                                          <input class="form-control" type="text" value="" />
                                      </div>
                                  </div>
                          </div>
                          <div class="card-footer">
                              <a href="<?php echo base_url() . 'pengajuan_cuti'; ?>" class="btn btn-default"><i class="fas fa-arrow-left fa-fw"></i> Back</a>
                              <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save fa-fw"></i> Proses</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
