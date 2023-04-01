<?php 
	include 'koneksi.php';
	$page1	= "tabel_kriteria";

?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fas fa-child mr-1"></i> Tabel Kriteria</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="?page=simpan_kriteria">
                            <button class="btn btn-xs btn-primary"><i class="fa fa-save"></i> Tambah Kriteria</button>
                        </a>
                        <hr>
                        <!-- start Query -->
                        <div class="table-responsive">
                            <table id="tabel-kriteria" class="table table-bordered table-striped">
                                <!-- <table id="table-guru" class="table table-bordered table-striped mb-none" style="width:100%"> -->
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Nomor</th>
                                    <th>Nama Kriteria</th>
                                    <th>Sifat Kriteria</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!-- end query -->
                    </div>
                    <!-- ./card-body -->
                    <div class="card-footer">
                        <!-- start footer -->
                        <!-- end footer -->
                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
        </div>
    </div><!--/. container-fluid -->
</section>
<!-- /.content -->

<?php include 'footer.php'; ?>