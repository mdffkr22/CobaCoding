<?php
include 'koneksi.php';
 
// menyimpan data kedalam variabel
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$kelamin        = $_POST['jenis_kelamin'];
$tgllahir       = $_POST['thn'].'-'.$_POST['bln'].'-'.$_POST['tgl'];
$tmptlahir      = $_POST['tmptlahir'];
$jurusan        = $_POST['jurusan'];
$tahunmsk       = $_POST['thnmsk'];
 
if($nim=="")
{
  // echo "NIM kosong belum diisi, ";
  echo "<script>alert('NIM Belum diisi');history.go(-1);</script>";
}
 
if($nama=="")
{
  echo "<script>alert('Nama Belum diisi');history.go(-1);</script>";
}
 
if($tmptlahir=="")
{
  echo "<script>alert('Tempat Lahir Belum diisi');history.go(-1);</script>";
}
  else
{
 
/* cek input NIM apakah sudah ada nim yang digunakan */
   $pilih="select * from data_mahasiswa where nim='$nim'";
   $cek=mysqli_query($koneksi, $pilih);
 
   $jumlah_data = mysqli_num_rows($cek);
   if ($jumlah_data >= 1 ) 
   {
 
  echo "<script>alert('NIM yang sama sudah digunakan');history.go(-1);</script>";
    }
   else
{
 
// query untuk insert data mahasiswa
   $query="INSERT INTO data_mahasiswa SET  nim='$nim',nama='$nama',tgl_lhr='$tgllahir',tempat_lahir='$tmptlahir',jurusan='$jurusan',tahun_masuk='$tahunmsk',jenis_kelamin='$kelamin'";
mysqli_query($koneksi, $query);
 
// echo " Input Data yang anda masukkan sukses berhasil";
// header("location:query.php");
 
echo "<script>alert('Data yang anda Input sukses');window.location='query.php'</script>";
    }
 }
?>