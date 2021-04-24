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
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Home</a></li>
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
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane">
                      <form action="<?php echo base_url().'data_unit_kerja/add_data'; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                          <div class="form-group col-md-12">
                              <label class="small mb-1">Nama Unit Kerja</label>
                              <input class="form-control" type="text" name="nama_unit_kerja"/>
                              <?php echo form_error('nama_unit_kerja', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="<?php echo base_url().'data_unit_kerja'; ?>"  class="btn btn-default"><i class="fas fa-times fa-fw"></i>Cancel</a>
                  <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save fa-fw"></i> Save</button>
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
