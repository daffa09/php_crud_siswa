<?php

require '../utility/functions.php';

if (isset($_POST["submit"])) {


    if (tambah($_POST) > 0) {
        echo "
			<script>
				alert('Data berhasil ditambahkan!');
				document.location.href = '../index.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Data gagal ditambahkan!');
				document.location.href = '../index.php';
			</script>
		";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="../../assets/css/style2.css">
</head>

<body>

    <h1>Form Registrasi Siswa Baru</h1>

    <div class="kotak_login">

        <p class="tulisan_login">Form Registrasi</p>


        <form action="" method="post" enctype="multipart/form-data" class="form-tambah">
            <li>
                <label for="nama">Nama Siswa :</label>
                <input type="text" name="nama" id="nama" class="form_login" required>
            </li>
            <li>
                <label for="nis">Nis Siswa :</label>
                <input type="text" name="nis" id="nis" class="form_login" required>
            </li>
            <li>
                <label for="gender">Jenis Kelamin :</label>
                <input type="radio" name="gender" id="gender" value="Laki - Laki">
                <label for="gender">Laki-Laki</label>
                <input type="radio" name="gender" id="gender" value="Perempuan">
                <label for="gender" class="form_login">Perempuan</label>
            </li>
            <br>
            <li>
                <label for="tempat_lahir">Tempat Lahir :</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form_login" required>
            </li>
            <li>
                <label for="tgl_lahir">Tanggal Lahir : </label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form_login" required>
            </li>
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat" class="form_login" required>
            </li>
            <li>
                <label for="asal_Sekolah">Asal Sekolah :</label>
                <input type="text" name="asal_Sekolah" id="asal_Sekolah" class="form_login" required>
            </li>
            <li>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas" id="kelas" class="form_login" required>
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="jurusan" class="form_login">
                    <option value="#">pilih jurusan...</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Multimedia">Multimedia</option>
                    <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
                </select>
            </li>
            <button type="submit" name="submit" class="tombol_login" onclick="confirm('Apakah anda yakin?')">Kirim</button>
            <br>
            <br>
            <input type="button" onclick="reset()" class="tombol_login" style="background-color: #239327;" value="Clear Input">
            <br>
            <br>
            <a href="../index.php" class="tombol_login" style="background-color: #3538ab;">Kembali</a>
        </form>

    </div>

    <script>
        function reset() {
            document.getElementById("form-tambah").reset();
        }
    </script>
</body>

</html>