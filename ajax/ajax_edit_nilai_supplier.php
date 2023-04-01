<?php
error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  include '../koneksi.php';
  
  $id_nilai_supplier      = $_POST['id_nilai_supplier'];
  $id_supplier_nilai      = $_POST['id_supplier_nilai'];
  $kecepatan_pengiriman   = $_POST['kecepatan_pengiriman'];
  $tingkat_diskon         = $_POST['tingkat_diskon'];
  $pelayanan              = $_POST['pelayanan'];
  $garansi                = $_POST['garansi'];
  $keaslian_barang        = $_POST['keaslian_barang'];
  $tempo_pembayaran       = $_POST['tempo_pembayaran'];
  $bisa_dikembalikan      = $_POST['bisa_dikembalikan'];
  $tanggal_nilai          = $_POST['tanggal_nilai'];

  $created_date = date("Y-m-d");


 
 if ($id_supplier_nilai == '') {
      $data['error']['id_supplier_nilai'] = 'id_supplier_nilai Wajib di isi';
  }
  
  if (empty($data['error'])) {

     $query = "UPDATE tb_nilai_supplier SET id_supplier_nilai  = '$id_supplier_nilai',
                                          kecepatan_pengiriman = '$kecepatan_pengiriman',
                                          tingkat_diskon       = '$tingkat_diskon',
                                          pelayanan            = '$pelayanan',
                                          garansi              = '$garansi',
                                          keaslian_barang      = '$keaslian_barang',
                                          tempo_pembayaran     = '$tempo_pembayaran',
                                          bisa_dikembalikan    = '$bisa_dikembalikan',
                                          tanggal_nilai        = '$tanggal_nilai'
                                          WHERE id_nilai_supplier = '$id_nilai_supplier' ";
     
      mysqli_query($con, $query) or die ("Gagal Perintah SQL".mysqli_error());
          
          $data['hasil'] = 'sukses';
      } 
      else {
          $data['hasil'] = 'gagal';
    }

echo json_encode($data);
?>

 