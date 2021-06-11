<!DOCTYPE HTML>
<html>
	<head>
		<title>Halaman Login</title>
		<link rel="stylesheet" href="cheryl.css">
	</head>
	
	<body>
	  <div class="container">
	    <h1>Login</h1>
		  <form method="POST" action="aksi_login.php">
			<p>
		    <label>Username</label><br>
		    <input name="username" type="text" placeholder="Nama pengguna"><br>
			</p>
			<p>
			<label>Password</label><br>
			<input name="password" type="password" placeholder="Kata sandi"><br>
			</p>
			<button>Login</button>
			
			<p>Belum punya akun?
				<a href="register.html">Daftar disini</a>
			</p>
		  </form>
	  </div>
	</body>
</html>