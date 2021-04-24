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
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
              <div class="card">
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane">
                        <form action="<?php echo base_url().'data_user/add_data'; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label class="small mb-1">Nomor Identitas Pegawai (NIP)</label>
                                  <input class="form-control" name="nip" type="text" value="<?php echo set_value('nip'); ?>" placeholder="NIP"/>
                                  <?php echo form_error('nip', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                              </div>
                              <div class="form-group col-md-6">
                                  <label class="small mb-1">Nama Lengkap</label>
                                  <input class="form-control" name="nama_lengkap" type="text" value="<?php echo set_value('nama_lengkap'); ?>" placeholder="Nama Lengkap"/>
                                  <?php echo form_error('nama_lengkap', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                              </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Tempat Lahir</label>
                                    <input class="form-control" name="tempat_lahir" type="text" value="<?php echo set_value('tempat_lahir'); ?>" placeholder="Tempat Lahir"/>
                                    <?php echo form_error('tempat_lahir', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Tanggal Lahir</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="tanggal_lahir" placeholder="<?php echo date('Y-m-d') ?>" value="<?php echo set_value('tanggal_lahir'); ?>">
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    <?php echo form_error('tanggal_lahir', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Jenis Pegawai</label>
                                    <select class="form-control" name="jenis_pegawai_id">
                                         <option value="">Select Jenis Kerja</option>
                                        <?php foreach ($data_jenis_pegawai as $djp) { ?>
                                          <option value="<?php echo $djp['id_jenis_pegawai']; ?>"><?php echo $djp['nama_jenis_pegawai']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('jenis_pegawai_id', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Agama</label>
                                    <select class="form-control" name="agama_id" >
                                      <option value="">Select Agama</option>
                                        <?php foreach ($data_agama as $da) { ?>
                                          <option value="<?php echo $da['id_agama']; ?>"><?php echo $da['nama_agama']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('agama_id', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Golongan Ruang</label>
                                    <select class="form-control" name="gol_ruang_id" >
                                      <option value="">Select Golongan Ruang</option>
                                      <?php foreach ($data_golongan_ruang as $dgr) { ?>
                                        <option value="<?php echo $dgr['id_gol_ruang']; ?>"><?php echo $dgr['nama_golongan']; ?></option>
                                      <?php } ?>
                                    </select>
                                    <?php echo form_error('gol_ruang_id', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin_id" >
                                      <option value="">Select Jenis Kelamin</option>
                                      <?php foreach ($data_jenis_kelamin as $djk) { ?>
                                        <option value="<?php echo $djk['id_jenis_kelamin']; ?>"><?php echo $djk['nama_jenis_kelamin']; ?></option>
                                      <?php } ?>
                                    </select>
                                    <?php echo form_error('jenis_kelamin_id', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Email address</label>
                                    <input class="form-control" type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email address"/>
                                    <?php echo form_error('email', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Phone Number</label>
                                    <input class="form-control" type="tel" name="no_telp" value="<?php echo set_value('no_telp'); ?>" placeholder="Phone number"/>
                                    <?php echo form_error('no_telp', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label class="small mb-1">Unit Kerja</label>
                                  <select class="form-control" name="unit_kerja_id" >
                                    <option value="">Select Unit Kerja</option>
                                    <?php foreach ($data_unit_kerja as $duk) { ?>
                                      <option value="<?php echo $duk['id_unit_kerja']; ?>"><?php echo $duk['nama_unit_kerja']; ?></option>
                                    <?php } ?>
                                  </select>
                                  <?php echo form_error('unit_kerja_id', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                              </div>
                              <div class="form-group col-md-6">
                                  <label class="small mb-1">Jabatan</label>
                                  <select class="form-control" name="jabatan_id" >
                                    <option value="">Select Jabatan</option>
                                    <?php foreach ($data_jabatan as $dj) { ?>
                                      <option value="<?php echo $dj['id_jabatan']; ?>"><?php echo $dj['nama_jabatan']; ?></option>
                                    <?php } ?>
                                  </select>
                                  <?php echo form_error('jabatan_id', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label class="small mb-1">Photo Profile</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" name="photo" class="custom-file-input">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group col-md-6">
                                  <label class="small mb-1">User Role</label>
                                  <select class="form-control" name="role_id" >
                                    <option value="">Select User Role</option>
                                    <?php foreach ($data_role as $dr) { ?>
                                      <option value="<?php echo $dr['id_role']; ?>"><?php echo $dr['role']; ?></option>
                                    <?php } ?>
                                  </select>
                                  <?php echo form_error('role_id', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                              </div>
                              <div class="form-group col-md-6">
                                <label class="small mb-1">User Status</label>
                                <select class="form-control" name="status_id" >
                                  <option value="">Select Status</option>
                                  <?php foreach ($data_status as $status) { ?>
                                    <option value="<?php echo $status['id_status']; ?>"><?php echo $status['status']; ?></option>
                                  <?php } ?>
                                </select>
                                <?php echo form_error('status_id', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                              </div>
                            </div>
                            <div class="form-group">
                               <label> <b>NB <sup class="text-danger">*</sup> : Jika tidak ada atau kosong isi (-). </b> <br> </label>
                            </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="<?php echo base_url().'data_user'; ?>"  class="btn btn-default"><i class="fas fa-times fa-fw"></i>Cancel</a>
                  <button type="submit" class="btn btn-primary float-right" onclick="return confirm('Are you sure you want to save it');"><i class="fas fa-save fa-fw"></i> Save</button>
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
