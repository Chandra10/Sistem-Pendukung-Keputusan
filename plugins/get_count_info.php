<?php
  include'koneksi.php';

  $sqlsupplier    = "SELECT COUNT(id_supplier) AS total_supplier FROM tb_supplier";
  $querysupplier  = mysqli_query($con, $sqlsupplier);
  $resultsupplier = mysqli_fetch_array($querysupplier, MYSQLI_ASSOC);

  $sqlkriteria    = "SELECT COUNT(id_kriteria) AS total_kriteria FROM tb_kriteria";
  $querykriteria  = mysqli_query($con, $sqlkriteria);
  $resultkriteria = mysqli_fetch_array($querykriteria, MYSQLI_ASSOC);

  $sqlsub_kriteria      = "SELECT COUNT(id_sub_kriteria) AS total_sub_kriteria FROM tb_sub_kriteria";
  $querysub_kriteria    = mysqli_query($con, $sqlsub_kriteria);
  $resultsub_kriteria   = mysqli_fetch_array($querysub_kriteria, MYSQLI_ASSOC);

  $sqlnilai_supplier      = "SELECT COUNT(id_nilai_supplier) AS total_nilai_supplier FROM tb_nilai_supplier";
  $querynilai_supplier    = mysqli_query($con, $sqlnilai_supplier);
  $resultnilai_supplier   = mysqli_fetch_array($querynilai_supplier, MYSQLI_ASSOC);

  
  $sqlusers      = "SELECT COUNT(id_user) AS total_users FROM users";
  $queryusers    = mysqli_query($con, $sqlusers);
  $resultusers   = mysqli_fetch_array($queryusers, MYSQLI_ASSOC);

?>

<div class="col-12 col-sm-6 col-md-12">
  <span class="info-box-text">
      <h5>Sistem Pendukung Keputusan Pemilihan Supplier</h5>
    <hr>
  </span>
</div>
<div class="col-12 col-sm-6 col-md-3">
  <div class="info-box">
    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-copy"></i></span>
    <div class="info-box-content">
      <span class="info-box-text">Total Data Supplier</span>
      <span class="info-box-number">
       <font style="font-size: 19px;"><?php echo $resultsupplier['total_supplier'] ;?></font> <small> Supplier </small>
      </span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>
<!-- /.col -->
<div class="col-12 col-sm-6 col-md-3">
  <div class="info-box mb-3">
    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-share-alt-square"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Total Data Kriteria</span>
      <span class="info-box-number">
        <font style="font-size: 19px;"><?php echo $resultkriteria['total_kriteria'] ;?></font> <small> Kriteria </small>
      </span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>
<!-- /.col -->

<!-- fix for small devices only -->
<div class="clearfix hidden-md-up"></div>


<!-- /.col -->
<div class="col-12 col-sm-6 col-md-3">
  <div class="info-box mb-3">
    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-life-ring"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Total Data Sub Kriteria</span>
      <span class="info-box-number">
        <font style="font-size: 19px;"><?php echo $resultsub_kriteria['total_sub_kriteria'] ;?></font> <small>Sub Kriteria</small>
      </span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>

<!-- /.col -->
<div class="col-12 col-sm-6 col-md-3">
  <div class="info-box mb-3">
    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-life-ring"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Total Data Nilai</span>
      <span class="info-box-number">
        <font style="font-size: 19px;"><?php echo $resultnilai_supplier['total_nilai_supplier'] ;?></font> <small>Nilai</small>
      </span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>
<!-- /.col -->