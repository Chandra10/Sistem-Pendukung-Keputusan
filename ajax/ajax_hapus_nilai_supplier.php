<?php
session_start();
include '../koneksi.php';

$no = $_POST['no'];

$sql1    = 'DELETE FROM tb_nilai_supplier WHERE id_nilai_supplier="'.$no.'"';
$query1  = mysqli_query($con, $sql1);

 if ($query1) {
	echo json_encode(['status' => 'true']);
 } else {
 	echo json_encode(['status' => 'false']);
 }
 
?>