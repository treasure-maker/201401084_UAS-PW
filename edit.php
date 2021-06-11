<html>
<head>
	<link rel="icon" href="logo.jpg">
	<title>NCT</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body>
<!-- edit data pengguna -->

        <?php

        include('koneksi.php');
        $namapengguna = $_GET['namapengguna'];
        $show = mysqli_query($koneksi, "select * from datapengguna where namapengguna = '$namapengguna'");
        if(mysqli_num_rows($show) == 0)
        {
            echo '<script>window.history.back()</script>';
        }
        else
        {
            $d = mysqli_fetch_assoc($show);
        }

    ?>

<!--   edit data pengguna-->

            <form action="edit_proses.php" method="POST">
                <input type="hidden" name="namapengguna" value="<?php echo $namapengguna; ?>">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" size="30" value="<?php echo $d['Nama']; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td>
                            <select name="gender" required>
                                <option value="">Pilih</option>
                                <option value="Pria"<?php if($d['Gender'] == 'Pria'){echo 'selected';}?>> Pria</option>
                                <option value="Wanita"<?php if($d['Gender'] == 'Wanita'){echo 'selected';}?>> Wanita</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="alamat" size="33" value="<?php echo $d['Alamat'];?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td></td>
                        <td><input type="submit" name="simpan" value="simpan"></td>
                    </tr>
                </table>
</body>
</html>