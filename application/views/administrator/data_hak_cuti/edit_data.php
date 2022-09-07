<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> <i class="fas fa-file-signature fa-fw"></i> Kelola Hak Cuti Tahunan</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Kelola Hak Cuti Tahunan</a></li>
                <li class="breadcrumb-item active">Edit Hak Cuti Tahunan</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
    <!-- /.content-header -->
<!--Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Hak Cuti Tahunan</h3>
                    </div>
                    <form class="form-horiontal" action="<?php echo base_url() ?>/Data_hak_cuti/edit_data" method="post">
                        <!--/.card-header -->
                        <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="small mb-1">Nama Lengkap</label>
                                    <input type="hidden" name="id_hak_cuti_tahunan" value="<?php echo $data['id_hak_cuti_tahunan'] ?>">
                                    <input id="nama_user" name="nama_user" class="form-control" type="text" value="<?php echo $data['nama_lengkap'] ?>" placeholder="Nama Lengkap" />
                                    <?php echo form_error('user_id', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                    <input id="id_user" name="user_id" type="hidden">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="small mb-1">N</label>
                                    <input class="form-control" type="text" name="n" value="<?php echo $data['n'] ?>" placeholder="N"/>
                                    <?php echo form_error('n', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="small mb-1">N-1</label>
                                    <input class="form-control" type="text" name="n_1" value="<?php echo $data['n_1'] ?>" placeholder="N1"/>
                                    <?php echo form_error('n_1', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="small mb-1">N-2</label>
                                    <input class="form-control" type="text" name="n_2" value="<?php echo $data['n_2'] ?>" placeholder="N2"/>
                                    <?php echo form_error('n_2', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                                </div>
                            </div>
                            
                    </div>
                    <div class="card-footer">
                                <a href="<?php echo base_url() . 'data_hak_cuti/kelola_hak_cuti'; ?>" class="btn btn-default"><i class="fas fa-times fa-fw"></i>Cancel</a>
                                <button type="submit" class="btn btn-primary float-right" onclick="return confirm('Are you sure you want to save it');"><i class="fas fa-save fa-fw"></i> Save</button>
                                </form>
                            </div>
                </div>
                <!--/.card -->
            </div>
        </div>
        <!--/.row -->
    </div>
    <!--/.container-fluid -->
</div>
<!--/.content -->
</div>
<script type="text/javascript">
        $(document).ready(function(){
            $( "#nama_user" ).autocomplete({
              source: "<?php echo base_url('Manajemen_pimpinan/get_autocomplete/');?>",
              focus: function( event, ui ) {
                    $( "#nama_user" ).val( ui.item.nama_lengkap );
                    return false;
                },
              select: function (event, ui) {
                $( "#nama_user" ).val( ui.item.nama_lengkap );
                $( "#id_user" ).val( ui.item.id_user );
                return false;
                }
            })
            .autocomplete( "instance" )._renderItem = function( ul, item ) {
            return $( "<li>" )
                .append( "<div>" + item.nama_lengkap + "</div>" )
                .appendTo( ul );
            };
        });
    </script>