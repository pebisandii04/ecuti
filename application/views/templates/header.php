<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content/>
  <meta name="author" content/>
  <title><?php echo $title; ?></title>
  <!-- Icon -->
  <link rel="icon" type="image/x-icon" href="<?php echo base_url().'assets/dist/img/logo_ma.ico'; ?>" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/fontawesome-free/css/all.min.css'; ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'; ?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'; ?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'; ?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'; ?>">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'; ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/select2/css/select2.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'; ?>">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css'; ?>">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/bs-stepper/css/bs-stepper.min.css'; ?>">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/dropzone/min/dropzone.min.css'; ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'; ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/adminlte.css'; ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light text-sm">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-default">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link text-center text-sm">
        <img src=" <?php echo base_url() . 'assets/dist/img/e_cuti.png'; ?>" style="height:38px;width:100;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image mt-3 pl-0">
          <img src="<?php echo base_url() . 'uploads/profiles/' . $user['photo']; ?>" style="width:45px;height:45px;" class="img-circle" alt="">
        </div>
        <div class="info mt-3 pl-1">
          <a class="d-block"><?php echo $user['nama_lengkap']; ?></a>
          <a class="d-block small"> <sup><?php echo $user['nama_jabatan']; ?></sup></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <?php $session = $this->session->userdata('role_id'); ?>
               <?php if ($session == "1") { ?>
                 <li class="nav-header">Administrator</li>
                 <li class="nav-item">
                  <a href="<?php echo base_url() . ''; ?>" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Dashboard</p>
                  </a>
                 </li>
                 <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-database"></i>
                    <p>
                      Master Data Kepegawaian
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                      <a href="<?php echo base_url().'data_agama'; ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Agama</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url().'data_golongan_ruang'; ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Golongan Ruang</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url().'data_jabatan'; ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Jabatan</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url().'data_jenis_pegawai'; ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Jenis Pegawai</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url().'data_unit_kerja'; ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Unit Kerja</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url().'data_user'; ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data User</p>
                      </a>
                    </li>
                  </ul>
                 </li>
                 <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-database"></i>
                    <p>
                      Master Data Cuti
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                      <a href="<?php echo base_url().'data_hak_cuti'; ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Cuti Tahunan</p>
                      </a>
                    </li>
                  </ul>
                 </li>
                 <li class="nav-header">Management Pimpinan</li>
               <?php } ?>
               <!-- Jika Login sebagai pejabat langsung-->
               <?php if ($session == "2") { ?>
                 <li class="nav-header">Kepegawaian</li>
                 <li class="nav-item">
                  <a href="<?php echo base_url() . ''; ?>" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Home</p>
                  </a>
                 </li>

                 <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-calendar-plus"></i>
                    <p>
                      Form Pengajuan Cuti
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                      <a href="<?php echo base_url().'data_cuti_tahunan'; ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Cuti Tahunan</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url().'data_cuti_umum'; ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Cuti Umum</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-calendar-plus"></i>
                    <p>
                      Approval Cuti
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
              
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                          Cuti Tahunan
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="<?php echo base_url().'data_cuti_tahunan/Apv_ct_atasan'; ?>" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Atasan Langsung</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="<?php echo base_url().'data_cuti_tahunan/Apv_ct_pejabat'; ?>" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Pejabat Berwenang</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item has-treeview">
                      <a href="" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                          Cuti Umum
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="<?php echo base_url().'data_cuti_umum/Apv_cu_atasan'; ?>" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Atasan Langsung</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="<?php echo base_url().'data_cuti_umum/Apv_cu_pejabat'; ?>" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Pejabat Berwenang</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-calendar-plus"></i>
                    <p>
                      Laporan
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
              
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                          Cuti Tahunan
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="<?php echo base_url().'laporan/all_ct_apv'; ?>" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Data Pengajuan Cuti</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="<?php echo base_url().'data_cuti_tahunan/Apv_ct_pejabat'; ?>" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Data Cuti Pending</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item has-treeview">
                      <a href="" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                          Cuti Umum
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="<?php echo base_url().'data_cuti_umum/Apv_cu_atasan'; ?>" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Atasan Langsung</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="<?php echo base_url().'data_cuti_umum/Apv_cu_pejabat'; ?>" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Pejabat Berwenang</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
               <?php } ?>

               <!-- Jika Login sebagai Atasan langsung-->
               <?php if ($session == "4") { ?>
                 <li class="nav-header">Atasan</li>
                 <li class="nav-item">
                  <a href="<?php echo base_url() . ''; ?>" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Home</p>
                  </a>
                 </li>

                 <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-calendar-plus"></i>
                    <p>
                      Form Pengajuan Cuti
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                      <a href="<?php echo base_url().'data_cuti_tahunan'; ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Cuti Tahunan</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url().'data_cuti_umum'; ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Cuti Umum</p>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-calendar-plus"></i>
                    <p>
                      Approval Cuti
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
              
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                          Cuti Tahunan
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="<?php echo base_url().'data_cuti_tahunan/Apv_ct_atasan'; ?>" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Atasan Langsung</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item has-treeview">
                      <a href="" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                          Cuti Umum
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="<?php echo base_url().'data_cuti_umum/Apv_cu_atasan'; ?>" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Atasan Langsung</p>
                          </a>
                        </li>
                        
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-calendar-plus"></i>
                    <p>
                      Laporan
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
              
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                          Cuti Tahunan
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="<?php echo base_url().'laporan/all_ct_apv'; ?>" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Data Ter Approve</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="<?php echo base_url().'data_cuti_tahunan/Apv_ct_pejabat'; ?>" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Data Cuti Pending</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item has-treeview">
                      <a href="" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                          Cuti Umum
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="<?php echo base_url().'data_cuti_umum/Apv_cu_atasan'; ?>" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Atasan Langsung</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="<?php echo base_url().'data_cuti_umum/Apv_cu_pejabat'; ?>" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Pejabat Berwenang</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                
               <?php } ?>

               <!-- jika login sebagai User -->
               <?php if ($session == "3") { ?>
                 <li class="nav-header">User</li>
                 <li class="nav-item">
                    <a href="<?php echo base_url() . '/Dashboard'; ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Home</p>
                    </a>
                 </li>
                 <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-calendar-plus"></i>
                    <p>
                      Form Pengajuan Cuti
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                      <a href="<?php echo base_url().'data_cuti_tahunan'; ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Cuti Tahunan</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url().'data_cuti_umum'; ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Cuti Umum</p>
                      </a>
                    </li>
                  </ul>
                </li>
                 
                 <li class="nav-item">
                    <a href="<?php echo base_url() . 'user/contact'; ?>" class="nav-link">
                        <i class="nav-icon fas fa-phone-square-alt"></i>
                        <p>Kontak Kami</p>
                    </a>
                 </li>
               <?php } ?>
               <li class="nav-header">Account</li>
               <li class="nav-item">
                  <a href="<?php echo base_url() . 'profile'; ?>" class="nav-link">
                      <i class="nav-icon fas fa-id-card"></i>
                      <p>Profile</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo base_url() . 'profile/edit_profile'; ?>" class="nav-link">
                      <i class="nav-icon fas fa-user-cog"></i>
                      <p>Settings</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo base_url() . 'profile/change_password'; ?>" class="nav-link">
                      <i class="nav-icon fas fa-lock"></i>
                      <p>Change Password</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-default">
                      <i class="nav-icon fas fa-sign-out-alt"></i>
                      <p>Logout</p>
                  </a>
               </li>
               <br>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
