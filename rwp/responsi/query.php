<?php
include "koneksi.php";
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Data Kursus</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
<h1>Belajar Menampilkan Database Mahasiswa</h1>
 
<p>Menampilkan isi database Mahasiswa </p>
 
<a href="forminput.php">Input Data Mahasiswa Baru</a><br>
<table class="table table-bordered table-striped table-hover">
<tr>
  <th>Nama</th>
  <th>Tanggal Lahir</th>
  <th>Jenis Kelamin</th>
  <th>Pendidikan Terakhir</th>
  <th>Alamat</th>
  <th>Hobi</th>
  
</tr>
<?php
// menampilkan seluruh isi database
$query ="select * from data_kursus";
$hasil = mysqli_query($koneksi, $query);
 
//$data = mysqli_fetch_row($hasil);
//ambil dan tampilkan 5 baris tabel mahasiswa
// for($i=1;$i<=5;$i++)
// {
//  $data = mysqli_fetch_row($hasil);
//  echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5]";
//  echo "<br>";
// }
 
//ambil dan tampilkan seluruh tabel mahasiswa
// while($data = mysqli_fetch_row($hasil))
// {
// echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5]";
// echo "<br>";
// }
 
while($data = mysqli_fetch_array($hasil))
{
 
  echo "<tr>";
  echo "<td>$data[nama]</td>";
  echo "<td>$data[kelahiran]</td>";
  echo "<td>$data[jenis_kelamin]</td>";
  echo "<td>$data[pend_terakhir]</td>";
  echo "<td>$data[alamat]</td>";
  echo "<td>$data[hobi]</td>";
  echo "<td>$data[tb1]</td>";
  echo "</tr>";
}
?>
  </table>
  </body>
</html>