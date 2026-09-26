<?php
include "koneksi.php";

if (isset($_POST['submit'])) {

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO mahasiswa (nim, nama, prodi, alamat)
              VALUES ('$nim', '$nama', '$prodi', '$alamat')";

    mysqli_query($koneksi, $query);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data</title>
</head>

<body>

    <h2>Tambah Data Mahasiswa</h2>

    <form method="POST">

        NIM:
        <br>
        <input type="text" name="nim" required>
        <br><br>

        Nama:
        <br>
        <input type="text" name="nama" required>
        <br><br>

        Prodi:
        <br>
        <input type="text" name="prodi" required>
        <br><br>

        Alamat:
        <br>
        <input type="text" name="alamat" required>
        <br><br>

        <button type="submit" name="submit">Simpan</button>
        <a href="index.php">Kembali</a>

    </form>

</body>

</html>