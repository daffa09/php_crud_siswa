<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "uprakweb2020");

function query($query)
{

    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM `siswa` WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function tambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $nis = htmlspecialchars($data['nis']);
    $jenis_kelamin = htmlspecialchars($data['gender']);
    $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($data['tgl_lahir']);
    $alamat = htmlspecialchars($data['alamat']);
    $asal_sekolah = htmlspecialchars($data['asal_Sekolah']);
    $kelas = htmlspecialchars($data['kelas']);
    $jurusan = htmlspecialchars($data['jurusan']);

    mysqli_query($conn, "INSERT INTO `siswa` VALUES(NULL,'$nis','$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$alamat','$asal_sekolah','$kelas','$jurusan')");

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    global $conn;

    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data['nama']);
    $nis = htmlspecialchars($data['nis']);
    $jenis_kelamin = htmlspecialchars($data['gender']);
    $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($data['tgl_lahir']);
    $alamat = htmlspecialchars($data['alamat']);
    $asal_sekolah = htmlspecialchars($data['asal_Sekolah']);
    $kelas = htmlspecialchars($data['kelas']);
    $jurusan = htmlspecialchars($data['jurusan']);

    // query insert data
    $query = "UPDATE  `siswa` SET
					nama    = '$nama',
					nis     = '$nis',
					jns_kelamin   = '$jenis_kelamin',
					temp_lahir = '$tempat_lahir',
					tgl_lahir  = '$tanggal_lahir',
					alamat  = '$alamat',
					asal_sekolah  = '$asal_sekolah',
					kelas  = '$kelas',
					jurusan  = '$jurusan'
				WHERE id = $id
				";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
