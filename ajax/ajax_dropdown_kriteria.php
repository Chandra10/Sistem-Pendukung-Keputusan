<?php
include "../koneksi.php";
$query = mysqli_query($con,"SELECT * FROM booking WHERE kode_booking='$_GET[kode_booking]'");
$user = mysqli_fetch_array($query);
$data = array('kode_kendaraan'      => $user['kode_kendaraan'], 
              'nopol'               => $user['nopol'],
              'jenis_kendaraan'     => $user['jenis_kendaraan'],
              'tanggal_booking'     => $user['tanggal_booking'],
              'nama_pemboking'     => $user['nama_pemboking']);
      echo json_encode($data);
 ?>