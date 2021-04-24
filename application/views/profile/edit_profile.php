<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-user-edit fa-fw"></i> Edit Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Home</a></li>
                <li class="breadcrumb-item active">Edit Profile</li>
                </ol>
            </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-3">
                <div class="card card-default card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                    <img class="img-thumbnail" src="<?php echo base_url().'uploads/profiles/'. $user['photo']; ?>" alt="<?php echo $user['photo']; ?>">
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                    <div class="active tab-pane">
                        <form action="<?php echo base_url().'profile/edit_profile'; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="small mb-1">Nomor Identitas Pegawai (NIP)</label>
                                <input type="hidden" name="id_user" value="<?php echo $user['id_user']; ?>">
                                <input class="form-control" type="text" readonly value="<?php echo $user['nip']; ?>" name="nip"/>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="small mb-1">Nama Lengkap</label>
                                <input class="form-control" type="text" value="<?php echo $user['nama_lengkap']; ?>" name="nama_lengkap"/>
                                <?php echo form_error('nama_lengkap', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Tempat Lahir</label>
                                    <input class="form-control" type="text" value="<?php echo $user['tempat_lahir']; ?>" name="tempat_lahir"/>
                                    <?php echo form_error('tempat_lahir', '<small class="text-danger pl-1"> <i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Tanggal Lahir</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="tanggal_lahir"  value="<?php echo $user['tanggal_lahir']; ?>">
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
                                        <option value="<?php echo $user['jenis_pegawai_id']; ?>"><?php echo $user['nama_jenis_pegawai']; ?></option>
                                        <?php foreach ($data_jenis_pegawai as $djp) { ?>
                                        <option value="<?php echo $djp['id_jenis_pegawai']; ?>"><?php echo $djp['nama_jenis_pegawai']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('jenis_pegawai_id', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Agama</label>
                                    <select class="form-control" name="agama_id" >
                                        <option value="<?php echo $user['agama_id']; ?>"><?php echo $user['nama_agama']; ?></option>
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
                                    <option value="<?php echo $user['gol_ruang_id']; ?>"><?php echo $user['nama_golongan']; ?></option>
                                    <?php foreach ($data_golongan_ruang as $dgr) { ?>
                                        <option value="<?php echo $dgr['id_gol_ruang']; ?>"><?php echo $dgr['nama_golongan']; ?></option>
                                    <?php } ?>
                                    </select>
                                    <?php echo form_error('gol_ruang_id', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin_id" >
                                    <option value="<?php echo $user['jenis_kelamin_id']; ?>"><?php echo $user['nama_jenis_kelamin']; ?></option>
                                    <?php foreach ($data_jenis_kelamin as $djk) { ?>
                                        <option value="<?php echo $djk['id_jenis_kelamin']; ?>"><?php echo $djk['nama_jenis_kelamin']; ?></option>
                                    <?php } ?>
                                    </select>
                                    <?php echo form_error('jenis_kelamin_id', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Email Address</label>
                                    <input class="form-control" name="email" type="text" value="<?php echo $user['email']; ?>" />
                                    <?php echo form_error('email', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Phone Number</label>
                                    <input class="form-control" name="no_telp" type="text" value="<?php echo $user['no_telp']; ?>" />
                                    <?php echo form_error('no_telp', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Unit Kerja</label>
                                    <select class="form-control" name="unit_kerja_id" >
                                    <option value="<?php echo $user['unit_kerja_id']; ?>"><?php echo $user['nama_unit_kerja']; ?></option>
                                    <?php foreach ($data_unit_kerja as $duk) { ?>
                                        <option value="<?php echo $duk['id_unit_kerja']; ?>"><?php echo $duk['nama_unit_kerja']; ?></option>
                                    <?php } ?>
                                    </select>
                                    <?php echo form_error('unit_kerja_id', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="small mb-1">Jabatan</label>
                                    <select class="form-control" name="jabatan_id" >
                                    <option value="<?php echo $user['jabatan_id']; ?>"><?php echo $user['nama_jabatan']; ?></option>
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
                                    <input type="file" name="photo" class="custom-file-input" id="photo">
                                    <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                            <label> <b>NB <sup class="text-danger">*</sup> : Jika tidak ada atau kosong isi (-).</b> </label>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?php echo base_url().'profile'; ?>"  class="btn btn-default"><i class="fas fa-arrow-left fa-fw"></i> Back</a>
                    <button type="submit" class="btn btn-primary float-right" onclick="return confirm('Are you sure you want to change profile');"><i class="fas fa-save fa-fw"></i> Save</button>
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
