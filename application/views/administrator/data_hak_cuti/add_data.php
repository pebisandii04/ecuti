<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1> <i class="fas fa-user-tie fa-fw"></i> Kelola Atasan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url() . ''; ?>">Home</a></li>
                    <li class="breadcrumb-item active">Kelola Atasan</li>
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
            <!-- left column -->
            <div class="col-md-6">
                <!-- jquery validation -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title"> Kelola Atasan</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="small mb-1">Unit Kerja</label>
                                    <input class="form-control" type="text" value="" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="small mb-1">Atasan Langsung</label>
                                    <input class="form-control" type="text" value="" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="small mb-1">Pejabat Berwenang</label>
                                    <input class="form-control" type="text" value="" />
                                </div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo base_url() . 'kelola_atasan'; ?>" class="btn btn-default"><i class="fas fa-arrow-left fa-fw"></i> Back</a>
                        <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save fa-fw"></i> Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>