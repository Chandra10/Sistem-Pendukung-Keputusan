<?php
error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  include '../koneksi.php';
  
  $id_supplier      = $_POST['id_supplier'];
  $nama_supplier    = $_POST['nama_supplier'];
  $telepon          = $_POST['telepon'];
  $alamat           = $_POST['alamat'];

  $created_date = date("Y-m-d");


 
  if ($nama_supplier == '') {
      $data['error']['nama_supplier'] = 'nama_supplier Wajib di isi';
  }
  if ($telepon == '') {
      $data['error']['telepon'] = 'telepon Wajib di isi';
  }
  if ($alamat == '') {
      $data['error']['alamat'] = 'alamat Wajib di isi';
  }
  
  if (empty($data['error'])) {

     $query = "INSERT INTO tb_supplier
              (id_supplier, nama_supplier, telepon, alamat) VALUES ('','$nama_supplier', '$telepon','$alamat')";
     
      mysqli_query($con, $query) or die ("Gagal Perintah SQL".mysqli_error());
          
          $data['hasil'] = 'sukses';
      } 
      else {
          $data['hasil'] = 'gagal';
    }

echo json_encode($data);
?>
 