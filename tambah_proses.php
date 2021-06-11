<?php
	if(isset($_POST['tambah'])){
		include_once 'koneksi.php';
		$namapengguna = $_POST['namapengguna'];
		$nama     = $_POST['nama'];
		$gender   = $_POST['gender'];
		$alamat   = $_POST['alamat'];
		
		$input = mysqli_query($koneksi, "insert into datapengguna values
		('$namapengguna', '$nama', '$gender', '$alamat')");
		
		if($input)
		{
			echo "<h3>Data berhasil ditambahkan</h3>";
			echo "<script>window.location='index.php'</script>";
		}
		else
		{
			echo "Gagal menambahkan data";
			echo "<a href='tambah.php'>kembali</a>";
		}
	}
	else
	{
		echo "<script>window.history.back()</script>";
	}
?>