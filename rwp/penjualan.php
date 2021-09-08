<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran Kursus</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
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
                
                    <select name="bulan">
                    <?php
                        for ($i=1; $i<=12 ; $i++) {
                    ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php
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
</form>
</html>