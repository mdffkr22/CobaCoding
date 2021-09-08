<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama            = $_POST['nama'];
$kelahiran           = $_POST['kelahiran'];
$jenis_kelamin        = $_POST['jenis_kelamin'];
$pend_terakhir  = $_POST['pend_terakhir'];
$alamat         = $_POST['alamat'];
$hobi         = $_POST['hobi'];
$tb1         = $_POST['tb1'];
$tb2         = $_POST['tb2'];
$tb3         = $_POST['tb3'];
$tb4         = $_POST['tb4'];

// query SQL untuk insert data
$query="INSERT INTO responosi SET nama='$nama',kelahiran='$kelahiran',jenis_kelamin='$jenis_kelamin',pend_terakhir='$pend_terakhir',
                                  alamat='$alamat',hobi='$hobi',tb1='$tb1',tb2='$tb2', tb3='$tb3', tb4='$tb4', ";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>