<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran Kursus</title>
</head>
<body>
<h1 align="center">Aplikasi Sederhana Pendaftaran Kursus</h1>
<h3 align="center">A. Data Calon Peserta</h3>
	<form action="simpan.php" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="10" width="800" align="center">
    <tbody>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="Nama Produk" size="50" maxlength="30" autocomplete="off" autofocus/>
        </td>
    </tr>
    <tr>
              <td>Tanggal Lahir</td>
              <td>:</td>
              <td><select name="tanggallahir">
                    <?php
                        for ($i=1; $i<=31 ; $i++) {
                    ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php
                        }
                    ?>
                    </select>
                
                    <select name="bln">
                    <?php
                        $bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                        for ($i=1;$i<=12;$i++)
                        {
                    echo "<option value=".$i.">".$bulan[$i]."</option>";
                        }
                    ?>            
                    </select>
                
                    <select name="tahun">
                    <?php
                        for ($i=1990; $i<=2018 ; $i++) {
                    ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php
                        }
                    ?>
                    </select></td>
            </tr>
            <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><input name="jenis_kelamin" type="radio" value="L" checked>
                Laki-laki
                <input name="jenis_kelamin" type="radio" value="P">
                Perempuan </td>
        </tr>
    <tr>
        <td>Pendidikan Terakhir</td>
        <td>:</td>
        <td>
        <select name="pendidikan">
        <option nama="pendidikan" value="SD">SD</option>
   	    <option nama="pendidikan" value="SLTP">SLTP</option>
   	    <option nama="pendidikan" value="SLTA">SLTA</option>
   	    <option nama="pendidikan" value="SARJANA">SARJANA</option>
   	    <option nama="pendidikan" value="MAGISTER">MAGISTER</option>
   	    <option nama="pendidikan" value="DOKTOR">DOKTOR</option>
        </select>
        </td>
        </tr>
    <tr>
        <td><div>Alamat</div></td>
        <td>:</td>
        <td><textarea name="Alamat" cols="30" rows="5" id="komentar"></textarea></td>
    </tr>
    <tr>
        <td>Hobi</td>
        <td>:</td>
        <td>
            <input name="Hobi" type="checkbox" value="Olahraga" checked>Olahraga
            <input name="Hobi" type="checkbox" value="Menulis">Menulis
            <input name="Hobi" type="checkbox" value="Menyanyi"> Menyanyi
                Menulis
        </td>
    </tr>

</tbody>
</table>
<h3 align="center">B. Pilihan Kursus</h3>
<table border="1" align="center">
        <tr>
            <td><b>Nama Kursus</b></td>
            <td><b>Biaya</b></td>
            <td><b>Jumlah Pertemuan</b></td>
        </tr>
        <tr>
            <td>PHP + MySQL</td>
            <td>1x pertemuan Rp 120.000,-</td>
            <td><input type="text" name=""></td>
        </tr>
        <tr>
            <td>Virtualisasi + Cloud</td>
            <td>1x pertemuan Rp 110.000,-</td>
            <td><input type="text" name=""></td>
        </tr>
        <tr>
            <td>Networking</td>
            <td>1x pertemuan Rp 100.000,-</td>
            <td><input type="text" name=""></td>
        </tr>
        <tr>
            <td>Hardware + Peripheral</td>
            <td>1x pertemuan Rp 80.000,-</td>
            <td><input type="text" name=""></td>
        </tr>
        <tr>
        <td colspan="3" rowspan="3"><button type="submit" value="simpan">Proses</button></td>
        </tr>
    </table>
</body>
</html>