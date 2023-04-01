<?php 
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
	if ($_SESSION['level'] == "") {
		header("location:index.php?pesan=gagal");
	}
	include 'koneksi.php';
	$page	= $_GET['page'];

	include 'header.php';

	switch ($page) {
		case 'tabel_user':
			include 'tabel_user.php';
			break;
		case 'simpan_user':
			include 'simpan_user.php';
			break;
		case 'edit_user':
			include 'edit_user.php';
			break;

		case 'tabel_supplier':
			include 'tabel_supplier.php';
			break;
		case 'simpan_supplier':
			include 'simpan_supplier.php';
			break;
		case 'edit_supplier':
			include 'edit_supplier.php';
			break;

		case 'tabel_kriteria':
			include 'tabel_kriteria.php';
			break;
		case 'simpan_kriteria':
			include 'simpan_kriteria.php';
			break;
		case 'edit_kriteria':
			include 'edit_kriteria.php';
			break;

		case 'tabel_sub_kriteria':
			include 'tabel_sub_kriteria.php';
			break;
		case 'simpan_sub_kriteria':
			include 'simpan_sub_kriteria.php';
			break;
		case 'edit_sub_kriteria':
			include 'edit_sub_kriteria.php';
			break;

		case 'tabel_nilai_supplier':
			include 'tabel_nilai_supplier.php';
			break;
		case 'simpan_nilai_supplier':
			include 'simpan_nilai_supplier.php';
			break;
		case 'edit_nilai_supplier':
			include 'edit_nilai_supplier.php';
			break;

		case 'tabel_hasil_nilai':
			include 'tabel_hasil_nilai.php';
			break;

				
		case 'print_supplier':
			include 'print_supplier.php';
			break;

		case 'cari_tabel_kriteria':
			include 'cari_tabel_kriteria.php';
			break;

		case 'cari_tabel_sub_kriteria':
			include 'cari_tabel_sub_kriteria.php';
			break;

		case 'cari_tabel_nilai_supplier':
			include 'cari_tabel_nilai_supplier.php';
			break;

		default:
			include 'depan.php';
			break;
	}
?>