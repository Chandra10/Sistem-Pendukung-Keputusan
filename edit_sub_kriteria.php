<?php
include "koneksi.php";
$page1="edit_sub_kriteria";

$no = null;
    if (isset($_GET["no"])) {
        $no = $_GET["no"];
    }
        $sql    = "SELECT * FROM tb_sub_kriteria where id_sub_kriteria = '".$no."' ";
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
        <h5 class="card-title"><i class="fa fa-child"></i> Edit Data Sub Kriteria</h5>
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
                     <input type="hidden" name="id_sub_kriteria" id="id_sub_kriteria" value="<?php echo $result['id_sub_kriteria'] ;?>">
                    <div class="table-responsive">
                        <table class="table table-borderles">
                            <thead>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-address-card"></i>&nbsp; Nama Kriteria</td>
                                <td>:</td>
                                <td>
                                    <select name="id_kriteria_sub" id="id_kriteria_sub" class="form-control-sm form-control select2">
                                        <option value="0">-- Pilihan Nama Kriteria --</option>
                                        <?php
                                          include'koneksi.php';
                                          $query = "SELECT * FROM tb_kriteria order by id_kriteria asc";
                                          $hasil = mysqli_query($con,$query);
                                          while($data=mysqli_fetch_array($hasil)){
                                              echo "<option value='".$data["id_kriteria"]."' ".(($result["id_kriteria_sub"]== $data["id_kriteria"])?"selected='selected'":"").">".$data['nama_kriteria']."</option>";
                                          }
                                        ?>
                                    </select>
                                </td>
                            </tr>    
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-cubes"></i>&nbsp; Nilai</td>
                                <td>:</td>
                                <td>
                                    <select name="nilai_sub_kriteria" id="nilai_sub_kriteria" class="form-control-sm form-control select2">
                                        <option value="0">-- Pilihan Nilai --</option>
                                        <option value="0.5" <?php if ($result['nilai_sub_kriteria'] == '0.5'){echo "Selected";} ?>>0.5</option>
                                        <option value="0.25" <?php if ($result['nilai_sub_kriteria'] == '0.25'){echo "Selected";} ?>>0.25</option>
                                        <option value="0.75" <?php if ($result['nilai_sub_kriteria'] == '0.75'){echo "Selected";} ?>>0.75</option>
                                        <option value="1" <?php if ($result['nilai_sub_kriteria'] == '1'){echo "Selected";} ?>>1</option>
                                    </select>
                                </td>
                            </tr> 
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-address-card"></i>&nbsp; Alamat</td>
                                <td>:</td>
                                <td><textarea type="text" name="sifat_sub_kriteria" id="sifat_sub_kriteria" class="form-control form-control-sm"><?php echo $result['sifat_sub_kriteria'] ;?></textarea>  
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