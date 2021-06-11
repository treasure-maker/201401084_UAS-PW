<?php

 if(isset($_POST['simpan']))
 {
     include('koneksi.php');
	 $namapengguna = $_POST['namapengguna'];
     $nama     = $_POST['nama'];
     $gender   = $_POST['gender'];
     $alamat   = $_POST['alamat'];
     $update   = mysqli_query($koneksi, "update datapengguna set
     
     nama      = '$nama',
     gender    = '$gender',
     alamat    = '$alamat'
     
     where namapengguna = '$namapengguna'") 

     or die(mysqli_error());

     if($update)
     {
         echo "<h2>data berhasil diupdate</h2>";
         echo "<script>window.location = 'index.php'</script>";
     }
     else
     {
         echo "<h2>gagal menyimpan data</h2>";
         echo "a href ='edit.php ?namapengguna = ".$namapengguna."'>kembali</a>";
     }
 }

    else 
    {
        echo "<script>window.history.back()</script>";
    }
    ?>