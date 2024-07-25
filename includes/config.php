<?php
// config.php

// Konfigurasi koneksi ke database atau konfigurasi lainnya
// Contoh pengaturan koneksi ke database MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>
