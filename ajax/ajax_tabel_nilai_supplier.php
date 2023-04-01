<?php 
include "../koneksi.php";
session_start();

$query = "SELECT a.*, b.* from tb_nilai_supplier a JOIN tb_supplier b
			ON a.id_supplier_nilai=b.id_supplier order by a.id_nilai_supplier asc";
$fetch = $con->query($query);
if ($fetch) {
	if ($fetch->num_rows <= 0 || $fetch->num_rows == 'null') {
			$data['status']= true;
			$temp = array();	
	}
	else{
		$nomor=1;
		while ($data = $fetch->fetch_assoc()) {
			
			$kecepatan_pengiriman = $data['kecepatan_pengiriman'];
            $kecepatan_pengiriman_hasil = $kecepatan_pengiriman * 1;
            $tingkat_diskon = $data['tingkat_diskon'];
            $tingkat_diskon_hasil = $tingkat_diskon * 1;
            $pelayanan = $data['pelayanan'];
            $pelayanan_hasil = $pelayanan * 1;
            $garansi = $data['garansi'];
            $garansi_hasil = $garansi * 1;
            $keaslian_barang = $data['keaslian_barang'];
            $keaslian_barang_hasil = $keaslian_barang * 1;
            $tempo_pembayaran = $data['tempo_pembayaran'];
            $tempo_pembayaran_hasil = $tempo_pembayaran * 1;
            $bisa_dikembalikan = $data['bisa_dikembalikan'];
            $bisa_dikembalikan_hasil = $bisa_dikembalikan * 1;

			$n['id_nilai_supplier'] 	= $data['id_nilai_supplier'];
			$n['no'] 					= $nomor++;
			$n['nama_supplier']			= $data['nama_supplier'];
			$n['kecepatan_pengiriman']	= $kecepatan_pengiriman_hasil;
			$n['tingkat_diskon']		= $tingkat_diskon_hasil;
			$n['pelayanan']				= $pelayanan_hasil;
			$n['garansi']				= $garansi_hasil;
			$n['keaslian_barang']		= $keaslian_barang_hasil;
			$n['tempo_pembayaran']		= $tempo_pembayaran_hasil;
			$n['bisa_dikembalikan']		= $bisa_dikembalikan_hasil;
			$n['tanggal_nilai']			= date('d-m-Y', strtotime($data['tanggal_nilai']));
			$n['action'] 				= "<a href='?page=edit_nilai_supplier&no=".$data['id_nilai_supplier']. "'>
	                        	   		<button class='btn btn-success btn-xs'><i class='fa fa-edit'></i> Edit</button></a> 
	                        	   		<button type='button' class='btn btn-danger btn-xs hapus_data' no='".$data['id_nilai_supplier']."'>
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