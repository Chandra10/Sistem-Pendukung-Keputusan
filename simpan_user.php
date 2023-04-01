<?php
include "koneksi.php";
$page1="simpan_user";
?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- statrt -->
<div class="card card-info">
    <div class="card-header">
        <h5 class="card-title"><i class="fa fa-child"></i> New Data User Management</h5>
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
        <!-- start Query -->
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" id="form-simpan">
             <!-- start query -->
            <div class="row">
                <div class="col-sm-6">
                    <input type="hidden" name="id_user" id="id_user" value="<?php echo $result['id_user'] ;?>">
                    <div class="table-responsive">
                        <table class="table table-borderles">
                            <thead>
                            <tr>
                                <td style="width: 165px;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp; Nama Lengkap</td>
                                <td style="width: 5px;">:</td>
                                <td><input type="text" name="nama" id="nama" class="form-control form-control-sm">
                                    <span style="color: #DC143C;" id="error_nama"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-file"></i>&nbsp; User Name</td>
                                <td>:</td>
                                <td><input type="text" name="username" id="username" class="form-control form-control-sm">
                                <span style="color: #DC143C;" id="error_username"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-inbox"></i>&nbsp; Password</td>
                                <td>:</td>
                                <td><input type="text" name="password" id="password" class="form-control form-control-sm">
                                <span style="color: #DC143C;" id="error_password"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-cubes"></i>&nbsp; Level</td>
                                <td>:</td>
                                <td>
                                    <select name="level" id="level" class="form-control-sm form-control select2">
                                        <option value="0">-- Pilihan Level --</option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-images"></i>&nbsp; Foto</td>
                                <td>:</td>
                                <td><input type="file" name="fileupload" id="fileupload" class="form-control form-control-sm">
                                </td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end query -->
        <hr>
        <!-- end query -->
            <div class="col-sm-6">
                <button class="btn btn-sm btn-primary" type="submit" name="simpan"><i class="fa fa-save"></i> Simpan</button>
                <button class="btn btn-sm btn-danger" type="reset" value="Reset" onClick="javascript:history.back()"><i class="fa fa-history"></i> Batal</button>
            </div>
        </form>
        <!-- end query -->
    </div>
</div>
                <!-- end -->
            </div>
        </div>
    </div><!--/. container-fluid -->
</section>
<!-- /.content -->

<?php include 'footer.php'; ?>