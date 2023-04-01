<?php 
	include 'koneksi.php';
	$page1	= "depan";
    session_start();
?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fa fa-chart-bar"></i>&nbsp; Grafick Sistem Pemilihan Supplier</h5>
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
                        <!-- start query -->
                         <!-- start Menu -->
                          <div class="row">
                              <?php include 'plugins/get_count_info.php'; ?>
                          </div>
                          <!-- end Menu -->
                         <!-- end query -->
                    </div>
                </div>
            </div>
        </div>
    </div><!--/. container-fluid -->
</section>
<!-- /.content -->

<?php include 'footer.php'; ?>