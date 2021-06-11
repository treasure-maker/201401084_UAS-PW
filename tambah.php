<html>
<head>
	<link rel="icon" href="logo.jpg">
	<title>NCT</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h3>
		<a href="index.php">kembali</a><br>
		<p>Tambah data mahasiswa</p>
	</h3>
	<form action="tambah_proses.php" method="post">
		<table>
			<tr>
				<td>Nama Pengguna</td>
				<td>:</td>
				<td><input type="text" name="namapengguna" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
				<select name="gender" required>
					<option>Gender</option>
					<option value="Pria">Pria</option>
					<option value="Wanita">Wanita</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
			
</body>
</html>