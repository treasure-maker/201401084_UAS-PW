<?php
	session_start();
	include "koneksi.php";
	if(!isset($_SESSION['username'])){
		header("location:login.php");
	}
	if(isset($_SESSION['username'])){
		$username=$_SESSION['username'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="logo.jpg">
	<title>NCT</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
  <a class="navbar-brand" href="#home">37.5MHz 해찬 라디오</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="#unit">Units</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#location">Location</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#members">NCT Members</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://instagram.com/nct">Instagram</a>
          <a class="dropdown-item" href="https://twitter.com/NCTsmtown">Twitter</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://www.smtown.com">SMTOWN</a>
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="aksi_logout.php">Logout</a>
      </li>
      
    </ul>
	</div>
</nav>

<div class="jumbotron text-center" id="home">
	<img src="doyoung.jpg">
	<h1>Neo Culture Technology</h1>
	<p>Cheryl Angeline Kaban(201401084)</p>
</div>

<div class="container">
<div class="card-deck mt-5 mb-5">
	<div class="col-md-12 text-center">
		<h2>About</h2>
		<hr>
	</div>
  <div class="card" id="about">
    <img src="punch.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">NCT 127</h5>
      <p class="card-text">NCT 127 is the second sub-unit of the South Korean boy band NCT, formed and currently managed by SM Entertainment. Their unit name is a combination of the acronym for Neo Culture Technology which is the meaning for their parental group's unlimited members, and as the unit is localized in Seoul, hence the number "127" representing the longitude coordinate of the city.</p>
      <p class="card-text"><small class="text-muted">View more..</small></p>
    </div>
  </div>
  <div class="card">
    <img src="jalapeno.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">NCT Dream</h5>
      <p class="card-text">NCT Dream is the third sub-unit of the South Korean boy band NCT, formed by SM Entertainment in 2016 then as the teen-aged unit of NCT, later evolved away from their youth image and was re-branded in 2020 when the members became adults. NCT Dream has been internationally recognised as among the most notable teen-aged artists of their time, known for music reflecting the growth of the youth.</p>
      <p class="card-text"><small class="text-muted">View more..</small></p>
    </div>
  </div>
  <div class="card">
    <img src="kickback.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">WayV</h5>
      <p class="card-text">WayV (Chinese: 威神V; pinyin: WēiShén V) is a Chinese boy band which serves as the fourth sub-unit and China-based unit of the South Korean boy band NCT managed by SM Entertainment's sub-label, Label V.[1][2] Debuted on January 17, 2019, with their digital extended play The Vision, the group is composed of seven members: Kun, Ten, Winwin, Lucas, Xiaojun, Hendery, Yangyang.</p>
      <p class="card-text"><small class="text-muted">View more..</small></p>
    </div>
  </div>
</div>
</div>

<div class="container">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" id="unit">
      <img src="punch.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>NCT 127</h1>
        <p>Taeyong - Taeil - Johnny - Yuta - Doyoung - Jaehyun - Winwin - Jungwoo - Mark - Haechan</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="jalapeno.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>NCT Dream</h1>
        <p>Mark - Renjun - Jeno - Haechan - Jaemin - Chenle - Jisung</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="kickback.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>WayV</h1>
        <p>Kun - Ten - Winwin - Lucas - Xiaojun - Hendery - Yangyang</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="container" id="tabel">
	<div class="table mt-5 mb-5">
	<div class="col-md-12 text-center">
		<h3>Data Pengguna</h3>
		<hr size="10px" width="400px" color="#333">
		<a href="tambah.php"><h6>Tambah pengguna</h6></a>
	</div>
	<table class="table table-striped table-bordered" style="text-align:center">
	<thead class="table-dark">
		<th>No.</th>
		<th>Nama pengguna</th>
		<th>Nama</th>
		<th>Gender</th>
		<th>Alamat</th>
		<th>Opsi</th>
	</thead>
	
	<!--menampilkan data-->
	<?php
		include_once 'koneksi.php';
			$no=1;
			$data=mysqli_query($koneksi, "select * from datapengguna");
			while($d=mysqli_fetch_array($data)){
	?>
	
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['Namapengguna']; ?></td>
			<td><?php echo $d['Nama']; ?></td>
			<td><?php echo $d['Gender']; ?></td>
			<td><?php echo $d['Alamat']; ?></td>
			<td>
				<a href="edit.php ?namapengguna=<?php echo $d['namapengguna'];?>">edit</a>
				<a href="hapus.php ?namapengguna=<?php echo $d['namapengguna'];?>">hapus</a>
			</td>
		</tr>
			
	<?php
	}
	?>
	
	</table>
	</div>
</div>

	<div class="embed-responsive embed-responsive-16by9" id="location">
		<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.1511657575734!2d127.04850181514686!3d37.52793373409589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca47916d6cee9%3A0xaf7f92be5acffa56!2sSM%20Entertainment%20Studio%20Center!5e0!3m2!1sen!2sid!4v1620133798371!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	
<section class="members" id="members">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h3>NCT Members</h3>
				<hr>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-sm-3">
				<img src="1.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="2.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="3.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="4.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="5.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="6.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="7.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="8.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="9.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="10.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="11.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="12.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="13.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="14.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="15.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="16.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="17.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="18.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="19.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="20.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="21.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="22.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="23.jpg" height="300" class="img-thumbnail">
			</div>
			<div class="col-sm-3">
				<img src="24.jpg" height="300" class="img-thumbnail">
			</div>
		</div>
		
	</div>
</section>

<footer class="text-center">
	<img src="logo.jpg" width="220" height="200" alt="logo">
</footer>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	
	<script src="script.js"></script>
</body>
</html>


			