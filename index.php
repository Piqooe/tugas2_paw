<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
</head>

<body>

    <h2>Data Mahasiswa</h2>

    <a href="tambah.php">+ Tambah Data</a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php while ($data = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td>
                    <?= $data['id']; ?>
                </td>
                <td>
                    <?= $data['nim']; ?>
                </td>
                <td>
                    <?= $data['nama']; ?>
                </td>
                <td>
                    <?= $data['prodi']; ?>
                </td>
                <td>
                    <?= $data['alamat']; ?>
                </td>
                <td>
                    <a href="edit.php?id=<?= $data['id']; ?>">Edit</a>
                    |
                    <a href="hapus.php?id=<?= $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus
                    </a>
                </td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>