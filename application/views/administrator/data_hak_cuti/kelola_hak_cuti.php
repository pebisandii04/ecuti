        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1> <i class="fas fa-calendar-day fa-fw"></i> Data Hak Cuti Tahunan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right text-sm">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() . ''; ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Data Hak Cuti Tahunan</li>
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
                                    <h3 class="card-title">Data Hak Cuti Tahunan</h3>
                                    <div class="float-right"><a href="<?php echo base_url() . 'Data_hak_cuti/add_data_hak'; ?>" class="btn btn-primary btn-sm"> <i class="fas fa-plus fa-fw"></i>Create Hak Cuti</a></div>
                                </div>
                                <div class="card-body">
                                    <?php echo $this->session->flashdata('message'); ?>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="text-center">
                                                <th width="8">#</th>
                                                <th>Nama Lengkap</th>
                                                <th>NIP</th>
                                                <th>N</th>
                                                <th>N-1</th>
                                                <th>N-2</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($data_hak_ct as $dhct) {
                                            ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <?php echo $no++; ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url() . 'Data_cuti_tahunan/data_pengajuan/' . $dhct->nip; ?>"><?php echo $dhct->nama_lengkap; ?></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $dhct->nip; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $dhct->n; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $dhct->n_1; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $dhct->n_2; ?>
                                                    </td>
                                                    <td class="text-center">
                                                    <a href="<?php echo base_url() . 'data_hak_cuti/edit_data/' . $dhct->id_hak_cuti_tahunan ?>" class="btn btn-warning btn-sm" title="Edit"> <i class="fas fa-edit fa-fw"></i> </a>
                                                    <a href="<?php echo base_url() . 'data_hak_cuti/delete_data/' . $dhct->id_hak_cuti_tahunan ?>" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete');"> <i class="fas fa-trash fa-fw"></i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
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