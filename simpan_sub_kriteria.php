<?php
include "koneksi.php";
$page1="simpan_sub_kriteria";
?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- statrt -->
<div class="card card-info">
    <div class="card-header">
        <h5 class="card-title"><i class="fa fa-child"></i> New Data Sub Kriteria</h5>
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
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-cubes"></i>&nbsp; Kriteria</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control-sm form-control" name="id_kriteria_sub" id="id_kriteria_sub">
                                        <option value="0">-- Pilihan Kriteria --</option>
                                        <?php
                                          include'koneksi.php';
                                          $query = "SELECT * FROM tb_kriteria order by id_kriteria asc";
                                          $hasil = mysqli_query($con,$query);
                                          while($data=mysqli_fetch_array($hasil)){
                                              echo "<option value='".$data["id_kriteria"]."'>".$data['nama_kriteria']."</option>";
                                          }
                                        ?>
                                    </select>
                                </td>
                            </tr>    
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-cubes"></i>&nbsp; Nilai</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control-sm form-control" name="nilai_sub_kriteria" id="nilai_sub_kriteria">
                                        <option value="0">-- Pilihan Nilai --</option>
                                        <option value="0.5">0.5</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.75">0.75</option>
                                        <option value="1">1</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa fa-phone-square"></i>&nbsp; Keterangan</td>
                                <td>:</td>
                                <td><textarea type="text" name="sifat_sub_kriteria" id="sifat_sub_kriteria" class="form-control form-control-sm"></textarea>
                                <span style="color: #DC143C;" id="error_sifat_sub_kriteria"></span>
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