<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1> <i class="fas fa-id-card fa-fw"></i> Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Home</a></li>
                <li class="breadcrumb-item active">User Profile</li>
                </ol>
            </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
        <?php echo $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-default card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                        <img class="img-thumbnail" src="<?php echo base_url().'uploads/profiles/'. $user['photo']; ?>" alt="<?php echo $user['photo']; ?>">
                        </div>
                        <h3 class="profile-username text-center"><?php echo $user['nama_lengkap']; ?></h3>
                        <p class="text-muted text-center mt-1"><?php echo $user['nama_jabatan']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane">
                                <form>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="small mb-1">Nomor Identitas Pegawai (NIP)</label>
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
                                            <label class="small mb-1">Tanggal Lahir</label>
                                            <input class="form-control" type="text" readonly value="<?php echo $user['tanggal_lahir']; ?>" />
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
                                        <input class="form-control" type="text" readonly value="<?php echo $user['nama_unit_kerja']; ?>" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="small mb-1">Jabatan</label>
                                        <input class="form-control" type="text" readonly value="<?php echo $user['nama_jabatan']; ?>" />
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label> <b>NB <sup class="text-danger">*</sup> : Jika data diatas tidak sesuai dengan data di SIKEP silahkan klik tombol Sinkronisasikan.</b> </label>
                                    </div>
                                    <a href="<?php echo base_url().'profile/edit_profile'; ?>" class="btn btn-primary" type="button"><i class="fas fa-edit fa-fw"></i> Edit Profile</a>
                                </form>
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