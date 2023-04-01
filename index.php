<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Sistem Pendukung Keputusan Pemilihan Supplier</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets_login/logo.png">

    <link rel="shortcut icon" href="assets_login/images/fav.jpg">
    <link rel="stylesheet" href="assets_login/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_login/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets_login/css/style.css" />
</head>

<body>
    <div class="container-fluid ">
        <div class="container ">
            <div class="row cdvfdfd">
                <div class="col-lg-10 col-md-12 login-box">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 log-det">
                            <div class="small-logo">
                                <center><img src="assets_login/logo.png" alt="logo" width="130" class="shadow-light rounded mb-3 mt-2"></center>
                                <!-- <i class="fab fa-asymmetrik"></i> --> Silahkan Login
                            </div>
                            <p class="dfmn"> </p>
                            <form action="cek_login.php" id="loginForm" method="post" class="needs-validation" novalidate="">
                            <?php
                                if (isset($_GET['pesan'])) {
                                    if ($_GET['pesan'] == 'gagal') {
                                        echo "<div class='alert alert-danger alert-mg-b' role='alert'>Username atau Password tidak sesuai !</div>";
                                    }
                                }
                            ?>
                            <div class="text-box-cont">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" id="usernmae">
                                </div>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" id="password">
                                </div>
                                
                                <div class="input-group center">
                                    <button type="submit" class="btn btn-danger btn-round"><i class="fas fa-user"></i> SIGN IN</button>
                                </div> 
                                <!--<div class="row">
                                    <p class="forget-p">Don't have an account? <span>Sign Up Now</span></p>
                                </div>
                                 <div class="row">
                                    <p class="small-info">Connect With Social Media</p>
                                </div> -->   
                            </div>
                            </form>
                           <!-- pembatas form 1-->
                        </div>
                        <div class="col-lg-6 col-md-6 box-de">
                           <div class="inn-cover">
                               <div class="ditk-inf">
                                    <!--<div class="small-logo">
                                        <i class="fab fa-asymmetrik"></i> Style Login
                                    </div>-->
                                    <h2 class="w-100"> Sistem Pendukung Keputusan </h2>
                                    <p><h5 class="w-100">Pemilihan Supplier Dengan Menggunakan Metode Simple Additive Weight (SAW)</h5></p>
                                    <!--<a href="#">
                                    <button type="button" class="btn btn-outline-light">SIGN UP</button>
                                    </a>-->
                                </div>
                                 <div class="foter-credit">
                                  <a href="https://smarteyeapps.com/"> Chandra Kusuma wijaya (201843501521)</a>  
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="assets_login/js/jquery-3.2.1.min.js"></script>
<script src="assets_login/js/popper.min.js"></script>
<script src="assets_login/js/bootstrap.min.js"></script>
<script src="assets_login/js/script.js"></script>


</html>
