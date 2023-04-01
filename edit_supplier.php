<?php
include "koneksi.php";
$page1="edit_supplier";

$no = null;
    if (isset($_GET["no"])) {
        $no = $_GET["no"];
    }
        $sql    = "SELECT * FROM tb_supplier where id_supplier = '".$no."' ";
        $query  = mysqli_query($con, $sql);
        $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- statrt -->
<div class="card card-info">
    <div class="card-header">
        <h5 class="card-title"><i class="fa fa-child"></i> Edit Data Supplier</h5>
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
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" id="form-edit">
             <!-- start query -->
            <div class="row">
                <div class="col-sm-6">
                     <input type="hidden" name="id_supplier" id="id_supplier" value="<?php echo $result['id_supplier'] ;?>">
                    <div class="table-responsive">
                        <table class="table table-borderles">
                            <thead>
                            <tr>
                                <td style="width: 165px;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp; Nama Supplier</td>
                                <td style="width: 5px;">:</td>
                                <td><input type="text" name="nama_supplier" id="nama_supplier" class="form-control form-control-sm" value="<?php echo $result['nama_supplier'] ;?>">
                                    <span style="color: #DC143C;" id="error_nama_supplier"></span>
                                </td>
                            </tr>    
                            <tr>
                                <td style="width: 165px;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp; Telepon</td>
                                <td style="width: 5px;">:</td>
                                <td><input type="text" name="telepon" id="telepon" class="form-control form-control-sm" value="<?php echo $result['telepon'] ;?>">
                                    <span style="color: #DC143C;" id="error_telepon"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa fa-phone-square"></i>&nbsp; Alamat</td>
                                <td>:</td>
                                <td><textarea type="text" name="alamat" id="alamat" class="form-control form-control-sm"> <?php echo $result['alamat'] ;?> </textarea>  
                                <span style="color: #DC143C;" id="error_alamat"></span>
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