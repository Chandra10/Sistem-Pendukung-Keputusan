<?php
error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  include '../koneksi.php';
  
  $id_user            = $_POST['id_user'];
  $nama               = $_POST['nama'];
  $username           = $_POST['username'];
  $password           = $_POST['password'];
  $level              = $_POST['level'];
  $ubah_foto          = $_POST['ubah_foto'];
  
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
  
  if ($ubah_foto == 1) {
    
      $fotobaru="";
      if ($ImageName) {
          $fotobaru = date('dmYHis').$ImageName;
          $temp = "../dist/img/user/";

      if (!file_exists($temp))
          mkdir($temp);
          move_uploaded_file($fileupload, $temp.$fotobaru); // Menyimpan file
        
          $sql    = "SELECT * FROM users WHERE id_user = '$id_user'";
          $query  = mysqli_query($con, $sql); 
          $data   = mysqli_fetch_array($query); 

           if(is_file("../dist/img/user/".$data['foto']))
              unlink("../dist/img/user/".$data['foto']);
        }

        if (empty($data['error'])) {

           $query = "UPDATE users SET nama_lengkap            = '$nama',
                                          username            = '$username',
                                          userpass            = '$password',
                                          status              = '1',
                                          level               = '$level',
                                          foto                = '$fotobaru'
                                          WHERE id_user       = '$id_user' ";

            mysqli_query($con, $query) or die ("Gagal Perintah SQL".mysqli_error());
                
                $data['hasil'] = 'sukses';
            } 
            else {
                $data['hasil'] = 'gagal';
          }
    
  } else {
      if (empty($data['error'])) {

             $query = "UPDATE users SET nama_lengkap          = '$nama',
                                          username            = '$username',
                                          userpass            = '$password',
                                          status              = '1',
                                          level               = '$level'
                                          WHERE id_user       = '$id_user' ";

            mysqli_query($con, $query) or die ("Gagal Perintah SQL".mysqli_error());
                
                $data['hasil'] = 'sukses';
            } 
            else {
                $data['hasil'] = 'gagal';
          }
  }

echo json_encode($data);
?>
 