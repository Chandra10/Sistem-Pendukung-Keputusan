<?php 
	include 'koneksi.php';
	$page1	= "tabel_hasil_nilai";

?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fas fa-child mr-1"></i>Tabel Matriks Keputusan</h5>
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
                        <!-- start Query -->
                        <div class="table-responsive">
                            <table id="tabel_matrik_keputusan" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Supplier</th>
                                    <th>Kecepatan Pengiriman</th>
                                    <th>Tingkat Diskon</th>
                                    <th>Pelayanan</th>
                                    <th>Garansi</th>
                                    <th>Keaslian Barang</th>
                                    <th>Tempo Pembayaran</th>
                                    <th>Bisa Dikembalikan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'koneksi.php';
                                    $sql    = mysqli_query($con, "SELECT a.*, b.* from tb_nilai_supplier a JOIN tb_supplier b
                                                                  ON a.id_supplier_nilai=b.id_supplier order by 
                                                                  a.id_nilai_supplier asc");
                                    $no =1;
                                    while ($row = mysqli_fetch_array($sql)) {
                                        $kecepatan_pengiriman = $row['kecepatan_pengiriman'];
                                        $kecepatan_pengiriman_hasil = $kecepatan_pengiriman * 1;
                                        $tingkat_diskon = $row['tingkat_diskon'];
                                        $tingkat_diskon_hasil = $tingkat_diskon * 1;
                                        $pelayanan = $row['pelayanan'];
                                        $pelayanan_hasil = $pelayanan * 1;
                                        $garansi = $row['garansi'];
                                        $garansi_hasil = $garansi * 1;
                                        $keaslian_barang = $row['keaslian_barang'];
                                        $keaslian_barang_hasil = $keaslian_barang * 1;
                                        $tempo_pembayaran = $row['tempo_pembayaran'];
                                        $tempo_pembayaran_hasil = $tempo_pembayaran * 1;
                                        $bisa_dikembalikan = $row['bisa_dikembalikan'];
                                        $bisa_dikembalikan_hasil = $bisa_dikembalikan * 1;
                                            echo"
                                            <tr>
                                                <td>".$no++."</td>
                                                <td>".$row['nama_supplier']."</td>
                                                <td>".$kecepatan_pengiriman_hasil."</td>
                                                <td>".$tingkat_diskon_hasil."</td>
                                                <td>".$pelayanan_hasil."</td>
                                                <td>".$garansi_hasil."</td>
                                                <td>".$keaslian_barang_hasil."</td>
                                                <td>".$tempo_pembayaran_hasil."</td>
                                                <td>".$bisa_dikembalikan_hasil."</td>
                                                <!-- <td>".date('d-m-Y', strtotime($row['tanggal_nilai']))."</td> -->
                                            </tr>
                                            ";
                                        }
                                    ?>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fas fa-child mr-1"></i>Tabel Normalisasi</h5>
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
                        <!-- start Query -->
                        <div class="table-responsive">
                            <table id="tabel_perangkingan" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Supplier</th>
                                    <th>Kecepatan Pengiriman</th>
                                    <th>Tingkat Diskon</th>
                                    <th>Pelayanan</th>
                                    <th>Garansi</th>
                                    <th>Keaslian Barang</th>
                                    <th>Tempo Pembayaran</th>
                                    <th>Bisa Dikembalikan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'koneksi.php';
                                    $sql    = mysqli_query($con, "SELECT a.*, b.* from tb_nilai_supplier a JOIN tb_supplier b
                                                                  ON a.id_supplier_nilai=b.id_supplier order by 
                                                                  a.id_nilai_supplier asc");
                                    $no =1;
                                    while ($row = mysqli_fetch_array($sql)) {
                                        echo"
                                            <tr>
                                                <td>".$no++."</td>
                                                <td>".$row['nama_supplier']."</td>
                                                <td>".$row['kecepatan_pengiriman']."</td>
                                                <td>".$row['tingkat_diskon']."</td>
                                                <td>".$row['pelayanan']."</td>
                                                <td>".$row['garansi']."</td>
                                                <td>".$row['keaslian_barang']."</td>
                                                <td>".$row['tempo_pembayaran']."</td>
                                                <td>".$row['bisa_dikembalikan']."</td>
                                                <!-- <td>".date('d-m-Y', strtotime($row['tanggal_nilai']))."</td> -->
                                            </tr>
                                            ";
                                        }
                                    ?>
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fas fa-child mr-1"></i>Tabel Perangkingan</h5>
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
                        <!-- start Query -->
                        <div class="table-responsive">
                            <hr>
                            <table id="tabel_hasil" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Supplier</th>
                                    <th>Kecepatan Pengiriman</th>
                                    <th>Tingkat Diskon</th>
                                    <th>Pelayanan</th>
                                    <th>Garansi</th>
                                    <th>Keaslian Barang</th>
                                    <th>Tempo Pembayaran</th>
                                    <th>Bisa Dikembalikan</th>
                                    <th>Hasil</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'koneksi.php';
                                    $sql    = mysqli_query($con, "SELECT a.*, b.* from tb_nilai_supplier a JOIN tb_supplier b
                                                                  ON a.id_supplier_nilai=b.id_supplier order by 
                                                                  a.id_nilai_supplier asc");
                                    $no =1;
                                    while ($row = mysqli_fetch_array($sql)) {
                                        $kecepatan_pengiriman = $row['kecepatan_pengiriman'];
                                        $kecepatan_pengiriman_hasil = $kecepatan_pengiriman *20/100;
                                        $tingkat_diskon = $row['tingkat_diskon'];
                                        $tingkat_diskon_hasil = $tingkat_diskon *20/100;
                                        $pelayanan = $row['pelayanan'];
                                        $pelayanan_hasil = $pelayanan *20/100;
                                        $garansi = $row['garansi'];
                                        $garansi_hasil = $garansi *10/100;
                                        $keaslian_barang = $row['keaslian_barang'];
                                        $keaslian_barang_hasil = $keaslian_barang *10/100;
                                        $tempo_pembayaran = $row['tempo_pembayaran'];
                                        $tempo_pembayaran_hasil = $tempo_pembayaran *10/100;
                                        $bisa_dikembalikan = $row['bisa_dikembalikan'];
                                        $bisa_dikembalikan_hasil = $bisa_dikembalikan *10/100;
                                        $hasil_akhir = $kecepatan_pengiriman_hasil + $tingkat_diskon_hasil + $pelayanan_hasil + $garansi_hasil + $keaslian_barang_hasil + $tempo_pembayaran_hasil + $bisa_dikembalikan_hasil ;
                                        $hasil_akhir_bangat = number_format($hasil_akhir, 2);
                                        //$nilai_terbesar = max($hasil_akhir_bangat);
                                            echo"
                                            <tr>
                                                <td>".$no++."</td>
                                                <td>".$row['nama_supplier']."</td>
                                                <td>".number_format($kecepatan_pengiriman_hasil, 2)."</td>
                                                <td>".number_format($tingkat_diskon_hasil, 2)."</td>
                                                <td>".number_format($pelayanan_hasil, 2)."</td>
                                                <td>".number_format($garansi_hasil, 2)."</td>
                                                <td>".number_format($keaslian_barang_hasil, 2)."</td>
                                                <td>".number_format($tempo_pembayaran_hasil, 2)."</td>
                                                <td>".number_format($bisa_dikembalikan_hasil, 2)."</td>
                                                <td>".$hasil_akhir_bangat."</td>
                                                <!-- <td>".date('d-m-Y', strtotime($row['tanggal_nilai']))."</td> -->
                                            </tr>
                                            ";
                                        }
                                    ?>
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
   
<div class="row">
    <div class="col-sm-6">
        <div class="card-body">
        <!-- start Query -->
        <div class="table-responsive">
            <table id="tabel_hasil_keputusan" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Hasil Akhir Perangkingan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql    = mysqli_query($con, "SELECT id_nilai_supplier,kecepatan_pengiriman * 20/100 AS k_pengiriman, 
                              tingkat_diskon * 20/100 AS t_diskon,  pelayanan * 20/100 AS pel_layanan,  garansi * 10/100 AS 
                              ga_ransi, keaslian_barang * 10/100 AS k_barang, tempo_pembayaran * 10/100 AS t_pembayaran, 
                              bisa_dikembalikan * 10/100 AS b_dikembalikan FROM tb_nilai_supplier");
                    while ($data = mysqli_fetch_array($sql)):
                                $hasil_nilai_keputusan_1  = $data['k_pengiriman'] + $data['t_diskon'] + $data['pel_layanan'] + $data['ga_ransi'] + $data['k_barang'] + $data['t_pembayaran'] + $data['b_dikembalikan'];

                                $hasil_akhir_keputusan[] = $data['k_pengiriman'] + $data['t_diskon'] + $data['pel_layanan'] + $data['ga_ransi'] + $data['k_barang'] + $data['t_pembayaran'] + $data['b_dikembalikan'];
                    ?>
                            <tr>
                               <td><?php echo "".number_format($hasil_nilai_keputusan_1, 2); ?></td>
                            </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabel_hasil_tertinggi" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nilai Tertinggi</th>
                            <th>Nilai Terendah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <td><?php echo number_format(max($hasil_akhir_keputusan), 2); ?></td>
                           <td><?php echo number_format(min($hasil_akhir_keputusan), 2); ?><br></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
   
</section>
<!-- /.content -->

<?php include 'footer.php'; ?>