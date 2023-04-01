<?php 
include "../koneksi.php";
session_start();

$query = "SELECT a.*, b.* from tb_sub_kriteria a JOIN tb_kriteria b
			ON a.id_kriteria_sub=b.id_kriteria order by a.id_sub_kriteria asc";
$fetch = $con->query($query);
if ($fetch) {
	if ($fetch->num_rows <= 0 || $fetch->num_rows == 'null') {
			$data['status']= true;
			$temp = array();	
	}
	else{
		$nomor=1;
		while ($data = $fetch->fetch_assoc()) {
			
			
			$n['id_sub_kriteria'] 		= $data['id_sub_kriteria'];
			$n['no'] 					= $nomor++;
			$n['nama_kriteria']			= $data['nama_kriteria'];
			$n['nilai_sub_kriteria']	= $data['nilai_sub_kriteria'];
			$n['sifat_sub_kriteria']	= $data['sifat_sub_kriteria'];
			$n['action'] 			= "<a href='?page=edit_sub_kriteria&no=".$data['id_sub_kriteria']. "'>
	                        	   		<button class='btn btn-success btn-xs'><i class='fa fa-edit'></i> Edit</button></a> 
	                        	   		<button type='button' class='btn btn-danger btn-xs hapus_data' no='".$data['id_sub_kriteria']."'>
	                        	   		<i class='fa fa-trash'></i> Del</button>";
			$temp[] 		= $n;
		}	
			$message 		= 'sukses get data';
	}
	// echo json_encode($temp);die;
	$result = array(
		"status" 	=> true,
		"message" 	=> $message,
		"data" 		=> $temp
	);
}
echo json_encode($result);



?>