<?php
$host = "localhost";  // Host database
$user = "root";       // Username database (biasanya "root" untuk localhost)
$pass = "";           // Password database (kosongkan jika menggunakan XAMPP atau LAMP default)
$dbname = "manajemen_siswa"; // Nama database yang kamu buat

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
