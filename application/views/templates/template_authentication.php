<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content/>
  <meta name="author" content/>
  <title><?php echo $title; ?></title>
  <link rel="icon" type="image/x-icon" href="<?php echo base_url().'assets/dist/img/logo_ma.ico'; ?>" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/fontawesome-free/css/all.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/adminlte.css'; ?>">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <?php echo $contents; ?>
    </div>              
<script src="<?php echo base_url().'assets/plugins/jquery/jquery.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/dist/js/adminlte.min.js'; ?>"></script>
</body>
</html>
