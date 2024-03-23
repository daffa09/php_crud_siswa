<?php

require '../utility/functions.php';

$siswa = query("SELECT * FROM `siswa`");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar PPDB Siswa</title>
</head>

<body>

    <center>

        <h2>Daftar PPDB Siswa</h2>

    </center>

    <table border="1" style="width: 100%" style="align-items: center;">
        <tr>
            <th width="1%">No</th>
            <th scope="col">Nis</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Asal Sekolah</th>
            <th scope="col">Kelas</th>
            <th scope="col" width="5%">Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($siswa as $row) : ?>
            <tr>
                <td><?= $row["id"]; ?></td>
                <td><?= $row["nis"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["jns_kelamin"]; ?></td>
                <td><?= $row["temp_lahir"]; ?></td>
                <td><?= $row["tgl_lahir"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
                <td><?= $row["asal_sekolah"]; ?></td>
                <td><?= $row["kelas"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

    <script>
        window.print();
    </script>

</body>

</html>