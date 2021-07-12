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
                                </div>
                                <div class="card-body">
                                    <?php echo $this->session->flashdata('message'); ?>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="text-center">
                                                <th width="8">#</th>
                                                <th>Nama Lengkap</th>
                                                <th>Nip</th>
                                                <th>N</th>
                                                <th>N-1</th>
                                                <th>N-2</th>
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