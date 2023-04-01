<?php
error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  include '../koneksi.php';
  
  $id_user            = $_POST['id_user'];
  $nama               = $_POST['nama'];
  $username           = $_POST['username'];
  $password           = $_POST['password'];
  $level              = $_POST['level'];
  
  $ImageName       = $_FILES['fileupload']['name'];
  $fileupload      = $_FILES['fileupload']['tmp_name'];
  $ImageType       = $_FILES['fileupload']['type'];

  if ($nama == '') {
      $data['error']['nama'] = 'Nama Wajib di isi';
  }
  if ($username == '') {
      $data['error']['username'] = 'username Wajib di isi';
  }
  if ($password == '') {
      $data['error']['password'] = 'password Wajib di isi';
  }
  
$fotobaru="";
if ($ImageName) {
    $fotobaru = date('dmYHis').$ImageName;
    $temp = "../dist/img/user/";

if (!file_exists($temp))
    mkdir($temp);
    move_uploaded_file($fileupload, $temp.$fotobaru); // Menyimpan file
  }

  if (empty($data['error'])) {

     $query = "INSERT INTO users
              (id_user, nama_lengkap, username, userpass, status, level, foto) VALUES ('','$nama','$username','$password','1','$level','$fotobaru')";
     
      mysqli_query($con, $query) or die ("Gagal Perintah SQL".mysqli_error());
          
          $data['hasil'] = 'sukses';
      } 
      else {
          $data['hasil'] = 'gagal';
    }

echo json_encode($data);
?>
 