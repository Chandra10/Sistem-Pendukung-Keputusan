<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = $con->query("SELECT * FROM users where username='".$username."' AND userpass='".$password."'");

// menghitung jumlah data yang ditemukan
// cek apakah username dan password di temukan pada database
if($login->num_rows > 0){

    $data = $login->fetch_assoc();

    if($data['level']=="Admin"){

        // buat session login dan username
        $_SESSION['uid']        = $data['id_user'];
        $_SESSION['username']   = $username;
        $_SESSION['level']      = "Admin";
        $_SESSION['nama']      = $data['nama_lengkap'];
        $_SESSION['foto']      = $data['foto'];
        // alihkan ke halaman dashboard admin
        header("location:dasbhoard.php");
    }
    else if($data['level']=="User"){

        // buat session login dan username
        $_SESSION['uid']        = $data['id_user'];
        $_SESSION['username']   = $username;
        $_SESSION['level']      = "User";
        $_SESSION['nama']      = $data['nama_lengkap'];
        $_SESSION['foto']      = $data['foto'];
        // alihkan ke halaman dashboard admin
        header("location:dasbhoard.php");
    }
    else{
        // alihkan ke halaman login kembali
        header("location:index.php?pesan=gagal");
    }
}else{
    header("location:index.php?pesan=gagal");
}

?>

