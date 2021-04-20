<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-lock fa-fw"></i> Change Password</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url().''; ?>">Home</a></li>
                <li class="breadcrumb-item active">Change Password</li>
                </ol>
            </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="card">
                <div class="card-body">
                    <?php echo $this->session->flashdata('message'); ?>
                    <div class="tab-content">
                    <div class="active tab-pane">
                        <form action="<?php echo base_url().'profile/change_password' ?>" method="post">
                            <div class="form-group">
                                <label class="small mb-1">Current Password</label>
                                <input class="form-control" type="password" name="current_password"/>
                                <?php echo form_error('current_password', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">New Password</label>
                                <input class="form-control" type="password" name="new_password1"/>
                                <?php echo form_error('new_password1', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">Repeat Password</label>
                                <input class="form-control" type="password" name="new_password2"/>
                                <?php echo form_error('new_password2', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="float-left">
                                <a href="<?php echo base_url().'profile'; ?>"  class="btn btn-default"><i class="fas fa-arrow-left fa-fw"></i>Back</a>
                                </div>
                                <div class="float-left">
                                <button type="submit" class="btn btn-primary"> <i class="fas fa-key fa-fw"></i> Change Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
                </div>
            </div>
            <div class="col-md-3">
            </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->