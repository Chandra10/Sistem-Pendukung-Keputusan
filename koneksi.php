<?php

 $url    = 'http://localhost/program_spk_chandra'; 
 $dbhost = 'localhost'; 
 $dbuser = 'root'; 
 $dbpass = '';  
 $dbname = 'db_chandra_spk';


/* Konfigurasi URL */
define("URL", "http://".$_SERVER["HTTP_HOST"]."/program_spk_chandra");
define("INCURL", URL."/plugins");
define("IMGURL", URL."/dist/img");
define("JSURL", URL."/dist/js");
define("CSSURL", URL."/dist/css");
define("AJAXURL", URL."/ajax");
define("VENDORURL", URL."/vendor");

/* Konfigurasi lokasi file */
define("ROOTDIR", dirname(__FILE__));
define("INCDIR", ROOTDIR."/plugins");
define("IMGDIR", ROOTDIR."/dist/img");
define("JSDIR", ROOTDIR."/dist/js");
define("CSSDIR", ROOTDIR."/dist/css");
define("AJAXDIR", ROOTDIR."/ajax");
define("VENDORDIR", ROOTDIR."/vendor");


 $con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);  //koneksi Database

 //Check koneksi, berhasil atau tidak
 if( $con->connect_error )
 {
  die( 'Oops!! Koneksi Gagal : '. $con->connect_error );
 }

 $url = rtrim($url,'/');
 ?>


