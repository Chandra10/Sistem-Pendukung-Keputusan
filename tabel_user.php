<?php 
	include 'koneksi.php';
	$page1	= "tabel_user";
     if ($_SESSION['level'] == 'Admin') {
        $button_new = '<a href="?page=simpan_user">
            <button class="btn btn-xs btn-primary"><i class="fa fa-save"></i> New User</button>
        </a>';
    } else if ($_SESSION['level'] == 'User'){
        $button_new = '';
    }
                        

?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fas fa-child mr-1"></i> Tabel User Management</h5>
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
                        <a href="?page=simpan_user">
                            <?php echo $button_new; ?>
                        </a>
                        <hr>
                        <!-- start Query -->
                        <div class="table-responsive">
                            <table id="tabel-user" class="table table-bordered table-striped">
                                <!-- <table id="table-guru" class="table table-bordered table-striped mb-none" style="width:100%"> -->
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>User Name</th>
                                    <th>Password</th>
                                    <th>Status</th>
                                    <th>Level</th>
                                    <th>Foto</th>
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