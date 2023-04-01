<?php 
include "../koneksi.php";
session_start();

if ($_SESSION['level'] == 'Admin') {
	$query = "SELECT * FROM users order by id_user desc";

$fetch = $con->query($query);
if ($fetch) {
	if ($fetch->num_rows <= 0 || $fetch->num_rows == 'null') {
			$data['status']= true;
			$message = 'No data';
			$temp = array();	
	}
	else{
		$no=1;
		while ($data = $fetch->fetch_assoc()) {
			
			$n['id_user'] 		= $data['id_user'];
			$n['no'] 			= $no++;
			$n['nama']	= $data['nama_lengkap'];
			$n['username']		= $data['username'];
			$n['password']		= $data['userpass'];
			$n['status']		= $data['status'] == 0 ? 'Tidak Aktif' :'Aktif';
			$n['level']			= $data['level'];
			$n['foto']			= "<img src='".((!$data['foto'])?"dist/img/user/user.png":"dist/img/user/".$data['foto'])."'
										class='img-circle' style='height: 50px; width: 50px;'/>";
			$n['action'] 		= "<a href='?page=edit_user&id_user=".$data['id_user']. "'>
	                        	   <button class='btn btn-success btn-xs'><i class='fa fa-edit'></i> Edit</button></a> 
	                        	   <button type='button' class='btn btn-danger btn-xs hapus_data' id_user='".$data['id_user']."'>
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

} else if ($_SESSION['level'] == 'User'){
	$query = "SELECT * FROM users where id_user = ".$_SESSION['uid']." order by id_user desc";

$fetch = $con->query($query);
if ($fetch) {
	if ($fetch->num_rows <= 0 || $fetch->num_rows == 'null') {
			$data['status']= true;
			$message = 'No data';
			$temp = array();	
	}
	else{
		$no=1;
		while ($data = $fetch->fetch_assoc()) {
			
			$n['id_user'] 		= $data['id_user'];
			$n['no'] 			= $no++;
			$n['nama']			= $data['nama_lengkap'];
			$n['username']		= $data['username'];
			$n['password']		= $data['userpass'];
			$n['status']		= $data['status'] == 0 ? 'Tidak Aktif' :'Aktif';
			$n['level']			= $data['level'];
			$n['foto']			= "<img src='".((!$data['foto'])?"dist/img/user/user.png":"dist/img/user/".$data['foto'])."'
										class='img-circle' style='height: 50px; width: 50px;'/>";
			$n['action'] 		= "<a href='?page=edit_user&id_user=".$data['id_user']. "'>
	                        	   <button class='btn btn-success btn-xs'><i class='fa fa-edit'></i> Edit</button></a> 
	                        	   ";
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
}



?>