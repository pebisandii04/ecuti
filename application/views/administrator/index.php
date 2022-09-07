<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <i class="fas fa-user-shield fa-fw"></i> Administrator</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Administrator</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
                <h4>Hak Cuti</h4>
                <!-- Default box -->
                <div class="row">
                    <div class="col-4">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file-signature"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Data Pengajuan Cuti Tahunan</span>
                                <span class="info-box-number">
                                  Total Pengajuan: <?= $jml_ct ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-file-signature"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Data Pengajuan Cuti Umum</span>
                                <span class="info-box-number">
                                Total Pengajuan: <?= $jml_cu ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-4">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-injured"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Data User</span>
                                <span class="info-box-number">
                                    Total User : <?= $jml_user ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    
                </div>

                <div class="row">
                  <div class="col-4 offset-2">
                    <div class="info-box">
                    <canvas id="myChart" width="200" height="200"></canvas>
                    </div>
                  </div>
                  <div class="col-4">
                  <div class="info-box">
                    <canvas id="myChart1" width="200" height="200"></canvas>
                    </div>
                  </div>
                </div>
                
            </section>
            <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
<script src="<?= base_url()?>\assets\plugins\chart.js\Chart.min.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Cuti Tahunan', 'Cuti Besar','Cuti Cakit','Cuti Melahirkan','Cuti Karena Alasan Penting','Cuti Diluar Tanggungan Negara'],
        datasets: [{
            label: 'Data Pengajuan Cuti',
            data: [<?= $jml_ct ?>, <?= $jml_cu_besar ?>, <?= $jml_cu_sakit ?>, <?= $jml_cu_melahirkan ?>, <?= $jml_cu_urgent ?>, <?= $jml_cu_dtn ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

<script>
var ctx = document.getElementById('myChart1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: [
          'Penagjuan Cuti Tahunan',
          'Pengajuan Cuti Tahunan'
        ],
        datasets: [{
          label: 'My First Dataset',
          data: [<?= $jml_ct ?>, <?= $jml_cu ?>],
          backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)'
          ],
          hoverOffset: 4
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>