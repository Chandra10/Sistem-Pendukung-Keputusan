<?php
include "koneksi.php";
$page1="simpan_nilai_supplier";
?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- statrt -->
<div class="card card-info">
    <div class="card-header">
        <h5 class="card-title"><i class="fa fa-child"></i> New Data Nilai Supplier</h5>
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
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-users"></i>&nbsp; Nama Supplier</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control-sm form-control" name="id_supplier_nilai" id="id_supplier_nilai">
                                        <option value="0">-- Pilihan Nama Supplier --</option>
                                        <?php
                                          include'koneksi.php';
                                          $query = "SELECT * FROM tb_supplier order by id_supplier asc";
                                          $hasil = mysqli_query($con,$query);
                                          while($data=mysqli_fetch_array($hasil)){
                                              echo "<option value='".$data["id_supplier"]."'>".$data['nama_supplier']."</option>";
                                          }
                                        ?>
                                    </select>
                                </td>
                            </tr>    
                            <tr>
                                <td width="195">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-database"></i>&nbsp; Kecepatan Pengiriman</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control-sm form-control" name="kecepatan_pengiriman" id="kecepatan_pengiriman">
                                        <option value="0">-- Pilihan Kecepatan Pengiriman --</option>
                                        <?php
                                          include'koneksi.php';
                                          $query = "SELECT * FROM tb_sub_kriteria where id_kriteria_sub = 1 order by id_sub_kriteria asc";
                                          $hasil = mysqli_query($con,$query);
                                          while($data=mysqli_fetch_array($hasil)){
                                              echo "<option value='".$data["nilai_sub_kriteria"]."'>".$data['nilai_sub_kriteria']."</option>";
                                          }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="195">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-database"></i>&nbsp; Tingkat Diskon</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control-sm form-control" name="tingkat_diskon" id="tingkat_diskon">
                                        <option value="0">-- Pilihan Tingkat Diskon --</option>
                                        <?php
                                          include'koneksi.php';
                                          $query = "SELECT * FROM tb_sub_kriteria where id_kriteria_sub = 2 order by id_sub_kriteria asc";
                                          $hasil = mysqli_query($con,$query);
                                          while($data=mysqli_fetch_array($hasil)){
                                              echo "<option value='".$data["nilai_sub_kriteria"]."'>".$data['nilai_sub_kriteria']."</option>";
                                          }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="195">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-database"></i>&nbsp; Pelayanan</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control-sm form-control" name="pelayanan" id="pelayanan">
                                        <option value="0">-- Pilihan Pelayanan --</option>
                                        <?php
                                          include'koneksi.php';
                                          $query = "SELECT * FROM tb_sub_kriteria where id_kriteria_sub = 3 order by id_sub_kriteria asc";
                                          $hasil = mysqli_query($con,$query);
                                          while($data=mysqli_fetch_array($hasil)){
                                              echo "<option value='".$data["nilai_sub_kriteria"]."'>".$data['nilai_sub_kriteria']."</option>";
                                          }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="195">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-database"></i>&nbsp; Garansi</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control-sm form-control" name="garansi" id="garansi">
                                        <option value="0">-- Pilihan Garansi --</option>
                                        <?php
                                          include'koneksi.php';
                                          $query = "SELECT * FROM tb_sub_kriteria where id_kriteria_sub = 4 order by id_sub_kriteria asc";
                                          $hasil = mysqli_query($con,$query);
                                          while($data=mysqli_fetch_array($hasil)){
                                              echo "<option value='".$data["nilai_sub_kriteria"]."'>".$data['nilai_sub_kriteria']."</option>";
                                          }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>

                 <div class="col-sm-6">
                    <div class="table-responsive">
                        <table class="table table-borderles">
                            <thead>
                            <tr>
                                <td width="195">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-database"></i>&nbsp; Keaslian Barang</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control-sm form-control" name="keaslian_barang" id="keaslian_barang">
                                        <option value="0">-- Pilihan Keaslian Barang --</option>
                                        <?php
                                          include'koneksi.php';
                                          $query = "SELECT * FROM tb_sub_kriteria where id_kriteria_sub = 5 order by id_sub_kriteria asc";
                                          $hasil = mysqli_query($con,$query);
                                          while($data=mysqli_fetch_array($hasil)){
                                              echo "<option value='".$data["nilai_sub_kriteria"]."'>".$data['nilai_sub_kriteria']."</option>";
                                          }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="195">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-database"></i>&nbsp; Tempo Pembayaran</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control-sm form-control" name="tempo_pembayaran" id="tempo_pembayaran">
                                        <option value="0">-- Pilihan Tempo Pembayaran --</option>
                                        <?php
                                          include'koneksi.php';
                                          $query = "SELECT * FROM tb_sub_kriteria where id_kriteria_sub = 6 order by id_sub_kriteria asc";
                                          $hasil = mysqli_query($con,$query);
                                          while($data=mysqli_fetch_array($hasil)){
                                              echo "<option value='".$data["nilai_sub_kriteria"]."'>".$data['nilai_sub_kriteria']."</option>";
                                          }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="195">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-database"></i>&nbsp; Bisa Di Kembalikan</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control-sm form-control" name="bisa_dikembalikan" id="bisa_dikembalikan">
                                        <option value="0">-- Pilihan Bisa di Kembalikan --</option>
                                        <?php
                                          include'koneksi.php';
                                          $query = "SELECT * FROM tb_sub_kriteria where id_kriteria_sub = 7 order by id_sub_kriteria asc";
                                          $hasil = mysqli_query($con,$query);
                                          while($data=mysqli_fetch_array($hasil)){
                                              echo "<option value='".$data["nilai_sub_kriteria"]."'>".$data['nilai_sub_kriteria']."</option>";
                                          }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 185px;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp; Tanggal</td>
                                <td style="width: 5px;">:</td>
                                <td><input type="text" name="tanggal_nilai" id="tanggal_nilai" class="form-control form-control-sm" value="<?php echo date("Y-m-d") ?>" disabled = "true">
                                    <span style="color: #DC143C;" id="error_tanggal_nilai"></span>
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