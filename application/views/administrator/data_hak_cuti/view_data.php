<!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
         <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> <i class="fas fa-user-tie fa-fw"></i> Data Cuti Tahunan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() . ''; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Data Cuti Tahunan</li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Cuti Tahunan</h3>
                            <div class="float-right"><a href="<?php echo base_url() . 'kelola_atasan/add_data'; ?>" class="btn btn-primary btn-sm"> <i class="fas fa-plus fa-fw"></i> Create Atasan</a></div>
                        </div>
                        <div class="card-body">
                            <?php echo $this->session->flashdata('message'); ?>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="8" class="text-center">#</th>
                                        <th>NIP</th>
                                        <th>Nama Lengkap</th>
                                        <th class="text-center">N</th>
                                        <th class="text-center">N-1</th>
                                        <th class="text-center">N-2</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data_hak_cuti as $hak_cuti) { ?>
                                        <tr>
                                            <td width="8" class="text-center"><?php echo $no++; ?></td>
                                            <td><?php echo $hak_cuti['nip']; ?></td>
                                            <td><?php echo $hak_cuti['nama_lengkap']; ?></td>
                                            <td class="text-center"><?php echo $hak_cuti['n']; ?> Hari</td>
                                            <td class="text-center"><?php echo $hak_cuti['n_1']; ?> Hari</td>
                                            <td class="text-center"><?php echo $hak_cuti['n_2']; ?> Hari</td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-warning btn-sm" title="Edit"> <i class="fas fa-edit fa-fw"></i> </a>
                                                <a href="" class="btn btn-danger btn-sm" title="Delete"> <i class="fas fa-trash fa-fw"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th width="8" class="text-center">#</th>
                                        <th>NIP</th>
                                        <th>Nama Lengkap</th>
                                        <th class="text-center">N</th>
                                        <th class="text-center">N-1</th>
                                        <th class="text-center">N-2</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
             </div>
           </div>
         </section>
         <!-- /.content -->
   </div>
 <!-- /.content-wrapper -->
