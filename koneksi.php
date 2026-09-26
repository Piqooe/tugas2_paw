<?php

$koneksi = mysqli_connect("localhost", "root", "Piqooe_45!", "tugas2_paw");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>