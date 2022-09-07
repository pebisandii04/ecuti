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
                <li class="breadcrumb-item"><a href="<?php echo base_url() . ''; ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Data User</a></li>
                <li class="breadcrumb-item active">Detail Data User</li>
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
                      <?php foreach ($data_user as $user) { ?>
                        <form>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label class="small mb-1">Nomor Identitas Pegawai (NIP)</label>
                              <input type="hidden" name="id_user" value="<?php echo $user['id_user']; ?>">
                              <input class="form-control" type="text" readonly value="<?php echo $user['nip']; ?>" />
                            </div>
                            <div class="form-group col-md-6">
                              <label class="small mb-1">Nama Lengkap</label>
                              <input class="form-control" type="text" readonly value="<?php echo $user['nama_lengkap']; ?>" />
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label class="small mb-1">Tempat Lahir</label>
                              <input class="form-control" type="text" readonly value="<?php echo $user['tempat_lahir']; ?>" />
                            </div>
                            <div class="form-group col-md-6">
                              <label class="small mb-1" for="inputLastName">Tanggal Lahir</label>
                              <input class="form-control" id="inputLastName" type="text" readonly value="<?php echo $user['tanggal_lahir']; ?>" />
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label class="small mb-1">Jenis Pegawai</label>
                              <input class="form-control" type="text" readonly value="<?php echo $user['nama_jenis_pegawai']; ?>" />
                            </div>
                            <div class="form-group col-md-6">
                              <label class="small mb-1">Agama</label>
                              <input class="form-control" type="text" readonly value="<?php echo $user['nama_agama']; ?>" />
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label class="small mb-1">Golongan Ruang</label>
                              <input class="form-control" type="text" readonly value="<?php echo $user['nama_golongan']; ?>" />
                            </div>
                            <div class="form-group col-md-6">
                              <label class="small mb-1">Jenis Kelamin</label>
                              <input class="form-control" type="text" readonly value="<?php echo $user['nama_jenis_kelamin']; ?>" />
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label class="small mb-1">Email address</label>
                              <input class="form-control" type="email" readonly value="<?php echo $user['email']; ?>" />
                            </div>
                            <div class="form-group col-md-6">
                              <label class="small mb-1">Phone number</label>
                              <input class="form-control" type="tel" readonly value="<?php echo $user['no_telp']; ?>" />
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label class="small mb-1">Unit Kerja</label>
                              <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo $user['nama_unit_kerja']; ?>" />
                            </div>
                            <div class="form-group col-md-6">
                              <label class="small mb-1">Jabatan</label>
                              <input class="form-control" type="text" readonly value="<?php echo $user['nama_jabatan']; ?>" />
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label class="small mb-1">Profile</label>
                              <div class="text-center">
                                <img style="width: 150px;height:auto;" src="<?php echo base_url() . 'uploads/profiles/' . $user['photo']; ?>" alt="<?php echo $user['photo']; ?>">
                              </div>
                            </div>
                            <div class="form-group col-md-6">
                              <label class="small mb-1">Status User</label>
                              <?php $active = $user['status_id']; ?>
                              <?php if ($active == 1) {
                                echo '<input class="form-control is-valid" type="text" readonly value="Active" />';
                              }
                              if ($active == 2) {
                                echo '<input class="form-control is-invalid" type="text" readonly value="Non Active" />';
                              }
                              if ($active == 3) {
                                echo '<input class="form-control is-warning" type="text" readonly value="Blocekd" />';
                              } ?>
                              <br>
                              <label class="small mb-1">Role Accsess</label>
                              <input class="form-control" type="text" readonly value="<?php echo $user['role']; ?>" />
                            </div>
                          </div>
                          <a href="<?php echo base_url() . 'data_user'; ?>" class="btn btn-primary" type="button"><i class="fas fa-arrow-left fa-fw"></i> Back</a>
                        </form>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
