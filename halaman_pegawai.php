<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pegawai</title>
</head>
<body>
	
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'daftar_pegawai.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'daftar_pegawai.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data Karyawan</title>
</head>
<body>
	 <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('ay.jpeg');
      margin: 0;
      padding: 0;
      display: flex; 
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    body h5 {
      te
    }

    form {
      background-color: grey;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 750px;
      
    }

    label {
      display: block;
      margin: auto;
    }

    input, select, textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;


    }

    button:hover {
      background-color: #45a049;
    }
  </style>
	

	<center><form action="" method="post" enctype="multipart/form-data">
		<ul type="none">

			<h1><center>Daftar Karyawan</center></h1>

			<li>
				<label for="nama">nama  </label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="alamat">alamat </label>
				<input type="text" name="alamat" id="alamat" required>
			</li>
			<li>
				<label for="umur">umur </label>
				<input type="text" name="umur" id="umur">
			</li>
			<li>
				<label for="status">status </label>
				<input type="text" name="status" id="status">
			</li>
			<li>
				<label for="Gmail">Gmail </label>
				<input type="text" name="Gmail" id="Gmail">
			</li>
			<li>
				<label for="posisi">posisi </label>
				<input type="text" name="posisi" id="posisi">
			</li>
			<li>
				<label for="nohp">nohp </label>
				<input type="text" name="nohp" id="nohp">
			</li>
			<li>
				<label for="gambar">Gambar </label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
    </br>
	</form>




</body>
</html>
