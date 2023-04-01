<?php
include "koneksi.php";
$page1="simpan_kriteria";
?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- statrt -->
<div class="card card-info">
    <div class="card-header">
        <h5 class="card-title"><i class="fa fa-child"></i> New Data Kriteria</h5>
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
                    <!-- <input type="hidden" name="no" id="no" value="<?php echo $result['no'] ;?>"> -->
                    <div class="table-responsive">
                        <table class="table table-borderles">
                            <thead>
                            <tr>
                                <td style="width: 165px;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp; Nama kriteria</td>
                                <td style="width: 5px;">:</td>
                                <td><input type="text" name="nama_kriteria" id="nama_kriteria" class="form-control form-control-sm">
                                    <span style="color: #DC143C;" id="error_nama_kriteria"></span>
                                </td>
                            </tr>    
                            <tr>
                                <td style="width: 165px;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp; Sifat Kriteria</td>
                                <td style="width: 5px;">:</td>
                                <td><input type="text" name="sifat_kriteria" id="sifat_kriteria" class="form-control form-control-sm">
                                    <span style="color: #DC143C;" id="error_sifat_kriteria"></span>
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