<?php

require './utility/functions.php';

$siswa = query("SELECT * FROM `siswa`");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Ujian Praktek Kelas 12 WEB</title>

</head>

<body>

    <div class="container rounded bg-white mt-5">
        <div class="table-responsive fs-6 p-5">
            <h1 class="mb-3">DATA SISWA</h1>
            <a href="./controllers/tambah.php" class="btn btn-primary mb-3"></span> Tambah Data</a>
            <a href="./controllers/cetak.php" class="btn btn-danger mb-3" target="_blank"></span> Cetak Data</a>

            <table class="table table-striped table-sm table-bordered mb-5" style="text-align:center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nis</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Asal Sekolah</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

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
                            <td>
                                <a class="btn btn-warning text-decoration-none text-white" href="./controllers/edit.php?id=<?= $row["id"]; ?>">Edit</a>
                                <a class="btn btn-danger border-0" href="./controllers/hapus.php?id=<?= $row["id"]; ?>" onclick="return  confirm('Anda yakin ingin menghapus ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>