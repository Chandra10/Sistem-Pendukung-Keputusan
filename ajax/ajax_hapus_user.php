<?php
session_start();
include '../koneksi.php';

$id_user = $_POST['id_user'];

$sql = "SELECT * FROM users WHERE id_user='".$id_user."'";
$query = mysqli_query($con, $sql); 
$data = mysqli_fetch_array($query); 

  if(is_file("../img/dist/user/".$data['foto']))
  unlink("../img/dist/user/".$data['foto']);

$sql1    = 'DELETE FROM users WHERE id_user="'.$id_user.'"';
$query1  = mysqli_query($con, $sql1);

 if ($query1) {
	echo json_encode(['status' => 'true']);
 } else {
 	echo json_encode(['status' => 'false']);
 }
 
?>