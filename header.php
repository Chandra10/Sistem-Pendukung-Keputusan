<?php 
    include 'koneksi.php';
    session_start();
    $akses_admin            = array("Admin");
    $akses_user             = array("User");
   
    /*$sql = "SELECT a.*, b.* FROM users a LEFT JOIN m_pegawai b ON a.id_pegawai=b.id_pegawai where a.id_user ='".$_SESSION['uid']."' ";
    $query  = mysqli_query($con,$sql);
    $result = mysqli_fetch_array($query,MYSQLI_ASSOC);*/ 
    function tgl_indo($tanggal){
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
} 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Sistem Pendukung Keputusan Pemilihan Supplier</title>
  <link rel="icon" href="<?php echo IMGURL."/logo.png";?>" >

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo VENDORURL."/fontawesome-free/css/all.min.css" ;?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo VENDORURL."/overlayScrollbars/css/OverlayScrollbars.min.css";?>" >
  <!-- start PAGE -->
  <link rel="stylesheet" href="<?php echo VENDORURL."/select2/css/select2.min.css";?>">
  <link href="<?php echo CSSURL."/dataTables.bootstrap4.min.css";?>" rel="stylesheet" />
  <!-- end Page -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo CSSURL."/adminlte.min.css" ;?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo CSSURL."/fonts.css?family=Source+Sans+Pro:300,400,400i,700";?>" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="" class="nav-link"><!-- isi --></a>
            </li>
        </ul>

    <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Messages Dropdown Menu -->
          <!-- <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <h5><i class="far fa-bell"></i></h5>
                <span class="badge badge-danger navbar-badge count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="dropdown-menu">
              </div>
          </li> -->

          <!-- Notifications Dropdown Menu -->
          <!-- <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <h5><i class="far fa-comments"></i></h5>
                <span class="badge badge-danger navbar-badge count_notif"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="dropdown-menu-notif-monitoring">
              </div>
          </li> -->
          
          <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                  <?php echo "
                  <img style='width: 32px; height:32px;' class='user-image img-circle elevation-2'
                  src='".((!$_SESSION['foto'])? 'dist/img/user/user.png' : 'dist/img/user/'.$_SESSION['foto'].' ') ."' alt=''>"
                  ;?> 
                  <span class="d-none d-md-inline"><?php echo $_SESSION['nama'];?></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <!-- User image -->
                  <li class="user-header bg-primary">
                      <?php echo "
                          <img style='width: 94px; height:94px;'
                          class='img-circle elevation-2' 
                          src='".((!$_SESSION['foto'])? 'dist/img/user/user.png' :
                          'dist/img/user/'.$_SESSION['foto'].' ') ."' alt=''>";
                      ?>
                      <p>
                          <?php echo $_SESSION['nama'];?>
                          <small><?php echo $_SESSION['level'];?></small>
                      </p>
                  </li>
                  <li class="user-footer">
                      <a href="#" data-toggle="modal" data-target="#exampleModal">
                        <button class="btn btn-danger btn-sm"><i class="fas fa-power-off"></i> Log Out </button>
                      </a>
                      <button class="btn btn-default btn-sm btn-flat float-right">
                      <?php date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y, H:i:s') ;?></button>
                  </li>
              </ul>
          </li>
        </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <!-- <div class="text-center">
          <span class="brand-text font-weight-light"><font style="font-size: 17px;">Pengaduan Keluhan Networking</font></span>    
      </div> -->
      <p>
        <div class="text-center">
            <img width="100" class="rounded" src="<?php echo IMGURL."/logo.png" ;?>" alt="">
        </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <br><br><br><br>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview menu-open">
                <a href="?page=depan" class="nav-link active">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              </li>

              <!-- start Berkas -->
                <?php if (in_array($_SESSION['level'], $akses_admin)) { ?>
                  <!-- Berkas -->
                    <li class="nav-header">Menu Berkas</li>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                          Berkas
                          <i class="fas fa-angle-left right"></i>
                          <span class="badge badge-info right">5</span>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="?page=tabel_supplier" class="nav-link">
                                  <i class="nav-icon fas fa-users"></i>
                                  <p>Data Supplier</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="?page=tabel_kriteria" class="nav-link">
                                  <i class="nav-icon fas fa-cubes"></i>
                                  <p>Data Kriteria</p>
                              </a>
                          </li>
                          <li class="nav-item">
                                <a href="?page=tabel_sub_kriteria" class="nav-link">
                                  <i class="nav-icon fas fa-file"></i>
                                  <p>Data Sub Kriteria</p>
                                </a>
                          </li>
                          <li class="nav-item">
                                <a href="?page=tabel_nilai_supplier" class="nav-link">
                                  <i class="nav-icon fas fa-edit"></i>
                                  <p>Data Nilai Supplier</p>
                                </a>
                          </li>
                          <li class="nav-item">
                                <a href="?page=tabel_hasil_nilai" class="nav-link">
                                  <i class="nav-icon fas fa-share-alt-square"></i>
                                  <p>Data Hasil Nilai</p>
                                </a>
                          </li>
                      </ul>
                    </li>
                  <!-- end Berkas -->

                  <!-- Laporan -->
                    <li class="nav-header">Menu Laporan</li>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-print"></i>
                        <p>
                          Laporan
                          <i class="fas fa-angle-left right"></i>
                          <span class="badge badge-info right">5</span>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="print_supplier.php" class="nav-link" target="blank">
                            <i class="nav-icon fas fa-print"></i>
                            <p>Laporan Supplier</p>
                          </a>
                        </li>
                        <li class="nav-item">
                              <a href="print_kriteria.php" class="nav-link" target="blank">
                                <i class="nav-icon fas fa-print"></i>
                                <p>Laporan Kriteria</p>
                              </a>
                        </li>
                        <li class="nav-item">
                              <a href="print_sub_kriteria.php" class="nav-link" target="blank">
                                <i class="nav-icon fas fa-print"></i>
                                <p>Laporan Sub Kriteria</p>
                              </a>
                        </li>
                        <li class="nav-item">
                              <a href="print_nilai_supplier.php" class="nav-link" target="blank">
                                <i class="nav-icon fas fa-print"></i>
                                <p>Laporan Nilai Supplier</p>
                              </a>
                        </li>
                        <li class="nav-item">
                              <a href="print_hasil_nilai.php" class="nav-link" target="blank">
                                <i class="nav-icon fas fa-print"></i>
                                <p>Laporan Hasil Nilai</p>
                              </a>
                        </li>
                      </ul>
                    </li>
                  <!-- end Laporan -->

                  <!-- akses -->
                  <li class="nav-header">Menu Akses</li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-user"></i>
                      <p>
                        Akses
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">2</span>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="?page=tabel_user" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>User Management</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" data-toggle="modal" data-target="#exampleModal" class="nav-link">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>Logout</p>
                          </a>
                      </li>
                    </ul>
                  </li>
                  <!-- end akses -->
                    
            <?php } ?>
                   <?php if (in_array($_SESSION['level'], $akses_user)) { ?>
                    <li class="nav-item">
                        <a href="?page=tabel_supplier" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>Data Supplier</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=tabel_kriteria" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Data Kriteria</p>
                        </a>
                    </li>
                    <li class="nav-item">
                          <a href="?page=tabel_sub_kriteria" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>Data Sub Kriteria</p>
                          </a>
                    </li>
                    <li class="nav-item">
                          <a href="?page=tabel_nilai_supplier" class="nav-link">
                            <i class="nav-icon fas fa-cubes"></i>
                            <p>Data Nilai Supplier</p>
                          </a>
                    </li>
                    <li class="nav-item">
                          <a href="?page=tabel_hasil_nilai" class="nav-link">
                            <i class="nav-icon fas fa-cubes"></i>
                            <p>Data Hasil Nilai</p>
                          </a>
                    </li>
            <?php } ?>
            <!-- end berkas -->
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>
    <!-- Content Header (Page header) -->
  <!--  <div class="content-header">
        <div class="container-fluid">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-home"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">
                  <?php echo $_SESSION['nama']; ?>
                  <h5>Sistem Pendukung Keputusan Pemilihan Supplier</h5>
                </span>
                <span class="info-box-number">
                  <small><?php echo $_SESSION['level']; ?></small>
                </span>
              </div>
            </div>
        </div>
    </div> -->
    <!-- /.content-header -->

