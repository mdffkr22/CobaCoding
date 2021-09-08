<?php
// buat koneksi dengan database mysql
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_sistem1";
$koneksi = mysqli_connect($id,$username,$realname,$password,$id_jabatan,$status);
 
//periksa koneksi, tampilkan pesan kesalahan jika gagal
if(!$koneksi){
    die ("Koneksi database gagal: ".mysqli_connect_errno().
    " - ".mysqli_connect_error());
     }
?>