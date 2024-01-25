<?php
$servername = "biodata"; // Ganti dengan nama server database Anda
$username = "abdul"; // Ganti dengan username database Anda
$password = "12345678"; // Ganti dengan password database Anda
$dbname = "admin"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
