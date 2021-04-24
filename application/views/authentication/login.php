  <div class="login-logo mb-1 text-white">
    <img src="<?php echo base_url() . 'assets/dist/img/logo_ma.png'; ?>" style="height:auto;width:53px;" class="mb-2">
    <h2><b>E-Cuti</b></h2>
    <h6 class="mb-3"> <b>Pengadilan Negeri Jakarta Utara Kelas I A Khusus</b></h6>
  </div>
  <div class="card card-outline card-default">
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <?php echo $this->session->flashdata('message'); ?>
      <form action="<?php echo base_url() . 'authentication'; ?>" method="post">
        <div class="form-group">
          <div class="input-group mb-1">
            <input type="text" name="nip" class="form-control" placeholder="NIP">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <?php echo form_error('nip', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
        </div>
        <div class="form-group">
          <div class="input-group mb-1">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <?php echo form_error('password', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember" class="text-gray">
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block"> <i class="fas fa-sign-in-alt fa-fw"></i> Login</button>
          </div>
        </div>
        <p class="mb-1">
          <a href="<?php echo base_url() . 'authentication/forgot_password'; ?>">I forgot my password</a>
        </p>
      </form>
    </div>
  </div>
