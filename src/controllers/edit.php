<?php
require '../utility/functions.php';


// ambil data di url
$id = $_GET["id"];

// Quey data mahasiswa sesuai query nya
$siswa = query("SELECT * FROM `siswa` WHERE id = $id")[0];


// cek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {


    //cek apakah data berhasil diubah

    if (ubah($_POST) > 0) {
        echo "
			<script>
				alert('Data berhasil diupdate!');
				document.location.href = '../index.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Data gagal diupdate!');
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
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="../../assets/css/style2.css">
</head>

<body>

    <h1>Form Registrasi Siswa Baru</h1>

    <div class="kotak_login">

        <p class="tulisan_login">Form Registrasi</p>


        <form action="" method="post" enctype="multipart/form-data" class="form-edit">

            <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">

            <li>
                <label for="nama">Nama Siswa :</label>
                <input type="text" name="nama" id="nama" class="form_login" value="<?= $siswa["nama"]; ?>" required>
            </li>
            <li>
                <label for="nis">Nis Siswa :</label>
                <input type="text" name="nis" id="nis" class="form_login" value="<?= $siswa["nis"]; ?>" required>
            </li>
            <li>
                <label for="gender">Jenis Kelamin :</label>
                <input type="radio" name="gender" id="gender" <?php if ($siswa['jns_kelamin'] == 'Laki - Laki') echo 'checked' ?> value="Laki - Laki">
                <label for="gender">Laki-Laki</label>
                <input type="radio" name="gender" id="gender" <?php if ($siswa['jns_kelamin'] == 'Perempuan') echo 'checked' ?> value="Perempuan">
                <label for="gender" class="form_login">Perempuan</label>
            </li>
            <br>
            <li>
                <label for="tempat_lahir">Tempat Lahir :</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form_login" value="<?= $siswa["temp_lahir"]; ?>" required>
            </li>
            <li>
                <label for="tgl_lahir">Tanggal Lahir : </label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form_login" value="<?= $siswa["tgl_lahir"]; ?>" required>
            </li>
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat" class="form_login" value="<?= $siswa["alamat"]; ?>" required>
            </li>
            <li>
                <label for="asal_Sekolah">Asal Sekolah :</label>
                <input type="text" name="asal_Sekolah" id="asal_Sekolah" class="form_login" value="<?= $siswa["asal_sekolah"]; ?>" required>
            </li>
            <li>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas" id="kelas" class="form_login" value="<?= $siswa["kelas"]; ?>" required>
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="jurusan" class="form_login">
                    <?php
                    $query_jurusan = "SELECT * FROM `jurusan`";
                    $sql_jurusan = mysqli_query($conn, $query_jurusan);
                    while ($data_jurusan = mysqli_fetch_array($sql_jurusan)) {
                        if ($siswa['jurusan'] == $data_jurusan['jurusan']) {
                            $select = "selected";
                        } else {
                            $select = "";
                        }
                        echo "<option $select>" . $data_jurusan['jurusan'] . "</option>";
                    }
                    ?>
                </select>
            </li>
            <button type="submit" name="submit" class="tombol_login" onclick="confirm('Apakah anda yakin?')">Kirim</button>
            <br>
            <br>
            <a href="../index.php" class="tombol_login" style="background-color: #3538ab;">Kembali</a>
        </form>

    </div>
</body>

</html>