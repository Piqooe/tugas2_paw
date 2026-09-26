<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = $id");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['submit'])) {

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE mahasiswa SET
                nim = '$nim',
                nama = '$nama',
                prodi = '$prodi',
                alamat = '$alamat'
              WHERE id = $id";

    mysqli_query($koneksi, $query);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Data</title>
</head>

<body>

    <h2>Edit Data Mahasiswa</h2>

    <form method="POST">

        NIM:
        <br>
        <input type="text" name="nim" value="<?= $data['nim']; ?>" required>
        <br><br>

        Nama:
        <br>
        <input type="text" name="nama" value="<?= $data['nama']; ?>" required>
        <br><br>

        Prodi:
        <br>
        <input type="text" name="prodi" value="<?= $data['prodi']; ?>" required>
        <br><br>

        Alamat:
        <br>
        <input type="text" name="alamat" value="<?= $data['alamat']; ?>" required>
        <br><br>

        <button type="submit" name="submit">Update</button>
        <a href="index.php">Kembali</a>

    </form>

</body>

</html>