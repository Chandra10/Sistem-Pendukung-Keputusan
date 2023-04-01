<?php
error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  include '../koneksi.php';
  
  $id_kriteria      = $_POST['id_kriteria'];
  $nama_kriteria    = $_POST['nama_kriteria'];
  $sifat_kriteria   = $_POST['sifat_kriteria'];

  $created_date = date("Y-m-d");


 
   if ($nama_kriteria == '') {
      $data['error']['nama_kriteria'] = 'nama_kriteria Wajib di isi';
  }
  if ($sifat_kriteria == '') {
      $data['error']['sifat_kriteria'] = 'sifat_kriteria Wajib di isi';
  }
  
  if (empty($data['error'])) {

     $query = "UPDATE tb_kriteria SET     nama_kriteria       = '$nama_kriteria',
                                          sifat_kriteria      = '$sifat_kriteria'
                                          WHERE id_kriteria   = '$id_kriteria' ";
     
      mysqli_query($con, $query) or die ("Gagal Perintah SQL".mysqli_error());
          
          $data['hasil'] = 'sukses';
      } 
      else {
          $data['hasil'] = 'gagal';
    }

echo json_encode($data);
?>

 