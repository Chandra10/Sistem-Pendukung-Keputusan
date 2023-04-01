<?php
error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  include '../koneksi.php';
  
  $id_sub_kriteria      = $_POST['id_sub_kriteria'];
  $id_kriteria_sub      = $_POST['id_kriteria_sub'];
  $nilai_sub_kriteria   = $_POST['nilai_sub_kriteria'];
  $sifat_sub_kriteria   = $_POST['sifat_sub_kriteria'];

  $created_date = date("Y-m-d");


 
  if ($sifat_sub_kriteria == '') {
      $data['error']['sifat_sub_kriteria'] = 'sifat_sub_kriteria Wajib di isi';
  }
  
  if (empty($data['error'])) {

     $query = "INSERT INTO tb_sub_kriteria
              (id_sub_kriteria, id_kriteria_sub, nilai_sub_kriteria, sifat_sub_kriteria) VALUES ('','$id_kriteria_sub', '$nilai_sub_kriteria','$sifat_sub_kriteria')";
     
      mysqli_query($con, $query) or die ("Gagal Perintah SQL".mysqli_error());
          
          $data['hasil'] = 'sukses';
      } 
      else {
          $data['hasil'] = 'gagal';
    }

echo json_encode($data);
?>
 