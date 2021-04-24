  <div class="login-logo mb-1 text-white">
    <img src="<?php echo base_url() . 'assets/dist/img/logo_ma.png'; ?>" style="height:auto;width:53px;" class="mb-2">
    <h2><b>E-Cuti</b></h2>
    <h6 class="mb-3"> <b>Pengadilan Negeri Jakarta Utara Kelas I A Khusus</b></h6>
  </div>
  <div class="card card-outline card-default">
    <div class="card-body">
      <p class="login-box-msg">Change your password for <br> <small class="text-gray"><b><?php echo $this->session->userdata('reset_email'); ?></b></small> </p>
      <?php echo $this->session->flashdata('message'); ?>
      <form action="<?php echo base_url() . 'authentication/change_password'; ?>" method="post">
          <div class="form-group">
            <div class="input-group mb-1">
                <input type="password" name="password1" class="form-control" placeholder="New Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <?php echo form_error('password1', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
          </div>
          <div class="form-group">
                <div class="input-group mb-1">
                  <input type="password" name="password2" class="form-control" placeholder="Repeat Password">
                  <div class="input-group-append">
                          <div class="input-group-text">
                              <span class="fas fa-lock"></span>
                          </div>
                  </div>
              </div>
              <?php echo form_error('password2', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Change Password</button>
            </div>
          </div>
      </form>
    </div>
  </div>
