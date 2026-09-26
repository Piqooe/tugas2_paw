CREATE DATABASE IF NOT EXISTS tugas2_paw;
USE tugas2_paw;

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    prodi VARCHAR(100) NOT NULL,
    alamat VARCHAR(200) NOT NULL
);

INSERT INTO mahasiswa (nim, nama, prodi, alamat) VALUES
('245150400111001', 'Muhammad Fiqo', 'Teknologi Informasi', 'Jombang'),
('245150400111002', 'Budi Santoso', 'Sistem Informasi', 'Malang');