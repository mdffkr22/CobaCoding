<?php 
	//Koneksi Database
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "db_sistem1";

	$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));

	//Jika tombol simpan diklik
	if(isset($_POST['bsimpan']))
	{
		// Pengujian apakah data akan diedit atau disimpan baru
		if ($_GET['hal'] == "edit") {
			//Data akan diedit

				$edit = mysqli_query($koneksi, "UPDATE tb_karyawan set username = '$_POST[tusername]',
						realname = '$_POST[trealname]',
						password = '$_POST[tpassword]',
						jabatan = '$_POST[tjabatan]',
						status = '$_POST[tstatus]'
						WHERE id = '$_GET[id]'
						");
			if ($edit) //Jika edit sukse 
			{
				echo "<script>
					alert('Edit data Sukses!');
					document.location = 'index.php'
				</script>";
			}
			else{
				echo "<script>
					alert('Edit data Gagal!');
					document.location = 'index.php'
				</script>";
			} 
		}
		else
		{
			//Data akan disimpan baru
				$simpan = mysqli_query($koneksi, "INSERT INTO tb_karyawan (username, realname, password, jabatan, status) VALUES('$_POST[tusername]' , '$_POST[trealname]' , '$_POST[tpassword]' , '$_POST[tjabatan]' , '$_POST[tstatus]' )");
			if ($simpan) 
			{
				echo "<script>
					alert('Simpan data Sukses!');
					document.location = 'index.php'
				</script>";
			}
			else{
				echo "<script>
					alert('Simpan data Gagal!');
					document.location = 'index.php'
				</script>";
			} 
		}

		
	}

	// Pengujian jika tombol edit / hapus diklik
	if (isset($_GET['hal']))
	 {
		// Pengujian edit data
		if ($_GET['hal'] == "edit")
		 {
			//Tampilkan data yang akan di edit.
			$tampil = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE id = '$_GET[id]'");
			$data = mysqli_fetch_array($tampil);
			if ($data) {
				//Jika data ditemukan, maka akan ditampung ke dalam variabel
				$vuser = $data['username'];
				$vreal = $data['realname'];
				$vpw = $data['password'];
				$vjabatan = $data['jabatan'];
				$vstatus = $data['status'];
			}
		}
		else if($_GET['hal'] == "hapus")
		{
			//Persiapan hapus data
			$hapus = mysqli_query($koneksi, "DELETE FROM tb_karyawan WHERE id = '$_GET[id]'");
			if ($hapus) 
			{
				echo "<script>
					alert('Hapus data Sukses!');
					document.location = 'index.php'
				</script>";
			}
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD Data Karyawan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

	<h1 class="text-center">CRUD Data Karyawan</h1>
	<h2 class="text-center">@5200411527 - Muhammad Daffa Khairul Rakhmat</h2>
	<!-- Awal Card-Form -->
	<div class="card mt-4">
	  <div class="card-header bg-primary text-white">
	    Form Input Data Karyawan
	  </div>
	  <div class="card-body">
	    <form method="post" action="">
	    	<div class="form-group">
	    		<label>Username</label>
	    		<input type="text" name="tusername" value="<?=@$vuser?>" class="form-control" placeholder="Masukan Username Anda" required>
	    	</div>
			<div class="form-group">
	    		<label>Realname</label>
	    		<input type="text" name="trealname" value="<?=@$vreal?>" class="form-control" placeholder="Masukan Username Anda" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Password</label>
	    		<input type="text" name="tpassword" value="<?=@$vpw?>" class="form-control" placeholder="Masukan Password Anda" required>
	    	</div>
	    	<div class="form-group">
	    		<label>ID Jabatan</label>
	    		<select class="form-control" name="tjabatan">
	    			<option value="<?=@$vjabatan?>"><?=@$vjabatan?></option>
	    			<option value="01-Project Manager">01-Project Manager</option>
	    			<option value="02-Senior Progammer">02-Senior Progammer</option>
	    			<option value="03-Data Analyst">03-Data Analyst</option>
	    			<option value="04-Cyber Security">04-Cyber Security</option>
	    			<option value="05-Design UI/UX">05-Design UI/UX</option>
	    		</select>
	    	</div>
	    	<div class="form-group">
	    		<label>Status</label>
	    		<select class="form-control" name="tstatus">
	    			<option value="<?=$vstatus?>"><?=@$vstatus?></option>
	    			<option value="Aktif">Aktif</option>
	    			<option value="Non-Aktif">Non-Aktif</option>
	    			<option value="Magang">Magang</option>
	    		</select>
	    	</div>

	    	<button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
	    	<button type="reset" class="btn btn-danger" name="breset">Reset</button>
	    </form>
	  </div>
	</div>
	<!-- Akhir Card Form -->

	<!-- Awal Card-Tabel -->
	<div class="card mt-4">
	  <div class="card-header bg-success text-white">
	    Daftar Karyawan
	  </div>
	  <div class="card-body">
	    <table class="table table-bordered table-striped">
	    	<tr>
	    		<th>ID</th>
	    		<th>Username</th>
	    		<th>Realname</th>
	    		<th>Password</th>
	    		<th>ID Jabatan</th>
	    		<th>Status</th>
				<th>Aksi</th>
	    	</tr>
	    	<?php 
				$no = 1;
	    		$tampil = mysqli_query($koneksi, "SELECT * from tb_karyawan order by id desc");
	    		while ($data = mysqli_fetch_array($tampil)) : {
	    		}
	    	 ?>
	    	<tr>
	    		<td><?=$no++?></td>
	    		<td><?=$data['username']?></td>
	    		<td><?=$data['realname']?></td>
	    		<td><?=$data['password']?></td>
	    		<td><?=$data['jabatan']?></td>
				<td><?=$data['status']?></td>
				<td>
					<a href="index.php?hal=edit&id=<?=$data['id']?>" class="btn btn-warning"> Edit </a>
					<a href="index.php?hal=hapus&id=<?=$data['id']?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
				</td>
	    	</tr>
	    <?php endwhile; //Penutup perulangan While?>
	    </table>
	  </div>
	</div>
	<!-- Akhir Card Tabel -->

</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html> 